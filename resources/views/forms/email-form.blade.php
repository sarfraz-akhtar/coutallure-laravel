
{{Form::open(array(
'url' =>'EmailForm-Post',
'method' => 'POST',
'id'=>'emailForm'))}}
<ul class="errors">
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
</ul>
{{Form::email('email', null, array('id'=>'emailField','placeholder'=>'Enter email address','data-validate'=>'required,email'))}}

{{Form::submit('Subscribe', array('id'=>'EnterEmail-submit','class'=>'submit'))}}
{{Form::close()}}

