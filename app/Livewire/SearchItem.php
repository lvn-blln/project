<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Item;

// class SearchItem extends Component
// {
//     public $query = '';
//     public $results = [];

    
//     public function render()
//     {
//         return view('livewire.search-item',[

//             $this->results = Item::where('name', 'LIKE', '%' . $this->query . '%')->get(),
//         ]);
//     }
// }
class SearchItem extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name = '';
    public $department;
    public $show;
    public $search;

    public function addRecord(){
        Item::create([
            'name'=> $this->name,
            'department'=> $this->department,
            'status'=> 1
        ]);

        $this->name = '';
        $this->department = '';
    }

    public function render()
    {
        $search = $this->search;

        // $items = Item::where('name', 'LIKE', '%' . $search . '%')->orderByDesc('id')->get();
        // return view('livewire.search-item')->with(compact('items'));
        return view('livewire.search-item', [
            'items' => Item::paginate(5)
        ]);
    }

    public function updatingSearch(){
        $this->resetPage();
    }
    
}