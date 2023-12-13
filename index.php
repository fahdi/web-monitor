<?php

function checkWebsiteStatus($url) {
    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_HEADER, true);    // We want headers
    curl_setopt($ch, CURLOPT_NOBODY, true);    // We don't need body
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_TIMEOUT,10);

    // Execute cURL
    $output = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close cURL session
    curl_close($ch);

    // Return HTTP status code
    return $httpcode;
}

// URL to check
$url = "https://www.fahdmurtaza.com";

// Check the status of the website
$httpCode = checkWebsiteStatus($url);

// Output the result
if ($httpCode >= 200 && $httpCode < 300) {
    echo "Website is up and running. Response Code: " . $httpCode;
} else {
    echo "Website might be down! Response Code: " . $httpCode;
    // Here, you can include your custom error page or perform any action
}


