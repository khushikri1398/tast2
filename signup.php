<?php
    include 'includes/header.php'; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($conn->query($sql) === TRUE) 
        {
            header("Location: login.php");
            exit;
        }
        $conn->close();
    }
?>
<div class="relative bg-cover bg-center h-full flex items-center justify-center text-white" style="background-image: url('img/bg.jpg');">
<div class="flex items-center justify-between w-full max-w-5xl bg-black/30 p-6 rounded-lg mt-4">
        <div class="w-1/2 h-auto">
            <h2 class="text-4xl mb-6 text-center text-white font-bold py-4 hover:text-black">Sign Up</h2>
            <form action="signup.php" method="post">
                <input type="text" name="name" placeholder="Name" class="w-full p-2 mb-3 border border-gray-300 rounded" required>
                <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-3 border border-gray-300 rounded" required>
                <input type="password" name="password" placeholder="Password (min 8 characters)" class="w-full p-2 mb-3 border border-gray-300 rounded" pattern=".{8,}" required>
                <button type="submit" class="w-full bg-gray-600 hover:bg-red-700 text-white p-2 rounded transition duration-300">Sign Up</button>
            </form>
            <p class="mt-4 text-center text-white">Already have an account? 
                <a href="login.php" class="text-white hover:bg-red-700 m-3 p-3 rounded">Sign In</a> 
                <a href="index1.php" class="text-white hover:bg-red-700 m-3 p-3 rounded">Home</a>
            </p>
        </div>
        <div class="w-1/2 ml-10">
            <img src="img/lo.jpg" alt="Sign Up Image" class="w-full h-full object-cover rounded-lg">
        </div>
    </div>

</div> 
    


    
<?php
include 'includes/footer.php'
?>
