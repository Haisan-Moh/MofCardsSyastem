@extends('dashboard')
@section('content')

<div class="py-2 px-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-2 bg-white border-b border-gray-200">
                <form method="POST" action="/receipts">
                    @csrf
                    <div class="flex flex-col md:flex-row-reverse dir-right text-right text-sm text-gray-900 border-b-2 border-gray-200 py-1 mb-4">
                        <div class="flex-auto">
                            <label class="text-gray-500 pl-2">الدافع</label>
                            <input name="taxpayer" class="border-0 py-0" type="text" value="{{ $wallet->taxpayer }}" readonly>
                        </div>
                        <div class="flex-auto">
                            <label class="text-gray-500 pl-2 text-right">الخزينة</label>
                            <input name="box_no" class="border-0 py-0" type="text" value="{{ $wallet->box_no }}" readonly>
                        </div>
                        <div class="flex-auto">
                            <label class="text-gray-500 pl-2">المورد</label>
                            <input name="resource_id" class="border-0 py-0" type="text" value="{{ $wallet->resource_id }}" readonly>
                        </div>
                        <div class="flex-auto">
                            <label class="text-gray-500 pl-2">رقم المرجع</label>
                            <input name="order_no" class="border-0 py-0" type="text" value="{{ $wallet->order_no }}" readonly>
                        </div>
                        <div class="flex-auto">
                            <label class="text-gray-500 pl-2">رقم الحافظة</label>
                            <input name="wallet_id" class="border-0 py-0" type="text" value="{{ $wallet->id }}" readonly>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row-reverse text-gray-500 text-xs">
                        <div class="flex-auto mx-2">
                            <input type="number" name="cash" placeholder="المبلغ"  class="w-full text-xs text-right border border-gray-300 rounded-sm px-4 py-2 outline-none transition-colors duration-150 ease-in-out focus:border-blue-400" />
                        </div>
                        <div class="flex-auto mx-2">
                            <select name="section_no" class="block text-xs appearance-none w-full bg-white rounded-sm pl-4 py-2 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400">
                                <option>الباب</option>
                                <option value="1">الباب الاول</option>
                                <option value="2">الباب الثاني</option>
                                <option value="3">الباب الثالث</option>
                                <option value="4">الباب الرابع</option>
                            </select>
                        </div>
                        <div class="flex-auto mx-2">
                            <select name="chap_no" class="block text-xs appearance-none w-full bg-white rounded-sm pl-4 py-2 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400">
                                <option>الفصل</option>
                                <option value="1">الفصل الاول</option>
                                <option value="2">الفصل الثاني</option>
                                <option value="3">الفصل الثالث</option>
                            </select>
                        </div>
                        <div class="flex-auto mx-2">
                            <select name="item_no" class="block text-xs appearance-none w-full bg-white rounded-sm pl-4 py-2 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400">
                                <option>البند</option>
                                <option value="1">البند الاول</option>
                                <option value="2">البند الثاني</option>
                                <option value="3">البند الثالث</option>
                            </select>
                        </div>
                        <div class="flex-auto mx-2">
                            <select name="type_no" class="block text-xs appearance-none w-full bg-white rounded-sm pl-4 py-2 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400">
                                <option>النوع</option>
                                <option value="1">الاول</option>
                                <option value="2">الثاني</option>
                                <option value="3">الثالث</option>
                            </select>
                        </div>
                        <div class="flex-auto mx-2">
                            <input type="textarea" name="note" placeholder="البيان" class="w-full text-right border border-gray-300 rounded-sm px-4 py-2 outline-none transition-colors duration-150 ease-in-out focus:border-blue-400" />
                        </div>
                        <div class="flex-auto mx-2 py-1">
                            <button type="submit" class="inline-block rounded-sm font-medium border border-solid cursor-pointer text-center text-lg py-0 px-12 text-white bg-green-400 border-green-400 hover:bg-green-600 hover:border-green-600">
                                Add
                            </button>
                        </div>
                    </div>
                </form>

                @if($wallet->receipts->count())

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col mt-4 px-3">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden p-3 border-b border-gray-200 sm:rounded-lg">
                                <table id="example" class="table table-striped table-bordered dir-right text-right text-xs" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>المبلغ</th>
                                            <th>الباب</th>
                                            <th>الفصل</th>
                                            <th>البند</th>
                                            <th>النوع</th>
                                            <th>البيان</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($wallet->receipts as $indexKey => $receipt)
                                        <tr>
                                            <td>{{ $indexKey+1 }}</td>
                                            <td>{{ $receipt->cash }}</td>
                                            <td>{{ $receipt->section_no }}</td>
                                            <td>{{ $receipt->chap_no }}</td>
                                            <td>{{ $receipt->item_no }}</td>
                                            <td>{{ $receipt->type_no }}</td>
                                            <td>{{ $receipt->note }}</td>
                                            <td>
                                                <a href="javascript:void(0)" class="edit btn btn-success btn-sm py-0">تعديل</a>
                                            </td>
                                            <td>
                                                <form action="/receipts/{{ $receipt->id }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type='submit' class="btn btn-danger btn-sm py-0" value="حذف">حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>{{ $receipt->sum('cash') }}</th>
                                            <th colspan="7" class="bg-gray-300">الاجمالي</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                @endif

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col mt-4">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            </div>
                        </div>
                    </div>
                </div>


                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col mt-2">
                    <div class="-my-1 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-1 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="flex-auto mx-2 py-1">
                                <form method="Get" action="/wallets/{{ $wallet->id }}/edit">
                                    @csrf
                                    <button type="submit" class="inline-block rounded-sm font-medium border border-solid cursor-pointer text-center text-lg py-1 px-12 text-white bg-green-700 border-green-700 hover:bg-green-400 hover:border-green-400">
                                        اصدار حافظة
                                    </button>
                                    <button type="submit" class="inline-block rounded-sm font-medium border border-solid cursor-pointer text-center text-lg py-1 px-12 text-white bg-gray-500 border-gray-500 hover:bg-gray-400 hover:border-gray-400">
                                        الغاء
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection