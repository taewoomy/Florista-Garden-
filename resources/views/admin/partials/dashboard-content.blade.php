
<div id="admin-content">
    <!-- seluruh dashboard kamu di sini -->
<div class="max-w-6xl mx-auto">
<div class="flex justify-between items-center">
        <div>
            <h1 class="font-['Times_New_Roman'] text-4xl font-bold text-green-900">Dashboard Admin</h1>
            <p class="text-gray-700 mt-1 mb-6">Kelola Data Tanaman</p>
        </div>

        <!-- Tombol Tambah Tanaman -->
        <a href="/admin/tanaman/tambah"
           class="bg-green-700 hover:bg-green-800 text-white px-5 py-2 rounded-lg shadow-md transition">
            + Tambah Tanaman
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white shadow-xl rounded-xl overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-green-900 text-white">
                <tr>
                    <th class="p-4">Nama</th>
                    <th class="p-4">Jenis</th>
                    <th class="p-4">Deskripsi</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <!-- ITEM 1 -->
                <tr class="border-b">
                    <td class="p-4 flex items-center gap-3">
                        <img src="/img/Lidah Buaya.jpg" class="w-12 h-12 rounded object-cover">
                        <span class="font-semibold text-green-900">Lidah Buaya</span>
                    </td>

                    <td class="p-4">
                        <span class="bg-green-200 text-green-800 px-3 py-1 rounded-lg text-sm">
                            Tanaman Obat
                        </span>
                    </td>

                    <td class="p-4 text-gray-700">
                        Lidah buaya, atau nama ilmiahnya Aloe vera, adalah tanam...
                    </td>

                    <td class="p-4 text-center flex gap-2 justify-center">
                        <button class="border px-3 py-1 rounded-lg text-blue-700 border-blue-700 text-sm">Edit</button>
                        <button class="border px-3 py-1 rounded-lg text-red-700 border-red-700 text-sm">Hapus</button>
                    </td>
                </tr>

                <!-- ITEM 2 -->
                <tr class="border-b">
                    <td class="p-4 flex items-center gap-3">
                        <img src="/img/Monsterra.jpg" class="w-12 h-12 rounded object-cover">
                        <span class="font-semibold text-green-900">Monstera Deliciosa</span>
                    </td>

                    <td class="p-4">
                        <span class="bg-green-200 text-green-800 px-3 py-1 rounded-lg text-sm">
                            Tanaman Hias
                        </span>
                    </td>

                    <td class="p-4 text-gray-700">
                        Monstera deliciosa adalah tanaman hias populer yang dikena...
                    </td>

                    <td class="p-4 text-center flex gap-2 justify-center">
                        <button class="border px-3 py-1 rounded-lg text-blue-700 border-blue-700 text-sm">Edit</button>
                        <button class="border px-3 py-1 rounded-lg text-red-700 border-red-700 text-sm">Hapus</button>
                    </td>
                </tr>

                <!-- ITEM 3 -->
                <tr class="border-b">
                    <td class="p-4 flex items-center gap-3">
                        <img src="/img/Kumis Kucing.jpg" class="w-12 h-12 rounded object-cover">
                        <span class="font-semibold text-green-900">Kumis Kucing</span>
                    </td>

                    <td class="p-4">
                        <span class="bg-green-200 text-green-800 px-3 py-1 rounded-lg text-sm">
                            Tanaman Obat
                        </span>
                    </td>

                    <td class="p-4 text-gray-700">
                        Kumis kucing adalah tanaman herbal dan hias yang berasal d...
                    </td>

                    <td class="p-4 text-center flex gap-2 justify-center">
                        <button class="border px-3 py-1 rounded-lg text-blue-700 border-blue-700 text-sm">Edit</button>
                        <button class="border px-3 py-1 rounded-lg text-red-700 border-red-700 text-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div> 
</div>

<script>
// cek login dummy
const loggedIn = localStorage.getItem("isLoggedIn");

// kalau belum login → tampilkan peringatan
if (!loggedIn) {
    document.getElementById("admin-content").innerHTML = `
        <div class="text-center py-20">
            <h2 class="text-3xl font-bold text-red-700 mb-3">Akses Ditolak</h2>
            <p class="text-gray-700 mb-5">Halaman ini khusus admin. Silakan login terlebih dahulu.</p>
            <a href="/admin/login"
               class="bg-green-700 hover:bg-green-800 text-white px-5 py-2 rounded-lg shadow">
               Ke Halaman Login
            </a>
        </div>
    `;
}
</script>

