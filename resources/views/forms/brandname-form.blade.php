<div id="startBrand" class="col-md-12">
    <h2>Everyone can be a Fashion designer</h2>
    <h4>Try our amazing app for free! No account required.</h4>
    <div id="enterBrandName">
        {{ Form::open(array('url' => 'EmailForm-Post','method' => 'post')) }}
        <div id ="brandname_error"></div>
        {{Form::text('brandname', null, array('class'=>'','placeholder'=>'enter your brand name'))}}
        {{Form::submit('Submit', array())}}
        {{ Form::close() }}
    </div>
    <div id="infoMessage">
        <h5>Your brand will be your label. The name under which you will be able to sell your creation.
            If you do not feel inspired you can change it later.</h5>
    </div>
</div>