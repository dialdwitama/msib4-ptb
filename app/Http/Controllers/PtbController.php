<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StorePtbRequest;
use App\Http\Requests\UpdatePtbRequest;
use App\Models\Ptb;
use Illuminate\Http\Request;

final class PtbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $ptbs = Ptb::query()
            ->when($request->input('sort'), function ($query, $sort): void {
                $query->orderBy($sort, 'asc');
            })
            ->when($request->input('keyword'), function ($query, $keyword): void {
                $keyword = ucfirst($keyword);

                $query->where('kode', 'like', "%{$keyword}%")
                    ->orWhere('pt', 'like', "%{$keyword}%");
            })
            ->simplePaginate(10)
            ->withQueryString();

        return view('ptb.index', [
            'ptbs' => $ptbs,
            'keyword' => $request->input('keyword'),
            'sort' => $request->input('sort'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ptb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePtbRequest $request)
    {
        $request['permintaan'] = trim($request->permintaan, ',');

        Ptb::query()
            ->create($request->validated());

        return redirect()->route('ptbs.index')->with('success', 'Data PTB berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ptb $ptb)
    {
        return view('ptb.show', compact('ptb'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ptb $ptb)
    {
        return view('ptb.edit', compact('ptb'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePtbRequest $request, Ptb $ptb)
    {
        $ptb->update($request->validated());

        return redirect()->route('ptbs.index')
            ->with('success', 'Data PTB berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ptb $ptb)
    {
        $ptb->delete();

        return redirect()->route('ptbs.index')
            ->with('success', 'Data PTB berhasil dihapus.');
    }
}