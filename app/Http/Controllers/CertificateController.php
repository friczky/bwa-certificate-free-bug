<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Certificate::all();
        return view('pages.index', compact('data'));
    }

    public function tambah()
    {
        return view('pages.tambah');
    }

    public function tambah_list(Request $request)
    {
        $data = [
            'nama_sertifikat' => $request->nama_sertifikat,
            'slug' => $request->slug,
        ];

        $certificate = Certificate::create($data);
        if ($certificate) {
            return redirect()->route('generate')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('generate')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function generate()
    {
        $data = Certificate::all();
        return view('pages.generate', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }
}
