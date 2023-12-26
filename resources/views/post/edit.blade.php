@extends('tamplate.main')
@section('about')
    <h3>Edit</h3>





    <form action="{{route('post.update',['post'=>$post->id])}}" method="post" class="mt-3">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
        </div>
        <div class="form-group mt-3">
            <label for="title">Content</label>
            <textarea name="post_content" type="text" class="form-control" id="title" placeholder="content">{{$post->post_content}}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="title">IMG</label>
            <input name="img" type="file" class="form-control" id="title" placeholder="img" value="{{$post->img}}">
        </div>
        <div class="form-group mt-3">
            <label for="category" >Категория</label>
            <select id="category" name="category_id" class="form-select form-select-sm " aria-label=".form-select-sm example">

                @foreach($categories as $category)
                    <option
                        {{$category->id === $post->category->id ? 'select':''}} value = "{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-3">
            <label for="tags" >Тег</label>
            <select id="tags" name="tags[]" class="form-select form-select-sm " multiple aria-label="multiple select example">
                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $postTag)
                            {{$tag->id === $postTag->id ? 'select':''}}
                        @endforeach
                     value = "{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>

<button type="submit" class="col-md-12 btn btn-primary mt-3">Обновить</button>

    </form>

@endsection
