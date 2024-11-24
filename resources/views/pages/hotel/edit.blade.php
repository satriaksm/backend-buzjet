@extends('layouts.app')
@section('title', 'Ubah Hotel')
@section('content')
<main class="w-full">
    <h1 class="font-bold text-3xl">Ubah Hotel</h1>
                <div class="bg-white shadow-sm rounded-xl mt-4">
                        <form action="{{ route('hotels.update', $hotel->id) }}" method="POST" enctype="multipart/form-data" class="">
                            <div class="grid grid-cols-6 ">
                                @csrf
                                @method('PUT')
                                <div class="px-5 pt-5 col-span-6">
                                    <label class="font-weight-bold" for="name">Nama Hotel</label> <br>
                                    <input type="text" class="w-full border-gray-400 rounded @error('title') is-invalid @enderror" name="name" id="name" value="{{ old('name', $hotel->name) }}" placeholder="Masukkan Nama Destinasi">

                                    <!-- error message untuk title -->
                                    @error('name')
                                        <div class="alert alert-danger mt-2">d
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="px-5 pt-5 col-span-6">
                                    <label class="font-weight-bold" for="destination_id">Destinasi</label> <br>
                                    <select name="destination_id" id="destination_id">
                                        <option value="">Pilih Destinasi</option>
                                        @foreach ($destinations as $destination)
                                            <option value="{{ $destination->id }}" @if($destination->id == $hotel->destination_id) selected @endif>
                                            {{ $destination->name }}
                                        @endforeach
                                    </select>
                                    <!-- error message untuk title -->
                                    @error('destination_id')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="px-5 pt-5 col-span-6">
                                    <label class="font-weight-bold" for="description">Description</label> <br>
                                    <textarea class="w-full border-gray-400 rounded @error('description') is-invalid @enderror" name="description" id="description" rows="5" placeholder="Masukkan Description Destinasi">{{ old('description', $hotel->description) }}</textarea>

                                    <!-- error message untuk description -->
                                    @error('description')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                            <div class="px-5 pt-5 col-span-6 flex justify-end">
                                <button type="submit" class="bg-blue-500 px-3 py-2 rounded me-3 mb-3 text-white w-full">Save</button>
                                <button type="reset" class="bg-gray-400 px-3 py-2 rounded mb-3 text-white w-full">Reset</button>
                            </div>
                        </form>
                    </div>
</main>
@endsection
