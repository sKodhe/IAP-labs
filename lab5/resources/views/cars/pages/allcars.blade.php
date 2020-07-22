@extends('layouts.app')

@section('content')
<main role="main" class="container">
    <div class="text-center mb-4">
        <h1 class="display-4.5">{{$data['title']}}</h1>
    </div>
    <div class="float-left">
        <h2>Actions</h2>
        <ul class="list-group mb-4">
            <a href="/car/new" class="list-group-item list-group-item-action">Add Car</a>
            <a href="/reviews" class="list-group-item list-group-item-action">Reviews</a>
        </ul>
        {{-- <h2>Search</h2>
        {{ Form::open(['action'=>'ReviewsController@search','method'=>'POST','class'=>'form-inline mt-2 mt-md-0']) }}
        <input name="student_id" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        {{ Form::close() }} --}}
    </div>
    <div class="float-left cars-table">
        <table id="cars" class="table table-stripped align-content-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Car ID</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Date of Production</th>
                    <th scope="col">Review</th>
                </tr>
            </thead>
            <tbody>
                @if(count($data['cars']) > 0)
                @foreach ($data['cars'] as $car)
                <tr>
                    <td>{{$car->id}}</td>
                    <td>{{$car->make}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->produced_on}}</td>
                    <td><a type="button" href={{ route('reviews.create', $car->id) }} class="btn btn-sm">Review</a></td>
                </tr>

                @endforeach
                @else

                @endif

            </tbody>
        </table>
    </div>
</main>
@endsection