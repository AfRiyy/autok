@extends("layouts.master")
@section('content')
<div class="row">
    <div class="col-lg-3 offset-lg-4">
        <form class="form-control" action="/store-car" method="POST">
            @csrf
            <label for="plate">Redszám</label>
            <input class="form-control" type="text" name="plate" id="plate">
            <label for="brand">Márka</label>
            <input class="form-control" type="text" name="brand" id="brand">
            <label for="color">Szín</label>
            <input class="form-control" type="text" name="color" id="color">
            <label for="price">Ár</label>
            <input class="form-control" type="text" name="price" id="price">
            <button class="btn btn-outline-primary" type="submit">Elküld</button>
        </form>
    </div>
</div>
@endsection
