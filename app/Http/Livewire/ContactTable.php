<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use DateTime;
use Livewire\Component;
use Livewire\WithPagination;

class ContactTable extends Component
{
    
    
    public function render()
    {
        $date = date_create_immutable_from_format(now(), 'd-m-Y H:i:s');
        
        $contacts = Contact::paginate(6);
        return view('livewire.contact-table', compact('contacts', 'date'));
    }
}
