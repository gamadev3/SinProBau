@extends("layouts.main")

@section("title", "SINPROBAU - Senac")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 p-5 md:p-20">
        <h1 class="text-3xl font-bold">Convenção Senac</h1>
        <div class="w-full flex flex-col rounded-lg">
            @forelse ($conventions as $convention)
                <x-convention
                    :date="$convention->created_at"
                    :title="$convention->title"
                    :url="$convention->document_url"
                />
            @empty
                <p class="py-4 text-gray-900">Ainda não há nenhuma convenção cadastrada.</p>
            @endforelse
        </div>
    </div>
@endsection
