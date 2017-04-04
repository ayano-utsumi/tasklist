@extends('layouts.app')

@section('content')

    <h1>タスクリスト新規作成ページ</h1>

    {!! Form::model($viewpass, ['route' => 'tasklist.store']) !!}

        {!! Form::label('content', '内容:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection