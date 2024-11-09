@extends("layouts.main")

@section("title", "SINPROBAU - Educação Básica")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 px-10 md:px-20 py-10 md:py-20">
        <h1 class="text-3xl font-bold">Convenção Educação Básica</h1>
        <div class="w-full flex flex-col rounded-lg">
            @foreach ($conventions as $convention)
                <x-convention
                    :date="$convention->date"
                    :title="$convention->title"
                />
            @endforeach
        </div>
    </div>
@endsection
