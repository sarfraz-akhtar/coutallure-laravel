@extends('layouts.default')

@section('content')

    <h2>Create Forum</h2>
    <style type="text/css">


        .dz-image-preview, .dz-file-preview {
            display: none;
        }

    </style>
    {!! Form::model(new App\Models\ForumPost, ['route' => ['forumposts.store']]) !!}



    <div class="col-lg-12 text-center">
        {!! Form::open(array('route' => 'admin.upload', 'method' => 'POST', 'id' => 'my-dropzone', 'class' => 'form single-dropzone', 'files' => true)) !!}
        <div id="img-thumb-preview">
            <img id="img-thumb" class="user size-lg img-thumbnail" src="">
        </div>
        <button id="upload-submit" class="btn btn-default margin-t-5"><i class="fa fa-upload"></i> Upload Picture</button>
        {!! Form::close() !!}
    </div>
        @include('Forum/post/_form', ['submit_text' => 'Create Forum Post'])
    {!! Form::close() !!}
    <script type="text/javascript">
        $(document).ready(function() {

            //Dropzone.js Options - Upload an image via AJAX.
            Dropzone.options.myDropzone = {
                uploadMultiple: false,
                // previewTemplate: '',
                addRemoveLinks: false,
                // maxFiles: 1,
                dictDefaultMessage: '',
                init: function() {
                    this.on("addedfile", function(file) {
                        // console.log('addedfile...');
                    });
                    this.on("thumbnail", function(file, dataUrl) {
                        // console.log('thumbnail...');
                        $('.dz-image-preview').hide();
                        $('.dz-file-preview').hide();
                    });
                    this.on("success", function(file, res) {
                        console.log('upload success...');
                        $('#img-thumb').attr('src', res.path);
                        $('input[name="pic_url"]').val(res.path);
                    });
                }
            };
            var myDropzone = new Dropzone("#my-dropzone");

            $('#upload-submit').on('click', function(e) {
                e.preventDefault();
                //trigger file upload select
                $("#my-dropzone").trigger('click');
            });

        });

        //we want to manually init the dropzone.
        Dropzone.autoDiscover = false;

    </script>
@endsection