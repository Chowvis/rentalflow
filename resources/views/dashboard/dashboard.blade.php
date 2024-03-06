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
        <div class="grid grid-col-1 lg:grid-cols-2 gap-5 p-3 mt-5 ">
            <div class="bg-white py-2 px-4 h-34 border border-slate-300 rounded-md">
                <div class="flex justify-between items-center">
                    <p class="font-bold text-lg">Active Properties</p>
                    <i class="fa-solid fa-circle-dot text-gray-400"></i>
                </div>
                <div class="h-20 flex mt-2 items-center">
                    <div class="text-2xl font-bold p-4">{{count($properties)}}</div>
                    <div class="w-full h-16">
                        <canvas id="myChart" class="h-16 w-full"></canvas>
                    </div>
                </div>

            </div>

            <div class="bg-white py-2 px-4 h-36 border border-slate-300 rounded-md">
                <div class="flex justify-between items-center">
                    <p class="font-bold text-lg">Active Tenants</p>
                    <i class="fa-solid fa-circle-dot text-gray-400"></i>
                </div>
                <div class="h-20 flex mt-2 items-center">
                    <div class="text-2xl font-bold p-4">{{count($tenants)}}</div>
                    <div class="w-full h-16">
                        <canvas id="tenantchart" class="h-16 w-full"></canvas>
                    </div>
                </div>
            </div>

        </div>
        {{-- third section graph view --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 p-3 grid-row-4">
            <div class="bg-white row-span-3 col-span-2 py-2 px-4 border border-slate-300 rounded-md h-570">

                <div class="w-full h-full p-2">
                    <canvas id="rentline" class=" w-full"></canvas>
                </div>
            </div>
{{-- rent --}}
            <div class="bg-white row-span-3 col-span-1 border border-slate-300 rounded-md p-4 sm:h-570">
                <div class="w-full h-full p-2">
                    <canvas id="rentdonut" class=" w-full"></canvas>
                </div>
            </div>

            <div class="bg-white row-span-1 col-span-2 border border-slate-300 rounded-md h-60">
                fghfg
            </div>

            <div class="bg-white row-span-1 col-span-1 border border-slate-300 rounded-md">
                hdfgh
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const tents = document.getElementById('tenantchart');
        const rentdonut = document.getElementById('rentdonut');
        const rentline = document.getElementById('rentline');

        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['month'],
            datasets: [{

                barThickness: 100,
                maxBarThickness: 100,

                label: 'active properties',
                data: [{{count($properT)}}],
                borderWidth: 1,

                borderColor: ['rgba(237,227,74,0.8)'],
                backgroundColor: ['rgba(250, 247,200,0.2)'],

            }]
          },
          options: {
            plugins: {

                legend: {
                    display: false ,
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

        new Chart(tents, {
          type: 'bar',
          data: {
            labels: ['month'],
            datasets: [{

                barThickness: 100,
                maxBarThickness: 100,

                label: 'active properties',
                data: [{{count($tenanT)}}],
                borderWidth: 1,

                borderColor: ['rgba(237,227,74,0.8)'],
                backgroundColor: ['rgba(250, 247,200,0.2)'],

            }]
          },
          options: {
            plugins: {

                legend: {
                    display: false ,
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

        new Chart(rentdonut, {
          type: 'doughnut',
          data: {
            labels: ['Collected','Not-Collected'],
            datasets: [{
                data: [2,5],
                borderWidth: 1,

                // borderColor: ['rgba(237,227,74,0.8)'],
                backgroundColor: ['rgba(250, 247,200,100.5)','rgba(22, 100,203,0.7)'],
                hoverOffset:-10,

            }]
          },
          options: {
            // responsive:false,

          }
        });

        new Chart(rentline, {
          type: 'line',
          data: {
            labels: ['Collected','Not-Collected','Collected','Not-Collected','Collected','Not-Collected'],
            datasets: [{
                data: [2,5,4,3,5,0],
                borderWidth: 2,


                borderColor: ['rgba(237,227,74,0.8)'],
                backgroundColor: ['rgba(22, 100,203,0.7)'],
                hoverOffset:-10,

            }]
          },
          options: {
            // responsive:false,

          }
        });
    </script>


@endsection

