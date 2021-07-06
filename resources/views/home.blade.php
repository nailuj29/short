@extends('layouts.master')
@section('content')
    <div class="container mt-3">
        <h1>URL Shortener</h1>
        <form action="/shorten" method="post">
            @csrf
            <label for="url">URL to shorten:</label>
            <input class="form-control" type="text" name="url" id="url">

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
@endsection
