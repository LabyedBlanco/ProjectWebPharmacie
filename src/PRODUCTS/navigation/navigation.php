<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="../../output.css" rel="stylesheet">
    <style>
        .poppins {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
        input[type=range]::-webkit-slider-thumb {
            background: #1D4ED8;
            width: 16px;
            height: 16px;
            border-radius: 9999px;
            cursor: pointer;
        }
        input[type=range]::-moz-range-thumb {
            background: #1D4ED8; 
            width: 16px;
            height: 16px;
            border-radius: 9999px;
            cursor: pointer;
        }
        input[type=range]::-ms-thumb {
            background: #1D4ED8;
            width: 16px;
            height: 16px;
            border-radius: 9999px;
            cursor: pointer;
        }
        .custom-tag-button {
            background-color: #D1D5DB;
            border-radius: 15px;
            padding: 0.5rem 1rem;
            transition: background-color 0.3s;
        }
        .custom-tag-button:hover {
            background-color: #1D4ED8; 
            color: white;
        }
    </style>
</head>
<body class="">


    <div class="flex justify-center poppins">
        <div class="w-full pt-4 ml-4">
            <div class="flex flex-col md:flex-row">
                <div class="mt-5 p-4 mb-4 border border-gray-200 rounded-md bg-gray-50 md:mb-0 ">
                    <h2 class="mb-4 text-2xl font-semibold text-black">Product categories</h2>
                    <ul  class="mb-8 space-y-2">
                        <li><a href="#" class="text-black hover:text-blue-500">Category 1</a></li>
                        <li><a href="#" class="text-black hover:text-blue-500">Category 2</a></li>
                        <li><a href="#" class="text-black hover:text-blue-500">Category 3</a></li>
                        <li><a href="#" class="text-black hover:text-blue-500">Category 4</a></li>
                    </ul>
                    <div class="p-4 border border-gray-200 rounded-md bg-gray-50">
                        <h3 class="mb-2 text-xl text-black font-semibold">Filter by Price</h3>
                        <input type="range" min="0" max="1000" step="10" class="w-full h-2 mb-2 bg-blue-500 rounded-lg cursor-pointer">
                        <div class="flex justify-between text-sm">
                            <span>$0</span>
                            <span>$1000</span>
                        </div>
                        <button class="px-20 py-2 mt-4 text-white bg-blue-500 rounded-full">Filter</button>
                    </div>
                    <div class="mt-5 p-4 border border-gray-200 rounded-md bg-gray-50">
                        <h3 class="mb-2 text-xl font-semibold text-black">Product Brands</h3>
                        <ul class="space-y-1">
                            <li><a href="#" class="text-black hover:underline">Brain</a></li>
                            <li><a href="#" class="text-black hover:underline">Facemask</a></li>
                            <li><a href="#" class="text-black hover:underline">Greenlab</a></li>
                            <li><a href="#" class="text-black hover:underline">Medical</a></li>
                            <li><a href="#" class="text-black hover:underline">Mymedi</a></li>
                            <li><a href="#" class="text-black hover:underline">Nursecare</a></li>
                            <li><a href="#" class="text-black hover:underline">Nursing</a></li>
                            <li><a href="#" class="text-black hover:underline">Pharmacy</a></li>
                        </ul>
                    </div>
                    <div class="p-4 mt-5 border border-gray-200 rounded-md bg-gray-50">
                        <h3 class="mb-2 text-xl font-semibold text-black">Filter by Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <button class="custom-tag-button text-black">New Arrivals</button>
                            <button class="custom-tag-button text-black">On Sale</button>
                            <button class="custom-tag-button text-black">Popular</button>
                            <button class="custom-tag-button text-black">Trending</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
