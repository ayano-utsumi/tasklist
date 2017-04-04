@extends('layouts.app')

@section('content')

    <h1>id = {{ $viewpass->id }} のメッセージ詳細ページ</h1>

    <p>{{ $viewpass->content }}</p>

    {!! link_to_route('tasklist.edit', 'このタスク編集', ['id' => $viewpass->id]) !!}
    
    {!! Form::model($viewpass, ['route' => ['tasklist.destroy', $viewpass->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection