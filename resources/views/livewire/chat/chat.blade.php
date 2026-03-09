<div class="fixed h-full flex dark:bg-gray-900 border-gray-600 lg:shadow-sm overflow-hidden inset-0 lg:top-16 lg:inset-x-2 m-auto lg:h-[90%] rounded-lg text-cyan-50">

    <div class="hidden lg:flex relative w-full md:w-[320px] xl:w-[400px] overflow-auto shrink-0 h-full border">
        @livewire('chat.chat-list')

    </div>

    <div class="grid w-full border-l h-full relative overflow-auto" style="contain: content">

        @livewire('chat.chat-box')

    </div>
</div>
