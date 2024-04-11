<?php
require_once "./Controllers/DatabaseController.php";

class ContactController
{

    public DatabaseController $db;

    public function __construct()
    {
        $this->db = new DatabaseController();
    }
    //lastName,firstName,email,phone,message,invalidCheck
    public function send()
    {
        $conn = $this->db->connect();
        if ($conn) {
            if (isset($_POST["lastName"]) && isset($_POST["firstName"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["message"])) {
                try {
                    $user = (isset($_SESSION['user']['id'])) ? $_SESSION['user']['id'] : 'null';
                    $conn->query("INSERT INTO cstpteam.emails (created_at, created_by, email, phone, web, content) VALUES('" . date("Y-m-d h:i:s") . "'," . $user . ", '" . $_POST["email"] . "', '" . $_POST["phone"] . "', '','" . $_POST["message"] . "')");
                    header("Location:/contact?error=0");
                } catch (Exception $e) {   
                    header("Location:/contact?error=1");
                }
            }
        } else {
            header("Location:/contact?error=2");
        }
    }

    public function getMessages(){
        try {
            $conn = $this->db->connect();
            if($result = $conn->query("SELECT * from emails")){
                if ($result->num_rows > 0) return $result->fetch_assoc();
                return false;
            }else{
                return false;
            }
        } catch (Exception $e) {  
            return false;
        }
    }
}
