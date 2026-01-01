<?php

namespace App\Livewire;

use Livewire\Component;

class PostCrud extends Component
{
     public string $pageTitle = 'Dashboard';

    public function render()
    {
        return view('livewire.post-crud')->title($this->pageTitle);
    }
}
