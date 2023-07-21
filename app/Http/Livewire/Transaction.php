<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;

class Transaction extends Component
{
    public $categories;
    public $services;
    public $selectedCategoryId;
    public $selectedServiceId;
    public $servicePrice;
    public $weight = 0;
    // public $weight = 1;
    public $totalTransaction;

    public function mount()
    {
        $this->categories = Category::get();
    }

    public function updatedSelectedCategoryId()
    {
        $this->services = Service::where('category_id', $this->selectedCategoryId)->get();
    }

    public function updatedSelectedServiceId()
    {
        // Check if a service is selected before accessing its price
        if ($this->selectedServiceId) {
            $this->servicePrice = Service::whereId($this->selectedServiceId)->first()->price;
        } else {
            $this->servicePrice = null; // Set the price to null if no service is selected
        }
    }

    public function updatedWeight()
    {
        $this->calculateTotalTransaction();
    }
    public function calculateTotalTransaction()
    {
        if ($this->selectedServiceId && $this->weight) {
            $this->totalTransaction = $this->servicePrice * $this->weight;
        } else {
            $this->totalTransaction = null;
        }
    }

    public function render()
    {
        return view('livewire.transaction', [
            'categories' => $this->categories,
            'services' => $this->services,
            'price' => $this->servicePrice,

        ]);
    }
}
