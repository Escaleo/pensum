<?php
namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    protected $listeners = ['render' => 'render'];
    public $search;
    public $sort = 'id';
    public $dir  = 'asc';

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->dir == 'desc') {
                $this->dir = 'asc';
            } else {
                $this->dir = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->dir  = 'asc';
        }
    }

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->dir)
            ->get();

        return view('livewire.show-users', compact('users'));
    }
}
