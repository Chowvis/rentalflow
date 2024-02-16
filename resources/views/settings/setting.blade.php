@extends('dashboard.skeleton')

@section('content')
    <div class="p-8 bg-gray-50 h-full">
        <p class="text-gray-600 font-bold text-2xl">Settings</p>
        <div class="grid gap-4 mt-5 lg:grid-cols-6 grid-col-1">
            <div class="rounded-md border border-slate-300 bg-white flex items-center justify-center p-5 text-xs font-roboto">
                <a class="flex flex-col items-center" href="">
                    <img src="images/changepassword.png" class="rounded-md h-[80px]" alt="">
                    <span class="my-2">Change Password</span>

                </a>
            </div>
            <div class="rounded-md border border-slate-300 bg-white flex items-center justify-center p-5 text-xs font-roboto">
                <a class="flex flex-col items-center" href="">
                    <img src="images/Profile.png" class="rounded-md h-[80px]" alt="">
                    <span class="my-2">Profile</span>

                </a>
            </div>
            <div class="rounded-md border border-slate-300 bg-white flex items-center justify-center p-5 text-xs font-roboto">
                <a class="flex flex-col items-center" href="">
                    <img src="images/Payments.png" class="rounded-md h-[80px]" alt="">
                    <span class="my-2">Payments</span>

                </a>
            </div>

        </div>
    </div>
@endsection
