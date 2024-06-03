<?php
// Define variables
$title = "My PHP App on Vercel";
$name = "John";

// Function to escape HTML characters
function h($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo h($title); ?></title>
</head>
<body>
    <h1>Welcome to <?php echo h($title); ?>!</h1>
    <p>This is a simple PHP page deployed on Vercel using GitHub Actions.</p>
    
    <p>Hello, <?php echo h($name); ?>!</p>
</body>
</html>
