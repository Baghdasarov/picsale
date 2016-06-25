@extends("appAdmin")
@section("headCss")
    <link rel="stylesheet" href="/js/dropzone/dist/dropzone.css">
@stop
@section("content")
    <h2 class="text-center">Создать картину</h2>
    @include('admin.createUpdateForm',['action'=>['adminController@store'],'method'=>'POST','buttonName'=>'Создать'])


@stop
@section("script")
    <script src="/js/dropzone/dist/dropzone.js" ></script>
    <script>
        var photo_counter = 0;
        Dropzone.options.realDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 100,
            maxFilesize: 2,
            maxFiles:1,
            previewsContainer: '#dropzonePreview',
//            previewTemplate: document.querySelector('#preview-template').innerHTML,
            addRemoveLinks: true,
            dictRemoveFile: 'Remove',
            dictFileTooBig: 'Image is bigger than 2MB',

          //   The setting up of the dropzone
            init:function() {
//                var submitButton = document.querySelector("#act-on-upload")
//                submitButton.addEventListener("click", function() {
//                    var token = $('input[name="_token"]').val();
//                    var type = $("select[name='type']").val();
//                    var namePic = $("input[name='namePic']").val();
//                    var price = $("input[name='price']").val();
//                    var imageName = $("input[name='file']").val();
//
//                    var datas= [token,type,namePic,price,imageName];
//                    console.log(datas);
//                    $.ajax({
//                        type: 'POST',
//                        url: '/admin',
//                        data: {_token:token,datas: datas},
//                        dataType: 'html',
//                        success: function(result){
//
//                            alert("goodmorning");
//
//                        }
//                    });
//                });

                this.on("removedfile", function(file) {
                    var token = $('input[name="_token"]').val();
                    $.ajax({
                        type: 'POST',
                        url: '/admin/destroy',
                        data: {_method: 'delete',_token:token,id: file.name},
                        dataType: 'html',
                        success: function(data){

                            alert("good");

                        }
                    });

                } );
            },
            error: function(file, response) {
                console.log("mrut");
                if($.type(response) === "string")
                    var message = response; //dropzone sends it's own error messages in string
                else
                    var message = response.message;
                file.previewElement.classList.add("dz-error");
                _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                _results = [];
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i];
                    _results.push(node.textContent = message);
                }
                return _results;
            },
        }

    </script>

@stop

