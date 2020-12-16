<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Periode') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Tambah Periode</a>
                <table class="table-auto w-full mt-5">
                    <tr>
                        <th class="border px-4 py-2">No</th>
                        <th class="border px-4 py-2">Tahun Periode</th>
                        <th class="border px-4 py-2">Tahun Akademik</th>
                        <th class="border px-4 py-2">Periode Pengisian</th>
                        <th class="border px-4 py-2">Status</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
