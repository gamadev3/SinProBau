<form action="/sistema/{{ $url }}" class="w-full sm:w-1/3 md:w-full h-fit mx-auto">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
    <div class="h-full relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <img src="/images/icons/search.svg" alt="Pesquisar" class="w-4 h-4 text-gray-500">
        </div>
        <input type="search" id="default-search" name="search" class="block w-full h-12 p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar" />
    </div>
</form>
