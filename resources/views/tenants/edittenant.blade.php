@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-3xl">Tenants</p>
                <p class="py-2 font-semibold text-gray-400">Edit your tenant details</p>
            </div>
            <a href="{{route('tenants')}}" class="flex items-center gap-5">
                <button class="bg-white border border-gray-300 py-2 px-5 rounded-md text-sm font-bold hover:bg-gray-500 hover:text-white">
                    <i class="fa-solid fa-arrow-left pr-2"></i>
                    Back
                </button>
            </a>
        </div>

        <form action="{{route('updateT',$tenant->id)}}" class="font-nunito bg-white border border-gray-300 rounded-md p-3" method="POST">
            @csrf
            <div class="grid lg:grid-cols-2 grid-cols-1 pb-5">
                <div class="flex flex-col p-3">
                    <label for="name" class="text-sm mt-5 mb-2 font-bold">Name</label>
                    <input type="text" value="{{$tenant->name}}" name="name" placeholder="Enter name" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('name')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="contact_no" class="text-sm mt-5 mb-2 font-bold">Contact No.</label>
                    <input type="number" value="{{$tenant->contact_no}}" maxlength="10" name="contact_no" placeholder="Enter your contact no." class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('contact_no')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col p-3">
                    <label for="email" class="text-sm mt-3 mb-2 font-bold">Email</label>
                    <input type="Email" value="{{$tenant->email}}" name="email" placeholder="Enter Your Email" class="border border-gray-300 rounded-md p-2 text-sm">
                    @error('email')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>


            </div>

            <hr>
            <div class="p-3 pb-5">
                <div class="flex flex-col ">
                    <label for="address" class="text-sm mt-3 mb-2 font-bold">Address</label>
                    <textarea name="address" id="" cols="30" rows="3" placeholder="Enter Description" class="border border-gray-300 rounded-md p-2 text-sm">{{$tenant->address}}</textarea>
                    @error('address')
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
