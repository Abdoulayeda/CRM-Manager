<?php

namespace App\Http\Livewire;

use App\Models\Action;
use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ActionTable extends Component
{
   public $search = '';

   use WithPagination;
    public function render()
    {
        $actions = Action::where('nom', 'like', '%'.$this->search.'%')->latest()->paginate(5);
        return view('livewire.action-table', compact('actions'));
    }
}
