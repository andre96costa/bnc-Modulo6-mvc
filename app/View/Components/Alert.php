<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;
    public string $title;
    public string $message;

    /**
     * Create a new component instance.
     */
    public function __construct(string $type, string $title, string $message)
    {
        $this->type    = $type;
        $this->title   = $title;
        $this->message = $message;
    }

    public function getBgClass()
    {
        $bgClass = [
            'success' => 'bg-green-50',
            'warning' => 'bg-yellow-50',
            'error'   => 'bg-red-50',
        ];
        return $bgClass[$this->type];
    }

    public function getTitleClass()
    {
        $titleClass = [
            'success' => 'text-green-800',
            'warning' => 'text-yellow-800',
            'error'   => 'text-red-800',
        ];

        return $titleClass[$this->type];
    }

    public function getMessageClass()
    {
        $messageClass = [
            'success' => 'text-green-700',
            'warning' => 'text-yellow-700',
            'error'   => 'text-red-700',
        ];

        return $messageClass[$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return function (array $data) {
            $data['title'] = 'Andrezao';
            return "components.alert";
        };
    }
}
