@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-3xl">Tenants</p>
                <p class="py-2 font-semibold text-gray-400">You have {{count($tenants)}} properties</p>
            </div>
            <div class="flex items-center gap-5">
                <form action="" method="POST">
                    @csrf
                    <button class="bg-white border border-gray-300 py-2 px-5 rounded-md text-sm font-bold hover:bg-gray-500 hover:text-white">
                        <i class="fa-solid fa-download pr-5"></i>
                        Export
                    </button>
                </form>
                <form action="{{route('addtenant')}}">
                    @csrf
                    <button class="bg-purple-800 text-white py-2 px-5 rounded-md text-sm font-bold hover:bg-purple-500">
                        <i class="fa-solid fa-plus pr-3"></i>
                        New Tenant
                    </button>
                </form>
            </div>






        </div>
        @if (session()->has('success'))
                    <div class=" p-3 rounded-md shadow-sm bg-green-200 text-center mb-5" role="alert">
                        <p class="text-green-900">{{session('success')}}</p>
                    </div>
        @endif
        <div class="border border-gray-300 p-3 rounded-md bg-white">
            <div class="flex flex-row px-5 py-3 font-bold text-sm text-slate-500">
                <div class="basis-3/12">Name</div>
                <div class="basis-2/12">Property</div>
                <div class="basis-2/12">Contact</div>
                <div class="basis-3/12">Payable Rent(₹)</div>
                <div class="basis-1/12">Status</div>
            </div>
            <hr>
            @if ($tenants->count() > 0)
                <ul class="px-5">
                    @foreach ($tenants as $tenant)
                        <li class="flex flex-row py-4 text-sm">
                            <div class="basis-3/12 uppercase flex items-center">
                                <span class="bg-blue-400 rounded-full w-10 h-10 text-white text-sm p-3 text-center">{{$tenant->name[0]}}</span>
                                <span class="pl-3">{{$tenant->name}}</span>
                            </div>
                            <div class="basis-2/12 text-gray-400">{{$tenant->property_id}}</div>
                            <div class="basis-2/12">{{$tenant->contact_no}}</div>
                            <div class=basis-3/12>{{$tenant->property_id}}</div>
                             <div class="basis-1/12 flex items-center"></div>

                            <div class="basis-1/12 flex items-center justify-end pr-10">
                                {{-- <a class="rounded-md bg-green-700 text-white font-semibold px-2 py-1 mr-1" href="{{route('show', $property->id)}}">View</a>
                                <a class="rounded-md bg-orange-700 text-white font-semibold px-2 py-1 mr-2" href="{{route('edit', $property->id)}}">Edit Details</a> --}}
                                <button id="dropdownMenuIconButton" data-dropdown-toggle="{{$tenant->id}}" class="inline-flex justify-center items-center p-2 text-sm font-medium text-center w-10 h-10 text-gray-900 bg-white rounded-full hover:bg-gray-300 focus:outline-none" type="button">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>

                                    <!-- Dropdown menu -->
                                <div id="{{$tenant->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2 text-sm text-gray-500" aria-labelledby="dropdownMenuIconButton">
                                        <li>
                                        <a href="{{route('showT',$tenant->id)}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">
                                            <i class="fa-solid fa-eye px-3"></i> View
                                        </a>
                                        </li>
                                        <li>
                                        <a href="{{route('editT',$tenant->id)}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">
                                            <i class="fa-solid fa-user-pen px-3"></i> Edit
                                        </a>
                                        </li>
                                        <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">
                                            <i class="fa-solid fa-ban px-3"></i> Deactive
                                        </a>
                                        </li>
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
@endsection
