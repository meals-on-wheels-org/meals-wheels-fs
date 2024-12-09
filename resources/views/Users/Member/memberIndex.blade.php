<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member Home - Meals on Wheels</title>

    <!-- CSS -->
    <!-- <link href="{{ asset('css/memberHome.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Add Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased">
    @section('title')
    Welcome Member
    @endsection

    @extends('Users.Member.layouts.app')

    @section('content')
    <div class="relative min-h-screen">
        <!-- Hero Section -->
        <div class="relative h-screen">
            <img src="{{ asset('images/member_home_img.jpg') }}"
                class="absolute inset-0 w-full h-full object-cover filter brightness-75"
                alt="Member Home Background">

            <div class="absolute inset-0 bg-black bg-opacity-40"></div>

            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-8 animate-fade-in">
                    <span class="text-yellow-400">Nourish</span> Your
                    <span class="text-yellow-400">Day</span> with
                    <span class="text-yellow-400">Our Meals</span>
                </h1>

                <a href="{{ route('member#viewAllMenu') }}"
                    class="px-8 py-4 bg-yellow-500 text-white rounded-full text-xl font-semibold 
                              transition duration-300 ease-in-out hover:bg-yellow-600 
                              transform hover:-translate-y-1 hover:scale-105 shadow-lg">
                    View Menu
                </a>
            </div>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }
    </style>
    @endsection
</body>

</html>