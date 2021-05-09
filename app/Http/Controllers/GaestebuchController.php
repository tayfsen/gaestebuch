<?php

namespace App\Http\Controllers;

use App\Models\Eintrag;

use http\Env\Response;
use Illuminate\Http\Request;

class GaestebuchController extends Controller
{
    public function index()
    {
        $gaestebuch = Eintrag::all();
        return view('home')->with(compact('gaestebuch'));
    }

    public function create()
    {
        return View('gaestebuch.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Vorname' => 'required',
            'Nachname' => 'required',
            'E-Mail' => 'required',
            'Text' => 'required'
        ]);
        $gaestebuch = Eintrag::create($data);

        return Response::json($gaestebuch);
    }

    public function edit()
    {
        return View('gaestebuch.edit');
    }

    public function update()
    {

    }

    public function delete()
    {
        return View('gaestebuch.delete');
    }

    public function destroy()
    {
        return View('gaestebuch.index');
    }

}
