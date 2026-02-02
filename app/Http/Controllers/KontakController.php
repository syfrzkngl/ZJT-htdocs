<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        Kontak::create($request->only(['nama', 'email', 'pesan']));

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');

    }
}
