<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BiodataRequest;

class FormPut extends Controller
{
    public function index()
    {
        $data['title'] = "Home";
        $data['methodtitle'] = "PUT";
        $data['method'] = method_field('PUT');
        $data['action'] = "/form-put/output";
        return view('/form', $data);
    }

    public function output(BiodataRequest $request)
    {
        $data['title']      = "Output Form Method PUT";
        $data['method']     = "PUT";
        $data['nama']       = $request->nama;
        $data['tempat']     = $request->tempat_lahir;
        $data['tanggal']    = $request->tanggal_lahir;
        $data['sex']        = $request->jenis_kelamin;
        $data['email']      = $request->email;
        $data['alamat']     = $request->alamat;
        $data['motto']      = $request->motto;

        return view('/output', $data);
    }
}
