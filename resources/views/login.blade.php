<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body class="flex justify-center h-full bg-purple-100 ">
    {{-- <div class="absolute bg-purple-900 rounded-full opacity-50 w-475 h-96 top-1 left-0"></div> --}}


    <div class="bg-white rounded-md p-10 h-max mt-5 border border-gray-300 w-475 font-nunito"> {{--i have made a custom width 475--}}

        <form action="{{route('loggedin')}}" method="post" class="grid">
            @csrf
            {{-- logo --}}
            <div class="flex justify-center">
                <a href="{{route('homepage')}}" class="text-4xl font-bold text-fuchsia-950 mb-10 p-0">{{--link routed to home--}}
                <img src="images/logo.png" alt="" class="h-16"></a>

            </div>
                @if (session()->has('success'))
                    <div class=" p-3 rounded-md shadow-sm bg-green-200 text-center mb-5" role="alert">
                        <p class="text-green-900">{{session('success')}}</p>
                    </div>
                @endif
                @if (session()->has('failed'))
                    <div class=" p-3 rounded-md shadow-sm bg-red-200 text-center mb-5" role="alert">
                        <p class="text-red-900">{{session('failed')}}</p>
                    </div>
                @endif

            {{--main form--}}
            <p class="font-bold text-2xl text-gray-700">Sign-in</p>
            <p class="text-gray-500">Access the RENTALFLO portal using your email and password.</p>

            <label for="Email" class="text-sm font-bold mt-5 mb-2 after:ml-0.5 after:text-red-500">Email</label>
            <input type="email" name="email" placeholder="Enter Your email or username" class="border border-gray-300 rounded-md p-2">
            @error('email')
                <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror

            <div class="flex justify-between mt-5 mb-1">
                <label for="Password" class="text-sm font-bold  after:ml-0.5 after:text-red-500">Password</label>
                <a class="font-bold text-purple-600" href="">Forgot Password?</a>
            </div>

            <input type="password" name="password" placeholder="Enter your passcode" class="border border-gray-300 rounded-md p-2">
            @error('password')
                <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror

            <button name="signin" class="bg-purple-900 text-white p-2 rounded-md mt-5">Sign in</button>


            <div class="flex items-center m-5 flex-col">
                <p class="font-bold text-gray-300">-OR-</p>
                <a class="bg-red-600 text-white p-2 rounded-md font-bold" href="">
                    <i class="fa fa-google-plus text-lg"></i> Sign with Google

                </a>
                <p class="text-gray-400 font-semibold mt-3">New on our platform?
                    <a class="text-gray-600" href="{{route('signuppage')}}">Create an account </a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>
