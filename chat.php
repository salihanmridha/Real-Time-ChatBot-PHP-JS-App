<?php
// include ("inc/classes/DB.php");
// $chat = new DB();
//
// $email = "salihanmridha@gmail.com";
// $sql = "select * from user where email = ?";
// $arr = array($email);
// $simplequery = $chat->simplequery($sql, $arr);
// $results = $simplequery->fetchAll();
// foreach ($results as $result) {
//   echo $result['user_name'];
// }
?>

<?php
  include_once ("inc/classes/session.php");

  $userSession = new Session();
  if ($userSession->getSession('login') != true) {
    header('Location: login.php');
  }
  $userSession->destroy();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Group Chating Board</title>

  <body>
    <link href="assets/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!-- Include the above in your HEAD tag ---------->

</head>



<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">



<div class="container">
<h3 class=" text-center">
  Messaging Dashboard - <?php
$userName = $userSession->getSession('user_name');
if (isset($userName)) {
  echo $userName;
}
?>
</h3>
<div class="messaging">
      <div class="inbox_msg">

        <div class="mesgs">
          <div class="msg_history" id="msgBox">

            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test which is a new approach to have all
                    solutions</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
              </div>
            </div>

            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Test which is a new approach to have all
                  solutions</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>

          </div>

          <div class="type_msg">
            <div class="input_msg_write">
              <form autocomplete="off" method="post" id="msgFrm">
                <input autocomplete="off" type="text" class="write_msg" id="write_msg" name="write_msg" placeholder="Type a message" />
                <button id="sendmsgbutton" class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>


      <p class="text-center top_spac"> Developed by <a target="_blank" href="http://smridha.com/">Salihan Mridha</a>  -  <a href="?action=logout">Logout</a> </p>

    </div></div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/main.js"></script>

  </body>
</html>
