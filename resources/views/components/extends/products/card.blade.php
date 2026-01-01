@php
    $text = config("app.waformat");
    $text = str_replace("%produk%", $product->name, $text);
    $text = str_replace("%harga%", number_format($product->price, 0, ',', '.'), $text);
@endphp

<div class="flex flex-col overflow-hidden rounded-lg border border-border bg-card shadow-sm transition-shadow hover:shadow-md">
    <div class="relative h-48 w-full overflow-hidden bg-muted">
        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="object-cover transition-transform hover:scale-105" />
    </div>

    <div x-data='{
      openWa(){window.open("https://wa.me/{{config("app.wanumber")}}?text=" + encodeURI("{{$text}}"), "_blank");}
    }' class="flex flex-1 flex-col p-4">
        <h3 class="mb-1 line-clamp-2 font-semibold text-foreground text-pretty">{{$product->name}}</h3>
        <p class="mb-3 line-clamp-2 text-sm text-muted-foreground">{{$product->short_description}}</p>

        <div class="mb-4 mt-auto">
          <p class="text-2xl font-bold text-primary">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>

        <button
          @click="openWa"
          class="flex items-center justify-center gap-2 hover:cursor-pointer rounded-lg bg-primary px-4 py-2 font-medium text-primary-foreground transition-colors hover:opacity-90 active:scale-95"
          aria-label="Order {{$product->name}} via WhatsApp"
        >
        <i data-lucide="message-circle" class="w-5 h-5"></i>
        <span>Order via WhatsApp</span>
        </button>
    </div>
</div>

<script>
  function openWhatapp() {
    alert("helo")
  }
</script>