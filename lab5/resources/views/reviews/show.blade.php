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
                        <th scope="col">Review</th>
                        <th scope="col">Car</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $review->id }}</th>
                        <td>{{ $review->review }}</td>
                        <td>{{ $review->cars->make }}</td>
                       
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection