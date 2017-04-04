@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($viewpass) > 0)
        <ul>
            @foreach ($viewpass as $message)
                <li>{!! link_to_route('tasklist.show', $message->id, ['id' => $message->id]) !!} : {{ $message->status }} > {{ $message->content }}</li>
            @endforeach
        </ul>
    @endif

@endsection