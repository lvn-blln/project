<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Item;

class SearchItem extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name = '';
    public $department;
    public $show;
    public $search;
    public $showComments = false;

    public function addRecord(){
        Item::create([
            'name'=> $this->name,
            'department'=> $this->department,
            'status'=> 1
        ]);

        $this->name = '';
        $this->department = '';
    }

    public function showCommentsToggle(){
        $this->showComments = !$this->showComments;
    }
     
    


    public function render()
    {
        $search = $this->search;
        // $items = Item::where('name', 'LIKE', '%' . $search . '%')->orderByDesc('id')->paginate(5);
        // ->with(compact('items')
        return view('livewire.search-item', [
            'items'=>Item::where('name', 'like', '%' . $search . '%')->orderByDesc('id')->paginate(5)
        ]);
    }

}
