<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body class="flex justify-center h-full bg-purple-100 ">

    <div class="bg-white rounded-md p-10 h-max mt-5 border border-gray-300 w-475"> {{--i have made a custom width 475--}}
        <form action="{{route('store')}}" method="post" class="grid">
            @csrf
            {{-- logo --}}
            <div class="flex justify-center">
                <a href="{{route('homepage')}}" class="text-4xl font-semibold font-roboto text-fuchsia-950 mb-10 p-0">{{--link routed to home--}}
                <img src="images/logo.png" alt="" class="h-16"></a>
            </div>

            {{--main form--}}
            <p class="font-semibold text-xl font-roboto text-gray-700">Register</p>
            <p class="text-gray-500">Create New RENTALFLO Account</p>

            <label for="FirstName" class="text-sm font-semibold font-sans mt-5 mb-2 after:content-['*'] after:ml-0.5 after:text-red-500">First Name</label>
            <input type="text" name="firstname" placeholder="Enter Your first name" class="border border-gray-300 rounded-md p-2" value="{{old('firstname')}}">
            @error('firstname')
                <span class="text-red-500">{{$message}}</span>
            @enderror

            <label for="LastName" class="text-sm font-semibold font-sans mt-5 mb-2 after:content-['*'] after:ml-0.5 after:text-red-500">Last Name</label>
            <input type="text" name="lastname" placeholder="Enter Your last name" class="border border-gray-300 rounded-md p-2" value="{{old('lastname')}}">
            @error('lastname')
                <span class="text-red-500">{{$message}}</span>
            @enderror

            <label for="Email" class="text-sm font-semibold font-sans mt-5 mb-2 after:content-['*'] after:ml-0.5 after:text-red-500">Email</label>
            <input type="email" name="email" placeholder="Enter Your email or username" class="border border-gray-300 rounded-md p-2" value="{{old('email')}}">
            @error('email')
                <span class="text-red-500">{{$message}}</span>
            @enderror

            <label for="Password" class="text-sm font-semibold font-sans mt-5 mb-2 after:content-['*'] after:ml-0.5 after:text-red-500">Password</label>
            <input type="password" name="password" placeholder="Enter your passcode" class="border border-gray-300 rounded-md p-2">
            @error('password')
                <span class="text-red-500">{{$message}}</span>
            @enderror

            <div class="flex m-5">
                <input type="checkbox" name="policy">
                <p class="ml-2">I agree to RENTALFLO</p>
            </div>


            <button name="register" class="bg-fuchsia-600 text-white p-2 rounded-md">Register</button>
            <div class="flex justify-center m-5">
                <p class="text-gray-400 font-semibold font-sans">Already have an account? <a class="text-gray-600" href="{{route('login')}}">Sign in</a></p>
            </div>
        </form>
    </div>
</body>
</html>
