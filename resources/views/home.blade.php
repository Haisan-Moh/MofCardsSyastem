@extends('dashboard')

@section('content')

<div class="h-full flex">
    <div class="max-w-7xl w-full sm:px-6 lg:px-8">
        <div class="p-3 py-1 w-full">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row bg-white shadow-sm rounded p-3">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-700">الايرادات البنكية</div>
                            <div class="font-bold text-lg">0.0<span class="text-left text-xs text-gray-400 pl-2">ريال</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row bg-white shadow-sm rounded p-3">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">الايرادات النقدية</div>
                            <div class="font-bold text-lg">290.4<span class="text-left text-xs text-gray-400 pl-2">ريال</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row bg-white shadow-sm rounded p-3">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-yellow-100 text-orange-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">اجمالي المتحصلات</div>
                            <div class="font-bold text-lg">310.0<span class="text-left text-xs text-gray-400 pl-2">ريال</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row bg-white shadow-sm rounded p-3">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
</svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">اجمالي العمليات</div>
                            <div class="font-bold text-lg">39<span class="text-left text-xs text-gray-400 pl-2">عملية</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="py-10 p-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-right">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                </svg>
            </div>
        </div>
    </div>
</div>


<style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
</style>

<div class="min-w-screen min-h-full flex justify-end p-3 py-0">
    <div class="max-w-1xl w-full  py-3 sm:px-6 lg:px-8">
        <div class="-mx-2 md:flex">
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-500 leading-tight">ايرادات مشتركة</h4>
                            <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">3,682</h3>
                            <p class="text-xs text-green-500 leading-tight">▲ 57.1%</p>
                        </div>
                        <div class="absolute bottom-0 inset-x-0">
                            <canvas id="chart1" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-500 leading-tight">ايرادات محلية</h4>
                            <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">11,427</h3>
                            <p class="text-xs text-red-500 leading-tight">▼ 42.8%</p>
                        </div>
                        <div class="absolute bottom-0 inset-x-0">
                            <canvas id="chart2" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2">
                <div class="rounded-lg shadow-sm mb-4">
                    <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                        <div class="px-3 pt-8 pb-10 text-center relative z-10">
                            <h4 class="text-sm uppercase text-gray-500 leading-tight">ايرادات مركزية</h4>
                            <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">8,028</h3>
                            <p class="text-xs text-green-500 leading-tight">▲ 8.2%</p>
                        </div>
                        <div class="absolute bottom-0 inset-x-0">
                            <canvas id="chart3" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    const chartOptions = {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        tooltips: {
            enabled: false,
        },
        elements: {
            point: {
                radius: 0
            },
        },
        scales: {
            xAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false
                }
            }],
            yAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false,
                    suggestedMin: 0,
                    suggestedMax: 10
                }
            }]
        }
    };
    //
    var ctx = document.getElementById('chart1').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [1, 2, 1, 3, 5, 4, 7],
            datasets: [{
                backgroundColor: "rgba(101, 116, 205, 0.1)",
                borderColor: "rgba(101, 116, 205, 0.8)",
                borderWidth: 2,
                data: [1, 2, 1, 3, 5, 4, 7],
            }, ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart2').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 3, 2, 9, 7, 7, 4],
            datasets: [{
                backgroundColor: "rgba(246, 109, 155, 0.1)",
                borderColor: "rgba(246, 109, 155, 0.8)",
                borderWidth: 2,
                data: [2, 3, 2, 9, 7, 7, 4],
            }, ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart3').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 5, 1, 3, 2, 6, 7],
            datasets: [{
                backgroundColor: "rgba(246, 153, 63, 0.1)",
                borderColor: "rgba(246, 153, 63, 0.8)",
                borderWidth: 2,
                data: [2, 5, 1, 3, 2, 6, 7],
            }, ],
        },
        options: chartOptions
    });
</script>

@endsection