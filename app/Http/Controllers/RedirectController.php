<?php

namespace App\Http\Controllers;

use App\Http\Requests\RedirectRequest;
use App\Models\Shortlink;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RedirectController extends Controller
{
    public function redirect(Request $request): RedirectResponse
    {
        $link = Shortlink::where('short_link', $request->url())->firstOrFail();

        if ($link->password) {
            return redirect()->route('shortlinks.password', $request->path());
        }

        return redirect()->away($link->original_link);
    }

    public function password($link): View
    {
        $url = config('app.url') . '/' . $link;

        $shortlink = Shortlink::where('short_link', $url)->firstOrFail();

        return view('shortlinks.password', [
            'shortlink' => $shortlink,
        ]);
    }

    public function confirm(RedirectRequest $request, Shortlink $shortlink)
    {
        if (Hash::check($request->password, $shortlink->password)) {
            return redirect()->away($shortlink->original_link);
        }

        $code = explode('/', $shortlink->short_link)[3];

        return redirect()->route('shortlinks.password', $code)
            ->with('error', 'Password is incorrect.');
    }
}
