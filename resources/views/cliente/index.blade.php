<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar/Editar Cliente</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script>
            window.onload = function (){
            @if (session()->get('msg'))
                    alert('{{session()->get('msg')}}');
            @endif
            };
        </script>

    </head>
    <body style="background: #EEE">

        
        <br/><a href="{{ url('/') }}">Página Inicial</a><br/><br/>
        <br/> <a href="{{route('cliente.create')}}">Adicionar Cliente</a><br/><br/>


        <!-- Listagem de clientes -->   
        <table style="width: 70%;">
            <thead style="text-align: center">
                <tr>
                    <td style="background: #BEE9EA">Cód. </td>
                    <td style="background: #BEE9EA">Nome </td>
                    <td style="background: #BEE9EA">Cpf </td>
                    <td style="background: #BEE9EA">Endereço </td>
                    <td style="background: #BEE9EA">Número </td>
                    <td style="background: #BEE9EA">Bairro </td>
                    <td style="background: #BEE9EA">Cidade </td>
                    <td style="background: #BEE9EA">Estado </td>
                    <td style="background: #BEE9EA">Telefone </td>
                    <td style="background: #BEE9EA">Ação </td>
                </tr> 
            </thead>
            <tbody > 
                @foreach ($clientes as $cli)
                <tr>
                    <td style="background: #BCD42A">{{$cli->codcli}}</td>
                    <td style="background: #BCD42A">{{$cli->nomcli}}</td>
                    <td style="background: #BCD42A">{{$cli->cpfcli}}</td>
                    <td style="background: #BCD42A">{{$cli->endcli}}</td>
                    <td style="background: #BCD42A">{{$cli->numcli}}</td>
                    <td style="background: #BCD42A">{{$cli->baicli}}</td>
                    <td style="background: #BCD42A">{{$cli->cidcli}}</td>
                    <td style="background: #BCD42A">{{$cli->ufcli}}</td>
                    <td style="background: #BCD42A">{{$cli->telcli}}</td>
                    
                    <td style="text-align: center; background: #9ba2ab;">
                        
                        <button onclick="location.href='{{route('cliente.edit', $cli->codcli)}}'" style="font-size: 80%; width: 90%;" type="button">Editar</button></br>
                        
                        <form action="{{route('cliente.destroy', $cli->codcli)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="font-size: 80%; width: 90%;">Excluir</button>
                            
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
       
    </table>
</body>
</html>


