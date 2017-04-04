@extends('layouts.app')

@section('content')

    <h1>タスクリスト新規作成ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">

            {!! Form::model($viewpass, ['route' => 'tasklist.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', '内容:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
    
            {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
    
            {!! Form::close() !!}
        
        </div>
    </div>
    

@endsection