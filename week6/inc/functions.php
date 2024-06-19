<?php

    session_start();
  function setMessage($msg, $className) {
    $_SESSION['message'] = $msg;
    $_SESSION['className'] = $className;
    
  }  

  function getMessage() {
    if(isset($_SESSION['message'])) {
        echo '<div class='alert alert-' . $_SESSION['ClassName'] . '"role "'
    }
  }

?>