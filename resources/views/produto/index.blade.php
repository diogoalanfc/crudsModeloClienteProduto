<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar/Editar Produto</title>

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
        <br/><a href="{{route('produto.create')}}">Adicionar Produto</a><br/><br/>


        <!-- Listagem de clientes -->   
        <table style="width: 70%;">
            <thead style="text-align: center">
                <tr>
                    <td style="background: #BEE9EA">Cód.Categ </td>
                    <td style="background: #BEE9EA">Nome.Categ </td>
                    <td style="background: #BEE9EA">Cód.Prod </td>
                    <td style="background: #BEE9EA">Nome </td>
                    <td style="background: #BEE9EA">Descrição </td>
                    <td style="background: #BEE9EA">Valor </td>        
                    <td style="background: #BEE9EA">Ação </td>
                </tr> 
            </thead>
            <tbody > 
                @foreach ($produtos as $c)
                <tr>
                    <td style="background: #BCD42A">{{$c->codcat}}</td>
                    <td style="background: #BCD42A">{{$c->nomcat}}</td>
                    <td style="background: #BCD42A">{{$c->codpro}}</td>
                    <td style="background: #BCD42A">{{$c->nompro}}</td>
                    <td style="background: #BCD42A">{{$c->despro}}</td>
                    <td style="background: #BCD42A">{{$c->vlrpro}}</td>
                    <td style="text-align: center; background: #9ba2ab;">
                        
                        <button onclick="location.href='{{route('produto.edit', $c->codpro)}}'" style="font-size: 80%; width: 90%;" type="button">Editar</button></br>
                        
                        <form action="{{route('produto.destroy', $c->codpro)}}" method="post">
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


