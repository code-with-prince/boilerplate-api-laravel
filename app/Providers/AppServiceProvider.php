<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Sanctum::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->extendValidator();
    }

    public function extendValidator()
    {

        Validator::extend('alpha_space', function ($attribute, $value) {
            return preg_match('/^[\pL\s]+$/u', $value);
        }, 'The :attribute may only contain letters and spaces.');

        Validator::extend('alpha_num_space', function ($attribute, $value) {
            return preg_match('/^[\pL\d\s]+$/u', $value);
        }, 'The :attribute may only contain letters, numbers and spaces.');

        Validator::extend('password_format', function ($attribute, $value) {
            return preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/', $value);
        }, ':attribute format is invalid');

    }
}
