@extends("layaout.app")

@section("content")
    @section("title")
        about sayfası
    @endsection

    <h1>about</h1>
    <div >
        <button type="button" class="btn btn-primary" >about {{$sayi}} </button>
    </div>
@endsection

