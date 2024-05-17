<?php
  session_start();

  // Check if the user is logged in
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // User is logged in, redirect to editor
    header("Location: ./editor.php");
  } else {
    // User is not logged in, redirect to home
    header("Location: ./home.php");
  }
  exit();
?>
