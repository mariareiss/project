<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'mariarei_projectuser', 'y3mRengl~(pD', 'mariarei_project');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
