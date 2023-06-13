<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reply\StoreReplyRequest;
use App\Models\Reply;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function create(string|int $supportId, Support $support){
        if(!$support = $support->where('id', $supportId)->first()){
            return redirect()->back();
        }
        //dd($supportId, $support);
        return view('replies/create', [
            'support'=>$support
        ]);
    }

    public function store(Reply $reply, StoreReplyRequest $request){
        $data = $request->all();
        $data['user_id'] = strval(Auth::user()->id);


        $reply = $reply->create($data);
        return redirect()->route('supports.index');
    }
}
