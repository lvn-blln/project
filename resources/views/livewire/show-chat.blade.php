<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-6">
                    
                    <div class="form-div">

                        <h1 >
                            Start a chat with  {{ $user->firstname }}
                        </h1>
                        @foreach ($chats as $chat)
                            
                            @if( $chat->sender_id == auth()->user()->user_id)
                                <div class="form-group form-control mt-4" wire:poll style="width: 50%; border: 1px solid blue; border-radius: 10px; background-color: #212120; color: #fff; transform: translate(100%, 0)">
                                {{ $chat->text }}
                                </div>
                            @else
                                <div class="form-group form-control mt-4" wire:poll style="width: 50%; border: 1px solid blue; border-radius: 10px; background-color: #212120; color: #fff; ">
                                {{ $chat->text }}
                                </div>
                            @endif
                        @endforeach
                        <form method="POST" wire:submit="sendChat">
                            <div class="form-group mt-5">
                                <input type="hidden" class="form-control" wire:model="sender_id">
                            </div>

                            <div class="form-group mt-5">
                                <input type="hidden" class="form-control" wire:model="receiver_id" >
                            </div>

                            <div class="form-group mt-5">
                                <input type="text" class="form-control" wire:model="text" placeholder="Message">
                            </div>

                            <div class="form-group mt-2">
                                <button class="btn btn-success float-end" wire:model="send">Send</button>
                            </div>

                            <div wire:loading wire:target="sendChat">
                                Sending...

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
