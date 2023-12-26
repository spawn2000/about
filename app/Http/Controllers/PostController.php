<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostRequest;

use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends BaseController
{


    public function index(){
    {
//        $posts = (Post::all());



        $posts = Post::paginate(10);


//        $data = $request->validated();
//        $query = Post::query();
//        if (isset($data['category_id'])){
//            $query->where('category_id', $data['category_id']);
        }
//        $posts = $query->get();
//        dd($posts);


//         $tags = (Tag::find(3));
//         dd($tags->posts);
//  dd($posts->tags);
//        $posts = (Post::where('category_id', $category->id)->get());
//        dd($category->posts);
//        foreach ($posts as $post) {
//            dump($post->title);
//         }
//        $postTwo = (Post::where('is_published', 1)->first());
//            dump($postTwo->title);



        return view('post.index', compact('posts'));




    }

    public function indexAbout() {
        $posts = Post::all();
        view('about.index', compact('posts'));
    }
    public function blabla(){
        return view('post.blabla');
    }


    public function create()
    {
//        $postsArr = [
//           [ 'title' => 'Sosison',
//            'post_content' => 'blablabla',
//            'img' => 'png',
//            'likes' => 20,
//            'is_published' => 1,],
//            [ 'title' => ' dub Sosison',
//                'post_content' => ' dub blablabla',
//                'img' => 'png',
//                'likes' => 20,
//                'is_published' => 1,],
//
//        ];
//        foreach ($postsArr as $item)
//        Post::create($item);
//       dd('created');
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));

    }

    public function store(StoreRequest $request)
    {

        $data = $request->validated();
//        $data = request()->validate([
//            'title' => 'required|string',
//            'post_content' => 'required|string',
//            'img' => 'required|string',
//            'category_id' => 'integer',
//            'tags' => '',
//        ]);
        $this->service->store($data);
//        $tags = $data['tags'];
//        unset($data['tags']);
//        $post = Post::create($data);
//        $post->tags()->attach($tags);
//foreach ($tags as $tag){
//    PostTag::firstOrCreate([
//        'tag_id' => $tag,
//        'post_id'=> $post->id,
//    ]);
//}
        ;
        return redirect()->route('about.index');
    }


    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));


    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post'), compact('categories', 'tags'));

    }

    public function update(UpdateRequest $request, Post $post)
    {

        $data = $request->validated();
//        $data = request()->validate([
//            'title' => 'string',
//            'post_content' => 'string',
//            'img' => 'string',
//            'category_id' => 'integer',
//            'tags' => '',
//        ]);

        $this->service->update($post, $data );
//        $tags = $data['tags'];
//        unset($data['tags']);
//        $post->update($data);
////        $post = $post->fresh();
//        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }


    public function destroy(Post $post)
    {

        $post->delete();
        return redirect()->route('posts.index');


    }

    public function firstOrCreate()
    {

        $myPost = Post::firstOrCreate(
            [
                'title' => ' dub Sosison'
            ],
            [
                'title' => ' dub Sosison',
                'post_content' => ' dub blablabla',
                'img' => 'png',
                'likes' => 5000,
                'is_published' => 1,

            ]);
        dump($myPost->post_content);
        dd('creat');
    }

    public function UpdateOrCreate()
    {

        $myPost = Post::UpdateOrCreate(
            [
                'title' => 'dachshund'
            ],
            [
                'title' => 'dachshund',
                'post_content' => ' dub blablabla',
                'img' => 'png',
                'likes' => 5000,
                'is_published' => 1,

            ]);
        dump($myPost->title);
        dd('creat');
    }

    public function survey()
    {
        return view('survey');
    }


}
