<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StorePtbRequest;
use App\Http\Requests\StoreDetailRequest;
use App\Http\Requests\UpdatePtbRequest;
use App\Models\Ptb;
use App\Models\Detail;
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
        
        Ptb::query()
            ->create($request->validated());

        return redirect()->route('ptbs.index')->with('success', 'Data PTB berhasil ditambahkan.');
    }

    public function store2(StoreDetailRequest $request, $id)
    {
        // Ambil objek Ptb berdasarkan id
    

    // Buat data untuk disimpan
    $data = [
        'ptb_id' => $id, // Menggunakan $id dari URL
        'tgl' => $request->tgl,
        'permintaan' => $request->permintaan,
        'kegiatan' => $request->kegiatan,
        'hasil_keg' => $request->hasil_keg,
        'lampiran' => $request->lampiran,
        'ket' => $request->ket,
    ];

    // Simpan data pada tabel details
    $detail = Detail::create($data);

    return redirect()->route('ptbs.show', $id)->with('success', 'Detail berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Ptb $ptb)
    {
        return view('ptb.show', compact('ptb'));
    }

    public function create2($id)
    {
        $ptb = Ptb::find($id);
        
        return view('ptb.create2', compact('ptb'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ptb $ptb)
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