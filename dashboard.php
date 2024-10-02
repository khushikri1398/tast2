<?php
include 'includes/header.php';

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>


<div class="flex items-center justify-between p-6 bg-gradient-to-r from-blue-500 to-purple-600 shadow-lg text-white">

    <div class="space-x-4">
        <a href="cart.php"
            class="bg-blue-400 hover:bg-blue-600 hover:text-white p-2 rounded-full shadow-md transition duration-300 ease-in-out">Cart</a>
        <a href="contactus.php"
            class="bg-green-400 hover:bg-green-600 hover:text-white p-2 rounded-full shadow-md transition duration-300 ease-in-out">Contact
            Us</a>
        <a href="index1.php"
            class="bg-yellow-400 hover:bg-yellow-600 hover:text-white p-2 rounded-full shadow-md transition duration-300 ease-in-out">Home</a>
        <a href="logout.php"
            class="bg-red-400 hover:bg-red-600 hover:text-white p-2 rounded-full shadow-md transition duration-300 ease-in-out">Sign
            Out</a>
    </div>
</div>



<div class="container mx-auto mt-12 px-6">
    <h1 class="text-5xl font-bold text-center mb-16 text-gray-900 tracking-wide">Delicious Food Items</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="img/pizza.jpg" class="w-full h-56 object-cover">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-semibold text-gray-900">Pizza</h2>
                    <button
                        class="text-red-500 text-2xl transition-transform duration-300 hover:scale-125">&#9829;</button>
                </div>
                <p class="text-gray-700 mt-2">Price: Rs.300</p>
                <div class="flex justify-between mt-6">
                    <button
                        class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300">Add
                        to Cart</button>
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Buy
                        Now</button>
                </div>
            </div>
        </div>


        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="img/burger.jpg" class="w-full h-56 object-cover">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-semibold text-gray-900">Burger</h2>
                    <button
                        class="text-red-500 text-2xl transition-transform duration-300 hover:scale-125">&#9829;</button>
                </div>
                <p class="text-gray-700 mt-2">Price: Rs.200</p>
                <div class="flex justify-between mt-6">
                    <button
                        class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300">Add
                        to Cart</button>
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Buy
                        Now</button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="img/chickennuggets.jpg" class="w-full h-56 object-cover">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-semibold text-gray-900">Chicken Nuggets</h2>
                    <button
                        class="text-red-500 text-2xl transition-transform duration-300 hover:scale-125">&#9829;</button>
                </div>
                <p class="text-gray-700 mt-2">Price: Rs.290</p>
                <div class="flex justify-between mt-6">
                    <button
                        class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300">Add
                        to Cart</button>
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Buy
                        Now</button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="img/pasta.jpg" class="w-full h-56 object-cover">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-semibold text-gray-900">Pasta</h2>
                    <button
                        class="text-red-500 text-2xl transition-transform duration-300 hover:scale-125">&#9829;</button>
                </div>
                <p class="text-gray-700 mt-2">Price: Rs.100</p>
                <div class="flex justify-between mt-6">
                    <button
                        class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300">Add
                        to Cart</button>
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Buy
                        Now</button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="img/samosa.jpg" class="w-full h-56 object-cover">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-semibold text-gray-900">Samosa</h2>
                    <button
                        class="text-red-500 text-2xl transition-transform duration-300 hover:scale-125">&#9829;</button>
                </div>
                <p class="text-gray-700 mt-2">Price: Rs.100</p>
                <div class="flex justify-between mt-6">
                    <button
                        class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300">Add
                        to Cart</button>
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Buy
                        Now</button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="img/idli.jpg" class="w-full h-56 object-cover">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-semibold text-gray-900">Idli</h2>
                    <button
                        class="text-red-500 text-2xl transition-transform duration-300 hover:scale-125">&#9829;</button>
                </div>
                <p class="text-gray-700 mt-2">Price: Rs.120</p>
                <div class="flex justify-between mt-6">
                    <button
                        class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300">Add
                        to Cart</button>
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Buy
                        Now</button>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
<footer>
    <div class="flex flex-col w-full h-fit bg-[#374151] text-[#e5e7eb] px-6 md:px-14 py-10 mt-5">
        <div class="flex flex-col md:flex-row m-1">

            <div class="flex flex-col gap-2 justify-center md:w-[35%] w-full">
                <div class="flex items-center gap-4">
                    <img class="bg-white border border-white shadow-2xl rounded-full" src="img/back.png" width="100"
                        alt="Logo">
                    <div class="text-2xl md:text-3xl">Web Development Cell</div>
                </div>
            </div>


            <div class="flex flex-col gap-2 w-full md:w-[65%] mt-6 md:mt-0 md:justify-end text-nowrap">
                <div class="font-bold uppercase text-[#9ca3af] pb-3">Newsletter</div>
                <p class="text-[#e5e7eb] mb-2">Subscribe to our newsletter.</p>
                <form class="flex items-center">
                    <input type="email" name="email" placeholder="Enter your email"
                        class="w-full bg-gray-100 text-gray-700 rounded-l-lg py-3 px-4 focus:outline-none focus:ring-purple-600 focus:border-transparent"
                        required="">
                    <button type="submit"
                        class="bg-[#7e22ce] text-[#ffffff] font-semibold py-3 px-6 rounded-r-lg transition-colors duration-300">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="w-full border-t border-gray-500 my-3"></div>
        <div class="text-center">WDC</div>
    </div>
</footer>


</html>