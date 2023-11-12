<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuickResponseCodeRequest;
use App\Models\QuickResponseCode;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QuickResponseCodeController extends Controller
{
    public function index(): View
    {
        $codes = QuickResponseCode::orderBy('updated_at', 'desc')->paginate(3);

        if ($codes->currentPage() > $codes->lastPage()) {
            return redirect()->route('quick-response-codes.index')
                ->with('error', 'Page not found');
        }

        return view('quick-response-codes.index', [
            'codes' => $codes,
        ]);
    }

    public function create(): View
    {
        return view('quick-response-codes.create');
    }

    public function store(QuickResponseCodeRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated['base64'] = base64_encode(QrCode::format('png')->generate($validated['original_link']));

        auth()->user()->quickResponseCodes()->create($validated);

        return redirect()->route('quick-response-codes.index')
            ->with('success', 'QR code created successfully.');
    }

    public function edit(QuickResponseCode $quickResponseCode): View
    {
        return view('quick-response-codes.edit', [
            'code' => $quickResponseCode,
        ]);
    }

    public function update(QuickResponseCodeRequest $request, QuickResponseCode $quickResponseCode): RedirectResponse
    {
        $validated = $request->validated();

        $quickResponseCode->update($validated);

        return redirect()->route('quick-response-codes.index')
            ->with('success', 'QR code updated successfully.');
    }

    public function destroy(QuickResponseCode $quickResponseCode): RedirectResponse
    {
        $quickResponseCode->delete();

        return redirect()->route('quick-response-codes.index')
            ->with('success', 'QR code deleted successfully.');
    }
}
