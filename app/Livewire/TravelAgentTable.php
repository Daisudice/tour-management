<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class TravelAgentTable extends Component
{
    public $user;



    public function mount()
    {
        $this->user = User::all(); // Get all users
    }

    public function selectTravelAgent($userId)
    {
        // Emit an event named 'travelAgentSelected' with the user ID
        $this->dispatch('travelAgentSelected', $userId);
    }
    public function render()
    {
        return view('livewire.travel-agent-table');
    }
}
