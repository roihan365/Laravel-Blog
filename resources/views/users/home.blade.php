<?php   
$jsonData = File::get(resource_path('data/blog.json'));
$data = json_decode($jsonData, true);

// Tentukan jumlah data yang akan ditampilkan per halaman
$itemsPerPage = 10;

// Ambil halaman saat ini dari parameter URL (misalnya: http://example.com/?page=2)
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Hitung indeks mulai dan berakhir untuk data yang akan ditampilkan pada halaman ini
$startIndex = ($currentPage - 1) * $itemsPerPage;
$endIndex = $startIndex + $itemsPerPage - 1;
?>

@extends('layouts.user')

@section('container-user')

<header class="bg-[#F5F5F5] flex flex-col justify-center items-center py-24 rounded-3 my-8 mx-32 md:mx-12">
    <p class="text-gray-400 font-bold text-center">WELCOME TO ROBIL-NEWS</p>
    <H3 class="font-bold text-2xl text-center">Dapatkan wawasan terbaru dengan mengunjungi Robil News!</H3>
    <h3 class="font-bold text-2xl text-red-500 text-center">"Jelajahi fakta-fakta terbaru di Robil News."</h3>
</header>

<section class="xl:flex xl:flex-row xl:items-center xl:justify-between xl:gap-20 xl:my-20 xl:px-32 md:flex-col md:px-12 md:mb-16">
    <img src="https://source.unsplash.com/WLUHO9A_xik" class="rounded-xl xl:w-6/12 h-96 md:w-full md:mb-5">
    <div class="flex flex-col gap-7 w-6/12 md:w-full">
        <div class="flex items-center gap-4">
            <div class="flex items-center gap-2">
                <img src="https://source.unsplash.com/WLUHO9A_xik" alt="" class="w-10 h-10 rounded-full">
                <p>Tribun Barito Kuala</p>
            </div>
            <p class="text-lg text-gray-500">12 Menit Lalu</p>
        </div>
        <h2 class="text-4xl font-bold">Whatsapp Akan Merilis Fitur Terbarunya</h2>
        <p class="text-lg text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis libero enim quas harum. Est sunt nemo soluta consequatur culpa distinctio a minima. Aut, voluptatem animi nemo nulla, illo vitae at dolorum id corporis a deleniti dolor maiores quibusdam possimus quasi vel? Cupiditate aut inventore a illum libero consectetur consequuntur aspernatur.</p>
        <div class="flex items-center gap-3">
            <p class="text-lg text-red-500 font-bold">Whatsapp</p>
            <p class="text-lg text-gray-500">Dibaca 4 Menit Yang Lalu</p>
        </div>
    </div>
</section>

<section class="px-32">
    <h3 class="text-3xl font-bold mb-5">Terbaru</h3>
</section>

<div class="flex justify-between flex-wrap gap-1 xl:px-32 md:px-12">
    <?php for ($i = $startIndex; $i <= $endIndex && $i < count($data); $i++) : ?>
    <div class="xl:w-1/6 mb-10 md:w-2/5">
        <img src="https://source.unsplash.com/WLUHO9A_xik" class="w-full h-40 rounded-lg mb-2" alt="">
        <div class="flex items-center gap-2 mb-2">
            <img src="https://source.unsplash.com/WLUHO9A_xik" alt="" class="w-7 h-7 rounded-full">
            <p><?php echo $data[$i]['name']; ?></p>
            <p class="text-xs text-gray-500"><?php echo $data[$i]['date']; ?></p>
        </div>
        <a href="/users/detailblog">
            <h4 class="font-bold mb-2"><?php echo $data[$i]['title']; ?></h4>
        </a>
        <p class="text-sm mb-2"><?php echo $data[$i]['desc']; ?></p>
        <div class="flex">
            <p class="text-sm text-red-500 font-bold"><?php echo $data[$i]['category']; ?></p>
        </div>
    </div>
    <?php endfor; ?>
</div>

<div class="flex justify-center gap-2 mt-5 mb-32 px-32 md:px-12">
    <?php if ($currentPage > 1) : ?>
    <a href="?page=1" class=" text-gray-500 px-3 py-1 border-2 rounded-md">1</a>
    <?php if ($currentPage > 2) : ?>
    <span class="text-gray-500 mx-1">...</span>
    <?php endif; ?>
    <?php endif; ?>
    
    <?php for ($page = max(1, $currentPage - 1); $page <= min($currentPage + 1, ceil(count($data) / $itemsPerPage)); $page++) : ?>
    <?php if ($page != $currentPage) : ?>
    <a href="?page=<?php echo $page; ?>" class="bg-white text-red-500 px-3 py-1 border-2 rounded-md"><?php echo $page; ?></a>
    <?php else : ?>
    <span class="bg-red-500 text-white px-3 py-1 rounded-md"><?php echo $page; ?></span>
    <?php endif; ?>
    <?php endfor; ?>
    
    <?php if ($currentPage < ceil(count($data) / $itemsPerPage)) : ?>
    <?php if ($currentPage < ceil(count($data) / $itemsPerPage) - 1) : ?>
    <span class="text-gray-500 mx-1">...</span>
    <?php endif; ?>
    <a href="?page=<?php echo ceil(count($data) / $itemsPerPage); ?>" class="text-grey-500 px-3 py-1 border-2 rounded-md"><?php echo ceil(count($data) / $itemsPerPage); ?></a>
    <?php endif; ?>
</div>

@endsection