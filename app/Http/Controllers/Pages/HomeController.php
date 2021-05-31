<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Repositories\SettingsRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $settingsRepository;

    public function __construct(SettingsRepository $settingsRepository)
    {
        $this->settingsRepository = $settingsRepository;
    }

    public function index()
    {
        return view('pages.home.index')->with([
            'settings' => $this->settingsRepository
        ]);
    }
}
