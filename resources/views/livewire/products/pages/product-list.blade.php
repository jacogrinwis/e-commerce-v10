<div class="container mx-auto my-6 max-w-7xl">
    <div class="grid grid-cols-4 gap-8">
        <aside class="col-span-1 space-y-4 text-sm">

            <section
                x-data="{ open: true }"
                {{-- class="border rounded-md border-gray-300 p-4 shadow-sm" --}}
            >
                <div class="mb-2 flex items-center justify-between">
                    <h3
                        class="flex cursor-pointer items-center gap-2 text-lg font-semibold"
                        @click="open = !open"
                    >
                        <span>Categorieën ({{ $filters['categories']->count() }})</span>
                        <svg
                            class="h-5 w-5 transition-transform duration-200"
                            :class="{ 'rotate-180': open }"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            />
                        </svg>
                    </h3>
                    @if (count($selectedCategories) > 0)
                        <button
                            wire:click="$set('selectedCategories', [])"
                            class="text-sm text-red-600 hover:text-red-800"
                        >
                            Reset
                        </button>
                    @endif
                </div>
                <div x-show="open">
                    @foreach ($filters['categories']->take($showAllCategories ? 100 : 5) as $category)
                        <label class="mb-2 flex items-center gap-2">
                            <input
                                type="checkbox"
                                wire:model.live="selectedCategories"
                                value="{{ $category->id }}"
                                class="h-4 w-4 rounded-md border-gray-300"
                            >
                            {{ $category->name }} ({{ $category->products_count }})
                        </label>
                    @endforeach
                    @if ($filters['categories']->count() > 5)
                        <button
                            wire:click="$toggle('showAllCategories')"
                            class="text-sm font-semibold text-blue-600"
                        >
                            {{ $showAllCategories ? 'Toon minder' : 'Toon meer (' . ($filters['categories']->count() - 5) . ')' }}
                        </button>
                    @endif
                </div>
            </section>

            <section
                x-data="{ open: true }"
                {{-- class="rounded-md border border-gray-300 p-4 shadow-sm" --}}
            >
                <div class="mb-2 flex items-center justify-between">
                    <h3
                        class="mb-2 flex cursor-pointer items-center justify-between gap-2 text-lg font-semibold"
                        @click="open = !open"
                    >
                        <span>Kleuren ({{ $filters['colors']->count() }})</span>
                        <span class="flex items-center">
                            <svg
                                class="h-5 w-5 transition-transform duration-200"
                                :class="{ 'rotate-180': open }"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                />
                            </svg>
                        </span>
                    </h3>
                    @if (count($selectedColors) > 0)
                        <button
                            wire:click="$set('selectedColors', [])"
                            class="text-sm text-red-600 hover:text-red-800"
                        >
                            Reset
                        </button>
                    @endif
                </div>
                <div x-show="open">
                    @foreach ($filters['colors']->take($showAllColors ? 100 : 5) as $color)
                        <label class="mb-2 flex items-center gap-2">
                            <input
                                type="checkbox"
                                wire:model.live="selectedColors"
                                value="{{ $color->id }}"
                                class="h-4 w-4 rounded-md border-gray-300"
                            >
                            <span
                                class="bg-{{ $color->tailwind_color }}{{ !in_array($color->tailwind_color, ['white', 'black']) ? '-500' : '' }} {{ $color->tailwind_color == 'white' ? 'border border-gray-300' : '' }} size-3 rounded-full"
                            ></span>
                            {{ $color->name }} ({{ $color->products_count }})
                        </label>
                    @endforeach
                    @if ($filters['colors']->count() > 5)
                        <button
                            wire:click="$toggle('showAllColors')"
                            class="text-sm font-semibold text-blue-600"
                        >
                            {{ $showAllColors ? 'Toon minder' : 'Toon meer (' . ($filters['colors']->count() - 5) . ')' }}
                        </button>
                    @endif
                </div>
            </section>

            <section
                x-data="{ open: true }"
                {{-- class="rounded-md border border-gray-300 p-4 shadow-sm" --}}
            >
                <div class="mb-2 flex items-center justify-between">
                    <h3
                        class="mb-2 flex cursor-pointer items-center justify-between gap-2 text-lg font-semibold"
                        @click="open = !open"
                    >
                        <span>Materialen ({{ $filters['materials']->count() }})</span>
                        <span class="flex items-center">
                            <svg
                                class="h-5 w-5 transition-transform duration-200"
                                :class="{ 'rotate-180': open }"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                />
                            </svg>
                        </span>
                    </h3>
                    @if (count($selectedMaterials) > 0)
                        <button
                            wire:click="$set('selectedMaterials', [])"
                            class="text-sm text-red-600 hover:text-red-800"
                        >
                            Reset
                        </button>
                    @endif
                </div>
                <div x-show="open">
                    @foreach ($filters['materials']->take($showAllMaterials ? 100 : 5) as $material)
                        <label class="mb-2 flex items-center gap-2">
                            <input
                                type="checkbox"
                                wire:model.live="selectedMaterials"
                                value="{{ $material->id }}"
                                class="h-4 w-4 rounded-md border-gray-300"
                            >
                            {{ $material->name }} ({{ $material->products_count }})
                        </label>
                    @endforeach
                    @if ($filters['materials']->count() > 5)
                        <button
                            wire:click="$toggle('showAllMaterials')"
                            class="text-sm font-semibold text-blue-600"
                        >
                            {{ $showAllMaterials ? 'Toon minder' : 'Toon meer (' . ($filters['materials']->count() - 5) . ')' }}
                        </button>
                    @endif
                </div>
            </section>

            {{-- <section
                x-data="{ open: true }"
                class="rounded-md border border-gray-300 p-4 shadow-sm"
            >
                <div class="mb-2 flex items-center justify-between">
                    <h3
                        class="flex cursor-pointer items-center gap-2 text-lg font-semibold"
                        @click="open = !open"
                    >
                        <span>Voorraad Status ({{ $filters['stock_status']->count() }})</span>
                        <svg
                            class="h-5 w-5 transition-transform duration-200"
                            :class="{ 'rotate-180': open }"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            />
                        </svg>
                    </h3>
                    @if (count($selectedStockStatus) > 0)
                        <button
                            wire:click="$set('selectedStockStatus', [])"
                            class="text-sm text-red-600 hover:text-red-800"
                        >
                            Reset
                        </button>
                    @endif
                </div>
                <div x-show="open">
                    @foreach ($filters['stock_status'] as $status)
                        <label class="mb-2 flex items-center gap-2">
                            <input
                                type="checkbox"
                                wire:model.live="selectedStockStatus"
                                value="{{ $status['id'] }}"
                                class="h-4 w-4 rounded-md border-gray-300"
                            >
                            {{ $status['name'] }} ({{ $status['products_count'] }})
                        </label>
                    @endforeach
                </div>
            </section> --}}


        </aside>
        <main class="col-span-3">
            <div class="mb-6 grid grid-cols-3 gap-2">
                @foreach ($products as $product)
                    <section
                        {{-- class="rounded-md border border-gray-300 p-4 shadow-sm" --}}
                        class="rounded p-4 transition-all duration-300 hover:scale-105 hover:shadow-lg"
                    >
                        <img
                            src="{{ asset($product->cover) }}"
                            alt="{{ $product->name }}"
                            class="mb-2 aspect-square w-full rounded-md object-cover"
                        >
                        <h2 class="__truncate mb-2 line-clamp-2 text-xl font-semibold">{{ $product->name }}</h2>
                        {{-- <p>{{ formatPrice($product->price) }}</p>
                        @if ($product->discount)
                            <p class="text-red-600">{{ formatPrice($product->discount_price) }}</p>
                        @endif --}}
                        <div class="mb-2">
                            <livewire:products.components.stock-status :status="$product->stock_status" />
                        </div>

                        <div class="mb-2 grid h-14 grid-cols-2 gap-2">
                            <div class="grid items-end">
                                @if ($product->discount)
                                    <p class="text-base text-gray-500 line-through">
                                        {{ formatPrice($product->discount_price) }}
                                    </p>
                                    <p class="text-xl font-bold text-red-600">{{ formatPrice($product->price) }}
                                    </p>
                                @elseif (!$product->discount)
                                    <p class="text-xl font-bold">{{ formatPrice($product->price) }}</p>
                                @endif
                            </div>
                            <div class="grid items-end justify-end">
                                <livewire:products.components.add-to-cart-button :product="$product" />
                            </div>
                        </div>

                        <div class="border p-1 text-xs text-gray-300">
                            <p>{{ $product->product_number }}</p>
                            <p>Category: {{ $product->category->name }}</p>
                            <div>
                                Colors:
                                @foreach ($product->colors as $color)
                                    <span>{{ $color->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endforeach
            </div>
            {{ $products->links() }}
        </main>
    </div>
</div>
