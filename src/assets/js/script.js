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

$(function(){
    $("#btn_consulta").click(function(){
        var cep = $('#cep').val();
        if (cep == '') {
            alert('Informe o CEP antes de continuar');
            $('#cep').focus();
            return false;
        }
        $('#btn_consulta').html ('Aguarde...');
        $.post('/CadastroCliente/consulta/'+cep,
        {
            cep : cep
        }, 
        function(dados){
            $('#rua').val(dados.logradouro);
            $('#bairro').val(dados.bairro);
            $('#cidade').val(dados.localidade);
            $('#estado').val(dados.uf);
            $('#btn_consulta').html('Consultar');
        }, 'json');
    });
});

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