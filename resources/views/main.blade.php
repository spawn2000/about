@extends('tamplate.main')
@section('about')
    <h3>Main</h3>
    <div class="container-fluid mb-5 index-one mt-5">
        <div class="row justify-content-center">

            <div class="col-6 border p-4 bg-white " style="width:520px; border-radius:16px;">
                <div class="col">
                    <h3 class="fs-5 text-center" id="title">Напишите что нибудь</h3>

                    <p class="fs-6 mb-4 text-center" id="description">Напишите что нибудь</p>

                </div>
                <div style="display: none" id="type2">
                    <div class="row justify-content-around " >
                        <div class="col-4 mb-1">
                            <div  style="border-radius:8px; background: rgba(36, 56, 136, 0.1); cursor: pointer;">
                                <img src="/images/smilesadness.png" alt="..." class="img-thumbnail mt-2 mb-2 offset-4 " style="width:40px; height:auto;">
                            </div>
                        </div>
                        <div class="col-4 mb-1">
                            <div  style="border-radius:8px; background: rgba(36, 56, 136, 0.1); cursor: pointer; ">
                                <img src="/images/neutralsmiley.png" alt="..." class="img-thumbnail mt-2 mb-2 offset-4" style="width:40px; height:auto;">
                            </div>
                        </div>
                        <div class="col-4 mb-1">
                            <div   style="border-radius:8px; background: rgba(36, 56, 136, 0.1); cursor: pointer;">
                                <img src="/images/smileshappy.png" alt="..." class="img-thumbnail mt-2  mb-2 offset-4" style="width:40px; height:auto;">
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row p-1 " id="type1"  >
                    <form method="post" action="/about">
                    <textarea class="form-control m-1" name="text" id="exampleFormControlTextarea1" rows="4" style="resize: none;"  placeholder="Ваш отзыв"></textarea>
                    <button type="submit" id="button"  style="background-color:#10069E; border-radius: 12px;" class="col-12 btn  pt-3 pb-3 text-white m-1 mt-3" class="text-center">Отправить</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
