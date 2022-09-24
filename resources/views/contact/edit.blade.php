@extends('layouts.app')

@section('content')
<div class="container">
    <div class="create-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <p class="post-theme">EDIT</p>
        <form method="POST" action="{{ route('contact.update', ['id' => $contact->id ])}}">
        @csrf
        <dl class="form-flex">
            <dt>Title</dt>
            <dd><input type="text" name="tweet" value="{{ $contact->tweet }}" class="form-input"></dd>
        </dl>
        <dl class="form-flex">
            <dt>Comment</dt>
            <dd><textarea name="description">{{ $contact->description }}</textarea></dd>
        </dl>
        <dl class="form-flex">
            <dt>Shizuka-score</dt>
            <dd><input type="range" min="0" max="10" name="shizukasa" value="{{ $contact->shizukasa }}"></dd>
        </dl>
            <input class="form-btn" type="submit" value="UPDATE"></input>
        </form>
    </div>
</div>
@endsection
