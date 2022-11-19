<?php

  if (isset($_SESSION['id'])) {
    header('Location: calendar-log.php');
  } else {
    header('Location: calendar-nolog.html');
  }

?>