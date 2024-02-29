<?php
header("Access-Control-Allow-Origin: *");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $dateTime = $_POST["dateTime"];
    $ipAddress = $_POST["ipAddress"];
    
    // Format the data
    $data = "Latitude: " . $latitude . ", Longitude: " . $longitude . ", Date/Time: " . $dateTime . ", IP Address: " . $ipAddress . "\n";
    
    // Save data to a file
    $file = fopen("location_data.txt", "a");
    fwrite($file, $data);
    fclose($file);
    
    echo "Location data saved successfully.";
} else {
    echo "Invalid request.";
}
?>
