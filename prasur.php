<?php

// Function to set a cookie
function setCookieValue($name, $value, $expiryTime) {
    setcookie($name, $value, time() + $expiryTime, '/');
}

// Function to retrieve a cookie
function getCookieValue($name) {
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
}

// Example usage:
$cookieName = 'user';
$cookieValue = 'JohnDoe';
$expiryTime = 3600; // Cookie will expire in 1 hour

// Set the cookie
setCookieValue($cookieName, $cookieValue, $expiryTime);

// Retrieve and display the cookie value
$retrievedValue = getCookieValue($cookieName);

echo "Cookie Value: $retrievedValue\n";

?>