<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\User;

class getUser extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $firstname = '';
    public $email;

    public function render()
    {
        
        return view('livewire.show-user',[
            'users'=>User::all()
        ]);
    }
}