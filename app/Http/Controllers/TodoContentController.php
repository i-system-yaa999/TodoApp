<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoContent;
use Illuminate\Support\Facades\DB;

class TodoContentController extends Controller
{
    public function index(){
        $items = DB::table('todocontents')->get();
        return view('index',['items'=>$items]);
    }
    public function create(Request $request){
        $this->validate($request, TodoContent::$rules);
        $param=[
            'content'=>$request->content,
        ];
        DB::table('todocontents')->insert($param);
        return redirect('/');
    }
    public function update(Request $request){
        $this->validate($request, TodoContent::$rules);
        $param=[
            'content'=>$request->content,
        ];
        DB::table('todocontents')->where('id',$request->id)->update($param);
        return redirect('/');
    }
    public function delete(Request $request){
        DB::table('todocontents')->where('id',$request->id)->delete();
        return redirect('/');
    }
}
