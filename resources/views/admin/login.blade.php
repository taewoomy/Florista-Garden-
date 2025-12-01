@extends('layouts.main')

@section('content')

<div class="container" style="max-width:600px; margin:80px auto; background:white; padding:30px 25px; border-radius:12px; box-shadow:0 4px 20px rgba(0,0,0,0.06); text-align:center;">

    <h1 class="text-3xl font-bold text-green-900 mt-4">Admin Panel</h1>
    <p class="subtitle" style="margin-top:0; color:#555; font-size:14px;">
        Khusus Administrator Florista Garden
    </p>

    <div class="warning-box" style="background:#fff6e5; color:#a87200; padding:12px; border-radius:8px; margin-bottom:25px; border:1px solid #ffe2b3; font-size:14px;">
        ⚠️ Halaman ini hanya untuk admin. Akses tidak sah akan dicatat.
    </div>

    <form id="loginForm">
        @csrf

        <div class="input-group" style="text-align:left; margin-bottom:18px;">
            <label style="font-size:14px; font-weight:500; color:#333;">Username</label>
            <input type="text" name="username" placeholder="Masukkan username" required
                   style="width:100%; padding:12px; margin-top:6px; border-radius:8px; border:1px solid #dcdcdc; font-size:14px;">
        </div>

        <div class="input-group" style="text-align:left; margin-bottom:18px;">
            <label style="font-size:14px; font-weight:500; color:#333;">Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required
                   style="width:100%; padding:12px; margin-top:6px; border-radius:8px; border:1px solid #dcdcdc; font-size:14px;">
        </div>

        <button class="btn-login" style="width:100%; background:#0c8f52; color:white; padding:12px; border:none; border-radius:8px; font-size:16px; font-weight:600; cursor:pointer;">
            Login
        </button>
    </form>

</div>

<!-- ============================== -->
<!--   DUMMY LOGIN (FRONTEND ONLY)   -->
<!--     HAPUS NANTI SETELAH BACKEND -->
<!-- ============================== -->
<script>
// LOGIN DUMMY UNTUK TESTING FRONTEND
document.getElementById("loginForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const username = document.querySelector("input[name='username']").value;
    const password = document.querySelector("input[name='password']").value;

    // Simulasi login berhasil
    if (username && password) {
        localStorage.setItem("isLoggedIn", "true");

        alert("Login dummy berhasil! (Frontend only)");
        window.location.href = "/admin/dashboard"; 
    }
});
</script>

@endsection
