@extends('layouts.app')

@section('content')
<section id="student-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Write Review</h2>
                <form action="/reviews" method="post">
                    @csrf
                    <input id="car_id" name="car" type="hidden" value="{{ $car_id }}">
                    <div class="form-group">
                        <label for="review">Write Review:</label>
                        <textarea class="form-control" rows="5" id="review" name="review"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <br>
                    <br>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>
                            @foreach($errors->all() as $error)
                            {{$error}}
                            @endforeach
                        </strong>
                    </div>
                    @endif

                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>
@endsection