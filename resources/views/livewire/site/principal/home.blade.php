<div>
    <header class="relative flex items-center justify-center h-96 mb-12 overflow-hidden">
        <div
            class="relative z-30 p-5 text-2xl text-white bg-purple-300 bg-opacity-50 rounded-xl"
        >
            Badge
        </div>
        <video
            autoplay
            loop
            muted
            class="absolute z-10 w-auto min-w-full min-h-full max-w-none"
        >
            <source
                src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4"
                type="video/mp4"
            />
            Your browser does not support the video tag.
        </video>
    </header>
    <div>
        @livewire('site.principal.partials.banners')
        @livewire('site.principal.partials.awards')
        @livewire('site.principal.partials.numbers')
        @livewire('site.principal.partials.projects')
    </div>
</div>
