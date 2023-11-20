<?php
require_once("util-db.php");
require_once("model-profile.php");

$pageTitle = "My Profile";
include "view-header.php";
$profile = selectProfiles();
include "view-profile.php";
include "view-footer.php";
?>
