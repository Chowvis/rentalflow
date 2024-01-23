@extends('dashboard.skeleton')

@section('content')
    <div class="p-6 bg-gray-50 h-full">
        {{-- first section --}}
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-3xl">Dashboard</p>
                <p class="py-2">Monthly statics.</p>
            </div>
            <button class="bg-white ">Last 30 days</button>


        </div>
        {{-- second section details about user properties --}}
        <div class="grid lg:grid-flow-col grid-col-1 gap-5 p-3 mt-5 ">
            <div class="bg-white py-2 px-4 h-36 border border-slate-100 rounded-md">
                <div class="flex justify-between items-center">
                    <p class="font-bold text-lg">Active Properties</p>
                    <i class="fa-solid fa-circle-dot text-gray-400"></i>
                </div>
            </div>

            <div class="bg-white py-2 px-4 h-36 border border-slate-100 rounded-md">
                <div class="flex justify-between items-center">
                    <p class="font-bold text-lg">Active Tenants</p>
                    <i class="fa-solid fa-circle-dot text-gray-400"></i>
                </div>
            </div>

        </div>
        {{-- third section graph view --}}
        <div class="grid grid-cols-3 gap-5 p-3 grid-row-4 h-screen">
            <div class="bg-white row-span-3 col-span-2 py-2 px-4 border-slate-100 rounded-md">
                ghjghj
            </div>

            <div class="bg-white row-span-3 col-span-1">hjfgh</div>

            <div class="bg-white row-span-1 col-span-2">
                fghfg
            </div>

            <div class="bg-white row-span-1 col-span-1">hdfgh</div>
        </div>

    </div>
@endsection

