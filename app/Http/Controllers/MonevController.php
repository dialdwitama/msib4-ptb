<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonevRequest;
use App\Http\Requests\UpdateMonevRequest;
use App\Models\Monev;
use Illuminate\Http\Request;

final class MonevController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $monevs = Monev::query()
            ->when($request->input('sort'), function ($query, $sort): void {
                $query->orderBy($sort, 'asc');
            })
            ->when($request->input('keyword'), function ($query, $keyword): void {
                $keyword = ucfirst($keyword);

                $query->where('kode', 'like', "%{$keyword}%")
                    ->orWhere('nama_pt', 'like', "%{$keyword}%");
            })
            ->simplePaginate(10)
            ->withQueryString();

        return view('monev.index', [
            'monevs' => $monevs,
            'keyword' => $request->input('keyword'),
            'sort' => $request->input('sort'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('monev.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonevRequest $request)
    {
        $request['permasalahan'] = trim($request->permasalahan, ',');

        Monev::query()
            ->create($request->validated());

        return redirect()->route('monevs.index')->with('success', 'Data monev berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Monev $monev)
    {
        return view('monev.show', compact('monev'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Monev $monev)
    {
        return view('monev.edit', compact('monev'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonevRequest $request, Monev $monev)
    {
        $monev->update($request->validated());

        return redirect()->route('monevs.index')
            ->with('success', 'Data monev berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monev $monev)
    {
        $monev->delete();

        return redirect()->route('monevs.index')
            ->with('success', 'Data monev berhasil dihapus.');
    }

}
