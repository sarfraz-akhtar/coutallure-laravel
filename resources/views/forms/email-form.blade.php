
{{Form::open(array(
'url' =>'EmailForm-Post',
'method' => 'POST',
'id'=>'RegEmailForm'))}}
<ul class="errors">
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
</ul>
{{Form::email('email', null, array('id'=>'emailField','placeholder'=>'Enter email address'))}}

{{Form::submit('Send', array('id'=>'EnterEmail-submit'))}}
{{Form::close()}}
