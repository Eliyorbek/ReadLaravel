<div>
    <div class="p-4">

        @include('livewire.content-header')
        <div class="card  mt-2">
            @include('livewire.card-header')
                @if(isset($create) && $create==1)
                    @include('livewire.admins.create')
                    @include('livewire.show')
                @endif
            <div class="card-body">
                <table class="table table-bordered">
                    @include('livewire.thead')
                    <tbody>
                    @if(isset($users))
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td style="text-transform: none">{{$user->email}}</td>
                                <td style="text-transform: none">{{$user->role ==1 ? 'Boshliq' : 'Sotuvchi'}}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger" wire:click="deleteUser({{$user->id}})"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                @if(isset($users))
                    {{$users->links()}}
                @endif
            </div>
        </div>
    </div>
</div>
