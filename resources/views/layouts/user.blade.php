<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="flex justify-between items-center  py-2 my-8 xl:px-32 md:px-12">
        <div class="flex">
            <h3 class="text-3xl text-red-500 font-bold md:text-lg">Robil News |</h3>
            <div class="flex gap-10 pl-10 items-center md:text-base">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">subscribe</a>
            </div>
        </div>
        <a href="{{ route('login') }}">
            <button class="bg-red-500 text-white px-9 py-2 rounded-md font-bold  md:text-base  md:px-7 md:py-1">Masuk</button>
        </a>
    </nav>

    @yield('container-user')

    <footer class=" bg-red-500 xl:px-32 md:px-12">
        <div class="flex py-10 border-b-2 border-white xl:flex-row md:flex-col">
            <div class="w-1/2">
                <h3 class="text-2xl text-white font-bold mb-5">Robil News |</h3>
                <div class="flex gap-5">
                    <p class="text-white">Overview</p>
                    <p class="text-white">Features</p>
                    <p class="text-white">Pricing</p>
                    <p class="text-white">Careers</p>
                    <p class="text-white">Help</p>
                    <p class="text-white">Privacy</p>
                </div>
            </div>
            <div class="w-1/2">
                <p class="text-white font-bold mb-3">Join Our News</p>
                <input type="text" class="bg-red-300 py-1 px-3 mr-2 rounded-md" placeholder="Masukkan Email">
                <button class="bg-white py-1 px-7 rounded-md">Kirim</button>
            </div>
        </div>
        <div class="flex justify-between py-10 xl:flex-row md:flex-col">
            <div class="">
                <p class="text-md font-bold text-white mb-2">Dapatkan Berita Terbaru</p>
                <p class="text-white text-md"># Kunjingan webiste Robil News untuk mendapat berita terbaru pada bidang teknologi</p>
            </div>
            <p class="text-white font-bold">&copy;Muhammad Bilal 2023</p>
        </div>
    </footer>
</body>
</html>
