<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class ModuleComposer
{
    public $moduleList = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->moduleList = [
            'cs210',
            'cs320',
            'cs357',
            
        ];
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('moduleList', $this->moduleList);  
    }
}