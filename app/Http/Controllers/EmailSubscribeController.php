<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterSubscribeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Newsletter;

class EmailSubscribeController extends Controller
{

    public function store(NewsletterSubscribeRequest $request)
    {
        try {
            $email = $request->email;
            $data = Newsletter::subscribe($email, [], "",  ['tags' => ['New Website Visitor', 'Newsletter']]);

            return json_encode([
                'status' => 'ok',
                'message' => 'successfully subscribed',
                'data' => json_encode($data)
            ]);
        } catch (\Exception $e) {
            Log::debug($e->getMessage());
            return $e->getMessage();
        }
    }
}
