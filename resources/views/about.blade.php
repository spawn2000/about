
@extends('tamplate.main')
@section('about')

{{--<h3>About</h3>--}}
<style >
    .box{
        -webkit-box-shadow: 1px 2px 17px 20px rgba(34, 60, 80, 0.2);
        -moz-box-shadow: 1px 2px 17px 20px rgba(34, 60, 80, 0.2);
        box-shadow: 1px 2px 17px 20px rgba(34, 60, 80, 0.2);
        color: grey;

    }

    .box:hover {
        cursor: pointer;
        font-size: 160px;
        -webkit-box-shadow: 1px 2px 17px 3px rgba(34, 60, 80, 0.2);
        -moz-box-shadow: 1px 2px 17px 3px rgba(34, 60, 80, 0.2);
        box-shadow: 1px 2px 17px 3px rgba(34, 60, 80, 0.2);
        animation-duration: 1s;
        animation-name: slidein;
        color: black;
    }


    @keyframes slidein {
        0% {
            -webkit-box-shadow: 1px 2px 17px 26px rgba(34, 60, 80, 0.2);
            -moz-box-shadow: 1px 2px 17px 26px rgba(34, 60, 80, 0.2);
            box-shadow: 1px 2px 17px 26px rgba(34, 60, 80, 0.2);
            color: grey;
        }
        100% {
            -webkit-box-shadow: 1px 2px 17px 3px rgba(34, 60, 80, 0.2);
            -moz-box-shadow: 1px 2px 17px 3px rgba(34, 60, 80, 0.2);
            box-shadow: 1px 2px 17px 3px rgba(34, 60, 80, 0.2);
            color: black;
        }
    }
    .modal-content{
        /*background-image:url("/Saw.jpg");*/
        background-size: cover;
    }

    .kirill{
        background-image: url("/f4-wOquZdXzA.jpg")
    }

    .alina{
        background-image: url('/BTMZ2caR6TYs.jpg');
    }


</style>
<div class="container mt-5">
    <div class="row ">
        <div class="col-6 " style="border: solid 4px;border-width:10px ;" >
            <div class="col-12 kirill" style="background-position:center ;background-size:85% ;height: 310px;padding-left:100px;">

            </div>
            <div>
                <h1 style=" font-size:50px ;">Кирилл</h1>
            </div>
        </div>
        <div class="col-6 " style="border: solid 4px;border-width:10px ;"  >
            <div class="col-12 alina" style="background-position:center ;height: 310px;margin-right:1000px;background-size:90% ;" >
                <!-- <img src="BTMZ2caR6TYs.jpg" style="height: 310px; "  class="img-fluid "> -->
            </div>
            <div>	<h1 style="font-size:50px ;" class="ps-5 "> Алина</h1></div>
        </div>
    </div>
</div>
 <div class="container">
     <div class="row">



         <div class="col-6">
             @foreach($posts->where('category_id', '1' ) as $post)
            <div >
                <div class="modal-dialog box" >

                    <div class="modal-content mt-5 mb-5"  style="height: 270px;
                    background-image:url({{ $post->img}});">
    <H1  style="margin-top: 120px "  class="ps-3">{{$post->title}}</H1>
                        @foreach($post->tags as $tag)
                            <h5 class="ps-3"  >{{$tag->title}}</h5>
                        @endforeach


                        </div>
                </div>
            </div>
             @endforeach
         </div>


                 <div class="col-6">
                     @foreach($posts->where('category_id', '2' ) as $post)
                         <div >
                             <div class="modal-dialog box" >

                                 <div class="modal-content mt-5 mb-5"  style="height: 270px;">
                                     <H1  style="margin-top: 120px "  class="ps-3">{{$post->title}}</H1>
                                     @foreach($post->tags as $tag)
                                         <h5 class="ps-3"  >{{$tag->title}}</h5>
                                     @endforeach


                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>



     </div>
 </div>
<div class="container mt-5 ">
    <div class="row">

        <div class="col-6">
            <div >
                <div class="modal-dialog box" >

                    <a href="{{route('post.create')}}"><div class="modal-content text-center">
                        <h1 style="font-size:150px ;">+<h1>
                        </div></a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div >
                <div class="modal-dialog box" >
                    <a href="{{route('post.create')}}"><div class="modal-content text-center">
                            <h1 style="font-size:150px ;">+<h1>
                        </div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//$text = $_POST['text'];
//
//$text = htmlspecialchars($text);
//$text = urldecode($text);
//$text = trim($text);
?>


@endsection
