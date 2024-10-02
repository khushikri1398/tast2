    <!-- Welcome Section -->
     <?php 
     include 'includes/header.php';
     ?>
    <div class="relative bg-cover bg-center h-4/6 flex items-center justify-center text-white" style="background-image: url('img/d.jpg');">
        <div class="bg-black bg-opacity-75 p-6 text-center rounded-lg shadow-md">
            <h2 class="text-4xl mb-4">Welcome to Your Own Shop</h2>
            <div class="mt-4">
                <a href="#" class="bg-red-700 hover:bg-orange-600 text-white py-2 px-4 rounded transition duration-300 ease-in-out">Explore</a>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="flex justify-between h-2/6 p-5 bg-gray-300 shadow-md rounded-lg mx-6 my-8">
        <div class="w-1/2 flex flex-col justify-center">
            <h1 class="text-orange-500 text-3xl mb-4">About foodHub</h1>
            <p class="text-lg italic">Welcome to The FOOD HUB – your one-stop destination for delicious and fresh culinary delights! Explore a wide variety of mouth-watering dishes, handpicked to satisfy your cravings.</p>
        </div>
        <div class="w-1/2">
            <img src="img/5.jpg" alt="Shop Image" class="w-full h-full object-cover rounded-lg">
        </div>
    </div>

    <!-- Item Details Section -->
    <div class="flex justify-between gap-5 p-5 mx-6">
        <div class="flex-1 text-center bg-gray-100 p-5 rounded-lg shadow-md">
            <img src="img/3.jpg" alt="Pizzas" class="w-full h-40 object-cover rounded-lg mb-3">
            <p class="text-lg">Pizzas</p>
        </div>
        <div class="flex-1 text-center bg-gray-100 p-5 rounded-lg shadow-md">
            <img src="img/4.jpg" alt="Noodles" class="w-full h-40 object-cover rounded-lg mb-3">
            <p class="text-lg">Noodles</p>
        </div>
        <div class="flex-1 text-center bg-gray-100 p-5 rounded-lg shadow-md">
            <img src="img/2.jpg" alt="Deserts" class="w-full h-40 object-cover rounded-lg mb-3">
            <p class="text-lg">Deserts</p>
        </div>
        <div class="flex-1 text-center bg-gray-100 p-5 rounded-lg shadow-md">
            <img src="img/8.jpg" alt="Others" class="w-full h-40 object-cover rounded-lg mb-3">
            <p class="text-lg">Others</p>
        </div>
    </div>

    <!-- Footer -->
    <?php 
     include 'includes/footer.php';
     ?>
   

</body>
</html>
