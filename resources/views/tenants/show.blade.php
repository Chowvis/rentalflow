@extends('dashboard.skeleton')

@section('content')
    <div class="p-5 bg-gray-50 h-full">
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-3xl">Tenants</p>
                <p class="py-2 font-semibold text-gray-400">{{$tenant->name}}</p>
            </div>
            <a href="{{route('tenants')}}" class="flex items-center gap-5">
                <button class="bg-white border border-gray-300 py-2 px-5 rounded-md text-sm font-bold hover:bg-gray-500 hover:text-white">
                    <i class="fa-solid fa-arrow-left pr-2"></i>
                    Back
                </button>
            </a>
        </div>

        <div class="border border-gray-300 p-3 rounded-md bg-white">
            <div class="flex flex-row px-5 py-3 gap-3 font-bold text-gray-400">
                <div class="">Personal</div>
                <div class="">Attachment</div>

            </div>
            <hr>

            <div class="px-5 py-3">

                <table class="border border-gray-300 w-full border-collapse text-gray-400 font-roboto text-sm">
                    {{-- image --}}
                    <tr class="">
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Tenant Id</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">
                            <img src="/storage/{{$tenant->image}}" alt="">
                        </td>
                    </tr>
                    <tr class="">
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Tenant Id</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$tenant->id}}</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Tenant Name</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$tenant->name}}</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Contact</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$tenant->contact_no}}</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Email</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$tenant->email}}</td>
                    </tr>

                    {{-- <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Rent</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$property->rent}}</td>
                    </tr> --}}

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Address</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">{{$tenant->address}}</td>
                    </tr>


                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Property</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">nil</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">Start Date</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">nil</td>
                    </tr>

                    <tr>
                        <th class="border border-gray-300 w-1/5 border-collapse p-4">End Date</th>
                        <td class="border border-gray-300 w-full border-collapse px-3">nil</td>
                    </tr>


                </table>



            </div>

        </div>




    </div>
@endsection
