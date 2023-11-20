<?php
require_once("util-db.php");
require_once("model-profile.php");

$pageTitle = "Profile";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if (insertUser($_POST['uName'], $_POST['uEmail'], $_POST['uPassword'])){
      echo '<div class="alert alert-success" role="alert">User added.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Edit":
    if (updateUser($_POST['uName'], $_POST['uEmail'], $_POST['uPassword'], $_POST['uid'])){
      echo '<div class="alert alert-success" role="alert">User edited.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Delete":
    if (deleteUser($_POST['uid'])){
      echo '<div class="alert alert-success" role="alert">User deleted.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
  }
}
$profiles = selectProfile();
include "view-profile.php";
include "view-footer.php";
?>
