@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <p class="text-gray-500 font-bold text-3xl">Rent</p>


        <div class="bg-gray-200 h-screen flex items-center justify-center">

            <!-- Trigger Button -->
            <button id="menuButton" class="bg-blue-500 text-white px-4 py-2 rounded">Open Menu</button>

            <!-- Popup Menu -->
            <div id="menu" class="hidden absolute bg-white border rounded shadow-md mt-2">
                <ul class="list-none">
                    <li class="border-b py-2 px-4"><a href="#">Menu Item 1</a></li>
                    <li class="border-b py-2 px-4"><a href="#">Menu Item 2</a></li>
                    <li class="py-2 px-4"><a href="#">Menu Item 3</a></li>
                </ul>
            </div>

            <script>
                // JavaScript to toggle menu visibility
                var menuButton = document.getElementById('menuButton');
                var menu = document.getElementById('menu');

                menuButton.addEventListener('click', function() {
                    menu.classList.toggle('hidden');
                });

                // Close the menu when clicked outside
                document.addEventListener('click', function(event) {
                    var isClickInside = menuButton.contains(event.target) || menu.contains(event.target);

                    if (!isClickInside) {
                        menu.classList.add('hidden');
                    }
                });
            </script>

        </div>




    </div>
@endsection
