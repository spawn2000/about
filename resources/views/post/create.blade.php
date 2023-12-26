@extends('tamplate.main')
@section('about')
    <h3>Creat</h3>
    <form action="{{route('posts.store')}}" method="post" class="mt-3" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input
                value="{{old('title')}}"
                name="title" type="text" class="form-control" id="title" placeholder="title">
        </div>
        @error('title')
        <p class="text-danger"> {{$message}}</p>
        @enderror
        <div class="form-group mt-3">
            <label for="post_content">Content</label>
            <textarea name="post_content" type="text" class="form-control" id="post_content" placeholder="content">{{old('post_content')}}</textarea>
        </div>
        @error('post_content')
        <p class="text-danger"> {{$message}}</p>
        @enderror
        <div class="form-group mt-3">
            <label for="category" >Категория</label>
            <select id="category" name="category_id" class="form-select form-select-sm " aria-label=".form-select-sm example">
                <option selected>Выбрать категорию</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group mt-3">
            <label for="tags" >Тег</label>
            <select id="tags" name="tags[]" class="form-select form-select-sm " multiple aria-label="multiple select example">

                @foreach($tags as $tag)
                    <option
                        value = "{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-3">
            <label for="img">IMG</label>
            <input value="{{old('img')}}" name="img" type="file" class="form-control" id="img" placeholder="img">
        </div>
        @error('img')
        <p class="text-danger"> {{$message}}</p>
        @enderror


        <button type="submit" class="col-md-12 btn btn-primary mt-3">Создать</button>
    </form>
    <a href="{{route('about.index')}}" style="text-decoration: none" class="text-white"> <button class="btn btn-dark mt-3" type="button">Готово</button></a>
@endsection
