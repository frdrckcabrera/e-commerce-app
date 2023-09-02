<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T H R E A D E D</title>
    <!-- Include the Tailwind CSS CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include the Montserrat font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Apply Montserrat font to the navigation links */
        .nav-link {
            font-family: 'Montserrat', sans-serif;
        }

        ul li.active:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="max-w-screen-xl mx-auto p-4">
        <!-- First Navigation Bar (Top) -->
        <nav class="bg-white text-gray-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Navigation Links -->
                <div class="inline-block mr-4">
                    <ul class="flex space-x-6">
                        <li class="active"><a href="#" class="nav-link">WOMEN</a></li>
                        <li><a href="#" class="nav-link">PLUS</a></li>
                        <li><a href="#" class="nav-link">MEN</a></li>
                        <li><a href="#" class="nav-link">ACCESSORIES</a></li>
                    </ul>
                </div>
                <div class="inline-block mr-4">
                    <img src="{{ asset('/images/logo.svg') }}">
                </div>
                <div class="inline-block mr-4">
                    <ul class="flex space-x-6">
                        <li class="flex justify-center item-center">
                            <img src="{{ asset('/images/right-panel/bx_bx-user.svg') }}" class="mr-2">
                        </li>
                        <li class="flex justify-center item-center">
                            <img src="{{ asset('/images/right-panel/bx_bx-shopping-bag.svg') }}" class="mr-2">
                        </li>
                        <li class="flex justify-center item-center">
                            <img src="{{ asset('/images/right-panel/bx_bx-heart.svg') }}" class="mr-2">
                        </li>
                        <li class="flex justify-center item-center">
                            <img src="{{ asset('/images/right-panel/bx_bx-support.svg') }}" class="mr-2">
                        </li>
                        <li class="flex justify-center item-center">
                            <img src="{{ asset('/images/right-panel/bx_bx-search.svg') }}" class="mr-2">
                        </li>
                        <li>
                            <div class="relative inline-block text-left">
                                <div class="flex item-center">
                                    <button type="button" class="flex items-center bg-white rounded-full border border-gray-200 hover:bg-gray-100 px-4 py-2 focus:outline-none focus:border-gray-300">
                                        <img src="{{ asset('/images/right-panel/us-flag.svg') }}" class="mr-2">    
                                        <span class="mr-2"> $ USD </span>
                                        <img src="{{ asset('/images/right-panel/ant-design_down-outlined.svg') }}" class="mr-2">
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Second Navigation Bar (Bottom) -->
        <nav class="bg-gray-200 h-16">
            <div class="container mx-auto flex justify-center items-center h-full">
                <!-- Second Navigation Links -->
                <ul class="flex space-x-6 text-sm">
                    <li class="flex justify-center item-center">
                        <img src="{{ asset('/images/crown.svg') }}" class="mr-2">
                        <a href="#" class="nav-link">Exclusive Deals for VIP 2 and up</a>
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="{{ asset('/images/star.svg') }}" class="mr-2">
                        <a href="#" class="nav-link">Weekly New Arrivals</a>
                    </li class="flex justify-center item-center">
                    <li class="flex justify-center item-center">
                        <img src="{{ asset('/images/truck.svg') }}" class="mr-2">
                        <a href="#" class="nav-link">Free Shipping On Orders Over $100</a>
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="{{ asset('/images/pin.svg') }}" class="mr-2">
                        <a href="#" class="nav-link">Track Your Order</a>
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="{{ asset('/images/tag.svg') }}" class="mr-2">
                        <a href="#" class="nav-link">10% Off On Your First Order!</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content -->
        <div>
            <img class="max-w-full" src="{{ asset('/images/contents/hero.svg') }}">
        </div>
    </div>
</body>
</html>
