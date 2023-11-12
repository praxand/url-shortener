<?php

namespace App\Http\Controllers;

use App\Helpers\PaginationHelper;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    const PAGINATION_LIMIT = 3;

    public function __invoke(): View|RedirectResponse
    {
        $shortlinks = auth()->user()->shortlinks()->get();
        $codes = auth()->user()->quickResponseCodes()->get();

        $merged = $shortlinks->mergeRecursive($codes)->sortByDesc('created_at');
        $latests = PaginationHelper::paginate($merged, self::PAGINATION_LIMIT);

        if ($latests->currentPage() > $latests->lastPage()) {
            return redirect()->route('dashboard')
                ->with('error', 'Page not found');
        }

        return view('dashboard.index', [
            'shortlinks' => $shortlinks,
            'codes' => $codes,
            'latests' => $latests,
        ]);
    }
}
