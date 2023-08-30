@extends('layouts.user')
@section('title', 'Detail Blog')

@section('container-user')

<section class="flex justify-between gap-20 my-20 px-32">
    <img src="{{ Storage::url($data->image) }}" class="rounded-xl w-6/12 h-96">
    <div class="flex flex-col gap-7 w-6/12">
        <div class="flex items-center gap-4">
            <div class="flex items-center gap-2">
                <img src="https://source.unsplash.com/WLUHO9A_xik" alt="" class="w-10 h-10 rounded-full">
                <p>{{ $data->user->name }}</p>
            </div>
            <p class="text-lg text-gray-500">{{ $data->created_at }}</p>
        </div>
        <h2 class="text-4xl font-bold">{{ $data->title }}</h2>
        <p class="text-lg">{!! $data->content !!}</p>
        <div class="flex items-center gap-3">
            <p class="text-lg text-red-500 font-bold">{{ $data->categories->name }}</p>
            <p class="text-lg text-gray-500">Dibaca 4 Menit Yang Lalu</p>
        </div>
    </div>
</section>

@endsection