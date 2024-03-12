@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-[25px]">Properties</p>
                <p class="py-2 font-semibold text-gray-400">Fill new property details.</p>
            </div>
            <a href="{{route('properties')}}" class="flex items-center gap-5">
                <button class="bg-white border border-gray-300 py-2 px-5 rounded-md text-sm font-bold hover:bg-gray-500 hover:text-white">
                    <i class="fa-solid fa-arrow-left pr-2"></i>
                    Back
                </button>
            </a>
        </div>

        <form action="{{route('storeproperty')}}" class="font-nunito bg-white border border-gray-300 rounded-md p-3" method="POST">
            @csrf
            <div class="grid lg:grid-cols-2 grid-cols-1 pb-5">
                <div class="flex flex-col p-3">
                    <label for="title" class="text-sm mt-5 mb-2 font-bold">Title</label>
                    <input value="{{old('title')}}" type="text" name="title" placeholder="Enter Property name or title" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('title')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="address1" class="text-sm mt-5 mb-2 font-bold">Address 1</label>
                    <input value="{{old('address1')}}" type="text" name="address1" placeholder="address line - 1" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('address1')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="address2" class="text-sm mt-3 mb-2 font-bold">Address 2</label>
                    <input value="{{old('address2')}}" type="text" name="address2" placeholder="address line - 2" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('address2')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="country" class="text-sm mt-3 mb-2 font-bold">Country</label>
                    <input value="{{old('country')}}" type="text" name="country" placeholder="Enter Country" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('country')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="state" class="text-sm mt-3 mb-2 font-bold">State</label>
                    <select name="state" id="" class="border border-gray-300 rounded-md p-2 text-sm">
                        <option class="text-md uppercase font-bold text-gray-400" value="" selected>select state</option>
                        <option class="text-md uppercase font-bold text-gray-400" value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option class="text-md uppercase font-bold text-gray-400" value="Assam">Assam</option>
                        <option class="text-md uppercase font-bold text-gray-400" value="Meghalaya">Meghalaya</option>
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
                        <option value="TAWANG">TAWANG</option>
                        <option value="WEST KAMENG">WEST KAMENG</option>
                        <option value="EAST KAMENG">EAST KAMENG</option>
                        <option value="PAPUM PARE">PAPUM PARE</option>
                        <option value="LOWER SUBANSIRI">LOWER SUBANSIRI</option>
                        <option value="UPPER SUBANSIRI">UPPER SUBANSIRI</option>
                        <option value="WEST SIANG">WEST SIANG</option>
                        <option value="EAST SIANG">EAST SIANG</option>
                        <option value="UPPER SIANG">UPPER SIANG</option>
                        <option value="DIBANG VALLEY">DIBANG VALLEY</option>
                        <option value="LOHIT">LOHIT</option>
                        <option value="CHANGLANG">CHANGLANG</option>
                        <option value="TIRAP">TIRAP</option>
                        <option value="KURUNG KUMEY">KURUNG KUMEY</option>
                        <option value="LOWER DIBANG VALLEY">LOWER DEBANG VALLEY</option>
                        <option value="ANJAW">ANJAW</option>
                        <option value="LONGDING">LONGDING</option>
                        <option value="NAMSAI">NAMSAI</option>
                        <option value="KRA DADI">KRA DADI</option>
                        <option value="SIANG">SIANG</option>
                        <option value="LOWER SIANG">LOWER SIANG</option>
                        <option value="KAMLE">KAMLE</option>
                        <option value="CAPITAL COMPLEX ITANAGAR">CAPITAL COMPLEX ITANAGAR</option>
                        <option value="PAKKE KESSANG">PAKE KESSANG</option>
                        <option value="SHI YOMI">SHI YOMI</option>
                        <option value="LEPA RADA">LEPA RADA</option>
                    </select>
                    @error('city')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="pincode" class="text-sm mt-3 mb-2 font-bold">Pin Code</label>
                    <input value="{{old('pincode')}}" type="text" name="pincode" placeholder="Enter Pincode" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('pincode')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="rent" class="text-sm mt-3 mb-2 font-bold">Rent</label>
                    <input value="{{old('rent')}}" type="number" name="rent" placeholder="₹ amount" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('rent')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <hr>
            <div class="p-3 pb-5">
                <div class="flex flex-col ">
                    <label for="rent" class="text-sm mt-3 mb-2 font-bold">Description</label>
                    <textarea name="description" id="" cols="30" rows="3" placeholder="Enter Description" class="border border-gray-300 rounded-md p-2 text-sm">{{old('description')}}</textarea>
                    @error('description')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <hr>
            <div class="p-3 pb-5">
                <div class="flex flex-col">
                    <label for="file" class="text-sm mt-3 mb-2 font-bold">File Upload</label>
                    <input type="file" name="file[]" placeholder="Choose file" id="imageInput" multiple onchange="previewImage()" class="border border-gray-300 rounded-md p-2 text-sm">
                    <div class="flex" id="" >
                        <div class="flex flex-wrap" id="preview">

                        </div>

                    </div>
                </div>
            </div>

            <hr>
            <div class="p-3 pb-5">
                <div class="h-80 w-full" id="map">
                    leaflet
                    <input type="number" step="0.000000000000001" name="latitude" id="latitude" class="hidden" value="">
                    <input type="number" step="0.000000000000001" name="longitude" id="longitude" class="hidden" value="">
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
        var map = L.map('map').setView([28.6139, 77.2090], 5);

        // layers
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var myMarker = L.marker([28.6139, 77.2090])
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
     <script>
        function previewImage() {
            var preview = document.getElementById('preview');
            var input = document.getElementById('imageInput');

            if (input.files && input.files.length > 0) {
                for (const file of input.files) {
                    var reader = new FileReader();
                    preview.innerHTML = '';
                    reader.onload = function (e) {
                        var img = document.createElement('img');
                        // img.src = e.target.result;
                        var fileExtension = file.name.split('.').pop().toLowerCase();
                        console.log('File Extension:', fileExtension);
                        if (fileExtension == 'pdf') {
                            img.src = '/images/pdf.png';

                        }
                        else if (fileExtension == 'doc'||fileExtension=='docx') {
                            img.src = '/images/doc.png';

                        }
                        else if (fileExtension == 'xls'||fileExtension=='xlsx') {
                            img.src = '/images/xls.png';

                        }
                        else if (fileExtension == 'csv') {
                            img.src = '/images/csv.png';

                        }
                        else {
                            img.src = e.target.result;

                        }
                        img.classList.add('object-cover','w-36','h-36');
                        img.style.margin = '5px'; // Add some spacing between images

                        // Append the image to the preview div
                        preview.appendChild(img);
                    }

                    // Read the selected file as a data URL
                    reader.readAsDataURL(file);
                }

            }

            // preview.style.display = 'block';
            // preview.src = URL.createObjectURL(input.files[0]);
        }
    </script>
@endsection
