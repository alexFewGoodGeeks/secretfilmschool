<?php
namespace App\Repositories;

use Spatie\LaravelSettings\Settings;

class SettingsRepository extends Settings
{
    public $site_name;
    public $google_analytics;

    public static function group(): string
    {
        return "general";
    }
}
