<?php

namespace App\Livewire\Beehives;

use App\Models\Beehive;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function deleteBeehive(int $id): void
    {
        Beehive::where('id', $id)->delete();
    }

    public function render(): View
    {
        return view('livewire.beehives.index', [
            'beehives' => Beehive::paginate(10),
        ]);
    }
}
