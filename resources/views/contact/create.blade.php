@extends('layouts.app')

@section('content')
<div class="container">
    <div class="create-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <p class="post-theme">POST</p>
        <form method="POST" action="{{route('contact.store')}}">
            @csrf
            <dl class="form-flex">
                <dt>Title</dt>
                <dd><input type="text" name="tweet" class="form-input"></dd>
            </dl>
            <dl class="form-flex">
                <dt>Comment</dt>
                <dd><textarea name="description"></textarea></dd>
            </dl>
            <input class="form-btn" type="submit" value="POST"></input>
        </form>
    </div>
</div>
@endsection
