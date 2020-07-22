@extends('layouts.app')

@section('content')
<section id="">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mx-auto">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                {{-- <form action="/fees/search" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="student_search">Search for student</label>
                        <input type="text" class="form-control" id="student_search" placeholder="Enter student number"
                            name="student_number">
                    </div>
                </form> --}}
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-8 mb-5 mx-auto">
                <h5>Total amount of fees: {{ $total_fees }}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5 mx-auto">
                <a type="button" href={{ route('fees.create') }} class="btn btn-dark">Insert</a>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Reviews</div>
                    <div class="panel-body">
                        <p></p>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Car</th>
                                <th scope="col">Review</th>
                                <th scope="col">Car</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $review)
                            <tr>
                                <th scope="row">{{ $review->id }}</th>
                                <td>{{ $review->cars->model }}</td>
                                <td>{{ $review->review }}</td>
                                <td><a type="button" href={{ route('cars.show', $review->car) }} class="btn btn-sm">Car</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection