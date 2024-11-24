@extends('layouts.app')
@section('title', 'Destinasi')
@section('content')
    <main class="w-full">
        <div class="flex justify-between">
            <h1 class="font-bold text-3xl">Destinasi</h1>
            <div class="flex">
                <form action="" method="GET">
                    <input type="text" class="me-5 rounded-lg  border-gray-200" name="search" placeholder="Search" value="{{ request('search') }}">
                </form>
                <button onclick="location.href='{{ route('destinations.create') }}'" class="bg-blue-500 p-2 rounded text-white flex"><svg class="pe-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>Add Destination</button></div>
        </div>
        <table class="mt-4 table-auto bg-white shadow rounded text-sm w-full">
            <thead class="bg-blue-500">
                <tr>
                    <th scope="col" class="text-white p-3 text-left">No</th>
                    <th scope="col" class="text-white p-3 ps-6 text-center">Image</th>
                    <th scope="col" class="text-white p-3 text-left ">Nama</th>
                    <th scope="col" class="text-white p-3 text-left">Deskripsi</th>
                    <th scope="col" style="width: 15%" class="text-white p-3 rounded-tr text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($destinations as $destination)
                    <tr class="border-b">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="ps-6 p-3">
                            <img src="{{ asset('/storage/destinations/'.$destination->image) }}" class="rounded mx-auto" style="width: 150px" alt="{{ $destination->name }}">
                        </td>
                        <td class="p-3">{{ $destination->name }}</td>
                        <td class="p-3">{{ $destination->description }}</td>
                        <td class="p-3">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('destinations.destroy', $destination->id) }}" method="POST" class="my-3">
                                <a href="{{ route('destinations.edit', $destination->id) }}" class="bg-amber-500 rounded px-3 py-2 me-3 text-white">Ubah</a>
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
        {{-- {{ $destination->links('components.pagination-table') }} --}}
    </main>
@endsection


