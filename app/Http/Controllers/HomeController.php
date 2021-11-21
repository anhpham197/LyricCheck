<?php

namespace App\Http\Controllers;

use App\Models\InvalidWord;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    // Show all posts checked
    public function show() {
        $list = Post::query()->get()->all();
        return view('list');
    }


    // Check post whether it's valid or not
    public function checkWord(Request $request) {
        $list = InvalidWord::query()->get()->all();
        $content = $request->content;
        $title = $request->title;
        // dd($title);
        $contentLower = mb_strtolower($content, 'UTF-8');
        $checkedWords = array();
        
        foreach ($list as $item) {
            $value = $item["word"];
            $valueLower = mb_strtolower($value);
            $lastPos = 0;
            $hasValue = false;
            while (($lastPos = strpos($contentLower, $valueLower, $lastPos)) !== false) {
                $hasValue = true;
                $lastPos += strlen($valueLower);
            }
            if ($hasValue == true) {
                array_push($checkedWords, $value);
            }
        }
        $count = count($checkedWords);
        foreach ($checkedWords as $value) {
            $content = str_replace($value, "<span class='px-2 py-1 rounded text-white' style='background: #732828'>$value</span>", $content);
        }      
        return view('res', [
            'count' => $count,
            'checkedWords' => $checkedWords,
            'content' => $content,
            'title' => $title
        ]);
    }

    public function savePost(Request $request) {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'error' => $request->count,
            'created_at' => Carbon::now()
        ]);  
        // return response()->json([
        //     'message' => 'success',
        //     'status' => 200
        // ]);
        return redirect()->route('home');
    }

    public function showWord() {
        $invalidWords = InvalidWord::all();
        return view('word', [
            'invalidWords' => $invalidWords
        ]);
    }

    public function addWord(Request $request) {
        $wordToAdd = $request->wordToAdd;
        $checkedWordElement = InvalidWord::where('word', $wordToAdd)->first();
        if(empty($checkedWordElement)) {
            InvalidWord::create([
                'word'=>$wordToAdd
            ]);
            return redirect()->route('showWord')->with('message', 'Thêm từ khóa thành công');
        } else return redirect()->route('showWord')->with('message', 'Từ khóa đã tồn tại');
    }

    public function deleteWord(Request $request) {

    }
}
