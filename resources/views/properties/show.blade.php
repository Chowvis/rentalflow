@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-[25px]">Properties</p>
                <p class="py-2 font-semibold text-gray-400">All details of property provided by owner</p>
            </div>
            <a href="{{route('properties')}}" class="flex items-center gap-5">
                <button class="bg-white border border-gray-300 py-2 px-5 rounded-md text-sm font-bold hover:bg-gray-500 hover:text-white">
                    <i class="fa-solid fa-arrow-left pr-2"></i>
                    Back
                </button>
            </a>
        </div>

        <div class="border border-gray-300 p-3 rounded-md bg-white">
            <div class="flex flex-row px-5 py-3 gap-4 font-bold text-gray-400">
                <div class="p-1" id="s1">Personal</div>
                <div class="p-1" id="s2">Attachments</div>
                <div class="p-1" id="s3">Location</div>
            </div>
            <hr>





            {{--  --}}
            <div class="px-5 py-3">

                <table id="personal" class="hidden border border-gray-300 w-full border-collapse text-gray-500 font-roboto text-sm">
                    <tr class="">
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Property Id</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$property->id}}</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Property Name</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$property->title}}</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Address</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$property->address_1}}, {{$property->address_2}}
                        , {{$property->state}}, {{$property->country}}, {{$property->pincode}} </td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Description</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$property->description}}</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Rent</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$property->rent}}</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Case Taker Name</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">nil</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Care Taker contact</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">nil</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Care Taker Email</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">nil</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Property Tenant</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$property->tenant_name}}</td>
                    </tr>


                </table>

                <div id="attachment" class="">attachments</div>
                <div id="location" class="hidden">Location</div>





            </div>

        </div>




    </div>
    <script>

    </script>
@endsection
