<?php
function selectProfiles() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT user_id, user_name, user_email, user_password FROM `User`");        
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
