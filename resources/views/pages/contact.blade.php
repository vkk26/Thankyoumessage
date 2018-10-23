@extends('layouts.default')

@section('content')


    <h1>Contact</h1>
    <p class="lead">Use this form to contact us</p>
    <form action="/contact" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">How can i help you?</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection