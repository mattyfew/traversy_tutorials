<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.form.text', ['name', 'value', 'attributes']);
        Form::component('bsTextarea', 'components.form.textarea', ['name', 'value', 'attributes']);
        Form::component('bsSubmit', 'components.form.submit', ['value' => 'submit', 'attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
