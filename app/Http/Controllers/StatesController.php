<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use Illuminate\Support\Facades\Redirect;

class StatesController extends Controller
{
    //
    public function home(){
        return view('home');
    }


    public function create(){
        return view('create');
    }


    public function showAll(){
        $all = State::all();    // get all data from state model  
        // die($all);

        return view('show', ['all' => $all]);   // pass 'all' as variable to 'show' view
        // return view('show')->with('all', $all);
        // return view::make('show')->with('all', $all);
    }


    public function test(){
        $a = 'hello world';
        return view('test', ['b'=>$a, 'name'=>'Mananaf']);
    }

    public function store(Request $request){
        $states = new State;
        $states->state = $request->input('state');      // request data from state input field from form
        $states->capital = $request->input('capital');  // request data from capital input field from form
        $states->save();

        return redirect('/show')->with('success', 'new field for '.$states->state.' created successfully');
    }



    // --------------- edit -------------------
    public function edit($id){
        $states = State::find($id);     // get item by id

        return view('edit')->with('states',$states);
    }

    // ---------------- DELETE --------------------
    public function delete($id){
        $states = State::find($id);       // get states by id
        $states->delete();                // delete data with corresponding id

        // return redirect('show')->with('success', 'item was deleted successfully');
        return Redirect::to('/show')->with('info', $states->state.' state was deleted');
    }


    public function update(Request $request, $id){
        $states = State::find($id);     // get itemby id
        $states->state = $request->input('state');      // update new value
        $states->capital = $request->input('capital');  // update new value
        $states->save();        // save updates to DB

        return redirect('show')->with('success', 'updated successfully');   //redirect to tables page
    }
}
