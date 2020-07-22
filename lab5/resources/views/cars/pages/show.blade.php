@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Car</div>
            <div class="panel-body">
                <p></p>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Make</th>
                        <th scope="col">Model</th>
                        <th scope="col">Reviews</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->make }}</td>
                        <td>{{ $car->model }}</td>
                        <td><a type="button" href={{ route('reviews.cars', $car->id) }} class="btn btn-sm">Reviews</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection