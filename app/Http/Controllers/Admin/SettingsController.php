<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UpdateSettingsRequest;
use App\Repositories\SettingsRepository;
use Illuminate\Http\Request;
use Spatie\LaravelSettings\Settings;

class SettingsController extends Controller
{
    /**
     * @var SettingsRepository
     */
    protected $settingsRepository;

    /**
     * SettingsController constructor.
     * @param SettingsRepository $settingsRepository
     */
    public function __construct(SettingsRepository $settingsRepository)
    {
        $this->settingsRepository = $settingsRepository;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.settings.index')->with([
            'settings' => $this->settingsRepository
        ]);
    }

    /**
     * @param UpdateSettingsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
