<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdatePasswordRequest;
use App\Repositories\Contracts\UserInterface;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $userRepository;

    /**
     * PasswordController constructor.
     * @param UserInterface $userRepository
     */
    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param UpdatePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePasswordRequest $request)
    {
        try {
            $this->userRepository->updatePassword($this->userRepository->currentUser()->id, $request->password);

            return redirect()
                ->route('admin.profile.index')
                ->with(['success' => 'Password was updated']);

        } catch (\Exception $e) {

        }
    }
}
