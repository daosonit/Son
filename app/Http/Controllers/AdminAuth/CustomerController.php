<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.');
    }

    public function create()
    {
        return view();
    }

    public function store()
    {
    }

    public function edit($id)
    {
        return view();
    }

    public function update()
    {

    }

    public function destroy($id)
    {
    }
}
