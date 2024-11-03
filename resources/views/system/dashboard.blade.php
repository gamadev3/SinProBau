@extends("layouts.main")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="w-full h-screen flex flex-col justify-center items-center gap-8">
        <h1 class="font-bold text-3xl">Sistema</h1>
        <form method="POST" action="{{ URL("/logout") }}">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 text-2xl rounded">
                Deslogar
            </button>
        </form>
    </div>
@endsection
