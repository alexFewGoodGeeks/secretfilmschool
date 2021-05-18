<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Repositories\Contracts\UserInterface;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $userRepository;

    /**
     * ProfileController constructor
     * @param UserInterface $userRepository
     */
    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $user = $this->userRepository->currentUser();

        return view('admin.profile.index')->with([
            'user' => $user
        ]);
    }

    /**
     * @param UpdateProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateProfileRequest $request)
    {
        try {
            $this->userRepository->update($this->userRepository->currentUser()->id, $request->validated());

            return redirect()
                ->route('admin.profile.index')
                ->with(['success' => 'Profile was updated']);
        } catch (\Exception $e) {

        }
    }
}
