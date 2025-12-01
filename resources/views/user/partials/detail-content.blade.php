@php
    // DUMMY HANYA UNTUK PREVIEW FRONTEND
    // HAPUS NANTI KALAU BACKEND SUDAH ADA
    if (!isset($plant)) {
        $plant = (object)[
            'name' => 'Tomat',
            'latin' => 'Solanum lycopersicum',
            'image' => 'plants/Tomat.jpg',
            'description' => 'Tanaman tomat tumbuh baik di iklim hangat dengan tanah gembur dan drainase yang baik. Tanaman ini membutuhkan penyiraman teratur serta sinar matahari penuh agar berbuah lebat.',
            'water' => 'Tanaman tomat sebaiknya disiram 1–2 kali sehari, terutama pagi dan sore hari. Jika cuaca panas, penyiraman bisa lebih sering.',
            'light' => 'Tanaman tomat membutuhkan sinar matahari penuh selama 6–8 jam setiap hari agar dapat tumbuh subur.',
            'care' => 'Gunakan media pot gembur, tambahkan pupuk organik, dan pastikan sinar matahari cukup.'
        ];
    }
@endphp

<div class="bg-[#f5fbee] min-h-screen py-10">

    <!-- Tombol kembali -->
    <a href="/katalog" class="flex items-center text-green-800 mb-8 font-semibold hover:underline">
        <i class="fas fa-arrow-left mr-2"></i> Kembali ke katalog
    </a>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- GAMBAR TANAMAN -->
        <div>
            <img 
                src="{{ asset('storage/' . $plant->image) }}" 
                class="w-full h-[380px] md:h-[450px] object-cover rounded-xl shadow-md"
                alt="{{ $plant->name }}"
            >
        </div>

        <!-- DETAIL -->
        <div>
            <!-- Nama -->
            <h1 class="font-['Times_New_Roman'] text-4xl font-bold text-green-800">{{ $plant->name }}</h1>
            <p class="text-gray-500 mt-1">{{ $plant->latin }}</p>

            <!-- Deskripsi -->
            <h2 class="font-['Times_New_Roman'] text-2xl font-bold text-green-900 mt-6">Deskripsi</h2>
            <p class="text-gray-700 leading-relaxed mt-2">
                {{ $plant->description }}
            </p>

            <!-- INFORMASI -->
            <div class="space-y-4 mt-8">

                <!-- Kebutuhan Air -->
                <div class="border rounded-xl p-4 flex gap-4 items-start bg-blue-50 border-blue-200">
                    <div class="h-10 w-10 rounded-full bg-blue-200 flex items-center justify-center">
                        <i class="fas fa-tint text-blue-700 text-xl"></i>
                    </div>

                    <div>
                        <h3 class="font-['Times_New_Roman'] font-bold text-green-900">Kebutuhan Air</h3>
                        <p class="text-gray-700 text-sm leading-relaxed mt-1">
                            {{ $plant->water }}
                        </p>
                    </div>
                </div>

                <!-- Kebutuhan Cahaya -->
                <div class="border rounded-xl p-4 flex gap-4 items-start bg-yellow-50 border-yellow-200">
                    <div class="h-10 w-10 rounded-full bg-yellow-200 flex items-center justify-center">
                        <i class="fas fa-sun text-yellow-600 text-xl"></i>
                    </div>

                    <div>
                        <h3 class="font-['Times_New_Roman'] font-bold text-green-900">Kebutuhan Cahaya</h3>
                        <p class="text-gray-700 text-sm leading-relaxed mt-1">
                            {{ $plant->light }}
                        </p>
                    </div>
                </div>

                <!-- Tips Perawatan -->
                <div class="border rounded-xl p-4 flex gap-4 items-start bg-green-50 border-green-200">
                    <div class="h-10 w-10 rounded-full bg-green-200 flex items-center justify-center">
                        <i class="fas fa-seedling text-green-700 text-xl"></i>
                    </div>

                    <div>
                        <h3 class="font-['Times_New_Roman'] font-bold text-green-900">Tips Perawatan</h3>
                        <p class="text-gray-700 text-sm leading-relaxed mt-1">
                            {{ $plant->care }}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
