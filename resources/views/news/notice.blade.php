@extends("layouts.main")

@section("title", "SINPROBAU - Notícias")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 p-10 md:px-20 md:py-20">
        <h1 class="text-3xl font-bold">{{ $notice->title }}</h1>
        <p>{!! nl2br(e($notice->content)) !!}</p>
        <img src="{{ $notice->image_url }}" alt="{{ $notice->title }}">
    </div>
@endsection
