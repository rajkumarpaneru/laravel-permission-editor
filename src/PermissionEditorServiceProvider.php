<?php

namespace rajkumarpaneru\LaravelPermissionEditor;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class PermissionEditorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Route::prefix('permission-editor')
            ->as('permission-editor.')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
            });

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'permission-editor');
    }
}
