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
                                        <a href="{{route('goassign', $property->id)}}" class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-100 dark:hover:text-blue-500 text-xs font-medium">
                                            <i class="fa-solid fa-user-check px-3"></i> Assign Tenant
                                        </a>

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


                        </div>

                    </li>

                    <hr>



                @endforeach
            </ul>

        @endif
        </div>






    </div>
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
