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
            <div class="flex flex-row mx-5 gap-5 font-bold text-gray-400 border-b border-gray-200">
                <div class="py-2 cursor-pointer border-b-[3px] border-purple-500 text-purple-500" id="s1">
                    <i class="fa-regular fa-user pr-2"></i>Personal</div>
                <div class="py-2 cursor-pointer" id="s2">
                    <i class="fa-regular fa-file pr-2"></i>Attachments</div>
                <div class="py-2 cursor-pointer " id="s3">
                    <i class="fa-solid fa-location-dot pr-2"></i>Location</div>
            </div>






            {{--  --}}
            <div class="px-5 py-3">

                <table id="personal" class=" border border-gray-300 w-full border-collapse text-gray-500 font-roboto text-sm">
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

                <div id="attachment" class="hidden ">attachments</div>
                <div id="location" class="hidden">
                    <div id="mapshow" class="h-[600px] w-full"></div>
                </div>





            </div>

        </div>




    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        var s1 = document.getElementById('s1');
        s1.addEventListener('click', function find1(){
            document.getElementById('personal').setAttribute('class','');
            document.getElementById('s1').classList.add('border-purple-500','border-b-[3px]','text-purple-500');
            document.getElementById('s2').classList.remove('border-purple-500','border-b-[3px]','text-purple-500');
            document.getElementById('s3').classList.remove('border-purple-500','border-b-[3px]','text-purple-500');
            document.getElementById('attachment').setAttribute('class','hidden');
            document.getElementById('location').setAttribute('class','hidden');
        })

        var s2 = document.getElementById('s2');
        s2.addEventListener('click', function find2(){
            document.getElementById('personal').setAttribute('class','hidden');
            document.getElementById('s2').classList.add('border-purple-500','border-b-[3px]','text-purple-500');
            document.getElementById('s1').classList.remove('border-purple-500','border-b-[3px]','text-purple-500');
            document.getElementById('s3').classList.remove('border-purple-500','border-b-[3px]','text-purple-500');
            document.getElementById('attachment').setAttribute('class','');
            document.getElementById('location').setAttribute('class','hidden');
        })

        var s3 = document.getElementById('s3');
        var x= 0;
        s3.addEventListener('click', function find3(){
            document.getElementById('personal').setAttribute('class','hidden');
            document.getElementById('s3').classList.add('border-purple-500','border-b-[3px]','text-purple-500');
            document.getElementById('s2').classList.remove('border-purple-500','border-b-[3px]','text-purple-500');
            document.getElementById('s1').classList.remove('border-purple-500','border-b-[3px]','text-purple-500');
            document.getElementById('attachment').setAttribute('class','hidden');
            document.getElementById('location').setAttribute('class','');

            if(x === 0){
                var coordinates;
                var map = L.map('mapshow').setView([{{$property->lat}},{{$property->lng}}], 12);

                // layers
                var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                });

                var myMarker = L.marker([{{$property->lat}},{{$property->lng}}]);
                // myMarker.addTo(map) will add the marker
                myMarker.addTo(map);
                osm.addTo(map);
                x+=1;
            }

        })



    </script>

@endsection
