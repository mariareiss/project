<?php
require_once("util-db.php");
require_once("model-destination.php");

$pageTitle = "Destinations";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if (insertDestination($_POST['dName'], $_POST['dWeather'], $_POST['dNotes'])){
      echo '<div class="alert alert-success" role="alert">User added.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Edit":
    if (updateDestination($_POST['dName'], $_POST['dWeather'], $_POST['dNotes'], $_POST['did'])){
      echo '<div class="alert alert-success" role="alert">User edited.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Delete":
    if (deleteDestination($_POST['did'])){
      echo '<div class="alert alert-success" role="alert">User deleted.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
  }
}
$destination = selectDestination();
include "view-destination.php";
include "view-footer.php";
?>
