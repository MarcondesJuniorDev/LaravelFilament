<div>
    <header class="bg-gray-100 dark:bg-gray-800 text-gray-50 p-2 text-center">
        <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200">Ensino Médio</h2>
        <p class="text-md text-gray-700 dark:text-gray-200">
            Bem-vindo à nossa coleção de vídeos educacionais para o ensino médio!
        </p>
    </header>
    <main>
        <div x-data="{ tab: 'profile'}" class="text-center">
            <div class="flex mx-2 mb-2 space-x-4 text-lg-center border-b border-gray-300 justify-center">
                <div class="hover:text-indigo-600 py-2 pl-2" :class="{'text-indigo-600 border-b border-indigo-600': tab == 'settings'}" @click="tab = 'all'">Todas as Aulas</div>
                <div class="hover:text-indigo-600 py-2 pl-2" :class="{'text-indigo-600 border-b border-indigo-600': tab == 'account'}" @click="tab = 'grades'">Séries</div>
            </div>
            <div x-show="tab === 'all'">
                <h1 class="text-md text-gray-700 dark:text-gray-200">
                    @livewire('site.lessons.high.all-lessons-high')
                </h1>
            </div>

            <div x-show="tab === 'grades'">
                <div x-data="{ tab: 'grade'}" class="text-center">
                    <div class="flex mx-2 mb-2 space-x-4 text-lg-center border-b border-gray-300 justify-center">
                        <div class="hover:text-indigo-600 py-2" :class="{'text-blue-600 border-b border-indigo-600': tab == 'profile'}" @click="tab = 'high-1'">1º Ano</div>
                        <div class="hover:text-indigo-600 py-2" :class="{'text-blue-600 border-b border-indigo-600': tab == 'profile'}" @click="tab = 'high-2'">2º Ano</div>
                        <div class="hover:text-indigo-600 py-2" :class="{'text-blue-600 border-b border-indigo-600': tab == 'profile'}" @click="tab = 'high-3'">3º Ano</div>
                    </div>

                    <div x-show="tab === 'high-1'">
                        <h1 class="text-md text-gray-700 dark:text-gray-200">
                            @livewire('site.lessons.high.partials.first-year')
                        </h1>
                    </div>
                    <div x-show="tab === 'high-2'">
                        <h1 class="text-md text-gray-700 dark:text-gray-200">
                            @livewire('site.lessons.high.partials.second-year')
                        </h1>
                    </div>
                    <div x-show="tab === 'high-3'">
                        <h1 class="text-md text-gray-700 dark:text-gray-200">
                            @livewire('site.lessons.high.partials.third-year')
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
