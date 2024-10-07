<?php

namespace App\Livewire\Boss;

use App\Livewire\MyComponent;
use Livewire\Component;
use Livewire\WithPagination;
class ClientComponent extends MyComponent
{
    public $thead = [
      0=>'id',
      1=>'name' ,
      2=>'phone' ,
      3=>'address',
        4=>'action',
    ];
    public $title = 'Clients' , $name, $phone, $address, $id,$status;
    public function render()
    {
        return view('livewire.boss.client-component');
    }
}
