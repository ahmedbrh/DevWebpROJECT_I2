<?php
class PopupController {
  function __construct(){
    $titre = "Popup";
  }

  function renderPopup(){
    include "View/Popup/popup.php"; 
  }
  function getPopupReplies($isbn){
    
    require_once("Model/comments.php");
    require_once("Model/user.php");
    $userModel = new User();
    $commentaireModel = new Commentaire();
    $replies = $commentaireModel->get_book_replies($isbn);
    if($replies != null){
    foreach($replies as $reply){
      $username = $userModel->get_username_by_id($reply["usr_id"]);
       echo 
        "<div class='commentaire'>
            <div class='commentaireHeader'>
                <div class='avatarandname'> 
                    <img src='https://pbs.twimg.com/profile_images/911523367492161536/XDOQPjqf_400x400.jpg' width='50px' height='50px' id='avatar'/>
                    <strong class='username'>".$username."</strong></br>
                </div>
                <time class='date'>22 Mars</time>
              </div><div class='commentaireContent'><p>".html_entity_decode($reply["cmt_description"], ENT_COMPAT, 'UTF-8')."</p></div>
        </div>";
    }
    }
    
  }

  function postReply($reply, $username, $isbn){
    require_once("Model/user.php");
    require_once("Model/book.php");
    $usrModal = new User();
    $bookModal = new Book();
    $user = $usrModal->get_user_by_username($username);
    $livre = $bookModal->get_or_create_book_by_isbn($isbn);
    $usr_id = intval($user["usr_id"]);
    $lvr_id = intval($livre["lvr_id"]);
    require_once("Model/comments.php");
    $commentsModal = new Commentaire();
    $commentsModal->create_reply($reply, $usr_id, $lvr_id);
  }

}
?>

