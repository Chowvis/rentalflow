@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-[25px]">Properties</p>
                <p class="py-2 font-semibold text-gray-400">You have {{count($properties)}} properties</p>
            </div>
            <div class="flex items-center gap-5">
                <form action="" method="POST">
                    @csrf
                    <button class="bg-white border border-gray-300 py-2 px-5 rounded-md text-sm font-bold hover:bg-gray-500 hover:text-white">
                        <i class="fa-solid fa-download pr-5"></i>
                        Export
                    </button>
                </form>
                <form action="{{route('addproperty')}}">
                    @csrf
                    <button class="bg-purple-800 text-white py-2 px-5 rounded-md text-sm font-bold hover:bg-purple-500">
                        <i class="fa-solid fa-plus pr-3"></i>
                        New Property
                    </button>
                </form>
            </div>






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
        <div class="border border-gray-300 p-3 rounded-md bg-white">
            <div class="flex flex-row px-5 py-3 font-bold text-gray-400 text-sm">
                <div class="basis-4/12">Name</div>
                <div class="basis-4/12">Address</div>
                <div class="basis-1/12">Status</div>
                <div class="basis-2/12">Occupancy</div>
                <div class="basis-1/12"></div>
            </div>
            <hr>
            @if ($properties->count() > 0)
                <ul class="px-5">
                    @foreach ($properties as $property)
                        <li class="flex flex-row py-4 text-sm items-center">
                            <div class="basis-4/12 uppercase flex items-center">
                                <span class="alphabet-div rounded-full w-10 h-10 text-white text-sm p-3 flex items-center justify-center">{{$property->title[0]}}</span>
                                <span class="pl-3 font-bold text-gray-900">{{$property->title}}</span>
                            </div>
                            <div class="basis-4/12 text-gray-400">{{$property->address_1}}, {{$property->address_2}}, {{$property->pincode}}</div>
                            @if ($property->status==='Active')
                                <div class="basis-1/12 font-bold text-green-500">{{$property->status}}</div>
                            @endif
                            @if ($property->status==='Inactive')
                                <div class="basis-1/12 font-bold text-red-500">{{$property->status}}</div>
                            @endif

                            <div class="basis-2/12 font-bold text-gray-500">{{($property->tenant_id!==null)?$property->tenant_name:'vacant'}}</div>
                            {{-- <div class="basis-2/12 flex items-center">
                                <a class="rounded-md bg-green-700 text-white font-semibold px-2 py-1 mr-1" href="{{route('show', $property->id)}}">View</a>
                                <a class="rounded-md bg-orange-700 text-white font-semibold px-2 py-1 mr-2" href="{{route('edit', $property->id)}}">Edit Details</a>
                            </div> --}}


                            <div class="basis-1/12 flex items-center justify-end pr-10">
                                <button id="dropdownMenuIconButton" data-dropdown-toggle="{{$property->id}}" class="inline-flex justify-center items-center p-2 text-sm font-medium text-center w-10 h-10 text-gray-900 bg-white rounded-full hover:bg-gray-300 focus:outline-none" type="button">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>

                                    <!-- Dropdown menu -->
                                <div id="{{$property->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 font-roboto">
                                    <ul class="py-2 text-sm text-gray-500" aria-labelledby="dropdownMenuIconButton">
                                        <li>
                                            <a href="{{route('show', $property->id)}}" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-[12px] font-medium">
                                                <i class="fa-solid fa-eye px-3"></i> View Details
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('edit', $property->id)}}" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-xs font-medium">
                                                <i class="fa-solid fa-user-pen px-3"></i> Edit
                                            </a>
                                        </li>

                                        <hr>
                                        <li>
                                            {{-- <a href="{{route('goassign', $property->id)}}" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-xs font-medium">
                                                <i class="fa-solid fa-user-check px-3"></i> Assign Tenant
                                            </a> --}}
                                            @if ($property->tenant_id===null)
                                                <span  onclick="assign({{$property->id}})" class=" cursor-pointer block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-xs font-medium">
                                                    <i class="fa-solid fa-user-check px-3"></i> Assign Tenant
                                                </span>
                                            @else
                                                <span onclick="unassign({{$property->id}})" class="cursor-pointer block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-xs font-medium">
                                                    <i class="fa-solid fa-user-check px-3"></i> Unassign Tenant
                                                </span>
                                            @endif

                                        {{-- <select name="tenant_name" id="tenant" class="z-10 right-80">
                                            @foreach ($tenants as $tenant)
                                                <option value="{{$tenant->name}}">{{$tenant->name}}</option>
                                            @endforeach
                                        </select> --}}





                                        </li>
                                        <hr>
                                        @if ($property->status==='Active')
                                            <li>
                                                <a href="{{route('deactivate',$property->id)}}" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-xs font-medium">
                                                    <i class="fa-solid fa-address-card px-3"></i> Deactivate
                                                </a>
                                            </li>
                                        @endif
                                        @if ($property->status==='Inactive')
                                            <li>
                                                <a href="{{route('activate',$property->id)}}" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-xs font-medium">
                                                    <i class="fa-regular fa-address-card px-3"></i> Activate
                                                </a>
                                            </li>
                                        @endif

                                    </ul>



                                </div>
                                {{-- assign tenant popup --}}
                                <div id="model_1" class="hidden fixed inset-0 z-50 overflow-auto bg-gray-900 bg-opacity-50 flex justify-center items-center font-roboto">
                                    <form id="form1" action="{{route('assign',$property->id)}}" method="post" class="bg-white p-5 rounded-lg flex flex-col">
                                        @csrf
                                        <label for="tenant" class="text-sm font-medium pb-3">Assign tenant</label>
                                        <select name="tenant" id="" class="border border-slate-500 rounded-sm p-2 ">
                                            @foreach ($tenants as $tenant)
                                                @if ($tenant->property_id === null)
                                                    <option value="{{$tenant->id}}">{{$tenant->name}}</option>
                                                @endif

                                            @endforeach

                                        </select>
                                        <label for="rent" class="text-sm font-medium pb-3 after:content-['*'] after:ml-0.5 after:text-red-500">Rent</label>
                                        <input type="text" name="rent" value="{{$property->rent}}" class="border border-gray-300 rounded-md p-2 text-sm">

                                        <button>Assign</button>
                                        {{-- @error('')
                                            <span class="text-red-500 text-sm">{{$message}}</span>
                                        @enderror --}}
                                    </form>
                                </div>


                                {{-- unassign tenant popup --}}
                                <div id="model_2" class="hidden fixed inset-0 z-50 overflow-auto bg-gray-900 bg-opacity-50 flex justify-center items-center font-roboto">
                                    <form id="form2" action="{{route('unassign',$property->id)}}" method="" class="bg-white p-5 rounded-lg flex flex-col justify-center">
                                        <label for="old_password" class="text-sm font-medium pb-3 px-10 text-center text-lg">Are You Sure?</label>
                                        <div class="flex items-center gap-5">
                                            <button id="save" class="bg-red-500 text-white py-2 px-3 rounded-md text-sm font-bold hover:bg-red-800">
                                                <i class="fa-solid fa-check pr-2"></i>
                                                Confirm
                                            </button>
                                            <span id="closeModal" class=" px-3 py-2 rounded-lg text-sm font-bold border border-gray-700 cursor-pointer">Cancel</span>
                                        </div>


                                    </form>
                                </div>


                            </div>

                        </li>

                        <hr>



                    @endforeach
                </ul>

            @endif


        </div>






    </div>
    <script>
        function assign(id){

            const modal = document.getElementById('model_1');
            const form1 = document.getElementById('form1');

            form1.action = "{{route('assign',$property->id)}}".replace({{$property->id}},id);
            modal.classList.remove('hidden');
            // const closeModalButton = document.getElementById('closeModal');
            // closeModalButton.addEventListener('click', () => {
            //     modal.classList.add('hidden');
            // });
            window.addEventListener('click', (event) => {
            if (event.target === modal)//checking if any click is been made outside the form
            {
                modal.classList.add('hidden');
            }
            });
        }

        function unassign(id){
                const modal2 = document.getElementById('model_2');
                const form2 = document.getElementById('form2');

                form2.action = "{{route('unassign',$property->id)}}".replace({{$property->id}},id);
                modal2.classList.remove('hidden');
                const closeModalButton = document.getElementById('closeModal');
                closeModalButton.addEventListener('click', () => {
                    modal2.classList.add('hidden');
                });
                window.addEventListener('click', (event) => {
                if (event.target === modal2)//checking if any click is been made outside the form
                {
                    modal2.classList.add('hidden');
                }
                });

        }


    </script>
    <script>
        const divs = document.querySelectorAll('.alphabet-div');

        divs.forEach(div => {
            const letter = div.textContent.trim().toUpperCase();

            // Set background color based on letter
            switch(letter) {
                case 'A':
                    div.classList.add('bg-red-500');
                    break;
                case 'B':
                    div.classList.add('bg-blue-300');
                    break;
                case 'C':
                    div.classList.add('bg-green-500');
                    break;
                case 'D':
                    div.classList.add('bg-purple-500');
                    break;
                case 'E':
                    div.classList.add('bg-lime-500');
                    break;
                case 'F':
                    div.classList.add('bg-gray-800');
                    break;
                case 'G':
                    div.classList.add('bg-red-500');
                    break;
                case 'H':
                    div.classList.add('bg-yellow-500');
                    break;
                case 'I':
                    div.classList.add('bg-green-500');
                    break;
                case 'J':
                    div.classList.add('bg-purple-500');
                    break;
                case 'K':
                    div.classList.add('bg-lime-500');
                    break;
                case 'L':
                    div.classList.add('bg-yellow-800');
                    break;
                case 'M':
                    div.classList.add('bg-red-500');
                    break;
                case 'N':
                    div.classList.add('bg-blue-500');
                    break;
                case 'O':
                    div.classList.add('bg-green-700');
                    break;
                case 'P':
                    div.classList.add('bg-yellow-500');
                    break;
                case 'Q':
                    div.classList.add('bg-lime-500');
                    break;
                case 'R':
                    div.classList.add('bg-green-800');
                    break;
                case 'S':
                    div.classList.add('bg-red-500');
                    break;
                case 'T':
                    div.classList.add('bg-blue-500');
                    break;
                case 'U':
                    div.classList.add('bg-green-500');
                    break;
                case 'V':
                    div.classList.add('bg-purple-500');
                    break;
                case 'W':
                    div.classList.add('bg-gray-500');
                    break;
                case 'X':
                    div.classList.add('bg-red-800');
                    break;
                case 'Y':
                    div.classList.add('bg-red-500');
                    break;
                case 'Z':
                    div.classList.add('bg-blue-500');
                    break;

                // Add more cases for other letters and colors
                default:
                    div.style.backgroundColor = 'gray'; // Default color
            }
        });
    </script>
@endsection
