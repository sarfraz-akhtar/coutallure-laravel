@extends('layouts.default')

@section('content')
    <h2>Create Forum</h2>

    {!! Form::model(new App\Models\Forum, ['route' => ['forums.store']]) !!}
        @include('Forum/partials/_form', ['submit_text' => 'Create Forum'])
    {!! Form::close() !!}
@endsection