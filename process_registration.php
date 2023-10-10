<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $login = $_POST["login"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $country = $_POST["country"];
    $mobile_phone = $_POST["mobile_phone"];
    $referrer = $_POST["referrer"];
    $friend_login = $_POST["friend_login"];
    $tariff_plan = $_POST["tariff_plan"];
    $another_tariff = $_POST["another_tariff"];

    // Perform additional validations if needed

    // Check if passwords match
    if ($password != $confirm_password) {
        die("Error: Passwords do not match.");
    }

    // Create a string with the form data
    $data = "Login: $login\nPassword: $password\nEmail: $email\nSurname: $surname\nName: $name\nCountry: $country\nMobile Phone: $mobile_phone\nReferrer: $referrer\nFriend's Login: $friend_login\nTariff Plan: $tariff_plan\nAnother Tariff: $another_tariff\n\n";

    // Path to the text file
    $file_path = "data.txt";

    // Save the data to the text file
    file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX);

    // Redirect to a thank you page or do further processing
    header("Location: thank_you_page.html");
    exit();
}
?>
