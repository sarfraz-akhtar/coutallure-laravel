@extends('layouts.default')

@section('content')
    <h2>Create Forum</h2>

    {!! Form::model(new App\Models\ForumPost, ['route' => ['forumposts.store']]) !!}
        @include('Forum/post/_form', ['submit_text' => 'Create Forum Post'])
    {!! Form::close() !!}
@endsection