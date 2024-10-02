<?php
include 'includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' ";
    $result =$conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "User not found";
    }
}
?> **/
<div class="relative bg-cover bg-center h-full flex items-center justify-center text-white" style="background-image: url('img/bg.jpg');">
<div class="flex items-center justify-between w-full max-w-5xl bg-black/30  p-6 rounded-lg ">
        <div class="w-1/2 h-auto">
            <img src="img/ln.jpg" class="w-full h-full object-cover rounded-lg">
        </div>
        <div class="w-1/2 ml-10">
            <h2 class="text-4xl mb-6 text-center text-white font-bold py-4 hover:text-black">Login</h2>
            <form class="text-black" action="login.php" method="post">
                <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-3 bg-white border border-black text-black rounded" required>
                <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-3 bg-white border border-black text-black rounded" required>
                <button type="submit" class="w-full bg-gray-600 hover:bg-red-700 text-white p-2 rounded transition duration-300">Login</button>
              
            </form>
            <?php if (isset($error)): ?>
                <p class="text-red-500 text-center mt-2"><?php echo $error; ?></p>
            <?php endif; ?>
            <p class="mt-4 text-center text-black">Don't have an account? <a href="signup.php" class=" m-3 p-3 text-white hover:text-white hover:bg-red-700 rounded">Sign Up</a><a href="index1.php" class=" m-3 p-3 text-white hover:bg-red-700 rounded">Home</a></p>
        </div>
    </div>

</div> 
</body>

</html>