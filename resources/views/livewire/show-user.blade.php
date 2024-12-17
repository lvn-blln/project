<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-8">
                   
                    <div class="table mt-5">
                        <table class="table table-bordered mt-2">
                            <thead>
                                <tr>
                                    <th>
                                        
                                        Firstname
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                    <a href="account/item" >
                                        <td>
                                        <a href="chat/{{ $user->id }}">
                                            {{ $user->firstname }}
                                        </a>
                                        </td>

                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        </a>
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
