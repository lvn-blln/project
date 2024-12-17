<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Chat;

class ShowChat extends Component
{
    public $user;
    public $user_id;
    public $sender_id;
    public $receiver_id;
    public $text;
    public $send;
    public $sender;

    public function sendChat(){
        Chat::create([
            'sender_id'=> $this->sender_id,
            'receiver_id'=> $this->receiver_id,
            'text'=> $this->text
        ]);

        $this->sender_id = '';
        $this->receiver_id = '';
        $this->text = '';

    }
     
    public function mount ($userId){
        $this->user = User::find($userId);
        $this->sender_id = auth()->user()->user_id;
        $this->receiver_id = $this->user->user_id;
    }

       

    public function render()
    {
        $sender = auth()->user()->user_id;
        $receiver = $this->user->user_id;

        return view('livewire.show-chat',[
            'chats'=>Chat::where('sender_id', $sender )
            ->where('receiver_id', $receiver)
            ->orWhere('sender_id', $receiver )
            ->where('receiver_id', $sender)
            ->orderBy('created_at','asc')->get()

        ]);
    }
}
