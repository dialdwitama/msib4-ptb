<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\UpdateDetailRequest;
use App\Models\Ptb;
use App\Models\Detail;
use Illuminate\Http\Request;

final class DetailController extends Controller
{
    public function index(Request $request)
    {
    $details = Detail::query()
    ->when($request->input('sort'), function ($query, $sort): void {
        $query->orderBy($sort, 'asc');
    })
    ->simplePaginate(10)
    ->withQueryString();
}
    public function create()
    {
        return view('ptb.add');
    }
}

