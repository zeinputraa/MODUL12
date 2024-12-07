<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Profile';
        $user = DB::table('users')->where('id', $request->user()->id)->first();

        return view('profile', [
            'pageTitle' => $pageTitle,
            'user' => $user
        ]);
    }
}
