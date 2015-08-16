@extends('layouts.default')

@section('content')
    <h2>Edit Forum</h2>

    {!! Form::model($forum, ['method' => 'PATCH', 'route' => ['forums.update', $forum->id]]) !!}
        @include('Forum/partials/_form', ['submit_text' => 'Edit Forum'])
    {!! Form::close() !!}
@endsection