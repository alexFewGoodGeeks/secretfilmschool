<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateSettingsRepository extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'SecretFilmSchool');
        $this->migrator->add('general.google_analytics', 'UA-85086862-1');

        $this->migrator->add('general.free_webinar_snippet', 'https://event.webinarjam.com/go/live/6/04pvgbpc1s7s2');
        $this->migrator->add('general.inside_sfs_link', 'https://secretfilmschool.com');
        $this->migrator->add('general.free_scholarship_link', 'https://secretfilmschool.com');

        $this->migrator->add('general.fb_link', 'https://facebook.com');
        $this->migrator->add('general.yt_link', 'https://youtube.com/');
        $this->migrator->add('general.tt_link', 'https://tiktok.com/');
        $this->migrator->add('general.ig_link', 'https://insagram.com/');
    }
}
