@extends('layouts.app')

@section('content')

    <h1>id = {{ $viewpass->id }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $viewpass->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $viewpass->status }}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{ $viewpass->content }}</td>
        </tr>
    </table>

    {!! link_to_route('tasklist.edit', 'このタスク編集', ['id' => $viewpass->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($viewpass, ['route' => ['tasklist.destroy', $viewpass->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection