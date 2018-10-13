$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "/CadastroCliente/api"
    } );
} );

$(document).ready(function() {
    $('#listaform').DataTable();
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