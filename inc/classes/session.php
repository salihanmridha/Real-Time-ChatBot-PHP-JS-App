<?php
  class Session{

    public function __construct(){
      if (version_compare(phpversion(), '5.4.0', '<')) {
        if (session_id() == '') {
          session_start();
        }
      } else {
        if (session_status() == PHP_SESSION_NONE) {
          session_start();
        }
      }
    }

    //set session method
    public function setSession($key, $val){
      $_SESSION[$key] = $val;
    }
    //get session method
    public function getSession($key){
      if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
      } else {
        return false;
      }
    }

    //destroy session
    public function destroy(){
      if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        session_destroy();
        session_unset();
        header('Location: login.php');
      }
    }
  }
?>
