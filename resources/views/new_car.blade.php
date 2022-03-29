@extends("layouts.master")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8
         offset-xl-2 offset-lg-3 offset-md-3 offset-sm-3">
            <form class="form-control mt-5" action="/store-car" method="POST">
                @csrf
                <label for="plate">Redszám</label>
                <input class="form-control" type="text" name="plate" id="plate">
                <label for="brand">Márka</label>
                <input class="form-control" type="text" name="brand" id="brand">
                <label for="color">Szín</label>
                <input class="form-control" type="text" name="color" id="color">
                <label for="price">Ár</label>
                <input class="form-control mb-3" type="text" name="price" id="price">
                <button class="btn btn-outline-primary" type="submit">Elküld</button>
            </form>
        </div>
    </div>
</div>
@endsection
