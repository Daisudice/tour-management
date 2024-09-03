<?php

namespace App\Livewire;
use Livewire\Attributes\On;
use Livewire\Component;


class TravelAgentUpdate extends Component
{
    public $usersId;
    // public $listeners = ['selectTravelAgent'];

    #on[('travelAgentSelected')];
    public function selectTravelAgent($userId)
    {
        $this->usersId = $userId;
    }



    public function render()
    {
        return view('livewire.travel-agent-update')->with(['use' => 'usersId']);
    }
}
