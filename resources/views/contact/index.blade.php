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
                <div class="map-box">
                        <div id="map"></div>
                </div>

                <div class="post-header">
                    <p class="post-title"><span></span>{{ $contact->tweet }}</p>
                    <p class="post-date">{{ $contact->created_at }}</p>
                </div>
                <p class="post-content">{{ $contact->description }}</p>
                <div class="score-box">
                    <p class="score-title">Shizuka-Score</p>
                    <div class="rate"><span class="rate01 rate-{{ $contact->shizukasa }}"></span></div>
                </div>
                <div class="post-footer">
                    <form method="POST" action="{{route('contact.destroy', ['id' => $contact->id])}}" id="delete_{{ $contact->id }}">
                        @csrf
                        <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">DELETE</a>
                    </form>
                    <a href="{{ route('contact.edit', ['id' => $contact->id ])}}">EDIT</a>
                    <!--{!! Form::open(['route' => 'contact.currentLocation','method' => 'get']) !!}
                    {{--隠しフォームでresult.currentLocationに位置情報を渡す--}}
                    {{--lat用--}}
                    {!! Form::hidden('lat','lat',['class'=>'lat_input']) !!}
                    {{--lng用--}}
                    {!! Form::hidden('lng','lng',['class'=>'lng_input']) !!}
                    {{--setlocation.jsを読み込んで、位置情報取得するまで押せないようにdisabledを付与し、非アクティブにする。--}}
                    {{--その後、disableはfalseになるようにsetlocation.js内に記述した--}}
                    {!! Form::submit("周辺を表示", ['class' => "",'disabled']) !!}
                    {!! Form::close() !!}-->
                </div>
            </div>
            @endforeach
        </div>

        {{ $contacts->links()}}
    </div>
</div>
<script>
<!--
/**
javascriptで削除確認メッセージの表示
**/
-->
function deletePost(e){
    'use strict';
    if(confirm('削除しますか？')){
        document.getElementById('delete_' + e.dataset.id).submit();
    }
}

</script>
@endsection
