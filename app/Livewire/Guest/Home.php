<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use App\Models\Product;

class Home extends Component
{
    public $search = "";
    public function render()
    {

        $products = Product::query()
            ->when($this->search, fn ($q) =>
                $q->where('name', 'like', '%' . $this->search . '%')
            )
            ->latest()
            ->limit(20) // 🔥 MAX 20
            ->get();
        return view('livewire.guest.home', compact('products'));
    }
}
