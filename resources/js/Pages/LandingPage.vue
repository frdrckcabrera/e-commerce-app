<script setup>
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const siteDeals = ref([
    { "amount": "$5", "description": "ON ORDERS ABOVE $50" },
    { "amount": "$15", "description": "ON ORDERS ABOVE $75" },
    { "amount": "$20", "description": "ON ORDERS ABOVE $150" },
    { "amount": "$30", "description": "ON ORDERS ABOVE $200" }
]);

const trendings = ref([
    [
        {"title": "WINTER FASHION", "image": "/images/trendings/1.svg"},
        {"title": "BOOTS", "image": "/images/trendings/2.svg"},
        {"title": "NIGHT OUT", "image": "/images/trendings/3.svg"},
        {"title": "HOLIDAYS", "image": "/images/trendings/4.svg"}
    ],
    [
        {"title": "OUTERWEAR", "image": "/images/trendings/5.svg"},
        {"title": "WHITE DRESSES", "image": "/images/trendings/6.svg"},
        {"title": "SWEATERS", "image": "/images/trendings/7.svg"},
        {"title": "PARTY", "image": "/images/trendings/8.svg"}
    ]
]);

const hashtags = ref([
    "#Thanksgiving",
    "#NewYears",
    "#Knitted",
    "#Pajamas",
    "#WFH",
    "#Party"
]);

const recentlyBoughts = ref([
    {"title": "Festive Looks Red Ribbed Velvet Long Sleeve Bodysuit", "image": "/images/recently-bought/1.svg", "amount": "$38", "discounted": ""},
    {"title": "Chevron Flap Crossbody Bag", "image": "/images/recently-bought/2.svg", "amount": "$5.77", "discounted": "$7.34"},
    {"title": "Manila Tan Multi Plaid Oversized Fringe Scarf", "image": "/images/recently-bought/3.svg", "amount": "$29", "discounted": "$39"},
    {"title": "Diamante Puff Sleeve Dress-Black", "image": "/images/recently-bought/4.svg", "amount": "$45.99", "discounted": ""},
    {"title": "Banneth Open Front Formal Dress In Black", "image": "/images/recently-bought/5.svg", "amount": "$69", "discounted": "$99.95"}
]);

const inspos = ref([
    {"image": "/images/inspo/1.svg"},
    {"image": "/images/inspo/2.svg"},
    {"image": "/images/inspo/3.svg"},
    {"image": "/images/inspo/4.svg"},
    {"image": "/images/inspo/5.svg"}
]);

const cart = ref([]);

const showModal = ref(false);

const showCart = () => {
    showModal.value = true;
};

const closeCart = () => {
    showModal.value = false;
};

const addToCart = (selected) => {
    cart.value.push(selected);
};

const removeFromCart = (title) => {
    cart.value = cart.value.filter(item => item.title !== title);
};

</script>

<template>
    <Head title="Welcome" />
    <div class="max-w-screen-xl mx-auto p-4 modified-font">
        <!-- Modal Overlay -->
        <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center backdrop-blur-lg" v-if="showModal">
            <!-- Modal Container -->
            <div class="bg-white p-8 w-96">
                <!-- Modal Header -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold">Your Cart</h2>
                    <button class="text-gray-500 hover:text-gray-700 focus:outline-none" @click="closeCart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M.293 1.293a1 1 0 011.414 0L8 6.586l6.293-6.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.293z"/>
                        </svg>
                    </button>
                </div>
                <!-- Modal Content -->
                <p v-if="cart.length == 0">
                    No Item in your Cart Yet!
                </p>
                <p v-else v-for="(item) in cart" class="text-gray-700 justify-center items-center">
                    <img :src="item.image" class="mb-4 mt-4 h-10">
                    <div class="mb-4">{{ item.title }}</div>
                    <a href="#" class="mb-4" @click="removeFromCart(item.title)">Remove</a>
                </p>
                <!-- Modal Footer -->
                <div class="mt-4 flex justify-center">
                    <button class="bg-black text-white px-4 py-2 focus:outline-none focus:ring focus:ring-gray-400" @click="closeCart">
                        BEGIN CHECKOUT
                    </button>
                </div>
            </div>
        </div>
        <!-- First Navigation Bar (Top) -->
        <nav class="bg-white text-gray-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Navigation Links -->
                <div class="inline-block mr-4">
                    <ul class="flex space-x-6">
                        <li><a href="#" class="nav-link">WOMEN</a></li>
                        <li><a href="#" class="nav-link">PLUS</a></li>
                        <li><a href="#" class="nav-link">MEN</a></li>
                        <li><a href="#" class="nav-link">ACCESSORIES</a></li>
                    </ul>
                </div>
                <div class="inline-block mr-4">
                    <img src="/images/logo.svg">
                </div>
                <div class="inline-block mr-4">
                    <ul class="flex space-x-6">
                        <li class="flex justify-center item-center">
                            <img src="/images/right-panel/bx_bx-user.svg" class="mr-2">
                        </li>
                        <li class="flex justify-center item-center" @click="showCart">
                            {{ cart.length }}
                            <img src="/images/right-panel/bx_bx-shopping-bag.svg" class="mr-2">
                        </li>
                        <li class="flex justify-center item-center">
                            <img src="/images/right-panel/bx_bx-heart.svg" class="mr-2">
                        </li>
                        <li class="flex justify-center item-center">
                            <img src="/images/right-panel/bx_bx-support.svg" class="mr-2">
                        </li>
                        <li class="flex justify-center item-center">
                            <img src="/images/right-panel/bx_bx-search.svg" class="mr-2">
                        </li>
                        <li>
                            <div class="relative inline-block text-left">
                                <div class="flex item-center">
                                    <button type="button" class="flex items-center bg-white rounded-full border border-gray-200 hover:bg-gray-100 px-4 py-2 focus:outline-none focus:border-gray-300">
                                        <img src="/images/right-panel/us-flag.svg" class="mr-2">    
                                        <span class="mr-2"> $ USD </span>
                                        <img src="/images/right-panel/ant-design_down-outlined.svg" class="mr-2">
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
                        <img src="/images/crown.svg" class="mr-2">
                        <a href="#" class="nav-link">Exclusive Deals for VIP 2 and up</a>
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/star.svg" class="mr-2">
                        <a href="#" class="nav-link">Weekly New Arrivals</a>
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/truck.svg" class="mr-2">
                        <a href="#" class="nav-link">Free Shipping On Orders Over $100</a>
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/pin.svg" class="mr-2">
                        <a href="#" class="nav-link">Track Your Order</a>
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/tag.svg" class="mr-2">
                        <a href="#" class="nav-link">10% Off On Your First Order!</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content -->
        <div>
            <img class="max-w-full" src="/images/contents/hero.svg">
        </div>
        <div class="container mx-auto flex justify-between items-center">
            <div v-for="(deal) in siteDeals" class="inline-block mr-2">
                <div class="max-w-md mx-auto bg-white overflow-hidden">
                    <div class="px-2 py-6">
                        <h3 class="text-2xl font-semibold text-gray-800">
                            {{ deal.amount }} <small>OFF</small>
                        </h3>
                        <p class="text-gray-600 mt-2 text-sm">{{ deal.description }}</p>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-4">
                <button class="bg-black text-white px-4 py-2 hover:bg-gray-800 focus:outline-none focus:ring focus:ring-gray-400">
                    CHECK OUT ALL SITE-WIDE DEALS
                </button>
            </div>
        </div>
        <div class="w-1440 h-20 bg-cover bg-center" style="background-image: url('/images/contents/bg.svg');">
            <div class="container mx-auto flex justify-center items-center py-6">
                <div class="inline-block mr-6 text-white px-4">
                    <h3 class="text-2xl font-semibold">
                        BLACK FRIDAY EXCLUSIVE
                    </h3>
                </div>
                <div class="inline-block mr-4 text-white px-4">
                    FREE SHIPPING ON ALL ORDERS FOR VIP 2 AND UP!
                </div>
                <div class="inline-block mr-2">
                    <button class="bg-white text-black px-4 py-2 hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-200">
                        SHOP NOW
                    </button>
                </div>
            </div>
        </div>
        <div class="container mx-auto flex justify-center items-center mr-12 py-8">
            <h1 class="text-2xl font-semibold text-gray-800">Now Trending</h1><br/>
        </div>
        <p class="text-gray-600 mt-2 mb-4 text-sm flex justify-center">See what everyone's wearing right now</p>
        <div v-for="(rows) in trendings" class="container mx-auto flex justify-center items-center">
            <div v-for="(trend) in rows" class="inline-block mr-3">
                <div class="max-w-md mx-auto bg-white overflow-hidden">
                    <div class="px-2 py-6">
                        <img :src="trend.image">
                        <h3 class="font-semibold text-gray-800">
                            {{ trend.title }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto flex justify-center items-center mr-12 py-8">
            <button v-for="(hashtag) in hashtags" class="mr-3 bg-white text-black border border-black rounded-full px-4 py-2 hover:bg-black hover:text-white focus:outline-none focus:ring focus:ring-black">
                {{ hashtag }}
            </button>
        </div>
        <div>
            <img class="max-w-full" src="/images/contents/new-in.svg">
        </div>
        <div class="container mx-auto flex justify-center items-center mr-12 py-8">
            <h1 class="text-2xl font-semibold text-gray-800">Recently Brought</h1><br/>
        </div>
        <div class="container mx-auto flex justify-between items-center">
            <div v-for="(bought) in recentlyBoughts" class="inline-block mr-2">
                <div class="max-w-md mx-auto bg-white overflow-hidden">
                    <img :src="bought.image" class="w-225 h-300 mb-2">
                </div>
                <p class="text-gray-600 mb-2 text-sm max-w-[225px] h-10">{{ bought.title }}</p>
                <p class="text-gray-600 mb-2 text-sm font-semibold mr-4">{{ bought.amount }} <span class="line-through text-red-600">{{ bought.discounted }}</span></p>
                <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800 focus:outline-none focus:ring focus:ring-gray-400 text-sm"
                    @click="addToCart(bought)"
                >Buy</button>
            </div>
        </div>
        <div class="container mx-auto flex justify-center items-center mr-12 py-8">
            <h1 class="text-2xl font-semibold text-gray-800">Your Next Inspo</h1><br/>
        </div>
        <p class="text-gray-600 mt-2 mb-4 text-sm flex justify-center">Check who's wearing what by using #THREADInspo on Instagram</p>
        <div class="container mx-auto flex justify-center items-center">
            <div v-for="(inspo) in inspos" class="inline-block mr-3">
                <div class="max-w-md mx-auto bg-white overflow-hidden">
                    <div class="px-2 py-6">
                        <img :src="inspo.image">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-black w-1440 h-20">
            <div class="container mx-auto flex justify-center items-center py-6">
                <div class="inline-block mr-6 text-white px-4">
                    <h3 class="text-2xl font-semibold">
                        SIGN UP FOR EXCLUSIVE DEALS AND UPDATES
                    </h3>
                </div>
                <div class="inline-block mr-6 px-4">
                    <input type="text" class="border border-gray-300 p-2" placeholder="Your Email Address">
                </div>
            </div>
        </div>
        <footer class="bg-white text-black py-4">
            <div class="container mx-auto flex flex-wrap justify-center">
                <div class="w-full md:w-1/2 md:w-1/4 p-4">
                <h3 class="text-xl font-semibold">COMPANY INFO</h3>
                <ul class="mt-2">
                    <li><a href="#">About THREADED</a></li>
                    <li><a href="#">Affiliate</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
                </div>
                <div class="w-full md:w-1/2 md:w-1/4 p-4">
                <h3 class="text-xl font-semibold">HELP AND SUPPORT</h3>
                <ul class="mt-2">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">How To Order</a></li>
                    <li><a href="#">How To Track</a></li>
                </ul>
                </div>
                <div class="w-full md:w-1/2 md:w-1/4 p-4">
                <h3 class="text-xl font-semibold">CUSTOMER CARE</h3>
                <ul class="mt-2">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Payment Methods</a></li>
                </ul>
                </div>
                <div class="w-full md:w-1/2 md:w-1/4 p-4">
                <h3 class="text-xl font-semibold">FOLLOW US</h3>
                <ul class="flex space-x-6 mt-2">
                    <li class="flex justify-center item-center">
                        <img src="/images/socials/bx_bxl-facebook.svg" class="mr-2">
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/socials/bx_bxl-instagram.svg" class="mr-2">
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/socials/bx_bxl-pinterest-alt.svg" class="mr-2">
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/socials/bx_bxl-tiktok.svg" class="mr-2">
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/socials/bx_bxl-twitter.svg" class="mr-2">
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/socials/bx_bxl-youtube.svg" class="mr-2">
                    </li>
                </ul>
                <h3 class="text-xl font-semibold">WE ACCEPT</h3>
                <ul class="flex space-x-6 mt-2">
                    <li class="flex justify-center item-center">
                        <img src="/images/payment/image 1.svg" class="mr-2">
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/payment/image 2.svg" class="mr-2">
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/payment/image 3.svg" class="mr-2">
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/payment/image 4.svg" class="mr-2">
                    </li>
                    <li class="flex justify-center item-center">
                        <img src="/images/payment/image 5.svg" class="mr-2">
                    </li>
                </ul>
                </div>
            </div>
        </footer>
    </div>
</template>

<style>
    .modified-font {
        font-family: 'Montserrat', sans-serif;
    }
</style>