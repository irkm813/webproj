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
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            echo '<pre>';
            var_dump($_SESSION);
            echo '</pre>';
            if (isset($_POST["lastName"]) && isset($_POST["firstName"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["message"])) {
                try {
                    $user = (isset($_SESSION['user']['id'])) ? $_SESSION['user']['id'] : 'null';
                    $conn->query("INSERT INTO cstpteam.emails (created_at, created_by, email, phone, web, content) VALUES('" . date("Y-m-d h:i:s") . "'," . $user . ", '" . $_POST["email"] . "', '" . $_POST["phone"] . "', '','" . $_POST["message"] . "')");
                    header("Location:/contact?error=0");
                } catch (Exception $e) {   //0000-00-00 00:00:00
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
            $conn->query("SELECT * from emails");
            
        } catch (Exception $e) {   //0000-00-00 00:00:00

        }

    }
}
