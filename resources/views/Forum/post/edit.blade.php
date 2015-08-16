@extends('layouts.default')

@section('content')
    <h2>Edit Forum</h2>

    {!! Form::model($forum_post, ['method' => 'PATCH', 'route' => ['forumposts.update', $forum_post->id]]) !!}
        @include('Forum/post/_form', ['submit_text' => 'Edit Forum Post'])
    {!! Form::close() !!}
@endsection