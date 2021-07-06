@extends('layouts.master')
@section('content')

    <div class="container mt-3">
        <h1>URL Shortener</h1>
        <form id="form">
            <label for="url">Your URL:</label>
            <input class="form-control" type="text" name="url" id="url" disabled value="https://{{$_SERVER["HTTP_HOST"]}}/{{$id}}">

            <button type="submit" class="btn btn-primary mt-4">Copy</button>
        </form>
    </div>
    <script>

        function copyUrl(e) {
            console.log(e);
            e.preventDefault();
            navigator.clipboard.writeText(e.target.url.value).then(() => {  })
        }

        document.getElementById("form").addEventListener("submit", copyUrl);
    </script>
@endsection
