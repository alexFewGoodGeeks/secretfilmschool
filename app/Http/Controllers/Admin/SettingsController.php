<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UpdateSettingsRequest;
use App\Repositories\SettingsRepository;
use Illuminate\Http\Request;
use Spatie\LaravelSettings\Settings;

class SettingsController extends Controller
{
    protected $settingsRepository;

    public function __construct(SettingsRepository $settingsRepository)
    {
        $this->settingsRepository = $settingsRepository;
    }

    public function index()
    {
        return view('admin.settings.index')->with([
            'settings' => $this->settingsRepository
        ]);
    }

    public function store(UpdateSettingsRequest $request)
    {
        $this->settingsRepository->site_name = $request->site_name;
        $this->settingsRepository->google_analytics = $request->google_analytics;

        $this->settingsRepository->save();

        return redirect()
            ->route('admin.settings.index')
            ->with(['success' => 'Settings updated']);
    }
}
