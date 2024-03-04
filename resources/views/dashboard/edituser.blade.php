@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-[25px]">User Profile</p>
                <p class="py-2 font-semibold text-gray-400">Edit User details.</p>
            </div>
            <a href="{{route('dashboard')}}" class="flex items-center gap-5">
                <button class="bg-white border border-gray-300 py-2 px-5 rounded-md text-sm font-bold hover:bg-gray-500 hover:text-white">
                    <i class="fa-solid fa-arrow-left pr-2"></i>
                    Back
                </button>
            </a>
        </div>
        <div>
            <form action="{{route('updateuser',$user->id)}}" enctype="multipart/form-data" class="font-nunito bg-white border border-gray-300 rounded-md p-3" method="POST">
                @csrf
                {{-- image file --}}
                <div class="relative flex justify-center">
                    <div class="flex p-3 justify-center absolute -top-10">
                        <div class=" flex h-32 w-32 justify-center rounded-full items-center bg-slate-100 relative shadow-lg ">
                            <div class="h-28 w-28 flex justify-center overflow-hidden rounded-full items-center">
                                @if (($user->image)===null)
                                    <img src="images/hero-img.png" class="h-28 w-28 object-cover"  alt="">
                                @else
                                    <img src="/storage/{{$user->image}}" class=" w-28 object-cover" alt="">
                                @endif

                            </div>

                            <input type="file" name="image" id="image" accept="image/*" class="hidden ">
                            <label for="image" class="cursor-pointer absolute  -bottom-4 flex items-center justify-center w-8 h-8 bg-white rounded-full shadow-lg hover:bg-gray-300">
                                <i class="fa-solid fa-pen text-xs text-gray-500"></i>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 grid-cols-1 pb-5 mt-32 border-t border-gray-300">
                    <div class="flex flex-col p-3">
                        <label for="fname" class="text-sm mt-5 mb-2 font-bold">First Name</label>
                        <input value="{{$user->fname}}" type="text" name="fname" placeholder="Enter First name" class="border border-gray-300 rounded-md p-2 text-sm">
                        @error('fname')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col p-3">
                        <label for="lname" class="text-sm mt-5 mb-2 font-bold">Last Name</label>
                        <input value="{{$user->lname}}" type="text" name="lname" placeholder="Enter Last name" class="border border-gray-300 rounded-md p-2 text-sm">
                        @error('lname')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col p-3">
                        <label for="email" class="text-sm mt-5 mb-2 font-bold">Email</label>
                        <input value="{{$user->email}}" type="text" name="email" placeholder="Enter Property name or title" class="border border-gray-300 rounded-md p-2 text-sm">
                        @error('email')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
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


    </div>

@endsection
