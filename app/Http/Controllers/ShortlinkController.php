<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortlinkRequest;
use App\Models\Shortlink;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ShortlinkController extends Controller
{
    public function index(): View
    {
        $links = Shortlink::orderBy('updated_at', 'desc')->paginate(5);

        return view('shortlinks.index', [
            'links' => $links,
        ]);
    }

    public function create(): View
    {
        return view('shortlinks.create');
    }

    public function store(ShortlinkRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated['short_link'] = Shortlink::generateShortLink();

        auth()->user()->shortlinks()->create($validated);

        // Temporary solution??
        if ($request->action === "create") {
            return redirect()->route('shortlinks.index')
                ->with('success', 'Shortlink created successfully.');
        }
        else {
            return redirect()->route('shortlinks.create')
                ->with('success', 'Shortlink created successfully.');
        }
    }

    public function edit(Shortlink $shortlink): View
    {
        return view('shortlinks.edit', [
            'shortlink' => $shortlink,
        ]);
    }

    public function update(ShortlinkRequest $request, Shortlink $shortlink)
    {
        $validated = $request->validated();

        $shortlink->update($validated);

        return redirect()->route('shortlinks.index')
            ->with('success', 'Shortlink updated successfully');
    }

    public function destroy(Shortlink $shortlink): RedirectResponse
    {
        $shortlink->delete();

        return redirect()->route('shortlinks.index')
            ->with('success', 'Shortlink deleted successfully');
    }
}
