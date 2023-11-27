<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\DaftarMahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('form-pendaftaran');
    }

    public function prosesFormRequest(DaftarMahasiswa $request)
    {
        $validatedData = $request->validated();
        dump($validatedData);
    }
}