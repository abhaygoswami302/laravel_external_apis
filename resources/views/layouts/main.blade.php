<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        input[type="text"]::placeholder {
            color: white;
            opacity: 1;
          }
          input[type="text"]:-ms-input-placeholder {
           color: white;
          }
          input[type="text"]::-ms-input-placeholder {
           color: white;
          }
    </style>
    @livewireStyles

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans bg-gray-800 text-white">
    <nav class="border-b border-gray-500">
        <div class="container mx-auto flex flex-col md:flex-row lg:flex-row px-4 item-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row lg:flex-row item-center">
                <li class="mt-2">
                    <a href="{{ route('movies.index') }}"><i class="fa fa-film" aria-hidden="true"></i>
                        Movies App
                    </a>
                </li>
                <li class="md:ml-16 lg:ml-16 mt-3 md:mt-2">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">
                        Movies
                    </a>
                </li>
                <li class="md:ml-6 lg:ml-6 mt-3 md:mt-2">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">
                        TV Shows
                    </a>
                </li>
                <li class="md:ml-6 lg:ml-6 mt-3 md:mt-2">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">
                        Actors
                    </a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown />
                <div class="md:ml-4 mt-3 md:mt-2">
                    <a href="">
                        <img src="/img/avatar.jpg" alt="" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

    @livewireScripts

    @yield('scripts')
</body>
</html>