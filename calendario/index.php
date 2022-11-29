<?php include('../php/connect.php');

  if (isset($_SESSION['level'])) {
    header('Location: calendar-log.php');
  } else {
    header('Location: calendar-nolog.php');
  }

?>