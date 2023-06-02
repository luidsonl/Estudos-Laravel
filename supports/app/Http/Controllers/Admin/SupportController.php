<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Support\StoreSupportRequest;
use App\Http\Requests\Support\UpdateSupportRequest;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
    public function index(Support $support){

        $supports = $support->all();

        return view('admin/supports/index', [
            'supports'=>$supports
        ]);
    }

    public function show(string|int $id, Support $support){
        if(!$support = $support->find($id)){
            return redirect()->back();
        }
        return view('admin/supports/show', compact('support'));

        
        /*
        //é igual a:
        return view('admin/supports/show', [
            'supports'=>$support
        ]);
        */
    }

    public function create(){
        return view('admin/supports/create');
    }

    public function store(Support $support, StoreSupportRequest $request){
        $data = $request->all();
        $data['status'] = 'active';
        $data['user_id'] = strval(Auth::user()->id);

        
        $support = $support->create($data);
        
        return redirect()->route('supports.index');
    }

    public function edit(string|int $id, Support $support){
        if(!$support = $support->where('id', $id)->first()){
            return redirect()->back();
        }
        return view('admin/supports/edit', compact('support'));
    }

    public function update(string|int $id, Support $support, UpdateSupportRequest $request){
        if(!$support = $support->where('id', $id)->first()){
            return redirect()->back();
        }
        $support->update($request->only([
            'subject',
            'body',
        ]));
        return redirect()->route('supports.show', $id);
    }

    public function destroy(string|int $id, Support $support){
        if(!$support = $support->find($id)){
            return redirect()->back();
        }
        $support->delete();

        return redirect()->route('supports.index');
    }
}
