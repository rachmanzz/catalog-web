<footer class="w-full border-t border-border bg-card mt-12">
    <div class="mx-auto max-w-6xl px-4 py-8 md:py-12">
        <div class="grid gap-8 md:grid-cols-2">
            <div>
                <h3 class="font-bold text-foreground mb-4">My Shop</h3>
                <p class="text-sm text-muted-foreground mb-4 leading-relaxed">
                    Sebuah bisnis rumahan kecil yang berdedikasi untuk menghadirkan produk berkualitas langsung kepada Anda.
                </p>
                <a
                    href='https://wa.me/{{config("app.wanumber")}}'
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 text-primary hover:text-primary/80 transition-colors font-medium">
                    <i class="h-4 w-4" data-lucide="message-circle"></i>
                    Ngobrol dengan kami di WhatsApp
                    </Link>
            </div>

            <div>
                <h3 class="font-bold text-foreground mb-4">Get in Touch</h3>
                <div class="flex items-start gap-2 mb-3">
                    <i class="h-4 w-4 text-muted-foreground mt-0.5 shrink-0" data-lucide="clock"></i>
                    <div>
                        <p class="text-sm font-medium text-foreground">Jam Buka</p>
                        <p class="text-sm text-muted-foreground">9 AM - 6 PM (Senin - Minggu)</p>
                    </div>
                </div>
                <p class="text-xs text-muted-foreground leading-relaxed">
                    WhatsApp adalah cara cepat untuk menghubungi kami.
                </p>
            </div>
        </div>


        <div class="flex flex-col">
            <div class="mt-8 pt-8 border-t border-border">
                <p class="text-xs text-muted-foreground text-center leading-relaxed">
                    {shopName} merupakan bisnis kecil (UMKM). Kami berkomitment memberi kualitas terbaik untuk kustomer kami. Untuk info lebih lanjut tentang produk, harga, atau pembelian, Silahkan hubungi kami lewat WhatApp.
                </p>
            </div>


            <div class="mt-6 text-center text-xs text-muted-foreground">
                <p>
                    © {currentYear} {NamaUsaha}. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>