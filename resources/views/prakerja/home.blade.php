@extends('prakerja.template')

@section('title')
    Data Prakerja
@endsection

@section('content')
<div class="flex">
    <span class="flex items-start font-semibold text-xl">Data Prakerja</span>
    <a href="{{ route('tambah') }}" class="flex items-end text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Tambah</a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mx-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Telpon
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Pendidikan Terakhir
                </th>
                <th scope="col" class="px-6 py-3">
                    Foto
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prakerjas as $i=>$a )
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $a -> nama }}
                </th>
                <td class="px-6 py-4">
                    {{ $a -> email }}
                </td>
                <td class="px-6 py-4">
                    {{ $a -> telpon }}
                </td>
                <td class="px-6 py-4">
                    {{ $a -> alamat }}
                </td>
                <td class="px-6 py-4">
                    {{ $a -> pddkan }}
                </td>
                <td class="px-6 py-4">
                    <img src="{{ asset('foto/'.$a->foto) }}" alt="">
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-4">Edit</a>
                    <a href="{{ route('hapus',$a->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection