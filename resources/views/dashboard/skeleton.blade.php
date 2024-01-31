<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="flex font-nunito">
    {{-- left content --}}
    <div class="flex flex-col sticky left-0 top-0 h-screen w-300 border-r border-gray-200">
        {{-- logo --}}
        <div class="h-16 flex justify-start items-center pl-5 border-b">
            <img class="h-8" src="/images/logo.png" alt="">
        </div>
        {{-- menu --}}
        <div class=" border-gray-200">
            <ul class="block h-full pt-4">
                <li class="text-gray-500 font-bold text-md pt-3 pb-3 pl-6 pr-6 ease-out group duration-300 hover:text-purple-500 {{Route::is('dashboard')?'text-purple-500':''}}">
                    <a href="{{route('dashboard')}}">
                        <i class="fa-solid fa-chart-pie text-gray-500 text-lg w-8 group-hover:text-purple-500 ease-out duration-300"></i>
                        Dashboard
                    </a>
                </li>

                <li class="text-gray-500 font-bold text-md pt-3 pb-3 pl-6 pr-6 ease-out group duration-300 hover:text-purple-500">
                    <a href="{{route('properties')}}">
                        <i class="fa-solid fa-building-user text-gray-500 w-8 text-lg group-hover:text-purple-500 ease-out duration-300"></i>
                        Properties
                    </a>
                </li>

                <li class="text-gray-500 font-bold text-md pt-3 pb-3 pl-6 pr-6 ease-out group duration-300 hover:text-purple-500">
                    <a href="{{route('tenants')}}">
                        <i class="fa-solid fa-user-tag text-gray-500 w-8 text-lg group-hover:text-purple-500 ease-out duration-300"></i>
                        Tenants
                    </a>
                </li>

                <li class="text-gray-500 font-bold text-md pt-3 pb-3 pl-6 pr-6 ease-out group duration-300 hover:text-purple-500">
                    <a href="{{route('rent')}}">
                        <i class="fa-solid fa-indian-rupee-sign text-gray-500 w-8 text-lg group-hover:text-purple-500 ease-out duration-300"></i>
                        Rent
                    </a>
                </li>

                <li class="text-gray-500 font-bold text-md pt-3 pb-3 pl-6 pr-6 ease-out group duration-300 hover:text-purple-500">
                    <a href="{{route('expenses')}}">
                        <i class="fa-solid fa-coins text-gray-500 w-8 text-lg group-hover:text-purple-500 ease-out duration-300" ></i>
                        Expenses
                    </a>
                </li>

                <li class="text-gray-500 font-bold text-md pt-3 pb-3 pl-6 pr-6 ease-out group duration-300 hover:text-purple-500">
                    <a href="{{route('settings')}}">
                        <i class="fa-solid fa-sliders text-gray-500 w-8 text-lg group-hover:text-purple-500 ease-out duration-300"></i>
                        Settings
                    </a>
                </li>

            </ul>
        </div>
    </div>
    {{-- right content --}}
    <div class="w-full flex flex-col">
        <div class="border-b border-t h-16 sticky top-0 bg-white flex justify-end items-center px-5 ">
            <div class="h-16 flex items-center gap-4">
                <div class="mr-2 rounded-full bg-blue-400 h-8 w-8 flex justify-center items-center font-bold text-white text-sm uppercase">
                    {{Auth::user()->fname[0]}}{{Auth::user()->lname[0]}}
                </div>
                <div class="">
                    <p class="text-sm font-bold text-gray-500">OWNER</p>
                    <p class="text-sm font-bold text-gray-500">{{Auth::user()->fname}}</p>{{--have to make an drop down here--}}
                </div>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="bg-red-500 px-3 py-2 rounded-md text-sm text-white hover:bg-red-900">Logout</button>
                </form>
            </div>
        </div>
        {{-- main content here --}}
        @yield('content')
        {{-- maincontent end here --}}
        <footer class="flex justify-between items-center bottom-0 h-14 px-5 bg-white">
            <div class="text-sm text-gray-400">© 2024 design with CheapLogic</div>

            <ul class="flex text-center items-center font-semibold text-gray-700 text-sm">
                <li class="p-2 hover:text-purple-800 text-gray-500"><a href="">Terms</a></li>
                <li class="p-2 hover:text-purple-800 text-gray-500"><a href="">Privacy</a></li>
                <li class="p-2 hover:text-purple-800 text-gray-500"><a href="">Help</a></li>
            </ul>

        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
