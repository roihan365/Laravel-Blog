@extends('layouts.user')

@section('container-user')

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

<div class="flex justify-center gap-2 mt-5 mb-32 px-32">
    
    {{ $data->links() }}  
</div>

@endsection