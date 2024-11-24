@extends('layouts.app')
@section('title', 'Buat Paket')
@section('content')
<main class="w-full" x-data="{
    destinations: [
        {
            destination_id: '',
            hotel_id: '',
            hotels: []
        }
    ],
    async getHotels(destinationId, index) {
        if (!destinationId) {
            this.destinations[index].hotels = [];
            this.destinations[index].hotel_id = '';
            return;
        }
        try {
            const response = await fetch(`/api/hotels/${destinationId}`);
            const hotels = await response.json();
            this.destinations[index].hotels = hotels;
            this.destinations[index].hotel_id = '';
        } catch (error) {
            console.error('Error:', error);
            this.destinations[index].hotels = [];
        }
    },
    addDestination() {
        this.destinations.push({
            destination_id: '',
            hotel_id: '',
            hotels: []
        });
    },
    removeDestination(index) {
        this.destinations = this.destinations.filter((_, i) => i !== index);
    }
}">
    <h1 class="font-bold text-3xl">Buat Paket</h1>
    <div class="bg-white shadow-sm rounded-xl mt-4">
        <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-12 gap-4">
                <!-- Nama Paket -->
                <div class="px-5 pt-5 col-span-12">
                    <label class="font-weight-bold" for="name">Nama Paket</label>
                    <input type="text"
                           class="w-full border-gray-400 rounded @error('name') is-invalid @enderror"
                           name="name"
                           value="{{ old('name') }}"
                           placeholder="Masukkan Nama paket">
                    @error('name')
                        <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Harga -->
                <div class="px-5 pt-5 col-span-12">
                    <label class="font-weight-bold" for="price">Harga</label>
                    <input type="number"
                           class="w-full border-gray-400 rounded @error('price') is-invalid @enderror"
                           name="price"
                           value="{{ old('price') }}"
                           placeholder="Masukkan harga paket">
                    @error('price')
                        <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Transportasi -->
                <div class="px-5 pt-5 col-span-12">
                    <label class="font-weight-bold" for="transportation_id">Transportasi</label>
                    <select name="transportation_id"
                            class="w-full border-gray-400 rounded @error('transportation_id') is-invalid @enderror">
                        <option value="">Pilih Transportasi</option>
                        @foreach ($transportations as $transportation)
                            <option value="{{ $transportation->id }}"
                                    {{ old('transportation_id') == $transportation->id ? 'selected' : '' }}>
                                {{ $transportation->name }} - {{ $transportation->company }}
                            </option>
                        @endforeach
                    </select>
                    @error('transportation_id')
                        <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Destinasi Section -->
                <div class="px-5 pt-5 col-span-12">
                    <div class="flex justify-between items-center mb-4">
                        <label class="font-weight-bold text-lg">Destinasi</label>
                        <button type="button"
                                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
                                @click="addDestination">
                            + Tambah Destinasi
                        </button>
                    </div>

                    <template x-for="(dest, index) in destinations" :key="index">
                        <div class="border rounded-lg p-4 mb-4 bg-gray-50">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Destinasi Select -->
                                <div>
                                    <label class="font-weight-bold">
                                        Destinasi <span x-text="index + 1"></span>
                                    </label>
                                    <select :name="'destinations['+index+'][destination_id]'"
                                            x-model="dest.destination_id"
                                            @change="getHotels($event.target.value, index)"
                                            class="w-full border-gray-400 rounded">
                                        <option value="">Pilih Destinasi</option>
                                        @foreach ($destinations as $destination)
                                            <option value="{{ $destination->id }}">
                                                {{ $destination->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Hotel Select -->
                                <div>
                                    <label class="font-weight-bold">
                                        Hotel untuk Destinasi <span x-text="index + 1"></span>
                                    </label>
                                    <select :name="'destinations['+index+'][hotel_id]'"
                                            x-model="dest.hotel_id"
                                            class="w-full border-gray-400 rounded">
                                        <option value="">
                                            <span x-text="dest.destination_id ? 'Pilih Hotel' : 'Pilih Destinasi dulu'"></span>
                                        </option>
                                        <template x-for="hotel in dest.hotels" :key="hotel.id">
                                            <option :value="hotel.id" x-text="hotel.name"></option>
                                        </template>
                                    </select>
                                </div>
                            </div>

                            <!-- Remove Button -->
                            <template x-if="index > 0">
                                <button type="button"
                                        class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
                                        @click="removeDestination(index)">
                                    Hapus Destinasi
                                </button>
                            </template>
                        </div>
                    </template>
                </div>

                <!-- Submit Buttons -->
                <div class="px-5 pt-5 col-span-12 grid grid-cols-2 gap-4 mb-5">
                    <button type="submit" class="bg-blue-500 px-3 py-2 rounded text-white">
                        Simpan
                    </button>
                    <button type="reset" class="bg-gray-400 px-3 py-2 rounded text-white">
                        Reset
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection
