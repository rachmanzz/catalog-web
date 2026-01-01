<div class="min-h-screen bg-background">

    @include('components.nav.header')

    <section class="mx-auto max-w-6xl px-4 py-8">

        <div class="mb-6">
            <h2 class="text-2xl font-bold text-foreground">Produk Kami</h2>
            <p class="text-muted-foreground">
                Koleksi produk cake kami
            </p>
        </div>

        <input
            type="text"
            wire:model.live.debounce.300ms="search"
            placeholder="Cari produk..."
            class="w-full border px-3 py-2 mb-4 rounded"
        >

        <div>
    </div>

        @include('components.extends.products.grid', ['products' => $products])

    </section>

    @include('components.nav.footer')

</div>
