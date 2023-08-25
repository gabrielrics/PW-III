<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> Contatos existentes </h1>

    <form method="post" action="/contato">
    {{ csrf_field() }}
        <input type="text" name="txNome" />
        <input type="text" name="txEmail" />
        <input type="text" name="txAssunto" />
        <input type="text" name="txMensagem" />

        <input type="submit" value="Salvar" />
    </form>
    
    <table>
    @foreach($contatos as $c)
        <h1> {{$c->idContato}}</h1>
        <p> {{$c->nome}} </p>
    @endforeach
    </table>
    
</body>
</html>