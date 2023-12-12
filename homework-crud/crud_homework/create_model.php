<?php
include("./database/database.php");
function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = validate_input($_POST['name']);
    $age = validate_input($_POST['age']);
    $email = validate_input($_POST['email']);
    $image_url   = validate_input($_POST['image_url']);
    $student = createStudent($_POST);
    if ($student) {
        echo '<script>alert("Tạo thành công!")</script>';
        header('Location: index.php');
        exit;
    };
}
