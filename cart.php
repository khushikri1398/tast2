<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <header class="text-black p-4 text-center">
        <h1 class="text-3xl font-bold">Food Items</h1>
        <div class="flex justify-center space-x-4 mt-2">
            <a href="foodlist.php" class="hover:bg-gray-500 p-2 rounded">Back</a>
            <a href="contactus.php" class="hover:bg-gray-500 p-2 rounded">Contact Us</a>
            <a href="index1.php" class="hover:bg-gray-500 p-2 rounded">Home</a>
            <a href="logout.php" class="hover:bg-gray-500 p-2 rounded">Sign Out</a>
        </div>
    </header>

    <section class="container mx-auto mt-12 px-4">
        <h2 class="text-2xl font-bold mb-4">Available Food Items</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="img/pizza.jpg" class="w-full h-56 object-cover">
                <h3 class="text-xl font-bold">Pizza</h3>
                <p class="text-gray-600 mt-2">Delicious cheese pizza with fresh ingredients.</p>
                <p class="text-green-500 font-bold mt-2">Rs.300</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
            </div>


            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="img/burger.jpg" class="w-full h-56 object-cover">
                <h3 class="text-xl font-bold">Burger</h3>
                <p class="text-gray-600 mt-2">Juicy beef burger with lettuce and tomato.</p>
                <p class="text-green-500 font-bold mt-2">Rs.200</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
            </div>


            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="img/pasta.jpg" class="w-full h-56 object-cover">
                <h3 class="text-xl font-bold">Pasta</h3>
                <p class="text-gray-600 mt-2">Creamy Alfredo pasta with grilled chicken.</p>
                <p class="text-green-500 font-bold mt-2">Rs.100</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
            </div>

        </div>


        <div class="bg-white p-4 mt-12 rounded-lg shadow-md ">
            <h2 class="text-2xl font-bold mb-4">Your Cart</h2>
            <p class="text-gray-600">You have 3 items in your cart.</p>
            <ul class="list-disc pl-5 text-gray-700 ">
                <li>Pizza - Rs.300</li>
                <li>Burger - Rs.200</li>
                <li>Pasta - Rs.100</li>
            </ul>
            <p class="text-lg font-bold mt-4">Total: Rs.600</p>
            <button class="mt-6 bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Buy Now</button>
        </div>
    </section>

</body>
<footer>
    <div class="flex flex-col w-full h-fit bg-[#374151] text-[#e5e7eb] px-6 md:px-14 py-10 mt-5">
        <div class="flex flex-col md:flex-row m-1">
           
            <div class="flex flex-col gap-2 justify-center md:w-[35%] w-full">
                <div class="flex items-center gap-4">
                    <img class="bg-white border border-white shadow-2xl rounded-full" src="img/back.png" width="100" alt="Logo">
                    <div class="text-2xl md:text-3xl">Web Development Cell</div>
                </div>
            </div>

            
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