<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-3 gap-4">
            <div class="">
            <select id="country" name="country" onchange="window.location.href=this.options[this.selectedIndex].value;" autocomplete="country" class=" block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>حدد نوع المستند</option>
                  <option value="wallets">حافظة نقدية</option>
                  <option value="/bank">حافظة بنكية</option>
                  <option value="wallets/list">سند استلام شيك</option>
                  <option>اخلاء عهدة</option>
                </select>
            </div>
            <div></div>
            <div class="text-right">
                <h2 class="font-semibold text-gray-800 leading-tight">
                    {{ __($address) }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-4 m-0">
        <div class="max-w-7xl mx-auto sm:px-0 lg:px-0">
            @yield('content')
        </div>
    </div>
</x-app-layout>