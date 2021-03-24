<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    // ALL TUTORIALS DISPLAY
    public function index()
    {
        $tutorials = Tutorial::latest()->with('user')->paginate(2);
        foreach ($tutorials as $tutorial){
            $tutorial->setAttribute('added_at', $tutorial->created_at->diffForHumans());
            $tutorial->setAttribute('comments_count', $tutorial->comments->count());
            $tutorial->setAttribute('likes_count', $tutorial->likes->count());
        }
        return response()->json($tutorials);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    //SHOW TUTORIAL WITH COMMENTS
    public function show(Tutorial $tutorial)
    {
        return response()->json([
            'id'            => $tutorial->id,
            'content'          => $tutorial->content,
            'added_at'      => $tutorial->created_at->diffForHumans(),
            'comments_count'=> $tutorial->comments->count(),
            'likes_count'=> $tutorial->likes->count(),
            'image'         => $tutorial->image,
            'user'          => $tutorial->user,
            'title'         => $tutorial->title,
            'category'      => $tutorial->category,
            'comments'      => $this->commentsFormatted($tutorial->comments)
        ]);
    }
    // COMMENTS TUTORIAL FORMATTED
    public function commentsFormatted($comments){
        $new_comments = [];
        foreach($comments as $comment){
            array_push($new_comments,[
                'id'    => $comment->id,
                'content'  => $comment->content,
                'user'  => $comment->user,
                'added_at'=> $comment->created_at->diffForHumans()
            ]);
        }
        return $new_comments;
    }

    public function edit(Tutorial $tutorial)
    {
        //
    }

    public function update(Request $request, Tutorial $tutorial)
    {
        //
    }

    public function destroy(Tutorial $tutorial)
    {
        //
    }
    //TUTORIALS BY CATEGORY
    public function categorytutorials($id)
    {
        $category = Category::whereId($id)->first();
        $tutorials = Tutorial::whereCategoryId($category->id)->with('user')->get();
        foreach ($tutorials as $tutorial){
            $tutorial->setAttribute('added_at', $tutorial->created_at->diffForHumans());
            $tutorial->setAttribute('comments_count', $tutorial->comments->count());
            $tutorial->setAttribute('likes_count', $tutorial->likes->count());
        }

        return response()->json($tutorials);
    }
    //LAST 5 TUTORIALS SIDEBAR
    public function last5()
    {
        $tutorials =Tutorial::orderBy('created_at','DESC')->take(5)->get();
        
       return response()->json($tutorials);
    }
}