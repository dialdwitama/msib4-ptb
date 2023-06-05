<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonevRequest;
use App\Http\Requests\UpdateMonevRequest;
use App\Models\Kemahasiswaan;
use Illuminate\Http\Request;

final class KemahasiswaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kemahasiswaans = Kemahasiswaan::query()
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

        return view('kemahasiswaan.index', [
            'kemahasiswaans' => $kemahasiswaans,
            'keyword' => $request->input('keyword'),
            'sort' => $request->input('sort'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kemahasiswaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonevRequest $request)
    {
        $request['permasalahan'] = trim($request->permasalahan, ',');

        Kemahasiswaan::query()
            ->create($request->validated());

        return redirect()->route('kemahasiswaans.index')->with('success', 'Data monev berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kemahasiswaan $kemahasiswaan)
    {
        return view('kemahasiswaan.show', compact('kemahasiswaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kemahasiswaan $kemahasiswaan)
    {
        return view('kemahasiswaan.edit', compact('kemahasiswaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonevRequest $request, Kemahasiswaan $kemahasiswaan)
    {
        $kemahasiswaan->update($request->validated());

        return redirect()->route('kemahasiswaans.index')
            ->with('success', 'Data monev berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kemahasiswaan $kemahasiswaan)
    {
        $kemahasiswaan->delete();

        return redirect()->route('kemahasiswaans.index')
            ->with('success', 'Data monev berhasil dihapus.');
    }
}
