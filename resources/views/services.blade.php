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
                        <img src="{{ asset('images/merrymeals.png') }}" class="w-20 h-20" alt="Meals on Wheels Logo" />
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
        <div class="relative bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[150px]">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                        Supporting Communities, One Meal at a Time
                    </h1>
                    <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                        Discover our comprehensive meal services tailored to meet diverse needs
                    </p>
                    <div class="mt-5">
                        <a href="{{ route('register') }}"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services at a Glance -->
        {{-- <div class="py-12 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold text-gray-900">Our Services at a Glance</h2>
                    </div>
                    <div class="mt-10 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- Service Cards -->
                        @foreach ([['title' => 'Hot Noon Meals', 'description' => 'Nutritious and freshly prepared meals for daily needs'], ['title' => 'Weekend Frozen Meals', 'description' => 'Frozen meals delivered for weekend convenience'], ['title' => 'Customized Meal Plans', 'description' => 'Personalized meals based on dietary requirements'], ['title' => 'Special Diet Options', 'description' => 'Meals for specific health conditions and preferences'], ['title' => 'Emergency Meals', 'description' => 'Immediate meal assistance for those in crisis'], ['title' => 'Bulk Meal Preparation', 'description' => 'Large-scale meal preparation for events']] as $service)
                        <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition duration-300">
                            <div class="text-center">
                                <h3 class="text-lg font-medium text-gray-900">{{ $service['title'] }}</h3>
        <p class="mt-2 text-gray-500">{{ $service['description'] }}</p>
    </div>
    </div>
    @endforeach
    </div>
    </div>
    </div> --}}

    <!-- Services at a Glance -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900">Our Services at a Glance</h2>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Hot Meals -->
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition duration-300">
                    <img src="{{ asset('images/hot-meals.jpg') }}" alt="Hot Meals"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <span class="text-sm text-gray-500">Hot Meals</span>
                    <p class="mt-2 text-lg font-semibold text-gray-900">Nutritious and freshly prepared meals
                        delivered daily to your doorstep</p>
                </div>

                <!-- Frozen Meals -->
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition duration-300">
                    <img src="{{ asset('images/frozen-meals.jpg') }}" alt="Frozen Meals"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <span class="text-sm text-gray-500">Frozen Meals</span>
                    <p class="mt-2 text-lg font-semibold text-gray-900">Convenient frozen meals perfect for weekend
                        meal planning</p>
                </div>

                <!-- Customized Meals -->
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition duration-300">
                    <img src="{{ asset('images/customized-meals.jpg') }}" alt="Customized Meals"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <span class="text-sm text-gray-500">Customized Meals</span>
                    <p class="mt-2 text-lg font-semibold text-gray-900">Personalized meal plans tailored to your
                        dietary needs</p>
                </div>
            </div>
        </div>
    </div>


    <!-- How It Works -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900">How It Works</h2>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([['step' => '1', 'title' => 'Register Online', 'description' => 'Sign up on our platform and provide your meal preferences'], ['step' => '2', 'title' => 'Get Evaluated', 'description' => 'Our team reviews your requirements to create a personalized plan'], ['step' => '3', 'title' => 'Meal Delivery', 'description' => 'Meals are delivered to your doorstep by our dedicated team'], ['step' => '4', 'title' => 'Continuous Support', 'description' => 'Reassessments are conducted to meet your evolving needs']] as $step)
                <div class="text-center">
                    <div
                        class="mx-auto h-12 w-12 rounded-full bg-red-600 flex items-center justify-center text-white text-xl font-bold">
                        {{ $step['step'] }}
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">{{ $step['title'] }}</h3>
                    <p class="mt-2 text-gray-500">{{ $step['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- What Our Members Say -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Side - Title and Description -->
                <div class="flex flex-col justify-center">
                    <h2 class="text-4xl font-bold text-gray-900">What Our Members Say</h2>
                    <p class="mt-4 text-lg text-gray-600">Our members' satisfaction is our priority. Here's what
                        they have to say about our services and commitment to quality meals.</p>
                </div>

                <!-- Right Side - Testimonials Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Top Row - 2 Testimonials -->
                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="h-12 w-12 rounded-full bg-red-100 flex items-center justify-center">
                                <span class="text-red-600 font-bold">JD</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-semibold text-gray-900">John Doe</h3>
                                <div class="flex text-yellow-400">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        @endfor
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"The meals are always fresh and delicious. The delivery
                            service is reliable."</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="h-12 w-12 rounded-full bg-red-100 flex items-center justify-center">
                                <span class="text-red-600 font-bold">MS</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-semibold text-gray-900">Mary Smith</h3>
                                <div class="flex text-yellow-400">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        @endfor
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"The customized meal plans have helped me maintain a healthy
                            diet."</p>
                    </div>

                    <!-- Bottom Row - 1 Testimonial (spans full width) -->
                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm sm:col-span-2">
                        <div class="flex items-center mb-4">
                            <div class="h-12 w-12 rounded-full bg-red-100 flex items-center justify-center">
                                <span class="text-red-600 font-bold">RJ</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-semibold text-gray-900">Robert Johnson</h3>
                                <div class="flex text-yellow-400">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        @endfor
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"Weekend frozen meals are a lifesaver. They're convenient
                            and just as tasty as the fresh meals."</p>
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


</body>

</html>