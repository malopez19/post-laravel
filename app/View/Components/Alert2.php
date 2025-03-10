<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;

    public function __construct($type = 'info')
    {
        $classes = [
            'success' => 'bg-green-50 text-green-800 dark:bg-green-300 dark:text-green-800',
            'danger' => 'bg-red-50 text-red-800 dark:bg-red-300 dark:text-red-800',
            'warning' => 'bg-yellow-50 text-yellow-800 dark:bg-yellow-300 dark:text-yellow-800',
            'info' => 'bg-blue-50 text-blue-800 dark:bg-gray-800 dark:text-blue-400',
            'dark'  => 'bg-gray-800 text-gray-400 dark:bg-gray-800 dark:text-gray-400',
        ];

        $type = $classes[$type] ?? $classes['info'];

        $this->class = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
