<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\players;


class GradePlayerController extends Controller
{

    public function __construct() {
        $this->middleware('auth', ['only'-> ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    public function store( Request $request, $gradesId) {
        $players = new Players;
        $players->grades_id = $gradesId;
        $players->name = $request->name;
        $players->email = $request->email;
        $players->phone = $request->phone;
        $players->position = $request->position;
        $players->nswrego = $request->nswrego;
        $players->briarsreg = $request->briarsreg;

        if ( !$players->save()) {
            return redirect()
                ->action('GradesController@show', $gradesId)
                ->with('errors', $players->getErrors())
                ->withInput();
        }

        //Success action
        return redirect()
            ->action('GradesController@show', $gradesId)
            ->with('message', '<div class="alert alert-success">Player was created successfully</div>');
    }

    public function update(Request $request, $gradesId, $id) {
        $players = Players::findOrFail($id);
        $players->name = $request->name;
        $players->email = $request->email;
        $players->phone = $request->phone;
        $players->position = $request->position;
        $players->nswrego = $request->nswrego;
        $players->briarsreg = $request->briarsreg;

        if (! $players->save()) {
            return redirect()
                ->action('GradesController@show', $gradesId)
                ->with('errors', $players->getErrors())
                ->withInput();
        }
        //Success action
        return redirect()
            ->action('GradesController@show', $gradesId)
            ->with('message', '<div class="alert alert-success">Player was updated successfully</div>');
    }

    public function destroy($gradesId, $id) {
        $players = Players::findOrFail($id);
        $players->delete();

        //Success action
        return redirect()
            ->action('GradesController@show', $gradesId)
            ->with('message', '<div class="alert alert-success">Player was deleted!</div>');
    }

    public function index(){
        $players = Players::all();
    }

    public function search(Request $request) {
        //echo $request->q;
        $q = $request->q;
        $q_query = '%'. $q .'%';
        $players = Players::where('name', 'LIKE', $q_query)
            ->orWhere('position','LIKE',$q_query)
            ->get();
        //return view('player.search',['player' => $players, 'players' => Players::all()];
    }

}
