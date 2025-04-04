<?php
    require_once 'backend_registration.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $registration = new Registration();
        
        // PERSONAL INFORMATION
        $First_Name = $_POST['Guardian-First-Name'];
        $Last_Name = $_POST['Guardian-Last-Name'];
        $Middle_Name = $_POST['Guardian-Middle-Name'];
        $Contact_Number = $_POST['Contact-Number'];
        
        // Register the user
        $registration->register($First_Name, $Last_Name, $Middle_Name, $Contact_Number);
    }
?>

<?php
header("Content-Type: application/json");

$response = [
    "message" => "Registration successful!"
];

echo json_encode($response);
?>
