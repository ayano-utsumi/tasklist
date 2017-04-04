@extends('layouts.app')

@section('content')

    <h1>id: {{ $viewpass->id }} のタスクリスト編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
            {!! Form::model($viewpass, ['route' => ['tasklist.update', $viewpass->id], 'method' => 'put']) !!}
            
                <div class="form-group">
                    {!! Form::label('status', 'スタータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('content', '内容:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection