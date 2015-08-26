<html>
<head>

    <!-- Bootstrap -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <style>

        .preview {

            padding: 10px;

        }

    </style>

</head>
<body>

<div class="col-md-12 col-lg-12">

    {{--<input--}}
        {{--id="{{ $surpass->renderId('input') }}"--}}
        {{--name="{{ $surpass->renderId('input') }}"--}}
        {{--data-url="{{ route('home.surpass_upload_test') }}"--}}
        {{--data-remove-url="{{ route('home.surpass_remove_test') }}"--}}
        {{--accept="image/*"--}}
        {{--type="file" multiple>--}}
        {{--{!! $surpass->html('preview') !!}--}}




    <form>
        <input
                id="image_upload"
                name="image_upload"
                title="Select Image"
                data-url="http://localhost/laravel/public/upload"
                data-remove-url="http://localhost/laravel/public/remove"
                accept="image/*"
                type="file" multiple>

        <!-- Preview(s) will be displayed here -->
        {!! $surpass->html('preview') !!}
    </form>

</div>


<script src="bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="bower_components/blueimp-load-image/js/load-image.all.min.js"></script>
<script src="bower_components/blueimp-canvas-to-blob/js/canvas-to-blob.js"></script>
<script src="bower_components/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
<script src="bower_components/blueimp-file-upload/js/jquery.fileupload.js"></script>
<script src="bower_components/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
<script src="bower_components/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
<script src="bower_components/blueimp-tmpl/js/tmpl.min.js"></script>
{!! $surpass->html('js') !!}

</body>
</html>

