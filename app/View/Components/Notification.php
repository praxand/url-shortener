<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Notification extends Component
{
    public function __construct(
        public $message = null,
        public $title = null,
        private $type = null,
    ) {
        $this->message = $message;
        $this->title = $title;
        $this->type = $type;
    }

    public function color(): string
    {
        return [
            'error' => 'text-red-400',
            'success' => 'text-green-400',
        ][$this->type];
    }

    public function draw(): string
    {
        return [
            'error' => 'M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
            'success' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
        ][$this->type];
    }

    public function render(): View
    {
        return view('components.notification');
    }
}