<?php

// Function to perform division with exception handling
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Cannot divide by zero");
    }
    return $numerator / $denominator;
}

// Function to validate date format with exception handling
function validateDateFormat($dateString) {
    $dateTime = DateTime::createFromFormat('Y-m-d', $dateString);
    if (!$dateTime || $dateTime->format('Y-m-d') !== $dateString) {
        throw new Exception("Invalid date format. Use 'Y-m-d'");
    }
    return $dateTime;
}

// Example usage:
try {
    // Example 1: Dividing by zero
    $result = divide(10, 0);
    echo "Result of division: $result<br/>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br/>";
}

try {
    // Example 2: Checking date format
    $dateString = '2024-01-27';
    $dateObject = validateDateFormat($dateString);
    echo "Valid date: " . $dateObject->format('Y-m-d') . "<br/>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br/>";
}

?>