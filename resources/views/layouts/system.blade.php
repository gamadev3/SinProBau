<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")</title>
        @vite(["resources/css/app.css", "resources/js/app.js", "resources/js/preview-image.js"])
    </head>
    <body class="font-arial min-h-screen flex flex-col md2:flex-row">
        @if (session()->has("firebase_token"))
            <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="w-fit inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg md2:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <img src="/images/icons/menu.svg" alt="Menu" class="w-6 h-6">
            </button>
            <aside id="sidebar-multi-level-sidebar" class="fixed md2:sticky top-0 left-0 z-40 md:min-w-64 md2:min-w-72 h-screen transition-transform -translate-x-full md2:translate-x-0 border-2 border-['#ccc']" aria-label="Sidebar">
                <div class="w-full h-full px-3 py-4 flex flex-col justify-between bg-white">
                    <div class="flex flex-col">
                        <div class="text-center flex justify-center items-center p-4 mt-8">
                            <img src="/images/logo-sinprobau.webp" alt="Logo SINPROBAU">
                        </div>
                        <ul class="space-y-2 font-medium">
                            <li>
                                <button type="button" class="flex items-center gap-2 w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 outline-none" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Convenções</span>
                                        <img src="/images/icons/arrow-down.svg" alt="Abrir">
                                    </svg>
                                </button>
                                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="/sistema/educacao-basica" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 outline-none">Educação Básica</a>
                                    </li>
                                    <li>
                                        <a href="/sistema/ensino-superior" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 outline-none">Ensino Superior</a>
                                    </li>
                                    <li>
                                        <a href="/sistema/sesi-senai" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 outline-none">Sesi/Senai</a>
                                    </li>
                                    <li>
                                        <a href="/sistema/senac" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 outline-none">Senac</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/sistema/sindicato" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group outline-none">
                                    <span class="flex-1 ms-3 whitespace-nowrap">Sindicato</span>
                                </a>
                            </li>
                            <li>
                                <a href="/sistema/noticias" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group outline-none">
                                    <span class="flex-1 ms-3 whitespace-nowrap">Notícias</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form method="POST" action="{{ URL("/deslogar") }}" class="flex justify-end">
                        @csrf
                        <button type="submit" class="focus:outline-none text-black font-bold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 flex gap-2 items-center">
                            <img src="/images/icons/log-out.svg" alt="Deslogar">
                            Sair
                        </button>
                    </form>
                </div>
            </aside>
        @endif
        <main class="w-full">
            @yield("content")
        </main>
    </body>
</html>
