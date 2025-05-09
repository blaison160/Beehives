<?php

namespace App\Livewire\Beehives;



use App\Models\Beehive;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditBeehive extends Component
{
    #[Validate('required|string')]
    public string $name = '';

    #[Validate('required|string')]
    public string $ownerFirstName = '';

    #[Validate('required|string')]
    public string $ownerLastName = '';

    public Beehive $beehive;

    public function mount(Beehive $beehive): void
    {
        $this->beehive = $beehive;
        $this->name = $beehive->name;
        $this->ownerFirstName = $beehive->ownerFirstName;
        $this->ownerLastName = $beehive->ownerLastName;
    }

    public function save(): void
    {
        $date = $this->validate();
        $this->beehive->update($date);
        $this->redirect(route('beehive.index'));
    }

    public function render(): View
    {
        return view('livewire.beehives.edit-beehive');
    }
}
