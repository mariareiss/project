<?php
require_once("util-db.php");
require_once("model-profile.php");

$pageTitle = "My Profile";
include "view-header.php";
$profile = selectProfile();
include "view-profile.php";
include "view-footer.php";
?>
