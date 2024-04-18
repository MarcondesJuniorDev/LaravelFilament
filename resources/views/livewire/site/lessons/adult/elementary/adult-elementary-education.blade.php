<div>
    <header class="bg-gray-100 dark:bg-gray-800 text-gray-50 p-2 text-center">
        <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200">Ensino Fundamental - EJA</h2>
        <p class="text-md text-gray-700 dark:text-gray-200">
            Bem-vindo à nossa coleção de vídeos educacionais do ensino fundamental para jovens e adultos!
        </p>
    </header>
    <main>
        <div x-data="{ tab: 'all'}" class="text-center">
            <div class="flex mx-2 mb-2 space-x-4 text-lg-center border-b border-gray-300 justify-center">
                <div class="hover:text-indigo-600 py-2 pl-2" :class="{'text-indigo-600 border-b border-indigo-600': tab == 'settings'}" @click="tab = 'all'">Todas as Aulas</div>
                <div class="hover:text-indigo-600 py-2 pl-2" :class="{'text-indigo-600 border-b border-indigo-600': tab == 'account'}" @click="tab = 'phases'">Fases</div>
            </div>
            <div x-show="tab === 'all'">
                <h1 class="text-md text-gray-700 dark:text-gray-200">
                    @livewire('site.lessons.adult.elementary.all-lessons-adult-elementary')
                </h1>
            </div>

            <div x-show="tab === 'phases'">
                <div x-data="{ tab: 'phase'}" class="text-center">
                    <div class="flex mx-2 mb-2 space-x-4 text-lg-center border-b border-gray-300 justify-center">
                        <div class="hover:text-indigo-600 py-2" :class="{'text-blue-600 border-b border-indigo-600': tab == 'phase'}" @click="tab = 'phase-four'">Fase 4</div>
                        <div class="hover:text-indigo-600 py-2" :class="{'text-blue-600 border-b border-indigo-600': tab == 'phase'}" @click="tab = 'phase-five'">Fase 5</div>
                    </div>

                    <div x-show="tab === 'phase-four'">
                        <h1 class="text-md text-gray-700 dark:text-gray-200">
                            @livewire('site.lessons.adult.elementary.partials.phase-four-eja')
                        </h1>
                    </div>
                    <div x-show="tab === 'phase-five'">
                        <h1 class="text-md text-gray-700 dark:text-gray-200">
                            @livewire('site.lessons.adult.elementary.partials.phase-five-eja')
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
