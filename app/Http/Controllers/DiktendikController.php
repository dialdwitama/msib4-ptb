<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonevRequest;
use App\Http\Requests\UpdateMonevRequest;
use App\Models\Diktendik;
use Illuminate\Http\Request;

final class DiktendikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $diktendiks = Diktendik::query()
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

        return view('diktendik.index', [
            'diktendiks' => $diktendiks,
            'keyword' => $request->input('keyword'),
            'sort' => $request->input('sort'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diktendik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonevRequest $request)
    {
        $request['permasalahan'] = trim($request->permasalahan, ',');

        Diktendik::query()
            ->create($request->validated());

        return redirect()->route('diktendiks.index')->with('success', 'Data monev berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Diktendik $diktendik)
    {
        return view('diktendik.show', compact('diktendik'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diktendik $diktendik)
    {
        return view('diktendik.edit', compact('diktendik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonevRequest $request, Diktendik $diktendik)
    {
        $diktendik->update($request->validated());

        return redirect()->route('diktendiks.index')
            ->with('success', 'Data monev berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diktendik $diktendik)
    {
        $diktendik->delete();

        return redirect()->route('diktendiks.index')
            ->with('success', 'Data monev berhasil dihapus.');
    }
}
