<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-8">
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
                        </form>
                    </div>

                    <div class="table mt-5">
                        <input type="text" wire:model="search" class="form-control" style="width: 45%; border: 1px solid blue" placeholder="Search here...">

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
                                        <td>
                                            {{ $item->name }}
                                        </td>

                                        <td>
                                            {{ $item->department }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
