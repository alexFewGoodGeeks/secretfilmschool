<?php
namespace App\Repositories;

use Spatie\LaravelSettings\Settings;

class SettingsRepository extends Settings
{
    public $site_name;
    public $google_analytics;
    public $inside_sfs_link;
    public $free_scholarship_link;
    public $free_webinar_snippet;

    public static function group(): string
    {
        return "general";
    }
}
