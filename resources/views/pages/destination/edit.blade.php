@extends('layouts.app')
@section('title', 'Ubah Destinasi')
@section('content')
<main class="w-full">
    <h1 class="font-bold text-3xl">Edit Destinasi</h1>
    <div class="bg-white shadow-sm rounded-xl mt-4">
        <form action="{{ route('destinations.update', $destination->id) }}" method="POST" enctype="multipart/form-data" class="">
            <div class="grid grid-cols-6 ">
                @csrf
                @method('PUT')
                <div class="px-5 pt-5 col-span-6">
                    <label class="font-weight-bold" for="name">Nama Destinasi</label> <br>
                    <input type="text" class="w-full border-gray-400 rounded @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', $destination->name) }}" placeholder="Masukkan Nama Destinasi">

                    <!-- error message untuk title -->
                    @error('name')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="px-5 pt-5 col-span-6">
                    <label class="font-weight-bold" for="description">Description</label> <br>
                    <textarea class="w-full border-gray-400 rounded @error('description') is-invalid @enderror" name="description" id="description" rows="5" placeholder="Masukkan Description Destinasi">{{ old('description', $destination->description) }}</textarea>

                    <!-- error message untuk description -->
                    @error('description')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="px-5 pt-5 col-span-3  ">
                    <label class="font-weight-bold">Image</label>
                    <input type="file" class="w-full border-gray-400 rounded @error('image') is-invalid @enderror" name="image">

                    <!-- error message untuk image -->
                    @error('image')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="px-5 pt-5 col-span-6 flex justify-end">
                <button type="submit" class="bg-blue-500 px-3 py-2 rounded me-3 mb-3 text-white w-full">Update</button>
                <button type="reset" class="bg-gray-400 px-3 py-2 rounded mb-3 text-white w-full">Reset</button>
            </div>
        </form>
    </div>
</main>
@endsection
