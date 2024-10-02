<?php 
sessio_start();
    'includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Management System</title>
    <link rel="stylesheet" href="style/style2.css">
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body>
    <nav class="flex justify-between p-4 bg-black text-orange-400">
        <div class="text-3xl font-bold">foodHub</div>
        <div class="space-x-8 flex items-center">
            <?php if(!isset($_SESSION['user_id'])): ?>
                <a href="login.php" class="text-lg hover:underline">Login</a>
                <a href="signup.php" class="text-lg hover:underline">Signup</a>
            <?php else: ?>
                <a href="login.php" class="text-lg hover:underline">Home</a>
                <a href="signup.php" class="text-lg hover:underline">cart</a>
                <a href="signup.php" class="text-lg hover:underline">contact us</a>
                <a href="signup.php" class="text-lg hover:underline">logout</a>

            <?php endif; ?>
        </div>

    </nav>
