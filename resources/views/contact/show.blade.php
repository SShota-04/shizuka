@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>COMFIRM</p>
                    {{ $contact->tweet }}
                    {{ $contact->description }}
                    <form method="GET" action="{{route('contact.edit', ['id' => $contact->id])}}">
                        @csrf
                        
                        <input class="btn btn-info" type="submit" value="Edit"></input>
                    </form>
                </div>
            </div>
        </div>
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
