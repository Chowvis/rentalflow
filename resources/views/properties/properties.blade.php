@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-3xl">Properties</p>
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
        <div class="border border-gray-300 p-3 rounded-md">
            <div class="flex flex-row px-5 py-3 font-bold text-gray-400">
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
                    <li class="flex flex-row py-4">
                        <div class="basis-4/12 uppercase flex items-center">
                            <span class="bg-green-600 rounded-full w-10 h-10 text-white text-sm p-3 text-center">{{$property->title[0]}}</span>
                            <span class="pl-3">{{$property->title}}</span>
                        </div>
                        <div class="basis-4/12 text-gray-400">{{$property->address_1}}, {{$property->address_2}}, {{$property->pincode}}</div>
                        <div class="basis-1/12">a</div>
                        <div class=basis-2/12>vacant</div>
                        <div class="basis-1/12">{{$property->state}}</div>
                    </li>
                    <hr>
                @endforeach
            </ul>

        @endif
        </div>






    </div>
@endsection
