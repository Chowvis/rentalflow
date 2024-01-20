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

    <header class="mx-auto fixed sticky top-0 left-0 right-0 z-10 bg-white">
        <div class="flex justify-between h-16 items-center">
            <img src="images/logo.png" alt="rentalflo logo" class="h-10">
            <ul class="flex items-center gap-7 font-nunito font-bold text-purple-900 text-lg">
                <li class="hover:text-lime-500 focus:text-lime-500"><a href="#home">Home</a></li>
                <li class="hover:text-lime-500"><a href="#features">Features</a></li>
                <li class="hover:text-lime-500"><a href="">FAQ</a></li>
                <li class="hover:text-lime-500"><a href="">Contact</a></li>
                <li class="hover:text-lime-500"><a href="{{route('signin')}}">Login</a></li>
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

    <section id="features" class="pt-10 pb-20 transition duration-700 ease-in-out">
        <div class="grid lg:grid-cols-3 mx-auto gap-3 h-600 grid-cols-1">
            <div class="bg-blue-600">dfgdfg</div>
            <div class="bg-blue-600">dfgdfg</div>
            <div class="bg-blue-600">dfghd</div>
            <div class="bg-blue-600">fghdf</div>
            <div class="bg-blue-600">fgh</div>
            <div class="bg-blue-600">dfgh</div>
        </div>
    </section>

    <section id="home" class="bg-green-200">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsa, neque dolorem aut nulla dolorum asperiores, ipsam eius inventore possimus mollitia nobis sequi, pariatur doloremque recusandae molestias impedit placeat? A.
        Quia, laudantium cupiditate aspernatur deleniti suscipit id repudiandae quas modi vitae molestias, consectetur, quaerat qui enim tempora assumenda fuga? Facilis, dicta veritatis at enim repudiandae odit dolorum distinctio architecto quo.
        Nesciunt laborum labore ipsum nisi odio, soluta et? Facere iste et reprehenderit mollitia. Pariatur veritatis aperiam quo qui. Dolores magnam nostrum dolorum libero beatae deleniti reiciendis nesciunt maiores impedit dignissimos?
        Nihil, doloribus. Facere, itaque voluptas rerum doloribus exercitationem ex quam repellat dolore, ipsa aliquam aspernatur, et harum maxime? Suscipit nobis repellat rem qui amet animi optio inventore error a aperiam.
        Commodi consequuntur repudiandae id enim, ullam quis, at nisi amet ea vitae sequi architecto in eos quisquam quae quos aut natus doloremque dignissimos quibusdam excepturi nesciunt. Facere odit ex tempore.
        Iste in asperiores eveniet, dicta, dolorem illo veniam quidem numquam totam, officiis velit quam facilis nesciunt excepturi unde libero cupiditate maxime nobis ipsa! Voluptas error repudiandae veritatis ea nesciunt voluptatum?
        Repudiandae ut ullam, id saepe asperiores sint nostrum. Praesentium, maxime. Corporis cum deserunt qui officia, dolor nisi accusamus aliquam esse facere ratione! Aliquam, vero delectus provident odit sint neque nemo.
        Temporibus repudiandae veritatis dolorum odit ullam. Minima quibusdam incidunt recusandae rerum, beatae sapiente eius temporibus amet neque soluta labore, necessitatibus ullam error consequatur cupiditate exercitationem. Dicta, harum animi. Fugiat, praesentium.
        Consequatur recusandae id eaque eveniet. Ea exercitationem sequi, ex rem pariatur quos quam architecto beatae quasi, magnam, commodi facilis. Obcaecati quas illum possimus dolorem ipsam, impedit soluta similique dignissimos dicta.
        Laboriosam, qui. Quos maiores, voluptate tempora illo, dolore quis impedit facere assumenda dolor natus vitae id placeat alias similique debitis! Repellat consequuntur magni itaque expedita molestiae facilis nam quisquam quibusdam.
    </section>
</body>
</html>
