<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="flex justify-between items-center  py-2 my-8 px-32">
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
    <header class="bg-[#F5F5F5] flex flex-col justify-center items-center py-24 rounded-3xl my-8 mx-32">
        <p class="text-gray-400 font-bold">WELCOME TO ROBIL-NEWS</p>
        <H3 class="font-bold text-2xl">Dapatkan wawasan terbaru dengan mengunjungi Robil News!</H3>
        <h3 class="font-bold text-2xl text-red-500">"Jelajahi fakta-fakta terbaru di Robil News."</h3>
    </header>

    <section class="flex items-center justify-between gap-20 my-20 px-32">
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

    <section class="px-32">
        <h3 class="text-3xl font-bold mb-5">Terbaru</h3>
    </section>

    <div class="flex justify-between flex-wrap gap-1 px-32">
        @foreach ($data as $article)
            <div class="w-1/6 mb-10">
                <img src="{{ Storage::url($article->image) }}" class="w-full h-40 rounded-lg mb-2" alt="">
                <div class="flex items-center gap-2 mb-2">
                    <img src="{{ Storage::url($article->image) }}" alt="" class="w-7 h-7 rounded-full">
                    <p>{{ $article->user->name }}</p>
                    <p class="text-xs text-gray-500">{{ $article->created_at }}</p>
                </div>
                <h4 class="font-bold mb-2">{{ $article->title }}</h4>
                <p class="text-sm mb-2">{{ Str::substr(strip_tags($article->content), 0, 100) . "..."}}</p>
                <div class="flex">
                    <p class="text-sm text-red-500 font-bold">{{ $article->categories->name }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Add pagination links at the bottom -->
    <div class="flex justify-center mt-5 mb-32 px-32">
        {{ $data->links() }}
    </div>


    <footer class=" bg-red-500 px-32 ">
        <div class="flex py-10 border-b-2 border-white">
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
        <div class="flex justify-between py-10 ">
            <div class="">
                <p class="text-md font-bold text-white mb-2">Dapatkan Berita Terbaru</p>
                <p class="text-white text-md"># Kunjingan webiste Robil News untuk mendapat berita terbaru pada bidang teknologi</p>
            </div>
            <p class="text-white font-bold">&copy;Muhammad Bilal 2023</p>
        </div>
    </footer>
</body>
</html>
