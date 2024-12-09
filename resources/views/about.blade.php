<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - About us</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <!-- Header Section -->
    <header class="bg-white shadow fixed w-full z-50">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        <!-- <img src="{{ asset('images/merrymeals.png') }}" class="w-20 h-20" alt="Meals on Wheels Logo" /> -->
                        <span class="ml-3 text-xl font-bold">Meals on Wheels</span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/about" class="text-gray-600 hover:text-gray-900">About Us</a>
                    <a href="/services" class="text-gray-600 hover:text-gray-900">Our Services</a>
                    <a href="/donate" class="text-gray-600 hover:text-gray-900">Donate</a>
                    @auth
                    <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Login</a>
                    <a href="{{ route('register') }}"
                        class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Join us</a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>
    <div class="bg-white">

        <!-- Hero Section -->
        <div class="relative overflow-hidden bg-red-600 py-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center justify-between mt-[80px]">
                    <div class=" ps-24 md:w-1/2 mb-10 md:mb-0">
                        <img src="/images/mission.jpg" alt="Our Mission"
                            class="w-96 h-96 rounded-full object-cover border-8 border-white shadow-2xl">
                    </div>
                    <div class="md:w-1/2">
                        <h1 class="text-4xl font-bold text-white mb-4">Our Mission</h1>
                        <p class="text-xl text-white/90">Providing nutritious meals and support to those in need,
                            creating a community where no one goes hungry.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image Carousel -->
        <div class="py-12 bg-gray-50 pt-24">
            <div class="container mx-auto px-4" x-data="{ currentSlide: 0 }">
                <div class="relative overflow-hidden rounded-xl h-[500px]">
                    <div class="flex transition-transform duration-500 h-full"
                        :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
                        <div class="min-w-full h-full">
                            <img src="/images/carousel1.jpg" alt="Community Service" class="w-full h-full object-cover">
                        </div>
                        <div class="min-w-full h-full">
                            <img src="/images/carousel2.jpg" alt="Food Preparation" class="w-full h-full object-cover">
                        </div>
                        <div class="min-w-full h-full">
                            <img src="/images/carousel3.jpg" alt="Meal Delivery" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <button @click="currentSlide = (currentSlide - 1 + 3) % 3"
                        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 p-2 rounded-full shadow-xl hover:bg-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button @click="currentSlide = (currentSlide + 1) % 3"
                        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 p-2 rounded-full shadow-xl hover:bg-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <!-- Carousel Indicators -->
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                        <template x-for="i in 3" :key="i">
                            <button @click="currentSlide = i - 1"
                                :class="{ 'bg-red-600': currentSlide === i - 1, 'bg-white': currentSlide !== i - 1 }"
                                class="w-3 h-3 rounded-full transition-colors duration-200">
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Story Section -->
        <div class="bg-gray-50 pt-32">
            <div class="container mx-auto px-8">
                <div class="flex flex-col md:flex-row gap-16 max-w-7xl mx-auto">
                    <!-- Left Side: Large Image -->
                    <div class="md:w-1/2">
                        <img src="{{ asset('images/story-main.jpg') }}" alt="Our Story"
                            class="w-full h-[600px] object-cover rounded-lg shadow-xl">
                    </div>

                    <!-- Right Side: Title and Blog Cards -->
                    <div class="md:w-1/2">
                        <h2 class="text-3xl font-bold mb-12">Our Story</h2>

                        <!-- Blog Card 1 -->
                        <div class="flex gap-6 mb-8 bg-white p-6 rounded-lg shadow-lg">
                            <img src="{{ asset('images/story1.jpg') }}" alt="How We Started"
                                class="w-32 h-32 object-cover rounded-lg">
                            <div>
                                <h3 class="text-xl font-semibold mb-2">How We Started</h3>
                                <p class="text-gray-600 leading-relaxed">Founded with a vision to combat hunger and
                                    isolation among vulnerable populations, we've grown from a small local initiative to
                                    a comprehensive food delivery service.</p>
                            </div>
                        </div>

                        <!-- Blog Card 2 -->
                        <div class="flex gap-6 bg-white p-6 rounded-lg shadow-lg">
                            <img src="{{ asset('images/story2.jpg') }}" alt="Our Growth"
                                class="w-32 h-32 object-cover rounded-lg">
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Our Growth</h3>
                                <p class="text-gray-600 leading-relaxed">Through dedication and community support, we've
                                    expanded our reach to serve thousands of individuals, making a meaningful impact in
                                    countless lives.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Impact Metrics Section -->
        <div class="bg-white py-32">
            <div class="container mx-auto px-8">
                <h2 class="text-3xl font-bold text-center mb-16">Our Impact So Far</h2>

                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <!-- Card 1 -->
                        <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                            <p class="text-gray-500 text-sm mb-2">Meals Delivered</p>
                            <p class="text-3xl text-red-600 font-bold">Over 500,000+ meals served</p>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                            <p class="text-gray-500 text-sm mb-2">Volunteers Engaged</p>
                            <p class="text-3xl text-red-600 font-bold">1,200+ active volunteers</p>
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <!-- Card 3 -->
                        <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                            <p class="text-gray-500 text-sm mb-2">Cities Reached</p>
                            <p class="text-3xl text-red-600 font-bold">50+ locations nationwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Voices of Gratitude Section -->
        <div class="bg-gray-50 ">
            <div class="container mx-auto px-8">
                <div class="flex flex-col md:flex-row items-start justify-between max-w-7xl mx-auto">
                    <!-- Left Side: Title and Description -->
                    <div class="md:w-1/3 mb-16 md:mb-0 md:sticky md:top-24">
                        <h2 class="text-3xl font-bold mb-8">Voices of Gratitude</h2>
                        <p class="text-gray-600 text-lg leading-relaxed max-w-sm">Hear from our community members about
                            how MerryMeal has made a difference in their lives.</p>
                    </div>

                    <!-- Right Side: Testimonial Cards -->
                    <div class="md:w-2/3 space-y-12 flex flex-col items-center">
                        <div
                            class="bg-white p-8 rounded-lg shadow-lg transform hover:-translate-y-1 transition duration-300 max-w-lg w-full">
                            <div class="flex items-center mb-6">
                                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="John D."
                                    class="w-14 h-14 rounded-full mr-4">
                                <div>
                                    <h4 class="font-semibold text-lg">John D.</h4>
                                    <p class="text-gray-500">Meal Recipient</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">"Thanks to MerryMeal, I don't have to worry about
                                my meals anymore. The volunteers are always so kind and caring."</p>
                        </div>

                        <div
                            class="bg-white p-8 rounded-lg shadow-lg transform hover:-translate-y-1 transition duration-300 max-w-lg w-full">
                            <div class="flex items-center mb-6">
                                <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Sarah M."
                                    class="w-14 h-14 rounded-full mr-4">
                                <div>
                                    <h4 class="font-semibold text-lg">Sarah M.</h4>
                                    <p class="text-gray-500">Family Member</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">"The peace of mind knowing my mother receives
                                nutritious meals daily is invaluable. MerryMeal has been a blessing."</p>
                        </div>

                        <div
                            class="bg-white p-8 rounded-lg shadow-lg transform hover:-translate-y-1 transition duration-300 max-w-lg w-full">
                            <div class="flex items-center mb-6">
                                <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Robert K."
                                    class="w-14 h-14 rounded-full mr-4">
                                <div>
                                    <h4 class="font-semibold text-lg">Robert K.</h4>
                                    <p class="text-gray-500">Meal Recipient</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">"The meals are delicious and the daily visits from
                                volunteers brighten my day. It's more than just food delivery."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Recent Stories Section -->
        <div class="py-24 bg-gray-50">
            <div class="container mx-auto px-4">
                <!-- Section Title -->
                <h2 class="text-3xl font-bold text-center mb-16">Recent Stories</h2>

                <!-- Stories Container -->
                <div class="flex flex-wrap justify-center gap-8">
                    <!-- Story Card 1 -->
                    <div class="flex flex-col w-full max-w-md bg-white rounded-lg shadow-lg">
                        <!-- Post Header -->
                        <div class="flex items-center p-4">
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Profile"
                                class="w-10 h-10 rounded-full">

                            <div class="ml-3">
                                <p class="font-bold">volunteer.cathy</p>
                                <p class="text-sm text-gray-500">Downtown Food Center</p>
                            </div>
                        </div>

                        <!-- Post Image -->
                        <img src="https://source.unsplash.com/random/800x800/?food" alt="Post"
                            class="w-full h-[400px] object-cover">

                        <!-- Post Actions -->
                        <div class="flex gap-4 p-4">
                            <!-- Like Button -->
                            <button class="hover:text-red-500">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>

                            <!-- Comment Button -->
                            <button class="hover:text-gray-700">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Post Content -->
                        <div class="px-4 pb-4">
                            <p class="font-bold">1,234 likes</p>
                            <p class="mt-2">
                                <span class="font-bold">volunteer.cathy</span>
                                Delivering meals and spreading joy! 🥘❤️
                            </p>
                            <p class="text-gray-500 text-sm mt-2">2 HOURS AGO</p>
                        </div>

                        <!-- Comment Input -->
                        <div class="flex items-center px-4 py-4 border-t">
                            <input type="text" placeholder="Add a comment..."
                                class="flex-1 border-none focus:ring-0">
                            <button class="text-blue-500 font-semibold">Post</button>
                        </div>
                    </div>

                    <!-- Story Card 2 -->
                    <div class="flex flex-col w-full max-w-md bg-white rounded-lg shadow-lg">
                        <!-- Post Header -->
                        <div class="flex items-center p-4">
                            <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Profile"
                                class="w-10 h-10 rounded-full">

                            <div class="ml-3">
                                <p class="font-bold">mary.recipient</p>
                                <p class="text-sm text-gray-500">Sunshine Valley</p>
                            </div>
                        </div>

                        <!-- Post Image -->
                        <img src="https://source.unsplash.com/random/800x800/?meal" alt="Post"
                            class="w-full h-[400px] object-cover">

                        <!-- Post Actions -->
                        <div class="flex gap-4 p-4">
                            <button class="hover:text-red-500">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                            <button class="hover:text-gray-700">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Post Content -->
                        <div class="px-4 pb-4">
                            <p class="font-bold">956 likes</p>
                            <p class="mt-2">
                                <span class="font-bold">mary.recipient</span>
                                Grateful for these delicious meals! 🙏
                            </p>
                            <p class="text-gray-500 text-sm mt-2">5 HOURS AGO</p>
                        </div>

                        <!-- Comment Input -->
                        <div class="flex items-center px-4 py-4 border-t">
                            <input type="text" placeholder="Add a comment..."
                                class="flex-1 border-none focus:ring-0">
                            <button class="text-blue-500 font-semibold">Post</button>
                        </div>
                    </div>

                    <div class="flex flex-col w-full max-w-md bg-white rounded-lg shadow-lg">
                        <!-- Post Header -->
                        <div class="flex items-center p-4">
                            <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Profile"
                                class="w-10 h-10 rounded-full">

                            <div class="ml-3">
                                <p class="font-bold">mary.recipient</p>
                                <p class="text-sm text-gray-500">Sunshine Valley</p>
                            </div>
                        </div>

                        <!-- Post Image -->
                        <img src="https://source.unsplash.com/random/800x800/?meal" alt="Post"
                            class="w-full h-[400px] object-cover">

                        <!-- Post Actions -->
                        <div class="flex gap-4 p-4">
                            <button class="hover:text-red-500">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                            <button class="hover:text-gray-700">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Post Content -->
                        <div class="px-4 pb-4">
                            <p class="font-bold">956 likes</p>
                            <p class="mt-2">
                                <span class="font-bold">mary.recipient</span>
                                Grateful for these delicious meals! 🙏
                            </p>
                            <p class="text-gray-500 text-sm mt-2">5 HOURS AGO</p>
                        </div>

                        <!-- Comment Input -->
                        <div class="flex items-center px-4 py-4 border-t">
                            <input type="text" placeholder="Add a comment..."
                                class="flex-1 border-none focus:ring-0">
                            <button class="text-blue-500 font-semibold">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-red-600 py-24">
            <div class="container mx-auto px-4">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold text-white mb-8">Join Our Cause</h2>
                    <p class="text-white mb-8">Make a difference today by becoming part of our volunteer community</p>
                    <form class="space-y-4">
                        <input type="text" placeholder="Your Name" class="w-full p-3 rounded-lg">
                        <input type="email" placeholder="Your Email" class="w-full p-3 rounded-lg">
                        <button
                            class="bg-white text-red-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition duration-300">
                            Join as a Volunteer
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">About Us</h3>
                    <p class="text-gray-300">Meals on Wheels delivers nutritious meals to those in need, bringing
                        communities together through compassionate service.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Volunteer</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Donate</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Partner With Us</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Contact Info</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>Phone: (555) 123-4567</li>
                        <li>Email: info@mealsonwheels.org</li>
                        <li>Address: 123 Care Street</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.897 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.897-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; {{ date('Y') }} Meals on Wheels. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>