<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, rgba(39, 117, 182, 0.8), rgba(93, 156, 236, 0.6));
        }
    </style>
</head>

<body class="bg-gray-100">

    <header class="bg-white shadow-lg text-black py-6">
        <h1 class="text-4xl font-bold text-center">Contact Us</h1>
        <div class="flex justify-center mt-4 space-x-4">
            <a href="foodlist.php" class="hover:bg-gray-700 hover:text-white p-2 rounded transition duration-300 ease-in-out">Back</a>
            <a href="cart.php" class="hover:bg-gray-700 hover:text-white p-2 rounded transition duration-300 ease-in-out">Cart</a>
            <a href="index1.php" class="hover:bg-gray-700 hover:text-white p-2 rounded transition duration-300 ease-in-out">Home</a>
            <a href="logout.php" class="hover:bg-gray-700 hover:text-white p-2 rounded transition duration-300 ease-in-out">Sign Out</a>
        </div>
    </header>

    <section class="container mx-auto mt-12 px-4">
        <h2 class="text-3xl font-semibold text-white mb-6 text-center">We're Waiting For Your Response</h2>

        <div class="bg-white p-8 rounded-lg shadow-xl max-w-lg mx-auto">
            <form>
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 ease-in-out" placeholder="Your Name" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 ease-in-out" placeholder="Your Email" required>
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                    <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 ease-in-out" placeholder="Your Message" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">Submit</button>
                </div>

                <p class="mt-6 text-center text-gray-500">Email: Food123@gmail.com | Phone: +91 0123456789</p>
            </form>
        </div>
    </section>

</body>
<footer>
    <div class="flex flex-col w-full h-fit bg-[#374151] text-[#e5e7eb] px-6 md:px-14 py-10 mt-5">
        <div class="flex flex-col md:flex-row m-1">
            <!-- Logo and title section ----->
            <div class="flex flex-col gap-2 justify-center md:w-[35%] w-full">
                <div class="flex items-center gap-4">
                    <img class="bg-white border border-white shadow-2xl rounded-full" src="img/back.png" width="100" alt="Logo">
                    <div class="text-2xl md:text-3xl">Web Development Cell</div>
                </div>
            </div>

            <!-- Newsletter section -->
            <div class="flex flex-col gap-2 w-full md:w-[65%] mt-6 md:mt-0 md:justify-end text-nowrap">
                <div class="font-bold uppercase text-[#9ca3af] pb-3">Newsletter</div>
                <p class="text-[#e5e7eb] mb-2">Subscribe to our newsletter.</p>
                <form class="flex items-center">
                    <input type="email" name="email" placeholder="Enter your email" class="w-full bg-gray-100 text-gray-700 rounded-l-lg py-3 px-4 focus:outline-none focus:ring-purple-600 focus:border-transparent" required="">
                    <button type="submit" class="bg-[#7e22ce] text-[#ffffff] font-semibold py-3 px-6 rounded-r-lg transition-colors duration-300">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="w-full border-t border-gray-500 my-3"></div>
        <div class="text-center">WDC</div>
    </div>
</footer>


</html>