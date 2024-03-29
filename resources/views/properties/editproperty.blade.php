@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-[25px]">Properties</p>
                <p class="py-2 font-semibold text-gray-400">Edit your property details.</p>
            </div>
            <a href="{{route('properties')}}" class="flex items-center gap-5">
                <button class="bg-white border border-gray-300 py-2 px-5 rounded-md text-sm font-bold hover:bg-gray-500 hover:text-white">
                    <i class="fa-solid fa-arrow-left pr-2"></i>
                    Back
                </button>
            </a>
        </div>
        @if (session()->has('success'))
                    <div class=" p-3 rounded-md shadow-sm bg-green-200 text-center mb-5" role="alert">
                        <p class="text-green-900">{{session('success')}}</p>
                    </div>
        @endif

        <form action="{{route('update',$property->id)}}" class="font-nunito bg-white border border-gray-300 rounded-md p-3" method="POST">
            @csrf
            <div class="grid lg:grid-cols-2 grid-cols-1 pb-5">
                <div class="flex flex-col p-3">
                    <label for="title" class="text-sm mt-5 mb-2 font-bold">Title</label>
                    <input type="text" value="{{$property->title}}" name="title" placeholder="Enter Property name or title" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('title')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="address_1" class="text-sm mt-5 mb-2 font-bold">Address 1</label>
                    <input type="text" value="{{$property->address_1}}" name="address_1" placeholder="address line - 1" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('address_1')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="address_2" class="text-sm mt-3 mb-2 font-bold">Address 2</label>
                    <input type="text" value="{{$property->address_2}}" name="address_2" placeholder="address line - 2" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('address_2')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="country" class="text-sm mt-3 mb-2 font-bold">Country</label>
                    <input type="text" value="{{$property->country}}" name="country" placeholder="Enter Country" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('country')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="state" class="text-sm mt-3 mb-2 font-bold">State</label>
                    <select name="state" id="" class="border border-gray-300 rounded-md p-2 text-sm">
                        <option class="text-md uppercase font-bold text-gray-400" value="">select state</option>
                        <option class="text-md uppercase font-bold text-gray-400" value="Arunachal Pradesh"{{$property->state == 'Arunachal Pradesh' ? 'selected' : ''}}>Arunachal Pradesh</option>
                        <option class="text-md uppercase font-bold text-gray-400" value="Assam"{{$property->state == 'Assam' ? 'selected' : ''}}>Assam</option>
                        <option class="text-md uppercase font-bold text-gray-400" value="Meghalaya"{{$property->state == 'Meghalaya' ? 'selected' : ''}}>Meghalaya</option>
                        <option class="text-md uppercase font-bold text-gray-400" value="Delhi">Delhi</option>

                    </select>

                    @error('state')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="city" class="text-sm mt-3 mb-2 font-bold">City</label>
                    <select name="city" id="" class="border border-gray-300 rounded-md p-2 text-sm">
                        <option value="" selected>Select city</option>
                        <option value="TAWANG"{{$property->city == 'TAWANG' ? 'selected' : ''}}>TAWANG</option>
                        <option value="WEST KAMENG"{{$property->city == 'WEST KAMENG' ? 'selected' : ''}}>WEST KAMENG</option>
                        <option value="EAST KAMENG"{{$property->city == 'EAST KAMENG' ? 'selected' : ''}}>EAST KAMENG</option>
                        <option value="PAPUM PARE"{{$property->city == 'PAPUM PARE' ? 'selected' : ''}}>PAPUM PARE</option>
                        <option value="LOWER SUBANSIRI"{{$property->city == 'LOWER SUBANSIRI' ? 'selected' : ''}}>LOWER SUBANSIRI</option>
                        <option value="UPPER SUBANSIRI"{{$property->city == 'UPPER SUBANSIRI' ? 'selected' : ''}}>UPPER SUBANSIRI</option>
                        <option value="WEST SIANG"{{$property->city == 'WEST SIANG' ? 'selected' : ''}}>WEST SIANG</option>
                        <option value="EAST SIANG"{{$property->city == 'EAST SIANG' ? 'selected' : ''}}>EAST SIANG</option>
                        <option value="UPPER SIANG"{{$property->city == 'UPPER SIANG' ? 'selected' : ''}}>UPPER SIANG</option>
                        <option value="DIBANG VALLEY"{{$property->city == 'DIBANG VALLEY' ? 'selected' : ''}}>DIBANG VALLEY</option>
                        <option value="LOHIT"{{$property->city == 'LOHIT' ? 'selected' : ''}}>LOHIT</option>
                        <option value="CHANGLANG"{{$property->city == 'CHANGLANG' ? 'selected' : ''}}>CHANGLANG</option>
                        <option value="TIRAP"{{$property->city == 'TIRAP' ? 'selected' : ''}}>TIRAP</option>
                        <option value="KURUNG KUMEY"{{$property->city == 'KURUNG KUMEY' ? 'selected' : ''}}>KURUNG KUMEY</option>
                        <option value="LOWER DEBANG VALLEY"{{$property->city == 'LOWER DEBANG VALLEY' ? 'selected' : ''}}>LOWER DEBANG VALLEY</option>
                        <option value="ANJAW"{{$property->city == 'ANJAW' ? 'selected' : ''}}>ANJAW</option>
                        <option value="LONGDING"{{$property->city == 'LONGDING' ? 'selected' : ''}}>LONGDING</option>
                        <option value="NAMSAI"{{$property->city == 'NAMSAI' ? 'selected' : ''}}>NAMSAI</option>
                        <option value="KRA DADI"{{$property->city == 'KRA DADI' ? 'selected' : ''}}>KRA DADI</option>
                        <option value="SIANG"{{$property->city == 'SIANG' ? 'selected' : ''}}>SIANG</option>
                        <option value="LOWER SIANG"{{$property->city == 'LOWER SIANG' ? 'selected' : ''}}>LOWER SIANG</option>
                        <option value="KAMLE"{{$property->city == 'KAMLE' ? 'selected' : ''}}>KAMLE</option>
                        <option value="CAPITAL COMPLEX ITANAGAR"{{$property->city == 'CAPITAL COMPLEX ITANAGAR' ? 'selected' : ''}}>CAPITAL COMPLEX ITANAGAR</option>
                        <option value="PAKE KESSANG"{{$property->city == 'PAKE KESSANG' ? 'selected' : ''}}>PAKE KESSANG</option>
                        <option value="SHI YOMI"{{$property->city == 'SHI YOMI' ? 'selected' : ''}}>SHI YOMI</option>
                        <option value="LEPA RADA"{{$property->city == 'LEPA RADA' ? 'selected' : ''}}>LEPA RADA</option>
                    </select>
                    @error('city')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="pincode" class="text-sm mt-3 mb-2 font-bold">Pin Code</label>
                    <input type="text" value="{{$property->pincode}}" name="pincode" placeholder="Enter Pincode" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('pincode')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="rent" class="text-sm mt-3 mb-2 font-bold">Rent</label>
                    <input type="number" value="{{$property->rent}}" name="rent" placeholder="₹ amount" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('rent')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <hr>
            <div class="p-3 pb-5">
                <div class="flex flex-col ">
                    <label for="rent" class="text-sm mt-3 mb-2 font-bold">Description</label>
                    <textarea name="description"  id="" cols="30" rows="3" placeholder="Enter Description" class="border border-gray-300 rounded-md p-2 text-sm">{{$property->description}}</textarea>
                    @error('description')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <hr>
            <div class="p-3 pb-5">
                <div class="flex flex-col">
                    <label for="file" class="text-sm mt-3 mb-2 font-bold">File Upload</label>
                    <input type="file" name="file" placeholder="Choose file" class="border border-gray-300 rounded-md p-2 text-sm">
                </div>
            </div>

            <hr>
            <div class="p-3 pb-5">
                <div class="h-80 w-full" id="map">
                    leaflet
                    <input type="number" step="0.000000000000001" name="lat" id="latitude" class="hidden" value="">
                    <input type="number" step="0.000000000000001" name="lng" id="longitude" class="hidden" value="">
                </div>
            </div>
            <hr>


            <div class="p-3 pb-5">
                <button class="bg-purple-800 text-white py-2 px-3 rounded-md text-sm font-bold hover:bg-purple-500">
                    <i class="fa-solid fa-check pr-2"></i>
                    Save
                </button>
            </div>







        </form>

    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        var coordinates;
        var map = L.map('map').setView([{{$property->lat}}, {{$property->lng}}], 5);

        // layers
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var myMarker = L.marker([{{$property->lat}}, {{$property->lng}}])
        // myMarker.addTo(map) will add the marker
        myMarker.addTo(map)

        map.on('click',function(e) {
            myMarker.setLatLng(e.latlng)

            document.getElementById('latitude').value = e.latlng.lat;
            document.getElementById('longitude').value = e.latlng.lng;
        });

        myMarker.addTo(map);
        osm.addTo(map);
    </script>
@endsection
