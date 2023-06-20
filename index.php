<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Document</title>
    <script>

    function Enviar(){
        var html;
        $.ajax({
            url: 'https://dog.ceo/api/breed/'+$('#raza').val()+'/images/random/'+$('#NoImg').val(),
            type: 'GET',
            dataType : 'json',
            async:true,
            success: function(data) {
                $.each(data.message,function(index, item){
                    html+= '<img src="'+item+'"/>';
                });
                $('#imagen').html(html);
            },
            error: function(xhr, status, error){
                console.log('Error en la solicitud AJAX: ', error);
            }
        });
    }
    </script>
</head>
<body>
    <h1>Consumo de servicios</h1>
<input id="raza" type="text"/>
        <input id="NoImg" type="text"/> <button type="button" onClick="javascript:Enviar()">Enviar</button>
    <div id="imagen"></div>
</body>
</html>