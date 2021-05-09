<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaestebuchController extends Controller
{
    public function index()
    {
        return View('gaestebuch.index');
    }

    public function create()
    {
        return View('gaestebuch.create');
    }

    public function store()
    {
        return View('gaestebuch.index');
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
