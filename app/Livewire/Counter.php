<?php

namespace App\Livewire;
use App\Models\Animal;
use Livewire\Component;
use Illuminate\Support\Collection;

class Counter extends Component
{

    public string $username = "";
    public int $count = 0;
    public Collection $animaux;
    public function mount(){
        $this->username = "Ruihihi";
        $this->count = 0;
        $this->animaux = Animal::all();
    }
    public function increment(){
        return $this->count+=1;
    }

    public function decrement(){
        return $this->count-=1;
    }
    public function render()
    {
        return view('livewire.counter');
    }

    public function add(){
        $animal = new Animal();
    }
}
