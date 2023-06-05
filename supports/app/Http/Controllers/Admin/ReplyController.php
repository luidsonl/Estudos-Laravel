<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function create(string|int $id, Support $support){
        return view('replies/create');
    }
}
