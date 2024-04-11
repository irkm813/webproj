<?php
require_once "./Controllers/DatabaseController.php";

class ContactController
{

    public DatabaseController $db;
    public ResponseController $response;

    public function __construct(ResponseController $response)
    {
        $this->db = new DatabaseController();
        $this->response = $response;
    }
    //lastName,firstName,email,phone,message,invalidCheck
    public function send()
    {
        $conn = $this->db->connect();
        if ($conn) {
            if (isset($_POST["last_name"]) && isset($_POST["first_name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["message"])) {
                try {
                    $user = (isset($_SESSION['user']['id'])) ? $_SESSION['user']['id'] : 'null';
                    $conn->query("INSERT INTO cstpteam.emails (created_at, created_by, email, phone, web, content) VALUES('" . date("Y-m-d h:i:s") . "'," . $user . ", '" . $_POST["email"] . "', '" . $_POST["phone"] . "', '','" . $_POST["message"] . "')");
                    $this->response->redirect("/contact?error=0");
                } catch (Exception $e) {
                    $this->response->redirect("/contact?error=1");
                }
            }
        } else {
            $this->response->redirect("/contact?error=2");
        }
    }

    public function getMessages()
    {
        try {
            $conn = $this->db->connect();
            if ($result = $conn->query("SELECT emails.ID,emails.created_at,emails.created_by,emails.email,emails.phone,emails.content,users.first_name,users.last_name from emails LEFT JOIN users ON emails.created_by = users.ID ")) {
                if ($result->num_rows > 0) return json_encode($result->fetch_all());
                return false;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}
