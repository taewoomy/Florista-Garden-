<!DOCTYPE html>
<html lang="id">
<head>
    ...
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FontAwesome FIX -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-[#f2f9f2] text-[#1b4d3e] flex flex-col min-h-screen">

    <!-- NAVBAR -->
    @include('components.navbar')

    <!-- MAIN CONTENT -->
    <main class="grow">
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('components.footer')

</body>
</html>
