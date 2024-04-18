<div>
    <div class="bg-blue-50 dark:bg-slate-800 shadow-md">
        <div class="w-full container px-2">
            <div class="hidden lg:flex lg:items-center justify-between py-3">
                <div class="hidden lg:flex lg:items-center">
                    <svg class="w-12 h-12" viewBox="-0.758 0 50 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="M48.458 11.292a.8.8 0 0 1 .027.204V22.21c0 .28-.15.538-.393.678L39.1 28.064v10.261a.78.78 0 0 1-.391.678l-18.77 10.805c-.043.024-.09.04-.137.057-.018.006-.034.016-.053.021a.8.8 0 0 1-.4 0c-.022-.006-.041-.018-.062-.025-.043-.016-.088-.029-.129-.053L.393 39.003A.78.78 0 0 1 0 38.326V6.185q0-.106.027-.205c.006-.023.02-.043.027-.066.015-.041.028-.083.05-.121.015-.025.036-.046.054-.069.023-.031.043-.063.069-.091.023-.022.052-.039.077-.059.028-.023.054-.049.086-.067h.001L9.775.104a.78.78 0 0 1 .781 0l9.384 5.403h.002q.045.031.086.066c.025.02.054.037.076.059.027.028.047.061.07.092.017.023.039.044.053.069.022.039.035.08.051.121.008.022.021.043.027.066a.8.8 0 0 1 .027.204v20.075l7.819-4.502V11.495q0-.104.027-.203c.007-.023.02-.044.027-.066.016-.041.029-.083.051-.121.015-.025.036-.046.053-.069.023-.031.043-.063.07-.091.023-.022.051-.039.076-.059.029-.023.055-.049.086-.067h.001l9.385-5.403a.78.78 0 0 1 .781 0l9.384 5.403c.033.02.059.044.088.066.024.02.053.037.075.059.027.028.047.061.07.092.018.023.039.044.053.069.022.038.035.08.051.121.009.022.022.043.027.066m-1.537 10.466v-8.909l-3.284 1.89-4.537 2.612v8.909zm-9.384 16.116v-8.916l-4.463 2.549-12.743 7.273v8.999zM1.564 7.537v30.337l17.203 9.904v-8.997L9.78 33.694l-.003-.002-.004-.002c-.03-.018-.056-.043-.084-.064-.025-.02-.053-.035-.074-.057l-.002-.003c-.025-.024-.043-.055-.064-.082-.02-.027-.043-.049-.059-.076l-.001-.003c-.018-.029-.028-.064-.041-.098-.013-.029-.029-.057-.037-.088v-.001c-.01-.037-.012-.076-.016-.114-.004-.029-.012-.059-.012-.088V12.04L4.848 9.427 1.564 7.539zm8.603-5.853L2.348 6.185l7.817 4.5 7.817-4.501-7.817-4.5zm4.066 28.087 4.536-2.611V7.537l-3.284 1.891-4.537 2.612v19.623zM38.319 6.995l-7.817 4.5 7.817 4.501 7.816-4.502zm-.782 10.355L33 14.738l-3.284-1.89v8.909l4.536 2.611 3.285 1.891zM19.549 37.427l11.466-6.546 5.732-3.271-7.812-4.498-8.994 5.178-8.197 4.719z" fill="#FF2D20"/></svg>
                </div>
                <div class="hidden lg:flex lg:items-center">
                    <a href="{{ route('home') }}" class="text-gray-800 dark:text-gray-200 text-sm font-semibold hover:text-blue-600 mr-4">Início</a>
                    @livewire('site.components.dropdown', ['title' => 'Quem Somos', 'options' => ['Histórico' => 'about.history', 'Projetos' => 'about.projects', 'Organograma Institucional' => 'about.orgchart', 'Parceiros' => 'about.partners']])
                    @livewire('site.components.dropdown', ['title' => 'Aulas', 'options' => ['Ensino Fundamental' => 'lessons.elementary', 'Ensino Fundamental - EJA' => 'lessons.adult.elementary', 'Ensino Médio' => 'lessons.highschool', 'Ensino Médio - EJA' => 'lessons.adult.high']])
                    @livewire('site.components.dropdown', ['title' => 'Premiações', 'options' => ['Prêmio 01' => 'home', 'Prêmio 02' => 'home', 'Prêmio 03' => 'home', 'Prêmio 04' => 'home']])
                    @livewire('site.components.dropdown', ['title' => 'Fique por dentro', 'options' => ['Notícias' => 'stayin.news', 'Eventos' => 'stayin.events', 'Publicações' => 'stayin.publications']])
                    <a href="{{ route('contact') }}" class="text-gray-800 dark:text-gray-200 text-sm font-semibold hover:text-blue-600">Entre em contato</a>
                </div>
                <div class="hidden lg:flex lg:items-center">
                    @if(!Auth::check())
                        <div class="space-x-2">
                            <a type="button" href="{{ url('/admin/login') }}" class="text-gray-800 dark:text-gray-200 text-sm font-semibold border px-4 py-2 rounded-lg hover:bg-blue-600 hover:text-gray-100 hover:border-blue-600">Entrar</a>
                            <a type="button" href="{{ url('/admin/register') }}" class="text-gray-800 dark:text-gray-200 text-sm font-semibold border px-4 py-2 rounded-lg hover:bg-blue-600 hover:text-gray-100 hover:border-blue-600">Registrar</a>
                        </div>
                    @else
                        <a type="button" href="{{ url('/admin') }}" class="text-gray-800 dark:text-gray-200 text-sm font-semibold border px-4 py-2 rounded-lg hover:bg-blue-600 hover:text-gray-100 hover:border-blue-600">Painel de Controle</a>
                    @endif
                </div>
            </div>
            <div class="lg:hidden flex items-center justify-between py-3">
                <div class="lg:hidden cursor-pointer">
                    <svg class="w-12 h-12" viewBox="-0.758 0 50 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="M48.458 11.292a.8.8 0 0 1 .027.204V22.21c0 .28-.15.538-.393.678L39.1 28.064v10.261a.78.78 0 0 1-.391.678l-18.77 10.805c-.043.024-.09.04-.137.057-.018.006-.034.016-.053.021a.8.8 0 0 1-.4 0c-.022-.006-.041-.018-.062-.025-.043-.016-.088-.029-.129-.053L.393 39.003A.78.78 0 0 1 0 38.326V6.185q0-.106.027-.205c.006-.023.02-.043.027-.066.015-.041.028-.083.05-.121.015-.025.036-.046.054-.069.023-.031.043-.063.069-.091.023-.022.052-.039.077-.059.028-.023.054-.049.086-.067h.001L9.775.104a.78.78 0 0 1 .781 0l9.384 5.403h.002q.045.031.086.066c.025.02.054.037.076.059.027.028.047.061.07.092.017.023.039.044.053.069.022.039.035.08.051.121.008.022.021.043.027.066a.8.8 0 0 1 .027.204v20.075l7.819-4.502V11.495q0-.104.027-.203c.007-.023.02-.044.027-.066.016-.041.029-.083.051-.121.015-.025.036-.046.053-.069.023-.031.043-.063.07-.091.023-.022.051-.039.076-.059.029-.023.055-.049.086-.067h.001l9.385-5.403a.78.78 0 0 1 .781 0l9.384 5.403c.033.02.059.044.088.066.024.02.053.037.075.059.027.028.047.061.07.092.018.023.039.044.053.069.022.038.035.08.051.121.009.022.022.043.027.066m-1.537 10.466v-8.909l-3.284 1.89-4.537 2.612v8.909zm-9.384 16.116v-8.916l-4.463 2.549-12.743 7.273v8.999zM1.564 7.537v30.337l17.203 9.904v-8.997L9.78 33.694l-.003-.002-.004-.002c-.03-.018-.056-.043-.084-.064-.025-.02-.053-.035-.074-.057l-.002-.003c-.025-.024-.043-.055-.064-.082-.02-.027-.043-.049-.059-.076l-.001-.003c-.018-.029-.028-.064-.041-.098-.013-.029-.029-.057-.037-.088v-.001c-.01-.037-.012-.076-.016-.114-.004-.029-.012-.059-.012-.088V12.04L4.848 9.427 1.564 7.539zm8.603-5.853L2.348 6.185l7.817 4.5 7.817-4.501-7.817-4.5zm4.066 28.087 4.536-2.611V7.537l-3.284 1.891-4.537 2.612v19.623zM38.319 6.995l-7.817 4.5 7.817 4.501 7.816-4.502zm-.782 10.355L33 14.738l-3.284-1.89v8.909l4.536 2.611 3.285 1.891zM19.549 37.427l11.466-6.546 5.732-3.271-7.812-4.498-8.994 5.178-8.197 4.719z" fill="#FF2D20"/></svg>
                </div>
                <div class="lg:hidden cursor-pointer" wire:click="toggleMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
            </div>
            @if($isOpen)
                <div class="block lg:hidden bg-gray-100 dark:bg-gray-800 py-2">
                    <div class="flex flex-col">
                        <div class="pb-3 space-y-1">
                            <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out" href="#">
                                Inicio
                            </a>
                            <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out" href="#">
                                Quem Somos
                            </a>
                            <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out" href="#">
                                Aulas
                            </a>
                            <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out" href="#">
                                Premiações
                            </a>
                            <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out" href="#">
                                Fique por dentro
                            </a>
                            <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out" href="#">
                                Entre em Contato
                            </a>
                        </div>
                        <div class="flex justify-between items-center pt-2">
                            @if(!Auth::check())
                                <div class="flex inline-flex w-full space-x-2">
                                    <a type="button" href="{{ url('/admin/login') }}" class="w-full text-center text-gray-800 dark:text-gray-200 text-sm font-semibold border px-4 py-2 rounded-lg hover:bg-blue-600 hover:text-gray-100 hover:border-blue-600">Entrar</a>
                                    <a type="button" href="{{ url('/admin/register') }}" class="w-full text-center text-gray-800 dark:text-gray-200 text-sm font-semibold border px-4 py-2 rounded-lg hover:bg-blue-600 hover:text-gray-100 hover:border-blue-600">Registrar</a>
                                </div>
                            @else
                                <a type="button" href="{{ url('/admin') }}" class="w-full text-center text-gray-800 dark:text-gray-200 text-sm font-semibold border px-4 py-2 rounded-lg hover:bg-blue-600 hover:text-gray-100 hover:border-blue-600">Painel de Controle</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
