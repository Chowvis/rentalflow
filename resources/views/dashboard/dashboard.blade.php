@extends('dashboard.skeleton')

@section('content')
    <div class="p-6 bg-gray-50 h-full">

        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-3xl">Dashboard</p>
                <p class="py-2">Monthly statics.</p>
            </div>
            <button class="bg-white ">Last 30 days</button>


        </div>

        <div class="grid lg:grid-flow-col grid-col-1 gap-5 p-3 mt-5 ">
            <div class="bg-white py-2 px-4 h-32 border border-slate-100 rounded-md">
                <div class="flex justify-between items-center">
                    <p class="font-bold text-lg">Active Properties</p>
                    <i class="fa-solid fa-circle-dot text-gray-400"></i>
                </div>
            </div>
            <div class="h-24">sdfsd</div>
        </div>

    </div>
@endsection

