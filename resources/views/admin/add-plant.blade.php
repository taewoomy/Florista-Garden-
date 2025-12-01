@extends('layouts.main')

@section('content')
<div class="pt-24 px-4 md:px-16 max-w-4xl mx-auto">

    <a href="/admin/dashboard" class="text-green-800 font-semibold hover:underline">
        ← Kembali ke Dashboard
    </a>

    <h1 class="text-3xl font-bold text-green-900 mt-4">Tambah Tanaman Baru</h1>
    <p class="text-gray-600 mb-8">Isi data tanaman dengan lengkap.</p>

    <div class="bg-white p-6 rounded-xl shadow-lg">

        <form>

            <!-- Nama Tanaman -->
<label class="font-semibold text-green-900">Nama Tanaman</label>
<input id="nama" type="text" class="w-full mt-1 mb-1 border p-3 rounded-lg focus:outline-green-700" placeholder="Contoh: Lidah Buaya">
<p class="text-red-600 text-sm mb-4 hidden" id="error-nama">Nama Tanaman wajib diisi.</p>

<!-- Nama Latin -->
<label class="font-semibold text-green-900">Nama Latin</label>
<input id="latin" type="text" class="w-full mt-1 mb-1 border p-3 rounded-lg focus:outline-green-700" placeholder="Contoh: Aloe vera">
<p class="text-red-600 text-sm mb-4 hidden" id="error-latin">Nama Latin wajib diisi.</p>

<!-- Jenis Tanaman -->
<label class="font-semibold text-green-900">Jenis</label>
<select id="jenis" class="w-full mt-1 mb-1 border p-3 rounded-lg focus:outline-green-700">
    <option value="">Pilih jenis...</option>
    <option>Tanaman Hias</option>
    <option>Tanaman Obat</option>
    <option>Tanaman Kebun</option>
</select>
<p class="text-red-600 text-sm mb-4 hidden" id="error-jenis">Silakan pilih jenis tanaman.</p>

<!-- Gambar -->
<label class="font-semibold text-green-900">Gambar Tanaman</label>
<input id="gambar" type="file" class="w-full mt-1 mb-1 border p-3 rounded-lg">
<p class="text-red-600 text-sm mb-4 hidden" id="error-gambar">Gambar wajib diunggah.</p>

<!-- Deskripsi -->
<label class="font-semibold text-green-900">Deskripsi</label>
<textarea id="deskripsi" class="w-full mt-1 mb-1 border p-3 rounded-lg h-32 resize-none focus:outline-green-700"></textarea>
<p class="text-red-600 text-sm mb-4 hidden" id="error-deskripsi">Deskripsi wajib diisi.</p>

<!-- Kebutuhan Air -->
<label class="font-semibold text-green-900">Kebutuhan Air</label>
<textarea id="air" class="w-full mt-1 mb-1 border p-3 rounded-lg h-24 resize-none focus:outline-green-700"></textarea>
<p class="text-red-600 text-sm mb-4 hidden" id="error-air">Kebutuhan air wajib diisi.</p>

<!-- Kebutuhan Cahaya -->
<label class="font-semibold text-green-900">Kebutuhan Cahaya</label>
<textarea id="cahaya" class="w-full mt-1 mb-1 border p-3 rounded-lg h-24 resize-none focus:outline-green-700"></textarea>
<p class="text-red-600 text-sm mb-4 hidden" id="error-cahaya">Kebutuhan cahaya wajib diisi.</p>

<!-- Tips Perawatan -->
<label class="font-semibold text-green-900">Tips Perawatan</label>
<textarea id="tips" class="w-full mt-1 mb-1 border p-3 rounded-lg h-24 resize-none focus:outline-green-700"></textarea>
<p class="text-red-600 text-sm mb-6 hidden" id="error-tips">Tips Perawatan wajib diisi.</p>


            <!-- Submit -->
            <button type="submit"
                class="w-full bg-green-700 hover:bg-green-800 text-white py-3 rounded-lg font-semibold shadow-md">
                Simpan Tanaman
            </button>

        </form>

    </div>

    <script>
document.querySelector("form").addEventListener("submit", function(e) {
    e.preventDefault(); // Cegah submit asli (karena belum backend)

    let valid = true;

    const fields = [
        { id: "nama", error: "error-nama" },
        { id: "latin", error: "error-latin" },
        { id: "jenis", error: "error-jenis" },
        { id: "gambar", error: "error-gambar" },
        { id: "deskripsi", error: "error-deskripsi" },
        { id: "air", error: "error-air" },
        { id: "cahaya", error: "error-cahaya" },
        { id: "tips", error: "error-tips" },
    ];

    fields.forEach(f => {
        const el = document.getElementById(f.id);
        const err = document.getElementById(f.error);

        // Cek input kosong
        if ((el.type === "file" && el.files.length === 0) || (el.value.trim() === "")) {
            err.classList.remove("hidden");
            valid = false;
        } else {
            err.classList.add("hidden");
        }
    });

    if (valid) {
        alert("✔ Semua kolom sudah diisi! (Form siap diproses backend)");
    }
});
</script>

</div>
@endsection
