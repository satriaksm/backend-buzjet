@extends('layouts.app')
@section('title', 'Transportasi')
@section('content')
    <main class="w-full">
        <div class="flex justify-between">
            <h1 class="font-bold text-3xl">Transportasi</h1>
            <div class="flex">
                <form action="" method="GET">
                    <input type="text" class="me-5 rounded-lg  border-gray-200" name="search" placeholder="Search" value="{{ request('search') }}">
                </form>
                <button onclick="location.href='{{ route('transportations.create') }}'" class="bg-blue-500 p-2 rounded text-white flex"><svg class="pe-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>Add Transportation</button></div>
        </div>
        <table class="mt-4 table-auto bg-white shadow rounded text-sm w-full">
            <thead class="bg-blue-500">
                <tr>
                    <th scope="col" class="text-white p-3 text-left">No</th>
                    <th scope="col" class="text-white p-3 text-left ">Nama</th>
                    <th scope="col" class="text-white p-3 text-left">Tipe</th>
                    <th scope="col" class="text-white p-3 text-left">Perusahaan</th>
                    <th scope="col" style="width: 15%" class="text-white p-3 rounded-tr text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transportations as $transportation)
                    <tr class="border-b">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">{{ $transportation->name }}</td>
                        <td class="p-3">{{ $transportation->type }}</td>
                        <td class="p-3">{{ $transportation->company }}</td>
                        <td class="p-3">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('transportations.destroy', $transportation->id) }}" method="POST" class="my-3">
                                <a href="{{ route('transportations.edit', $transportation->id) }}" class="bg-amber-500 rounded px-3 py-2 me-3 text-white">Ubah</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 rounded px-3 py-2 me-3 text-white">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                <div class="bg-gray-400 text-white rounded px-3 py-2 mt-3">
                    Data Destinasi belum Tersedia.
                </div>
                @endforelse
            </tbody>
        </table>
        {{-- {{ $transportation->links('components.pagination-table') }} --}}
    </main>
@endsection


