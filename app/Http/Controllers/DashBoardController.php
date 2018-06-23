<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;
use App\Produto;

class DashBoardController extends Controller
{
    public function view()
    {
        $this->authorize('view', new DashBoard);
        return view('dashboard.index')->with(['produtos' => Produto::all()]);
    }

    public function create()
    {
        $this->authorize('create', new DashBoard);
        return view('dashboard.create');
    }
}
