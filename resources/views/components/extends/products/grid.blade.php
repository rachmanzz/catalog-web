@if ($products->count() === 0)
<div class="flex min-h-100 items-center justify-center rounded-lg border-2 border-dashed border-border">
    <p class="text-center text-muted-foreground">Tidak ada product ditemukan</p>
</div>
@else
<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @foreach ($products as $product)
    @include('components.extends.products.card', ['product' => $product])
    @endforeach
</div>
@endif