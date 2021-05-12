<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateSettingsRepository extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'SecretFilmSchool');
        $this->migrator->add('general.google_analytics', 'UA-85086862-1');
    }
}
