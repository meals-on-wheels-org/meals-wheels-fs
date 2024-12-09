<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Donate/Fundraising</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="font-sans antialiased">
    <!-- Header Section -->
    <header class="bg-white shadow fixed w-full z-50 ">
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
        <div class="relative min-h-[80vh] flex items-center bg-white">

            <!-- Content Container -->
            <div class="container mx-auto px-8 relative z-10 mt-[150px]">
                <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-16">
                    <!-- Left Column: Text Content -->
                    <div class="md:w-1/2 ps-[100px]">
                        <h1 class="text-5xl font-bold leading-tight mb-6 text-red-600">
                            Your Support Can Help
                            <span class="block">Feed Thousands!</span>
                        </h1>

                        <p class="text-xl leading-relaxed mb-8 text-red-600/90">
                            Every donation helps us deliver hot, nutritious meals to those in need. Join us in making a
                            difference in our community.
                        </p>

                        <div class="flex gap-6">
                            <a href="#donate-form"
                                class="bg-red-600 text-white px-8 py-4 rounded-lg font-bold hover:bg-red-700 transition duration-300 inline-flex items-center">
                                Donate Now
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>

                            <a href="#learn-more"
                                class="border-2 border-red-600 text-red-600 px-8 py-4 rounded-lg font-bold hover:bg-red-50 transition duration-300">
                                Learn More
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: Circular Image -->
                    <div class="md:w-1/2 flex justify-center">
                        <div class="relative">
                            <!-- Main Circle -->
                            <div
                                class="w-[400px] h-[400px] rounded-full overflow-hidden border-8 border-red-600 shadow-2xl">
                                <img src="{{ asset('images/hero-volunteer.jpg') }}" alt="Volunteer helping"
                                    class="w-full h-full object-cover">
                            </div>

                            <!-- Decorative Elements -->
                            <div class="absolute -bottom-6 -right-6 bg-red-600 rounded-full p-6 shadow-lg">
                                <span class="text-white font-bold text-xl">1000+</span>
                                <span class="block text-sm text-white/90">Lives Impacted</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Current Goal Section -->
        <div class="pt-32 bg-gray-50">
            <div class="container mx-auto px-8">
                <h2 class="text-3xl font-bold text-center mb-16">Our Current Goal</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">$8,000</div>
                        <div class="text-gray-600">raised of $10,000 goal</div>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">250</div>
                        <div class="text-gray-600">donors</div>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">16,000</div>
                        <div class="text-gray-600">meals delivered</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Donation Form Section -->
        <div id="donate-form" class="py-32">
            <div class="container mx-auto px-8">
                <div class="max-w-2xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-4">Make a Donation</h2>
                    <p class="text-center text-gray-600 mb-12">Your contribution can make a real difference. Your $3
                        will feed a meal to someone in need.</p>

                    {{-- <form class="bg-white p-8 rounded-lg shadow-lg">
                        <div class="mb-8">
                            <label class="block text-gray-700 font-semibold mb-2">Select Amount</label>
                            <div class="grid grid-cols-3 gap-4">
                                <button type="button"
                                    class="p-4 border-2 border-red-600 rounded-lg text-red-600 hover:bg-red-600 hover:text-white">$10</button>
                                <button type="button"
                                    class="p-4 border-2 border-red-600 rounded-lg text-red-600 hover:bg-red-600 hover:text-white">$25</button>
                                <button type="button"
                                    class="p-4 border-2 border-red-600 rounded-lg text-red-600 hover:bg-red-600 hover:text-white">$50</button>
                            </div>
                        </div>
 
                        <div class="mb-8">
                            <label class="block text-gray-700 font-semibold mb-2">Donation Frequency</label>
                            <div class="flex gap-4">
                                <label class="flex items-center">
                                    <input type="radio" name="frequency" class="mr-2">
                                    One-time
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="frequency" class="mr-2">
                                    Monthly
                                </label>
                            </div>
                        </div>
 
                        <button
                            class="w-full bg-red-600 text-white py-4 rounded-lg font-bold hover:bg-red-700 transition duration-300">
                            Donate Now
                        </button>
                    </form> --}}

                    <form class="bg-white p-8 rounded-lg shadow-lg">
                        <div class="mb-8">
                            <label class="block text-gray-700 font-semibold mb-2">Enter Donation Amount</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">$</span>
                                <input type="number" min="1" step="0.01" placeholder="0.00"
                                    class="w-full pl-10 pr-4 py-4 border-2 border-red-600 rounded-lg focus:ring-red-600 focus:border-red-600">
                            </div>
                        </div>

                        <div class="mb-8">
                            <label class="block text-gray-700 font-semibold mb-2">Donation Frequency</label>
                            <div class="flex gap-4">
                                <label class="flex items-center">
                                    <input type="radio" name="frequency" class="mr-2">
                                    One-time
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="frequency" class="mr-2">
                                    Monthly
                                </label>
                            </div>
                        </div>

                        <button
                            class="w-full bg-red-600 text-white py-4 rounded-lg font-bold hover:bg-red-700 transition duration-300">
                            Donate Now
                        </button>
                    </form>

                </div>
            </div>
        </div>

        <!-- Where Your Donations Go Section -->
        <div class="pb-20 bg-gray-50">
            <div class="container mx-auto px-8">
                <h2 class="text-3xl font-bold text-center mb-16">Where Your Donations Go</h2>

                <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center gap-12">
                    <!-- Pie Chart -->
                    <div class="md:w-1/2">
                        <canvas id="donationChart" width="400" height="400"></canvas>
                    </div>

                    <!-- Legend and Explanation -->
                    <div class="md:w-1/2 space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-blue-500"></div>
                            <div>
                                <h3 class="font-semibold">Food Supplies (50%)</h3>
                                <p class="text-gray-600">Direct funding for meal ingredients and packaging</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-green-500"></div>
                            <div>
                                <h3 class="font-semibold">Operations (30%)</h3>
                                <p class="text-gray-600">Volunteer training, delivery, and kitchen operations</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-yellow-500"></div>
                            <div>
                                <h3 class="font-semibold">Outreach (20%)</h3>
                                <p class="text-gray-600">Community engagement and awareness programs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="py-20 bg-white">
            <div class="container mx-auto px-8">
                <h2 class="text-3xl font-bold text-center mb-16">What Our Donors Say</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Testimonial Card 1 -->
                    <div class="bg-gray-50 rounded-lg p-8 shadow-lg">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Emily R."
                                class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <h3 class="font-semibold">Emily R.</h3>
                                <div class="flex text-yellow-400">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600">"It feels great to know my small donation makes such a big difference.
                            The transparency in how funds are used is impressive!"</p>
                    </div>

                    <!-- Testimonial Card 2 -->
                    <div class="bg-gray-50 rounded-lg p-8 shadow-lg">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="John D."
                                class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <h3 class="font-semibold">John D.</h3>
                                <div class="flex text-yellow-400">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600">"Monthly donations have become a meaningful part of my giving. The
                            impact reports show exactly how my contributions help."</p>
                    </div>

                    <!-- Testimonial Card 3 -->
                    <div class="bg-gray-50 rounded-lg p-8 shadow-lg">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Sarah M."
                                class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <h3 class="font-semibold">Sarah M.</h3>
                                <div class="flex text-yellow-400">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600">"The regular updates about how donations are used make me confident in
                            supporting this cause. Every contribution counts!"</p>
                    </div>
                </div>
            </div>
        </div>



        <!-- Impact Section -->
        <div class="py-20 bg-gray-50">
            <div class="container mx-auto px-8">
                <h2 class="text-3xl font-bold text-center mb-16">See the Impact You've Made</h2>
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <!-- Card 1 -->
                        <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                            <p class="text-gray-500 text-sm mb-2">Meals Delivered</p>
                            <p class="text-3xl text-red-600 font-bold">Over 500,000+ meals delivered</p>
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
                            <p class="text-gray-500 text-sm mb-2">Members Served</p>
                            <p class="text-3xl text-red-600 font-bold">5,000 members served</p>
                        </div>
                    </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('donationChart').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Food Supplies', 'Operations', 'Outreach'],
                    datasets: [{
                        data: [50, 30, 20],
                        backgroundColor: [
                            'rgba(59, 130, 246, 0.8)', // blue
                            'rgba(34, 197, 94, 0.8)', // green
                            'rgba(234, 179, 8, 0.8)' // yellow
                        ],
                        borderColor: [
                            'rgba(59, 130, 246, 1)',
                            'rgba(34, 197, 94, 1)',
                            'rgba(234, 179, 8, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const value = context.raw;
                                    const label = context.label;
                                    return `${label}: ${value}%`;
                                }
                            }
                        }
                    },
                    cutout: '60%',
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });
        });
    </script>

</body>

</html>