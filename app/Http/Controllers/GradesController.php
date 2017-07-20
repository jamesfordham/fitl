<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; //allow user restrictions
use App\Grades;

class GradesController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['only'=> ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    public function index() {
        $grades = Grades::all();
        $data = array();
        $data['grade'] = $grades;
        return view('grades.index', $data);
    }

    public function show($id) {
        $data = array();
        $grades = Grades::findOrFail($id);
        $data['grade'] = $grades;
        return view('grades/show', $data);
    }

    public function create() {
        $grades = new Grades;
        $data = array();
        $data['grade'] = $grades;
        return view('grades.create', $data);
    }

    public function store(Request $request) {
        /*echo '<pre>';
        echo $request->grade; //Or print_r($request);
        echo '</pre>'; */

        //Get POST data
        $grades = new Grades;
        $grades->grade = $request->grade;
        $grades->comments = $request->comments;
        //This line is to restrict this function to logged in users
        $grades->user_id = Auth::user()->id;

        //New object - add to DB
        //If errors
        if (!$grades->save()) {
            $errors = $grades->getErrors();
            /*echo '<pre>';
            print_r($errors);
            echo '</pre>'; */
            return redirect()
                ->action('GradesController@create')
                ->with('errors', $errors)
                ->withInput(); //Brings previous input from user back
        }

        //Success action
        return redirect()
            ->action('GradesController@index')
            ->with('message', '<div class="alert alert-success">Grade was created successfully</div>');
    }

    public function edit($id) {
        $grades = Grades::findOrFail($id);
        return view('grades.edit', ['grades' => $grades]);
    }

    public function update($id, Request $request) {
        $grades = Grades::findOrFail($id);
        $grades->grade = $request->grade;
        $grades->comments = $request->comments;
        if (!$grades->save()) {
            $errors = $grades->getErrors();
            return redirect()
                ->action('GradesController@edit', $grades->id)
                ->with('errors', $grades->getErrors())
                ->withInput(); //Brings previous input from user back
        }

        return redirect()
            ->action('GradesController@index')
            ->with('message', '<div class="alert alert-success">Grade was updated successfully</div>');
    }

    public function destroy($id) {
        $grades = Grades::findOrFail($id);
        $grades->delete();
        return redirect()
            ->action('GradesController@index')
            ->with('message', '<div class="alert alert-info">Grade was deleted successfully</div>');
    }

    public function search($q) {

    }

}

