<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-8">
                    <a href="/account/dashboard" wire:navigate>Dashboard</a>
                    
                    <a href="{{ route('users') }} " >Show users</a>
                    <div class="form-div">
                        <!-- Form -->
                        <form method="POST" wire:submit="addRecord">
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="name" placeholder="Enter name...">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="department" placeholder="Enter department...">
                            </div>

                            <div class="form-group mt-1">
                                <button class="btn btn-primary float-right" wire:model="show">Add Record</button>
                            </div>

                            <div wire:loading wire:target="addRecord">
                                Loading...

                            </div>

                        </form>

                    </div>

                    <div class="table mt-5">
                        <input type="text" wire:model.live.debounce.300ms="search" class="form-control" style="width: 45%; border: 1px solid blue" placeholder="Search here...">

                        <table class="table table-bordered mt-2">
                            <thead>
                                <tr>
                                    <th>
                                        
                                        Name
                                    </th>
                                    <th>
                                        Department
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($items as $item)
                                    <tr>
                                    <a href="account/item" >
                                        <td wire:key='item'>
                                            {{ $item->name }}
                                        </td>

                                        <td>
                                            {{ $item->department }}
                                        </td>
                                        </a>
                                    </tr>

                                
                                    
                                @endforeach

                                <tr>
                                    <td>
                                        {{ $items->links() }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button wire:click="showCommentsToggle">Show comments</button>
 
                    @if ($showComments)
                        <div wire:transition> 
                            Show this part
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
</div>
