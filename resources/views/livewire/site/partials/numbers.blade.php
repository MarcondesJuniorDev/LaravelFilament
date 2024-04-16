<div class="bg-white w-full dark:bg-gray-800 overflow-hidden shadow-xl">
    <div class="p-2 sm:px-10 sm:py-8 dark:bg-gray-800">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white text-center">
            {{ __('Big Numbers') }}
        </h1>
        <div class="flex justify-evenly items-center h-full">
            <div class="flex flex-col items-center">
                <div id="employees" class="text-4xl text-gray-500 dark:text-gray-400 font-bold"></div>
                <div class="text-sm font-semibold text-gray-500 dark:text-gray-400">{{ __('Employees') }}</div>
            </div>
            <div class="flex flex-col items-center">
                <div id="posts" class="text-4xl text-gray-500 dark:text-gray-400 font-bold"></div>
                <div class="text-sm font-semibold text-gray-500 dark:text-gray-400">{{ __('Posts') }}</div>
            </div>
            <div class="flex flex-col items-center">
                <div id="schools" class="text-4xl text-gray-500 dark:text-gray-400 font-bold"></div>
                <div class="text-sm font-semibold text-gray-500 dark:text-gray-400">{{ __('Schools') }}</div>
            </div>
            <div class="flex flex-col items-center">
                <div id="lessons" class="text-4xl text-gray-500 dark:text-gray-400 font-bold"></div>
                <div class="text-sm font-semibold text-gray-500 dark:text-gray-400">{{ __('Lessons') }}</div>
            </div>
        </div>
    </div>
</div>

@push('styles')

@endpush

@push('scripts')
    <script>
        const elements = {
            'employees': 15000,
            'schools': 2400,
            'posts': 300,
            'lessons': 33000
        };

        const counters = {};
        const intervalIds = {};

        const maxElement = Math.max(...Object.values(elements));
        const intervalTime = 30; // Ajuste este valor para alterar a velocidade de contagem
        const increment = maxElement / (1000 / intervalTime);

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    counters[id] = 0;
                    intervalIds[id] = setInterval(() => {
                        if (counters[id] >= elements[id]) {
                            clearInterval(intervalIds[id]);
                        } else {
                            counters[id] += increment;
                            entry.target.innerText = Math.min(Math.floor(counters[id]), elements[id]);
                        }
                    }, intervalTime);
                } else {
                    clearInterval(intervalIds[entry.target.id]);
                }
            });
        });

        Object.keys(elements).forEach(id => {
            const element = document.getElementById(id);
            if (element) {
                observer.observe(element);
            }
        });
    </script>
@endpush
