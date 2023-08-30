@extends('layouts.user')

@section('container-user')

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

@endsection