@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($viewpass) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>タスク</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($viewpass as $message)
                <tr>
                    <td>{!! link_to_route('tasklist.show', $message->id, ['id' => $message->id]) !!}</td>
                    <td>{{ $message->status }}</td>
                    <td>{{ $message->content }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasklist.create', 'タスクの新規投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection