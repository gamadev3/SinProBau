<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")</title>
        @vite(["resources/css/app.css", "resources/js/app.js", "resources/js/preview-image.js"])
    </head>
    <body class="font-arial min-h-screen flex flex-col sm:flex-row">
        <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="w-fit inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
         @if (session()->has("firebase_token"))
            <aside id="sidebar-multi-level-sidebar" class="fixed sm:sticky top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 shadow-lg" aria-label="Sidebar">
                <div class="h-full px-3 py-4 flex flex-col justify-between bg-white">
                    <div class="flex flex-col">
                        <div class="text-center flex justify-center items-center py-4">
                            <img src="/images/logo-sinprobau.png" alt="Logo SINPROBAU">
                        </div>
                        <ul class="space-y-2 font-medium">
                            <li>
                                <a href="/system" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group outline-none">
                                    <span class="ms-3">Home</span>
                                </a>
                            </li>
                            <li>
                                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 outline-none" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Convenções</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="/system/basic-education-form" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 outline-none">Educação Básica</a>
                                    </li>
                                    <li>
                                        <a href="/system/higher-education-form" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 outline-none">Ensino Superior</a>
                                    </li>
                                    <li>
                                        <a href="/system/sesc-senai-form" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 outline-none">Sesc/Senai</a>
                                    </li>
                                    <li>
                                        <a href="/system/senac-form" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 outline-none">Senac</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/system/news" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group outline-none">
                                    <span class="flex-1 ms-3 whitespace-nowrap">Notícias</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form method="POST" action="{{ URL("/logout") }}" class="flex justify-end">
                        @csrf
                        <button type="submit" class="focus:outline-none text-black font-bold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 flex gap-2 items-center">
                            <img src="/images/ic_outline-log-out.svg" alt="Deslogar">
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
