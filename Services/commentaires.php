<?php 
session_start();
$action = "";
if(isset($_GET["action"])){
  $action = $_GET["action"];
}
switch ($action){
  case "getReplies":
    if(isset($_POST["isbn"])){
      chdir("../");
      require_once('Controller/popupController.php');
      $popupController = new PopupController();
      $popupController->getPopupReplies($_POST["isbn"]);
    } 
  break;
  case "postReply":

    if(isset($_POST["commentaire"]) && isset($_SESSION["user"]) && isset($_POST["isbn"]) && isset($_POST["rate"])){
      chdir("../");
      require_once('Controller/popupController.php');
      $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
      if (!$token || $token !== $_SESSION['token']) {
          echo "<div class='alert alert-danger' role='alert'>Methode non autoriser</div>";}
      $popupController = new PopupController();
      $popupController->postReply($_POST["commentaire"],$_POST["rate"], $_SESSION["user"], $_POST["isbn"]);
      
    }
  break;
}


?>