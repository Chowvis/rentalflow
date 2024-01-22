<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="sm:container mx-auto px-20">

    <header class="mx-auto sticky top-0 left-0 right-0 z-10 bg-white">
        <div class="flex justify-between h-16 items-center">
            <img src="images/logo.png" alt="rentalflo logo" class="h-10">
            <ul class="flex items-center gap-7 font-nunito font-bold text-purple-900 text-lg">
                <li class="hover:text-lime-500 focus:text-lime-500"><a href="#home">Home</a></li>
                <li class="hover:text-lime-500"><a href="#features">Features</a></li>
                <li class="hover:text-lime-500"><a href="">FAQ</a></li>
                <li class="hover:text-lime-500"><a href="">Contact</a></li>
                <li class="hover:text-lime-500"><a href="{{route('login')}}">Login</a></li>
                <li class="bg-purple-900 hover:bg-lime-500 text-white rounded-md pt-2 pb-2 pl-5 pr-5">
                    <form action="{{route('signuppage')}}" method="">

                        <button>Free Signup</button>
                    </form>

                </li>

            </ul>
        </div>
    </header>
{{-- features --}}
    <section id="home" class="pt-20 pb-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 lg-container mx-auto">
            <div class="flex justify-center flex-col p-3 gap-3 font-nunito">
                <p class="text-xl">Property Management System</p>
                <p class="pt-2 font-bold  text-5xl text-purple-900 ">Manage your Rental properties</p>
                <p class="text-3xl">Get free from hassle of managing your tenants and properties.
                    Maintain your property data efficiently.
                </p>

                <form action="{{route('signuppage')}}" method="get">

                    <button class="bg-purple-900 hover:bg-lime-500
                    text-white rounded-md pt-2 pb-2 pl-5 pr-5
                    h-16 text-2xl justify-center flex items-center lg:w-96">Free Signup</button>
                </form>


            </div>
            <div class="">
                <img src="images/hero-img.png" alt="" class="object-scale-down">
            </div>
        </div>
    </section>
{{--  random--}}

    <section id="features" class="pt-10 pb-20 font-nunito">
        <header class="block text-center mb-10">
            <h2 class="text-lime-500 text-sm font-bold pb-4 font-nunito">OUR AWESOME FEATURES</h2>
            <p class="font-bold text-purple-900 text-4xl font-roboto">Features for property owners</p>
          </header>
        <div class="grid lg:grid-cols-3 mx-auto gap-5 h-600 grid-cols-1">
            <div class="group flex flex-col justify-center items-center text-center p-5 hover:shadow-lg ease-out duration-500">
                <img class="h-24 group-hover:scale-65 ease-out duration-300" src="images/01.png" alt="">
                <p class="font-bold text-2xl text-purple-900 p-2">Easy Access</p>
                <p class="text-lg">Organize all your properties at one place for better management.</p>
            </div>

            <div class="group flex flex-col justify-center items-center text-center p-5 hover:shadow-lg ease-out duration-500"">
                <img class="h-24 group-hover:scale-65 ease-out duration-300" src="images/02.png" alt="">
                <p class="font-bold text-2xl text-purple-900 p-2">Easy Tenant Management</p>
                <p class="text-lg">Manage all your tenants information at one place. Get easy access to tenant information.</p>
            </div>

            <div class="group flex flex-col justify-center items-center text-center p-5 hover:shadow-lg ease-out duration-500"">
                <img class="h-24 group-hover:scale-65 ease-out duration-300" src="images/03.png" alt="">
                <p class="font-bold text-2xl text-purple-900 p-2">Rent Management</p>
                <p class="text-lg">Organize your rents at one place. Easy to store the rent information for your property at one place.</p>
            </div>

            <div class="group flex flex-col justify-center items-center text-center p-5 hover:shadow-lg ease-out duration-500"">
                <img class="h-24 group-hover:scale-65 ease-out duration-300" src="images/04.png" alt="">
                <p class="font-bold text-2xl text-purple-900 p-2">Expense Management</p>
                <p class="text-lg">Manage expenses at one place. Easy to add and edit expenses against your property at one place.</p>
            </div>

            <div class="group flex flex-col justify-center items-center text-center p-5 hover:shadow-lg ease-out duration-500"">
                <img class="h-24 group-hover:scale-65 ease-out duration-300" src="images/05.png" alt="">
                <p class="font-bold text-2xl text-purple-900 p-2">Files Management</p>
                <p class="text-lg">Organize all your important documents related to your properties at one place. Easy upload and download options available.</p>
            </div>

            <div class="group flex flex-col justify-center items-center text-center p-5 hover:shadow-lg ease-out duration-500"">
                <img class="h-24 group-hover:scale-65 ease-out duration-300" src="images/06.png" alt="">
                <p class="font-bold text-2xl text-purple-900 p-2">Easy to Use</p>
                <p class="text-lg">Our portal is very simple to use and yet very efficient.</p>
            </div>


        </div>
    </section>

    <section id="home" class="bg-green-200">

    </section>
</body>
</html>
