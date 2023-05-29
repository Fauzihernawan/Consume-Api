<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class StudentController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('/api/students');
        $students = $data->json();

        return view('students.index')->with('students', $students['data']);
    }

    public function create()
    {
        return view ('students.create');
    }

    public function store(Request $request)
    {
        $upload = [
            'nis' => $request->nis,
            'nama' =>$request->nama,
            'rombel'=>$request->rombel,
            'rayon' =>$request->rayon,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->create('api/students/store', $upload);
        return redirect('/siswa');
    }
}
