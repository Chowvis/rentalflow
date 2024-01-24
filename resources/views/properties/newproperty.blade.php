@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-3xl">Properties</p>
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
                    <input type="text" name="title" placeholder="Enter Property name or title" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('title')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="address1" class="text-sm mt-5 mb-2 font-bold">Address 1</label>
                    <input type="text" name="address1" placeholder="address line - 1" class="border border-gray-300 rounded-md p-2 text-sm">
                </div>

                <div class="flex flex-col p-3">
                    <label for="address2" class="text-sm mt-3 mb-2 font-bold">Address 2</label>
                    <input type="text" name="address2" placeholder="address line - 2" class="border border-gray-300 rounded-md p-2 text-sm">
                </div>

                <div class="flex flex-col p-3">
                    <label for="country" class="text-sm mt-3 mb-2 font-bold">Country</label>
                    <input type="text" name="country" placeholder="Enter Country" class="border border-gray-300 rounded-md p-2 text-sm">
                </div>

                <div class="flex flex-col p-3">
                    <label for="state" class="text-sm mt-3 mb-2 font-bold">State</label>
                    <select name="state" id="" class="border border-gray-300 rounded-md p-2 text-sm">
                        <option value="" selected>select state</option>
                        <option value="">b</option>
                        <option value="">b</option>
                        <option value="">vn</option>
                        <option value="">nm</option>
                        <option value="">vbnm</option>
                        <option value="">mbvn</option>
                        <option value="">nmvb</option>
                        <option value="">bnm</option>
                        <option value="">bnm</option>
                        <option value="">mvbn</option>
                        <option value="">bnm</option>
                        <option value="">bnm</option>
                        <option value="">bnm</option>
                        <option value="">bnm</option>
                        <option value="">bnm</option>
                        <option value="">,nbm,bn</option>
                        <option value="">bnm,</option>
                        <option value="">,bnm.,</option>
                        <option value="">jfghjf</option>
                        <option value="">jghj</option>
                        <option value="">bnmf</option>
                        <option value="">dhjdhm</option>
                        <option value="">dghdgh</option>
                        <option value="">dghmdgh</option>
                        <option value="">dghm</option>
                        <option value="">dhfjdfg</option>
                        <option value="">dfghj</option>
                    </select>
                </div>

                <div class="flex flex-col p-3">
                    <label for="city" class="text-sm mt-3 mb-2 font-bold">City</label>
                    <select name="city" id="" class="border border-gray-300 rounded-md p-2 text-sm">
                        <option value="" selected>Select city</option>
                        <option value="">TAWANG</option>
                        <option value="">WEST KAMENG</option>
                        <option value="">EAST KAMENG</option>
                        <option value="">PAPUM PARE</option>
                        <option value="">LOWER SUBANSIRI</option>
                        <option value="">UPPER SUBANSIRI</option>
                        <option value="">WEST SIANG</option>
                        <option value="">EAST SIANG</option>
                        <option value="">UPPER SIANG</option>
                        <option value="">DIBANG VALLEY</option>
                        <option value="">LOHIT</option>
                        <option value="">CHANGLANG</option>
                        <option value="">TIRAP</option>
                        <option value="">KURUNG KUMEY</option>
                        <option value="">LOWER DEBANG VALLEY</option>
                        <option value="">ANJAW</option>
                        <option value="">LONGDING</option>
                        <option value="">NAMSAI</option>
                        <option value="">KRA DADI</option>
                        <option value="">SIANG</option>
                        <option value="">LOWER SIANG</option>
                        <option value="">KAMLE</option>
                        <option value="">CAPITAL COMPLEX ITANAGAR</option>
                        <option value="">PAKE KESSANG</option>
                        <option value="">SHI YOMI</option>
                        <option value="">LEPA RADA</option>
                    </select>
                </div>

                <div class="flex flex-col p-3">
                    <label for="pincode" class="text-sm mt-3 mb-2 font-bold">Pin Code</label>
                    <input type="text" name="pincode" placeholder="Enter Pincode" class="border border-gray-300 rounded-md p-2 text-sm">
                </div>

                <div class="flex flex-col p-3">
                    <label for="rent" class="text-sm mt-3 mb-2 font-bold">Rent</label>
                    <input type="number" name="rent" placeholder="₹ amount" class="border border-gray-300 rounded-md p-2 text-sm">
                </div>
            </div>

            <hr>
            <div class="p-3 pb-5">
                <div class="flex flex-col ">
                    <label for="rent" class="text-sm mt-3 mb-2 font-bold">Description</label>
                    <textarea name="description" id="" cols="30" rows="3" placeholder="Enter Description" class="border border-gray-300 rounded-md p-2 text-sm"></textarea>

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
                <div class="">
                    leaflet
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
@endsection
