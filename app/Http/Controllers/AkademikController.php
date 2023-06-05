<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonevRequest;
use App\Http\Requests\UpdateMonevRequest;
use App\Models\Akademik;
use Illuminate\Http\Request;

final class AkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $akademiks = Akademik::query()
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

        return view('akademik.index', [
            'akademiks' => $akademiks,
            'keyword' => $request->input('keyword'),
            'sort' => $request->input('sort'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('akademik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonevRequest $request)
    {
        $request['permasalahan'] = trim($request->permasalahan, ',');

        Akademik::query()
            ->create($request->validated());

        return redirect()->route('akademiks.index')->with('success', 'Data monev berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Akademik $akademik)
    {
        return view('akademik.show', compact('akademik'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akademik $akademik)
    {
        return view('akademik.edit', compact('akademik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonevRequest $request, Akademik $akademik)
    {
        $akademik->update($request->validated());

        return redirect()->route('akademiks.index')
            ->with('success', 'Data monev berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akademik $akademik)
    {
        $akademik->delete();

        return redirect()->route('akademiks.index')
            ->with('success', 'Data monev berhasil dihapus.');
    }
}
