<?php
include(../includes/init.php);

if (isset($_POST)) {
  if (empty($_POST['username'])) {
    $_SESION['errors']['username'] = 'Username is missing';
  }


  if (count($_SESSION['errors']) > 0) {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      echo json_encode($_SESION['errors']);
    }
    echo"<ul>";
    foreach ($_SESION['errors'] as $key => $value) {
      echo "<li>" . $value . "</li>";
    }
    echo "</ul>";exit;
  }
  else {
    
  }
}
 ?>
