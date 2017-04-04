@extends('layouts.app')

@section('content')

    <h1>id: {{ $viewpass->id }} のタスクリスト編集ページ</h1>
    
    {!! Form::model($viewpass, ['route' => ['tasklist.update', $viewpass->id], 'method' => 'put']) !!}
    
        {!! Form::label('status', 'スタータス:') !!}
        {!! Form::text('status') !!}


        {!! Form::label('content', '内容:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection