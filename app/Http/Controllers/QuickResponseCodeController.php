<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuickResponseCodeRequest;
use App\Models\QuickResponseCode;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QuickResponseCodeController extends Controller
{
    public function index(): View
    {
        $codes = QuickResponseCode::orderBy('updated_at', 'desc')->paginate(5);

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

    public function store(QuickResponseCodeRequest $request)
    {
        $validated = $request->validated();

        $a = base64_encode(QrCode::format('png')->generate($validated['original_link']));
        dd($a);

        return redirect()->route('quick-response-codes.index')
            ->with('success', 'QR code created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuickResponseCode $quickResponseCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuickResponseCode $quickResponseCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuickResponseCode $quickResponseCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuickResponseCode $quickResponseCode)
    {
        //
    }
}
