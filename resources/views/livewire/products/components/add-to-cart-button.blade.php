<button
    x-data
    class="group relative h-8 w-14 overflow-hidden rounded bg-red-600 font-medium text-white transition-all duration-300 ease-in-out focus:bg-green-600 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-800"
    @click="$el.focus(); setTimeout(() => $el.blur(), 2000)"
    wire:click="addToCart"
>
    <span
        class="_px-4 absolute inset-0 flex -translate-x-full items-center justify-center py-2 opacity-0 transition-all duration-1000 group-focus:translate-x-0 group-focus:opacity-100"
    >
        <x-icons.check class="text-white dark:text-white" />
    </span>
    <span
        class="_px-4 absolute inset-0 flex transform items-center justify-center py-2 opacity-100 transition-all duration-1000 group-focus:translate-x-full group-focus:opacity-0"
    >
        <x-icons.plus class="text-white dark:text-white" />
        <x-icons.cart class="text-white dark:text-white" />
    </span>
</button>
