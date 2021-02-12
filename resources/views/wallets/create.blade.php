@extends('dashboard')

@section('content')

<div class="py-4 px-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-right">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-white border-b border-gray-200">

                <div class="flex flex-row-reverse items-center border-b-2 border-gray-200  mb-4">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                            <path d="M3.86 8.753l5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                        </svg>
                    </div>
                    <div class="">
                        <p>حافظة جديدة</p>
                    </div>
                    <div class="px-2">
                        <p>حافظة توريد نقدية للخزينة -</p>
                    </div>
                </div>

                <form method="POST" action="/wallets">
                    @csrf

                    <div class="grid grid-col-1 md:grid-flow-col gap-4">

                        <div class="md:col-span-4">
                            <label class="text-sm text-gray-600 inline-block" for="color">اسم دافع النقدية</label>
                            <div class="flex relative w-full">
                                <input type="text" name="taxpayer" class="w-full text-right border border-gray-300 rounded-sm px-4 py-2 outline-none transition-colors duration-150 ease-in-out focus:border-blue-400">
                            </div>
                        </div>

                        <div class="">
                            <label class="text-sm text-gray-600 inline-block" for="color">الخزينة المورد اليها</label>
                            <div class="flex relative w-full">
                                <select name="box_no" class="block appearance-none w-full bg-white rounded-sm pl-4 py-2 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400">
                                    <option>Select...</option>
                                    @foreach ($boxes as $box)
                                    <option value="{{ $box->id }}">{{ $box->box_name }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-blue-400">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="text-sm text-gray-600 inline-block" for="color">نوع المورد</label>
                            <div class="flex relative w-full">
                                <select name="resource_id" class="block appearance-none w-full bg-white rounded-sm pl-4 py-2 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400">
                                    <option>Select...</option>
                                    @foreach ($resources as $resource)
                                    <option value="{{ $resource->id }}">{{ $resource->resource_name }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-blue-400">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="text-sm text-gray-600 inline-block" for="color">الرقم المرجعي</label>
                            <div class="flex relative w-full">
                                <input type="number" name="order_no" class="w-full text-right border border-gray-300 rounded-sm px-4 py-2 outline-none transition-colors duration-150 ease-in-out focus:border-blue-400" />
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                        <div>
                            <button type="submit" class="group relative w-full flex justify-center py-1 px-4 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-blue-200 group-hover:text-blue-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                    </svg>
                                </span>
                                انشاء حافظة
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection