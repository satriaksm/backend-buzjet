@extends('layouts.app')
@section('title', 'Ubah Transportasi')
@section('content')
<main class="w-full">
    <h1 class="font-bold text-3xl">Ubah Transportasi</h1>
                <div class="bg-white shadow-sm rounded-xl mt-4">
                        <form action="{{ route('transportations.update', $transportation->id) }}" method="POST" enctype="multipart/form-data" class="">
                            <div class="grid grid-cols-6 ">
                                @csrf
                                @method('PUT')
                                <div class="px-5 pt-5 col-span-6">
                                    <label class="font-weight-bold" for="name">Nama Transportasi</label> <br>
                                    <input type="text" class="w-full border-gray-400 rounded @error('title') is-invalid @enderror" name="name" id="name" value="{{ old('name', $transportation->name) }}" placeholder="Masukkan Nama Destinasi">

                                    <!-- error message untuk title -->
                                    @error('name')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="px-5 pt-5 col-span-6">
                                    <label class="font-weight-bold" for="type">Tipe</label> <br>
                                    <input type="text" class="w-full border-gray-400 rounded @error('title') is-invalid @enderror" name="type" id="type" value="{{ old('name', $transportation->type) }}" placeholder="Masukkan Nama Destinasi">

                                    <!-- error message untuk title -->
                                    @error('type')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="px-5 pt-5 col-span-6">
                                    <label class="font-weight-bold" for="company">Company</label> <br>
                                    <input type="text" class="w-full border-gray-400 rounded @error('title') is-invalid @enderror" name="company" id="company" value="{{ old('name', $transportation->company) }}" placeholder="Masukkan Nama Destinasi">

                                    <!-- error message untuk title -->
                                    @error('company')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="px-5 pt-5 col-span-6 flex justify-end">
                                <button type="submit" class="bg-blue-500 px-3 py-2 rounded me-3 mb-3 text-white w-full">Save</button>
                                <button type="reset" class="bg-gray-400 px-3 py-2 rounded mb-3 text-white w-full">Reset</button>
                            </div>
                        </form>
                    </div>
</main>
@endsection
