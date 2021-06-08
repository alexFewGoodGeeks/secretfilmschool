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
        $this->settingsRepository->inside_sfs_link = $request->inside_sfs_link;
        $this->settingsRepository->free_scholarship_link = $request->free_scholarship_link;
        $this->settingsRepository->free_webinar_snippet = $request->free_webinar_snippet;

        $this->settingsRepository->fb_link = $request->fb_link;
        $this->settingsRepository->yt_link = $request->yt_link;
        $this->settingsRepository->tt_link = $request->tt_link;
        $this->settingsRepository->ig_link = $request->ig_link;


        $this->settingsRepository->save();

        return redirect()
            ->route('admin.settings.index')
            ->with(['success' => 'Settings updated']);
    }
}
