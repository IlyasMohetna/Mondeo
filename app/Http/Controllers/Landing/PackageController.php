<?php

namespace App\Http\Controllers\Landing;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\PACKAGE\Package;
use App\Http\Controllers\Controller;
use App\Models\PACKAGE\PackageType;

class PackageController extends Controller
{
    public function search_index(Request $request)
{
    $query = Package::query();

    $query->with('thumbnail');

    // Handle sorting
    if ($request->has('sort')) {
        $sortField = $request->input('sort.field', 'id');
        $sortOrder = $request->input('sort.order', 'asc');
        $query->orderBy($sortField, $sortOrder);
    }

    // Handle search
    if ($request->filled('search')) {
        $query->where('column_name', 'like', '%' . $request->input('search') . '%');
    }

    // Handle package types
    if ($request->filled('package_types')) {
        $query->whereIn('package_type_id', $request->input('package_types'));
    }

    // Handle amount range
    if ($request->filled('amount_range')) {
        $amountRange = $request->input('amount_range');
        $query->whereBetween('amount_ttc', [$amountRange[0], $amountRange[1]]);
    }

    // Handle duration range
    if ($request->filled('duration_range')) {
        $durationRange = $request->input('duration_range');
        $query->whereBetween('duration', [$durationRange[0], $durationRange[1]]);
    }

    $packages = $query->paginate(2);

    $min_amount = Package::min("amount_ttc");
    $max_amount = Package::max("amount_ttc");
    $min_duration = Package::min("duration");
    $max_duration = Package::max("duration");
    $package_types = PackageType::all();

    return Inertia::render('Landing/Package/PackageList', [
        'min_amount' => $min_amount,
        'max_amount' => $max_amount,
        'min_duration' => $min_duration,
        'max_duration' => $max_duration,
        'package_types' => $package_types,
        'packages' => $packages->items(),
        'total' => $packages->total(),
        'currentPage' => $packages->currentPage(),
        'lastPage' => $packages->lastPage(),
        'sort' => [
            'field' => $request->input('sort.field', 'id'),
            'order' => $request->input('sort.order', 'asc'),
        ],
        'search' => $request->input('search', ''),
    ]);
}

}