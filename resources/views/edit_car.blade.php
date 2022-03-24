@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-3 offset-lg-4">
        <form class="form-control" action="/update-car" method="POST">
            @csrf
            @method("PUT")
            <input class="form-control" type="hidden" name="id" id="id" value="{{$car->id}}">
            <label for="plate">Redszám</label>
            <input class="form-control" type="text" name="plate" id="plate" value="{{$car->plate}}">
            <label for="brand">Márka</label>
            <input class="form-control" type="text" name="brand" id="brand" value="{{$car->brand}}">
            <label for="color">Szín</label>
            <input class="form-control" type="text" name="color" id="color" value="{{$car->color}}">
            <label for="price">Ár</label>
            <input class="form-control" type="text" name="price" id="price" value="{{$car->price}}">
            <button class="btn btn-outline-primary" type="submit">Elküld</button>
        </form>
    </div>
</div>
@endsection
