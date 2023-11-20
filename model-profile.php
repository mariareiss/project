<?php
function selectProfile() {
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
function insertProfile($uName, $uEmail, $uPassword) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `User` (`user_name`, `user_email`, `user_password`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $uName, $uEmail, $uPassword);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateProfile($uName, $uEmail, $uPassword, $uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `User` set `user_name`= ?, `user_email`= ?, `user_password`= ? where user_id = ?");
        $stmt->bind_param("sssi", $uName, $uEmail, $uPassword, $uid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteProfile($uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `User` where customer_id=?");
        $stmt->bind_param("i", $uid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
