<?php
require_once "./Controllers/DatabaseController.php";

class AuthController
{

    public DatabaseController $db;

    public function __construct()
    {
        $this->db = new DatabaseController();
    }

    public function register()
    {
        $conn = $this->db->connect();
        if (isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["password_confirmation"])) {
            if ($_POST["password"] == $_POST["password_confirmation"]) {
                $pw = $this->hashPassword($_POST['password']);
                if ($conn) {
                    if (!$this->getUserData($_POST["email"], $conn)) {
                        if ($result = $conn->query("INSERT INTO `users`(`email`,`password`, `first_name`, `last_name`, `permission`) VALUES ('" . $_POST["email"] . "','" . $pw . "','" . $_POST["first_name"] . "','" . $_POST["last_name"] . "','0')")) {
                            header("Location:/register?error=0");
                        } else {
                            header("Location:/register?error=1");
                        }
                    }else{
                        header("Location:/register?error=5");
                    }
                } else {
                    header("Location:/register?error=2");
                }
            }else{
                header("Location:/register?error=3");
            }
        }else{
            header("Location:/register?error=4");
        }
    }

    public function login()
    {
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $conn = $this->db->connect();
            if ($conn) {
                $user = $this->getUserData($_POST["email"], $conn);
                if ($user && $this->passwordCompare($_POST["password"], $user['password'])) {
                    $_SESSION["user"] = [
                        "first_name" => $user["first_name"],
                        "last_name" => $user["last_name"],
                        "email" => $user["email"],
                        "permission" => $user["permission"],
                    ];
                    header("Location:/");
                } else {
                    header("Location:/login?error=1");
                }
            } else {
                header("Location:/login?error=2");
            }
        }
    }

    public function logout()
    {
        session_unset();
        header("Location:/");
    }

    private function passwordCompare($pw1, $pw2)
    {
        return (password_verify($pw1, $pw2)) ? true : false;
    }

    private function hashPassword($pw)
    {
        return password_hash($pw, PASSWORD_DEFAULT);
    }

    private function getUserData($email, $conn)
    {
        if ($result = $conn->query("SELECT * from users where email = '$email'")) {
            if ($result->num_rows > 0) return $result->fetch_assoc();
            return false;
        }
        return false;
    }



    /*
     public function checkLogin()
    {

    }
    */
}
