<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();
        
        return view('admin/supports/index', compact('supports'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support = $support::create($data);
        
        return redirect()->route('support.index');
    }

    public function show (int $id)
    {
        $support = Support::find($id);

        if(!$support){
            return redirect()->route('support.index');
        }
            
        return view('admin/supports/show', compact('support'));
    }

    public function edit(int $id)
    {
        $support = Support::find($id);

        if(!$support){
            return redirect()->route('support.index');
        }
            
        return view('admin/supports/edit', compact('support'));        
    }

    public function update (int $id, Request $request, Support $support)
    {
        $support = $support->find($id);

        if(!$support){
            return redirect()->route('support.index');
        }  

        $support = $support->update($request->only(['subject', 'body']));
        
        return redirect()->route('support.index');
    }

    public function delete (int $id)
    {
        $support = Support::find($id);

        if(!$support){
            return back();
        }    

        $support->delete();
        
        return redirect()->route('support.index');        
    }
}
