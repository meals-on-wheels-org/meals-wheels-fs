<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Nourishing Communities</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <!-- Header Section -->
    <header class="bg-white shadow fixed w-full z-50">
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
                    <a href="{{ route('register') }}" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Join us</a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section min-h-screen flex items-center justify-center text-white">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Nourishing Communities, One Meal at a Time</h1>
            <p class="text-xl mb-8">Join us in making a difference in your community through meal delivery and volunteering</p>
            <div class="flex justify-center gap-4">
                <a href="#about" class="bg-white text-gray-900 px-8 py-3 rounded-md hover:bg-gray-100">Learn More</a>
                <a href="{{ route('register') }}" class="bg-red-600 text-white px-8 py-3 rounded-md hover:bg-red-700">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Mission Statement -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4">Our Mission</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto">
                Empowering communities through nourishment, connection, and care - one meal at a time.
            </p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 hover:bg-gray-50 rounded-lg transition duration-300">
                    <div class="bg-red-100 rounded-full p-6 w-24 h-24 mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Community Support</h3>
                    <p class="text-gray-600">Delivering nutritious meals to seniors and individuals in need while fostering meaningful connections within our community.</p>
                </div>

                <div class="text-center p-6 hover:bg-gray-50 rounded-lg transition duration-300">
                    <div class="bg-red-100 rounded-full p-6 w-24 h-24 mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Volunteer Engagement</h3>
                    <p class="text-gray-600">Creating opportunities for compassionate individuals to make a direct impact in their local community through dedicated service.</p>
                </div>

                <div class="text-center p-6 hover:bg-gray-50 rounded-lg transition duration-300">
                    <div class="bg-red-100 rounded-full p-6 w-24 h-24 mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Sustainable Impact</h3>
                    <p class="text-gray-600">Building lasting partnerships and implementing efficient systems to ensure continuous support for those who need it most.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Impact Metrics -->
    <section id="impact" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Our Impact</h2>
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-red-600 mb-2">10,000+</div>
                    <div class="text-gray-600">Meals Delivered</div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-red-600 mb-2">500+</div>
                    <div class="text-gray-600">Active Volunteers</div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-red-600 mb-2">1,000+</div>
                    <div class="text-gray-600">Members Served</div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-red-600 mb-2">25+</div>
                    <div class="text-gray-600">Community Partners</div>
                </div>
            </div>

            <div class="mt-12 grid md:grid-cols-3 gap-8 text-center">
                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-red-600 mb-2">98%</div>
                    <div class="text-gray-600">Member Satisfaction</div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-red-600 mb-2">15,000+</div>
                    <div class="text-gray-600">Volunteer Hours</div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-red-600 mb-2">$100K+</div>
                    <div class="text-gray-600">Donations Received</div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">What Our Community Says</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex text-yellow-400 mb-3">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </div>
                    <p class="text-gray-600 mb-4">"The meals are not just nutritious but delicious too! The volunteers are always so kind and caring."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/17.jpg" alt="Sarah M." class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Sarah M.</h4>
                            <p class="text-gray-500 text-sm">Member</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex text-yellow-400 mb-3">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </div>
                    <p class="text-gray-600 mb-4">"Volunteering here has been incredibly rewarding. The impact we make in people's lives is truly meaningful."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John D." class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">John D.</h4>
                            <p class="text-gray-500 text-sm">Volunteer</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex text-yellow-400 mb-3">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </div>
                    <p class="text-gray-600 mb-4">"As a partner organization, we've seen firsthand the positive change this program brings to our community."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily R." class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Emily R.</h4>
                            <p class="text-gray-500 text-sm">Partner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">About Us</h3>
                    <p class="text-gray-300">Meals on Wheels delivers nutritious meals to those in need, bringing communities together through compassionate service.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Volunteer</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Donate</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Partner With Us</a></li>
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
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.897 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.897-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
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