@extends('layouts.app')

@section('content')
<div class="container">
    <div class="post-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="GET" aciton="{{ route('contact.index') }}" class="search-section">
            <input class="search-box" type="search" name="search" placeholder="search" aria-label="Search">
            <button class="btn-search" type="submit">Search</button>
        </form>
        <div class="post-section">
            @foreach($contacts as $contact)
            <div class="post-box">
                <div class="post-header">
                    <p class="post-title"><span></span>{{ $contact->tweet }}</p>
                    <p class="post-date">{{ $contact->created_at }}</p>
                </div>
                <p class="post-content">{{ $contact->description }}</p>
                <div class="post-footer">
                    <form method="POST" action="{{route('contact.destroy', ['id' => $contact->id])}}" id="delete_{{ $contact->id }}">
                        @csrf
                        <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">DELETE</a>
                    </form>
                    <a href="{{ route('contact.edit', ['id' => $contact->id ])}}">EDIT</a>
                </div>
            </div>
            @endforeach
        </div>

        {{ $contacts->links()}}
    </div>
</div>
@endsection
