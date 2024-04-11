<?php
require_once "./Controllers/DatabaseController.php";
require_once "config.php";

class ImageController
{

    public DatabaseController $db;
    public ResponseController $response;

    public function __construct(ResponseController $response)
    {
        $this->db = new DatabaseController();
        $this->response = $response;

    }

    public function upload()
    {
        if (isset($_FILES['file']["name"])) {
            if ($_FILES["file"]["type"] == "image/png" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/gif") {
                if ($_FILES["file"]["size"] <= MAX_FILESIZE) { // 5MB
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], "Content/Images/Gallery/" . date("Ymdhis") . $_FILES["file"]["name"])) {
                        $this->response->redirect("/gallery?error=0");
                    } else {
                        $this->response->redirect("/gallery?error=4");
                    }
                } else {
                    $this->response->redirect("/gallery?error=3");
                }
            } else {
                $this->response->redirect("/gallery?error=2");
            }
        } else {
            $this->response->redirect("/gallery?error=1");
        }
    }
}
