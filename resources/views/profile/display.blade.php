<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlinkedIn</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center  min-h-screen bg-gradient-to-br from-green-300 to-purple-400 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <a href="{{ route('dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                    
                <div class="w-3/4 mx-auto p-6">
                    <div class="flex items-end">
                        <div class="text-4xl pl-2">
                            BlinkedIn
                        </div>
                    </div>
                    <div class="mt-16">
                        <div class="h-16 w-16 p-3 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Profile
                        </div>
                        <div class="grid grid-cols-1 gap-6">                         
                            <div class="scale-100 p-3 bg-teal-400 rounded-lg shadow-2xl flex items-center">
                                <div class="pl-6">
                                    <h2 class="mt-6 text-xl font-semibold text-gray-900">{{ $wizard->name }}</h2>
                                    <h4 class="font-semibold text-gray-700">{{ $wizard->email }}</h4>  
                                    @if ($wizard->isPrivate && Auth::user()?->id !== $wizard->id) 
                                        <p class="mt-4 text-sm leading-relaxed text-purple-700 font-semibold">
                                            This profile is private
                                        </p>
                                    @else 
                                        <p class="mt-4 text-sm leading-relaxed">
                                            {{ 
                                                $wizard->secret
                                            }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
