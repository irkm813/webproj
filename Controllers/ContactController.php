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
                    $conn->query("INSERT INTO cstpteam.emails (created_at, created_by, email, phone, web, content) VALUES('" . date("Y-m-d H:i:s") . "'," . $user . ", '" . $_POST["email"] . "', '" . $_POST["phone"] . "', '','" . $_POST["message"] . "')");
                    return $this->response->renderView("",$this->success_msg($conn->insert_id));
                } catch (Exception $e) {
                    $this->response->redirect("/contact?error=1");
                }
            }
        } else {
            $this->response->redirect("/contact?error=2");
        }
    }

    public function success_msg($id){
        if($result = $this->getSingleMessage($id)){
            $name = $result["first_name"] != null ? $result["first_name"] . " " .$result["last_name"] : "Vendég";
            return "<h1>Üzeneted megkaptuk!</h1><div class='comment-box'><div>{$result["created_at"]}</div><div>{$name}</div><div>{$result["email"]}</div><div>{$result["phone"]}</div><p>{$result["content"]}</p></div>";
        }else{
            return "Hiba történt";
        }
        return "Hiba történt";
    }

    public function getMessages()
    {
        try {
            $conn = $this->db->connect();
            if ($result = $conn->query("SELECT emails.ID,emails.created_at,emails.created_by,emails.email,emails.phone,emails.content,users.first_name,users.last_name from emails LEFT JOIN users ON emails.created_by = users.ID ORDER BY emails.created_at DESC")) {
                if ($result->num_rows > 0) return json_encode($result->fetch_all());
                return false;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function getSingleMessage($id)
    {
        try {
            $conn = $this->db->connect();
            if ($result = $conn->query("SELECT emails.ID,emails.created_at,emails.created_by,emails.email,emails.phone,emails.content,users.first_name,users.last_name from emails LEFT JOIN users ON emails.created_by = users.ID WHERE emails.ID = $id")) {
                if ($result->num_rows > 0) return $result->fetch_assoc();
                return false;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}
