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


    // Check post whether it's valid or not
    public function checkWord(Request $request) {
        $list = InvalidWord::query()->get()->all();
        $content = $request->content;
        $title = $request->title;
        $contentLower = mb_strtolower($content, 'UTF-8');
        $checkedWords = array();
        
/*         foreach ($list as $item) {
            $value = $item["word"];
            $valueLower = mb_strtolower($value);
            $lastPos = 0;
            $hasValue = false;
            while (($lastPos = strpos($contentLower, $valueLower, $lastPos)) !== false)  {
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
        }  */     

        foreach ($list as $item) {
            $value = $item["word"];
            $valueLower = mb_strtolower($value, 'UTF-8');
            $pattern = "/\b".$valueLower."\b/";
            if (preg_match_all($pattern, $contentLower, $matches)) {
                array_push($checkedWords, $value);
            }
        }

        foreach($checkedWords as $value) {
            $valueLower = mb_strtolower($value, 'UTF-8');
            $contentLower = preg_replace("/\b".$valueLower."\b/", "<span class='px-2 py-1 rounded text-white' style='background: #732828'>".$value."</span>", $contentLower);
        }
        
        return view('res', [
            'count' => count($checkedWords),
            'checkedWords' => $checkedWords,
            'content' => $contentLower,
            'title' => $title
        ]);
    }


    // Show all posts checked & saved
    public function showAllPosts() {
        $posts = Post::all();
        return view('list', [
            'posts' => $posts
        ]);
    }

    public function searchPost(Request $request) {
        if ($request->ajax()) {
            $posts = Post::query()->where('title', 'LIKE', '%' . $request->search . '%')->get();
            return response()->json($posts, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }

    public function showPost($id) {
        $post = Post::query()->where('id', $id)->get();
        $title = $post[0]->title;
        $content = $post[0]->content;
        $count = $post[0]->error;
        $errorList = $post[0]->error_list;
        $checkedWords = explode(" | ", $errorList);
        return view('res', [
            'title' => $title,
            'content' => $content,
            'count' => $count,
            'checkedWords' => $checkedWords
        ]);
    }   

    public function savePost(Request $request) {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'error' => $request->count,
            'error_list' => $request->errorList,
            'created_at' => Carbon::now()
        ]);  
        return response()->json([
            'message' => 'success',
        ]);
    }

    public function deletePost($id) {
        $postToDelete = Post::destroy($id);
        return response()->json([
            'msgDeleteSuccess' => 'success'
          ]);
    }

    public function showWord() {
        $invalidWords = InvalidWord::all();
        return view('word', [
            'invalidWords' => $invalidWords
        ]);
    }

    public function addWord(Request $request) {
        $wordToAdd = $request->wordToAdd;
        var_dump($wordToAdd);
        $checkedWordElement = InvalidWord::where('word', $wordToAdd)->first();
        if (empty($wordToAdd)) {
            return redirect()->route('showWord')->with('errMessage', 'Vui lòng nhập từ khóa');
        } else if(empty($checkedWordElement)) {
            InvalidWord::create([
                'word'=>$wordToAdd
            ]);
            return redirect()->route('showWord')->with('message', 'Thêm từ khóa thành công');
        } else return redirect()->route('showWord')->with('errMessage', 'Từ khóa đã tồn tại');
    }

    public function deleteWord(Request $request, $id) {
        $wordToDelete = InvalidWord::query()->where('id', $id);
        $wordToDelete->delete();
        return redirect()->route('showWord')->with('errMessage', 'Xóa từ khóa thành công');
    }
}
