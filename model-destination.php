<?php
function selectDestination() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT destination_id, trip_id, destination_name, destination_weather, destination_notes FROM `Destination`");        
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertDestination($dName, $dWeather, $dNotes) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Destination`(`destination_name`, `destination_weather`, `destination_notes`) VALUES (?,?,?);");
        $stmt->bind_param("sss", $dName, $dWeather, $dNotes);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateDestination($dName, $dWeather, $dNotes, $did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Destination` set `destination_name`= ?, `destination_weather`= ?, `destination_notes`= ? where destination_id = ?");
        $stmt->bind_param("sssi", $dName, $dWeather, $dNotes, $did);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteDestination($did) {
  try{
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `Destination` where destination_id=?");
        $stmt->bind_param("i", $did);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
