@extends("layouts.main")

@section("title", "SINPROBAU - Sesi/Senai")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 px-10 md:px-20 py-10 md:py-20">
        <h1 class="text-3xl font-bold">Convenção Sesi/Senai</h1>
        <div class="w-full flex flex-col rounded-lg">
            @foreach ($conventions as $convention)
                <x-convention
                    :date="$convention->created_at"
                    :title="$convention->title"
                    :url="$convention->document_url"
                />
            @endforeach
        </div>
    </div>
@endsection
