<?php

namespace App\Livewire\Beehives;

use App\Models\Beehive;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required|string|min:3')]
    public string $name = '';
    #[Validate('required|string|min:3')]
    public string $ownerFirstName = '';

    #[Validate('required|string|min:3')]
    public string $ownerLastName = '';


    public function save():void
    {
        $data = $this->validate();
        Beehive::create($data);
        $this->redirectRoute('beehive.index');
    }

    public function render(): View
    {
        return view('livewire.beehives.create');
    }
}
