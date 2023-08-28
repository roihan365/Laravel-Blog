<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="px-20">
    <nav class="flex justify-between items-center  py-2 my-8">
        <div class="flex">
            <h3 class="text-3xl text-red-500 font-bold">Robil News |</h3>
            <div class="flex gap-10 pl-10 items-center">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">subscribe</a>
            </div>
        </div>
        <a href="{{ route('login') }}">
            <button class="bg-red-500 text-white px-9 py-2 rounded-md font-bold">Masuk</button>
        </a>
    </nav>
    <header class="bg-[#F5F5F5] flex flex-col justify-center items-center py-24 rounded-3xl my-8">
        <p class="text-gray-400 font-bold">WELCOME TO ROBIL-NEWS</p>
        <H3 class="font-bold text-2xl">Dapatkan wawasan terbaru dengan mengunjungi Robil News!</H3>
        <h3 class="font-bold text-2xl text-red-500">"Jelajahi fakta-fakta terbaru di Robil News."</h3>
    </header>

    <section class="flex items-center justify-between gap-20 my-8">
        <img src="https://source.unsplash.com/WLUHO9A_xik" class="rounded-xl w-6/12 h-96">
        <div class="flex flex-col gap-7 w-6/12">
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2">
                    <img src="https://source.unsplash.com/WLUHO9A_xik" alt="" class="w-10 h-10 rounded-full">
                    <p>Tribun Barito Kuala</p>
                </div>
                <p class="text-lg text-gray-500">12 Menit Lalu</p>
            </div>
            <h2 class="text-4xl font-bold">Whatsapp Akan Merilis Fitur Terbarunya</h2>
            <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis libero enim quas harum. Est sunt nemo soluta consequatur culpa distinctio a minima. Aut, voluptatem animi nemo nulla, illo vitae at dolorum id corporis a deleniti dolor maiores quibusdam possimus quasi vel? Cupiditate aut inventore a illum libero consectetur consequuntur aspernatur.</p>
            <div class="flex items-center gap-3">
                <p class="text-lg text-red-500 font-bold">Whatsapp</p>
                <p class="text-lg text-gray-500">Dibaca 4 Menit Yang Lalu</p>
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-3xl font-bold">Terbaru</h3>
    </section>

    <div>
        <p>content</p>
    </div>

    <footer>
        <p class="text-3xl">Footer</p>
    </footer>
</body>
</html>
