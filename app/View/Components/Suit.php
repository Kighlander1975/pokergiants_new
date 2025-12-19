<?php
// app/View/Components/Suit.php

namespace App\View\Components;

use Illuminate\View\Component;

class Suit extends Component
{
    public $type;
    public $size;

    public function __construct($type, $size = null)
    {
        $this->type = $type;
        $this->size = $size;
    }

    public function render()
    {
        return view('components.suit');
    }
}
