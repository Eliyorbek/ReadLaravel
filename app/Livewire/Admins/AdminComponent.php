<?php

namespace App\Livewire\Admins;

use App\Livewire\MyComponent;
use App\Models\User;
use Livewire\WithPagination;

class AdminComponent extends MyComponent
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $title = 'Admins',$subtitle = 'Home' , $id,$name,$email,$role,$password ,$create=0;
    public $search;
    public $thead = [
        0=>'id',
        1=>'name',
        2=>'email',
        3=>'lavozim',
        4=>'action',
    ];

    public function saveAdmin(){
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role'=>2
        ]);
        $this->close();
        $this->render();
    }

    public function deleteUser($id){
        User::destroy($id);
        $this->render();
    }
    public function render()
    {
        if($this->search != null){
            $users = User::where('name','like','%'.$this->search.'%')
            ->orWhere('email','like','%'.$this->search.'%')->paginate(10);
            return view('livewire.admins.admin-component' , compact('users'));
        }else{
            $users = User::paginate(10);
            return view('livewire.admins.admin-component' , compact('users'));
        }

    }
}
