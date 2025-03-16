<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BizPush - Shoe Store</title>
    <link rel="icon" href="resources/shoes.png" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>

<body class="bg-gradient-to-r from-[#F806CC] to-[#6AD4DD] text-white">
    <header class="flex justify-between items-center p-6 max-w-6xl mx-auto">
        <div class="flex items-center">
            <img src="resources/shoes.png" alt="BizPush Logo" class="w-16 hover">
            <h1 class="text-2xl font-bold hover">BIZPUSH</h1>
        </div>
        <nav>
            <ul class="flex space-x-6 fw-bold text-gray-100">
                <li><a href="#" class="hover">Home</a></li>
                <li><a href="#" class="hover">Gallery</a></li>
                <li><a href="#" class="hover">Shop</a></li>
                <li><a href="#" class="hover">Contact</a></li>
            </ul>
        </nav>
        <div class="flex items-center space-x-4">
            <box-icon name='search' color="white" class="hover"></box-icon>
            <box-icon name='cart' color="white" class="hover"></box-icon>
            <img src="resources/user.png" alt="Shoe Image" class="w-8 rounded-full hover">
        </div>
    </header>

    <section class="text-center py-4">
        <div class="max-w-6xl mx-auto grid grid-cols-2 gap-8 items-center px-4">
            <div class="text-left">
                <h2 class="text-4xl font-bold hover">PURCHASE YOUR SHOES NOW.</h2>
                <p class="mt-4 text-gray-200 hover">"Step into style and comfort with our premium collection of shoes. Designed for performance and fashion, our sneakers offer the perfect blend of durability, support, and trend-setting design. Elevate your look with every step!"</p>
                <button class="mt-6 bg-white px-6 py-3 rounded-xl text-lg font-semibold text-pink-500 hover">Shop Now</button>
            </div>
            <div class="w-200">
                <img src="resources/vec shoes.png" alt="Featured Shoe" class="rounded-lg hover">
            </div>
        </div>
    </section>

    <section class="text-left py-10">
        <div class="max-w-6xl mx-auto gap-8 items-center px-4">
            <div class="text-left">
                <h2 class="text-4xl font-bold hover">POPULAR PRODUCTS</h2>
            </div>
            <div class="flex justify-center gap-8 mt-8 flex-wrap">
                <div class=" p-4 rounded-lg text-black w-60 hover">
                    <div class="bg-gray-300 rounded-t-2xl">
                        <img src="resources/vec shoes.png" alt="Shoe" class="w-60 h-40">
                    </div>

                    <div class="flex items-center mt-2">
                        <box-icon type='solid' name='star' color="yellow" size="15px"></box-icon>
                        <label class="text-gray-600 ml-2 mt-2">Rating this product</label>
                    </div>

                    <label class=" font-semibold mt-2">Nike Running Shoes</label>
                    <div class="flex justify-between items-center mt-2">
                        <label class="font-bold text-dark-500">$150</label>
                        <label class="text-gray-600">500 Sold</label>
                        <button class="bg-[#F806CC] rounded-xl text-white p-2 shadow-xl">Buy Now</button>
                    </div>
                </div>

                <div class=" p-4 rounded-lg text-black w-60 hover">
                    <div class="bg-gray-300 rounded-t-2xl">
                        <img src="resources/vec shoes.png" alt="Shoe" class="w-60 h-40">
                    </div>

                    <div class="flex items-center mt-2">
                        <box-icon type='solid' name='star' color="yellow" size="15px"></box-icon>
                        <label class="text-gray-600 ml-2 mt-2">Rating this product</label>
                    </div>

                    <label class=" font-semibold mt-2">Nike Running Shoes</label>
                    <div class="flex justify-between items-center mt-2">
                        <label class="font-bold text-dark-500">$150</label>
                        <label class="text-gray-600">500 Sold</label>
                        <button class="bg-[#F806CC] rounded-xl text-white p-2 shadow-xl">Buy Now</button>
                    </div>
                </div>

                <div class=" p-4 rounded-lg text-black w-60 hover">
                    <div class="bg-gray-300 rounded-t-2xl">
                        <img src="resources/vec shoes.png" alt="Shoe" class="w-60 h-40">
                    </div>

                    <div class="flex items-center mt-2">
                        <box-icon type='solid' name='star' color="yellow" size="15px"></box-icon>
                        <label class="text-gray-600 ml-2 mt-2">Rating this product</label>
                    </div>

                    <label class=" font-semibold mt-2">Nike Running Shoes</label>
                    <div class="flex justify-between items-center mt-2">
                        <label class="font-bold text-dark-500">$150</label>
                        <label class="text-gray-600">500 Sold</label>
                        <button class="bg-[#F806CC] rounded-xl text-white p-2 shadow-xl">Buy Now</button>
                    </div>
                </div>

                <div class=" p-4 rounded-lg text-black w-60 hover">
                    <div class="bg-gray-300 rounded-t-2xl">
                        <img src="resources/vec shoes.png" alt="Shoe" class="w-60 h-40">
                    </div>

                    <div class="flex items-center mt-2">
                        <box-icon type='solid' name='star' color="yellow" size="15px"></box-icon>
                        <label class="text-gray-600 ml-2 mt-2">Rating this product</label>
                    </div>

                    <label class=" font-semibold mt-2">Nike Running Shoes</label>
                    <div class="flex justify-between items-center mt-2">
                        <label class="font-bold text-dark-500">$150</label>
                        <label class="text-gray-600">500 Sold</label>
                        <button class="bg-[#F806CC] rounded-xl text-white p-2 shadow-xl">Buy Now</button>
                    </div>
                </div>

                <div class=" p-4 rounded-lg text-black w-60 hover">
                    <div class="bg-gray-300 rounded-t-2xl">
                        <img src="resources/vec shoes.png" alt="Shoe" class="w-60 h-40">
                    </div>

                    <div class="flex items-center mt-2">
                        <box-icon type='solid' name='star' color="yellow" size="15px"></box-icon>
                        <label class="text-gray-600 ml-2 mt-2">Rating this product</label>
                    </div>

                    <label class=" font-semibold mt-2">Nike Running Shoes</label>
                    <div class="flex justify-between items-center mt-2">
                        <label class="font-bold text-dark-500">$150</label>
                        <label class="text-gray-600">500 Sold</label>
                        <button class="bg-[#F806CC] rounded-xl text-white p-2 shadow-xl">Buy Now</button>
                    </div>
                </div>

                <div class=" p-4 rounded-lg text-black w-60 hover">
                    <div class="bg-gray-300 rounded-t-2xl">
                        <img src="resources/vec shoes.png" alt="Shoe" class="w-60 h-40">
                    </div>

                    <div class="flex items-center mt-2">
                        <box-icon type='solid' name='star' color="yellow" size="15px"></box-icon>
                        <label class="text-gray-600 ml-2 mt-2">Rating this product</label>
                    </div>

                    <label class=" font-semibold mt-2">Nike Running Shoes</label>
                    <div class="flex justify-between items-center mt-2">
                        <label class="font-bold text-dark-500">$150</label>
                        <label class="text-gray-600">500 Sold</label>
                        <button class="bg-[#F806CC] rounded-xl text-white p-2 shadow-xl">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>