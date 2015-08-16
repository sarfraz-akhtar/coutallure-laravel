<?php $forums = \App\Models\Forum::lists('name', 'id'); ?>
<div class="form-group">
    {!! Form::label('name', 'Title:') !!}
    {!! Form::text('name') !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>
<div class="form-group">
    {!! Form::label('forum', 'Select Forum:') !!}
    {!! Form::select('forum_id', $forums,Input::old('forum_id')) !!}
</div>
<div class="form-group">
    {!! Form::label('post_images', 'Photoes:') !!}
    {!! Form::file('image') !!}
</div>
{!! Form::hidden('author_id', Auth::id()) !!}
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>