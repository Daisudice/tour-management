<?php

namespace App\Livewire;

use Livewire\Component;

class ModalForm extends Component
{
    public $modalId;    
    public $userId;
    public function mount($modalId){

        $this->modalId = $modalId;

        // if($modalId === "registerModal")
        // {
        //     $this->dispatchBrowserEvent('log-to-console', ['message' => 'Modal ID is registerModal']);
        // } else {
        //     $this->dispatchBrowserEvent('log-to-console', ['message' => 'Wala Atay']);
        // }

    }

    public function updateTravelAgent($id)
    {
        $this->userId = $id;
    }

    public function render()
    {
        return view('livewire.modal-form')->with(['modals' => 'modalId','id' => 'userId']);
    }
}
