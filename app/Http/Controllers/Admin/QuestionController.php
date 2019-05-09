<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionOption;

class QuestionController extends Controller
{

    public function __construct(){
		$this->middleware('auth');
    }

    public function create(){

        $correct_options = [
            'option1' => 'Option #1',
            'option2' => 'Option #2',
            'option3' => 'Option #3',
            'option4' => 'Option #4',
            'option5' => 'Option #5'
        ];

        return view('admin.question.create', compact('correct_options'))->with('title', 'Create Quiz');
    }

    public function index(){

        $questions = Question::latest()->get();
        return view('admin.question.index', compact('questions'))->with('title', 'Questions and Options');

    }

    public function view($id){
        $question = Question::find($id);

        return view('admin.question.view', compact('question'))->with('title', 'View Question');
    }

    public function store(Request $request){

        $this->validate($request,[
            'question_text'=>'required',
            'correct'=>'required',
        ]);

        $input = [];

        $input['question_text'] = $request->question_text;
        $input['answer_explanation'] = $request->answer_explanation;

        $question = Question::create($input);

        foreach ($request->input() as $key => $value) {
            if(strpos($key, 'option') !== false && $value != '') {
                $status = $request->input('correct') == $key ? 1 : 0;
                QuestionOption::create([
                    'question_id' => $question->id,
                    'option'      => $value,
                    'correct'     => $status
                ]);
            }
        }

        session()->flash('message','Question Created');

        return redirect()->back();
    }

    public function edit($id){

        $correct_options = [
            'option1' => 'Option #1',
            'option2' => 'Option #2',
            'option3' => 'Option #3',
            'option4' => 'Option #4',
            'option5' => 'Option #5'
        ];
        $question = Question::find($id);
        $options = QuestionOption::where('question_id', $question->id)->get();
        $oldOptions = [];

        foreach($options as $option){
            $oldOptions[] = $option->option;
        }

        return view('admin.question.edit', compact('question', 'correct_options', 'oldOptions'))->with('title', 'Edit question');
    }

    public function update(Request $request, $id){

        $this->validate($request,[
            'question_text'=>'sometimes',
            'correct'=>'sometimes',
        ]);

        $input = [];

        $input['question_text'] = $request->question_text;

        $input['answer_explanation'] = $request->answer_explanation;

        $question = Question::find($id);

        $question->update($input);

        $questionOption = QuestionOption::where('question_id', $question->id)->get();
        // dd($questionOption[2]);

        foreach ($request->input() as $key => $value) {

            if(strpos($key, 'option') !== false && $value != '') {
                
                $status = $request->input('correct') == $key ? 1 : 0;

                switch($key){
                    case 'option1':
                        $questionOption[0]->update([
                            'option' => $value,
                            'correct' => $status
                        ]);
                        break;
                    case 'option2':
                        $questionOption[1]->update([
                            'option' => $value,
                            'correct' => $status
                        ]);
                        break;
                    case 'option3':
                        $questionOption[2]->update([
                            'option' => $value,
                            'correct' => $status
                        ]);
                        break;
                    case 'option4':
                        $questionOption[3]->update([
                            'option' => $value,
                            'correct' => $status
                        ]);
                        break;
                }
                

            }

        }
    
        session()->flash('message','Question Updated');

        return redirect()->back();
    }

    public function destroy($id){

        $question = Question::find($id);  

        if(!$question){
            abort(404);
        }

        $question->delete();

        session()->flash('message', 'Question Deleted!');
        
        return redirect()->back();
    }
}
