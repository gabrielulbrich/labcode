$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "/CadastroCliente/api"
    } );
} );

$(function(){
    $('#uploadimg').change(function(){
    const file = $(this)[0].files[0]
    const fileReader = new FileReader()
    fileReader.onloadend = function(){
        $('#img').attr('src', fileReader.result)
        console.log(fileReader.result)
    }
    fileReader.readAsDataURL(file)
    })
})

$(document).ready(function() {
    $('#summernote').summernote({
        height: 200,
        callbacks: {
            onImageUpload : function(files, editor, welEditable) {

                for(var i = files.length - 1; i >= 0; i--) {
                    sendFile(files[i], this);
                }
            }
        }
    });

    function sendFile(file, el) {
        var form_data = new FormData();
        form_data.append('file', file);
        $.ajax({
            data: form_data,
            type: "POST",
            url: '/Welcome/uploadImg',
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {
                $(el).summernote('editor.insertImage', url);
            }
        });
    }
});