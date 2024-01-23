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

        <form action="" class="grid lg:grid-cols-2 grid-row-4 gap-5">
            <div>
                <label for="">Title</label>
                <input type="text">
            </div>
            <div>
                <label for="">Address 1</label>
                <input type="text">
            </div>
            <div>
                <label for="">Address 2</label>
                <input type="text">
            </div>
            <div>
                <label for="">Country</label>
                <input type="text">
            </div>
            <div>
                <label for="">State</label>
                <select name="" id="">
                    <option value="">ab</option>
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
            <div>
                <label for="">City</label>
                <select name="" id="">
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
            <div>
                <label for="">Pin Code</label>
                <input type="text">
            </div>
            <div>
                <label for="">Rent</label>
                <input type="text">
            </div>
            <hr>
            <div>
                <label for="">Description</label>
                <input type="text">
            </div>
            <div>

            </div>
        </form>

    </div>
@endsection
