@extends('layouts.default')

@section('content')
    <h2>Forums</h2>

    @if ( !$forums->count() )
        You have no forums
    @else
        <ul>
            @foreach( $forums as $forum)
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('forums.destroy', $forum->id))) !!}
                        <a href="{{ route('forums.show', $forum->id) }}">{{ $forum->name }}</a>
                        (
                            {!! link_to_route('forums.edit', 'Edit', array($forum->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('forums.create', 'Create Forum') !!}
    </p>
@endsection