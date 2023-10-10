<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $passconfirmation = $_POST["passconfirmation"];
    $agreement = isset($_POST["agreement"]) ? "Aceito" : "Não Aceito";

    // Validate and sanitize data (you should add more validation as needed)
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $name = htmlspecialchars($name);
    $lastname = htmlspecialchars($lastname);
    $password = htmlspecialchars($password);
    $passconfirmation = htmlspecialchars($passconfirmation);

    // Check if passwords match
    if ($password != $passconfirmation) {
        die("Erro: As senhas não coincidem.");
    }

    // Create a string with the form data
    $data = "E-mail: $email\nNome: $name\nSobrenome: $lastname\nSenha: $password\nAceito os termos: $agreement\n\n";

    // Path to the text file
    $file_path = "form_data.txt";

    // Save the data to the text file
    file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX);

    // Redirect to a thank you page or do further processing
    header("Location: thank_you_page.html");
    exit();
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $passconfirmation = $_POST["passconfirmation"];
    $agreement = isset($_POST["agreement"]) ? "Aceito" : "Não Aceito";

    // Validate and sanitize data (you should add more validation as needed)
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $name = htmlspecialchars($name);
    $lastname = htmlspecialchars($lastname);
    $password = htmlspecialchars($password);
    $passconfirmation = htmlspecialchars($passconfirmation);

    // Check if passwords match
    if ($password != $passconfirmation) {
        die("Erro: As senhas não coincidem.");
    }

    // Create a string with the form data
    $data = "E-mail: $email\nNome: $name\nSobrenome: $lastname\nSenha: $password\nAceito os termos: $agreement\n\n";

    // Path to the text file
    $file_path = "form_data.txt";

    // Save the data to the text file
    file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX);

    // Redirect to a thank you page or do further processing
    header("Location: thank_you_page.html");
    exit();
}
?>
