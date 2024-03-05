@extends('dashboard.skeleton')

@section('content')
    <div class="p-6 bg-gray-50 h-full">

        @if (session()->has('success'))
            <div class=" p-3 rounded-md shadow-sm bg-green-200 text-center mb-5" role="alert">
                <p class="text-green-900">{{session('success')}}</p>
            </div>
        @endif
        {{-- first section --}}
        <div class="flex justify-between p-3 h-24 items-center">
            <div>
                <p class="text-gray-800 font-bold text-3xl">Dashboard</p>
                <p class="py-2 font-semibold text-gray-400">Monthly statics.</p>
            </div>
            <button class="bg-white border border-gray-300 py-2 px-5 rounded-md text-sm font-bold ">Last 30 days</button>


        </div>
        {{-- second section details about user properties --}}
        <div class="grid lg:grid-flow-col grid-col-1 gap-5 p-3 mt-5 ">
            <div class="bg-white py-2 px-4 h-36 border border-slate-300 rounded-md">
                <div class="flex justify-between items-center">
                    <p class="font-bold text-lg">Active Properties</p>
                    <i class="fa-solid fa-circle-dot text-gray-400"></i>
                </div>
                <div class="h-28 w-52">
                    <canvas id="myChart" class=""></canvas>
                </div>
            </div>

            <div class="bg-white py-2 px-4 h-36 border border-slate-300 rounded-md">
                <div class="flex justify-between items-center">
                    <p class="font-bold text-lg">Active Tenants</p>
                    <i class="fa-solid fa-circle-dot text-gray-400"></i>
                </div>
            </div>

        </div>
        {{-- third section graph view --}}
        <div class="grid grid-cols-3 gap-5 p-3 grid-row-4">
            <div class="bg-white row-span-3 col-span-2 py-2 px-4 border border-slate-300 rounded-md h-570">
                ghjghj
            </div>

            <div class="bg-white row-span-3 col-span-1 border border-slate-300 rounded-md">hjfgh</div>

            <div class="bg-white row-span-1 col-span-2 border border-slate-300 rounded-md h-60">
                fghfg
            </div>

            <div class="bg-white row-span-1 col-span-1 border border-slate-300 rounded-md">hdfgh</div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: [''],
            datasets: [{

                barThickness: 60,
                maxBarThickness: 60,
                minBarLength: 5,
                label: '',
                data: [{{count($properties)}}],
                borderWidth: 2,
                borderColor: '#FFEAA7',
                backgroundColor: '#FBFADA',
            }]
          },
          options: {
            plugins: {

                legend: {
                    display: false ,
                },

                onHover: {
                    lebels:{
                        text: 'hello',
                    }

                },
            },
            scales: {
              y: {
                display:false,
                beginAtZero: true
              },
              x:{
                display: false,
              }
            },

          }
        });
      </script>
@endsection

