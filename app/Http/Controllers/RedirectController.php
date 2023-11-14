<?php

namespace App\Http\Controllers;

use App\Http\Requests\RedirectRequest;
use App\Models\Shortlink;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class RedirectController extends Controller
{
    public function redirect(Shortlink $shortlink): RedirectResponse
    {
        if ($shortlink->password) {
            return redirect()->route('shortlinks.password', $shortlink->alias);
        }

        return redirect()->away($shortlink->original_link);
    }

    public function password(Shortlink $shortlink): View
    {
        return view('shortlinks.password', [
            'shortlink' => $shortlink,
        ]);
    }

    public function confirm(RedirectRequest $request, Shortlink $shortlink)
    {
        if (Hash::check($request->password, $shortlink->password)) {
            return redirect()->away($shortlink->original_link);
        }

        return redirect()->route('shortlinks.password', $shortlink->alias)
            ->with('error', 'Password is incorrect.');
    }
}
