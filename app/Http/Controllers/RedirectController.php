<?php

namespace App\Http\Controllers;

use App\Models\Shortlink;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $link = Shortlink::where('short_link', $request->url())->firstOrFail();

        return redirect()->away($link->original_link);
    }
}
