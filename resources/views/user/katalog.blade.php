@extends('layouts.main')

@section('content')

<div class="pt-24 px-4 md:px-16">

    <div class="text-center mb-8">
        <h1 class="font-['Times_New_Roman'] font-bold text-4xl text-green-800">Katalog Tanaman</h1>
        <p class="text-gray-600 mt-2">Jelajahi koleksi tanaman kami</p>
    </div>

    <!-- Search / Filter -->
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-4 
                flex flex-col md:flex-row gap-4 items-center md:items-stretch">

        <!-- SEARCH -->
        <div class="flex items-center flex-1 gap-3 bg-gray-100 px-4 py-2 rounded-lg w-full">
            <i class="fas fa-search text-gray-500 text-xl"></i>
            <input id="searchInput" type="text" placeholder="Cari tanaman..." 
                class="w-full bg-transparent focus:outline-none">
        </div>

        <!-- FILTER -->
        <select id="filterSelect"
            class="w-full md:w-48 bg-gray-100 px-4 py-2 rounded-lg focus:outline-none">
            <option value="all">Semua Jenis</option>
            <option value="tanaman-hias">Tanaman Hias</option>
            <option value="obat">Tanaman Obat</option>
            <option value="buah">Tanaman Kebun</option>
        </select>
    </div>

    <p class="text-center text-gray-600 mt-4" id="countText">Menampilkan 4 tanaman</p>

    <!-- Grid -->
    <div id="cardContainer" 
         class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">

        <!-- Tanaman 1 -->
        <div class="bg-white shadow-md rounded-xl overflow-hidden card"
             data-category="herbal" data-name="lidah buaya">
            <img src="/img/Lidah Buaya.jpg" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg">Lidah Buaya</h3>
                <p class="text-gray-500 text-sm italic">Aloe Vera</p>
                <a href="/detail" 
                   class="block mt-4 bg-green-300 text-green-800 text-center py-2 rounded-lg font-semibold">
                    Lihat Detail
                </a>
            </div>
        </div>

        <!-- Tanaman 2 -->
        <div class="bg-white shadow-md rounded-xl overflow-hidden card"
             data-category="tanaman-hias" data-name="monstera deliciosa">
            <img src="/img/Monsterra.jpg" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg">Monstera deliciosa</h3>
                <p class="text-gray-500 text-sm italic">Monstera</p>
                <a href="/detail" 
                   class="block mt-4 bg-green-300 text-green-800 text-center py-2 rounded-lg font-semibold">
                    Lihat Detail
                </a>
            </div>
        </div>

        <!-- Tanaman 3 -->
        <div class="bg-white shadow-md rounded-xl overflow-hidden card"
             data-category="herbal" data-name="kumis kucing">
            <img src="/img/Kumis Kucing.jpg" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg">Kumis Kucing</h3>
                <p class="text-gray-500 text-sm italic">Cat’s whiskers</p>
                <a href="/detail" 
                   class="block mt-4 bg-green-300 text-green-800 text-center py-2 rounded-lg font-semibold">
                    Lihat Detail
                </a>
            </div>
        </div>

        <!-- Tanaman 4 -->
        <div class="bg-white shadow-md rounded-xl overflow-hidden card"
             data-category="buah" data-name="tomat">
            <img src="/img/tomat.jpg" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg">Tomat</h3>
                <p class="text-gray-500 text-sm italic">Solanum lycopersicum</p>
                <a href="/detail" 
                   class="block mt-4 bg-green-300 text-green-800 text-center py-2 rounded-lg font-semibold">
                    Lihat Detail
                </a>
            </div>
        </div>

    </div>
</div>

<!-- SCRIPT FILTER -->
<script>
    const searchInput = document.getElementById("searchInput");
    const filterSelect = document.getElementById("filterSelect");
    const cards = document.querySelectorAll(".card");
    const countText = document.getElementById("countText");

    function filterCards() {
        let keyword = searchInput.value.toLowerCase();
        let filter = filterSelect.value;
        let count = 0;

        cards.forEach(card => {
            let name = card.getAttribute("data-name");
            let category = card.getAttribute("data-category");

            let matchKeyword = name.includes(keyword);
            let matchCategory = (filter === "all" || filter === category);

            if (matchKeyword && matchCategory) {
                card.style.display = "block";
                count++;
            } else {
                card.style.display = "none";
            }
        });

        countText.innerHTML = `Menampilkan <b>${count}</b> tanaman`;
    }

    searchInput.addEventListener("input", filterCards);
    filterSelect.addEventListener("change", filterCards);
</script>

@endsection
