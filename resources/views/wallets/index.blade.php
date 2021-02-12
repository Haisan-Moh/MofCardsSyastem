@extends('dashboard')
@section('content')

<!-- component -->
<div class="h-full flex">
    <div class="max-w-7xl w-full mx-4 py-2 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
            <div class="w-full lg:w-1/4 cursor-pointer">
                <div class="widget w-full p-3 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                الحوافظ الموردة
                            </div>
                            <div class="text-base font-bold">
                                23
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-file-earmark-lock2" viewBox="0 0 16 16">
                            <path d="M10 7v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V9.3c0-.627.46-1.058 1-1.224V7a2 2 0 1 1 4 0zM7 7v1h2V7a1 1 0 0 0-2 0z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4 cursor-pointer">
                <div class="widget w-full p-3 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                الحوافظ المعتمدة
                            </div>
                            <div class="text-base font-bold">
                                44
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4 cursor-pointer" onclick="window.location.href='';">
                <div class="widget w-full p-3 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                الحوافظ المقطوعة
                            </div>
                            <div class="text-base font-bold">
                                45
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4 cursor-pointer" onclick="window.location.href='/wallets/create'">

                <div class="widget w-full p-3 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                حافظة توريد نقدية
                            </div>
                            <div class="text-base font-bold">
                                حافظة جديدة
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                            <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <hr class="solid py-2">


        <div class="card shadow mb-2">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between dir-right">
                <h6 class="m-0 font-weight-900 text-muted">حوافظ جديدة</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header"></div>
                        <a class="dropdown-item" href="#">PDF</a>
                        <a class="dropdown-item" href="#">CSV</a>
                        <a class="dropdown-item" href="#">Excel</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/list" target="_blank">كافة الحوافظ</a>
                        <a class="dropdown-item" href="#">طباعة</a>
                    </div>
                </div>
            </div>

            <div class="card-body pull-right">
                <div class="">
                    <table id="example" class="table table-striped table-bordered dir-right text-right text-xs" style="width:100%">
                        <thead>
                            <tr>
                                <th>رقم الحافظة</th>
                                <th>المورد</th>
                                <th>الدافع</th>
                                <th>التاريخ</th>
                                <th>الحاله</th>
                                <th>المختص</th>
                                <th>البيان</th>
                                <th>#</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        @foreach ($wallets as $wallet)
                        <tbody>
                            <td>{{ $wallet->id }}</td>
                            <td>{{ $wallet->resource_id }}</td>
                            <td>{{ $wallet->taxpayer }}</td>
                            <td>{{ $wallet->created_at }}</td>
                            <td>{{ $wallet->status }}</td>
                            <td>{{ $wallet->user_id }}</td>
                            <td class=""><a href="javascript:void(0)" class="edit btn btn-info btn-sm py-0">عرض</a></td>
                            <td>
                                <a href="/wallets/{{ $wallet->id }}/edit" class="edit btn btn-success btn-sm py-0">تعديل</a>
                            </td>
                            <td>
                                <form action="/wallets/{{ $wallet->id }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type='submit' class="btn btn-danger btn-sm py-0" value="delete">delete</button>
                                </form>
                            </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection