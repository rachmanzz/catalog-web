<header class="sticky top-0 z-50 w-full bg-primary text-primary-foreground shadow-md">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4">
        <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white">
                <svg class="w-6 h-6" viewBox="0 0 309 309" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M39.5 134.5L29 19L127.5 13.5L114.5 134.5L210 13.5L245 40.5L160.5 131V134.5H150.5V145.5H100V134.5H39.5Z" fill="#3ED5BC" stroke="#19A18A" stroke-width="3" />
                    <path d="M91 149.5H40L50.5 299.5L100 290L110.5 189.5L119.5 179.5L170.5 299.5L260.5 290L167.5 150H160.5V160.5H91V149.5Z" fill="#19A18A" stroke="#3ED5BC" stroke-width="3" />
                </svg>


            </div>
            <h1 className="text-xl font-bold text-pretty">IDCATALOG</h1>
        </div>

        <div class="flex items-center gap-3">
            <a href='https://wa.me/{{config("app.wanumber")}}'
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-2 rounded-full bg-white/20 px-4 py-2 transition-colors hover:bg-white/30"
                aria-label="Chat on WhatsApp">

                <i data-lucide="message-circle" class="h-6 w-6"></i>
                <span class="hidden sm:inline text-sm font-medium">Chat</span>
            </a>
        </div>
    </div>
</header>