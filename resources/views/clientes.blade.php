<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Cadastro de Clientes</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}" type="application/javascript" defer></script>
        <style>
            body{
                padding: 20px
            }
        </style>
    </head>
    <body>
        <div class="container">
            @alerta(['titulo'=>'Erro Fatal', 'tipo'=>'success'])
            @endalerta
            <main role="main">
                <div class="row">
                    <div class="container col-md-8 offset-md-2">
                        <div class="card border">
                            <div class="card-header">
                                <div class="card-title">
                                    Cadastro de Cliente
                                </div>
                            </div>
                            <div class="card-body">
                               <table class="table table-ordered table-hover">
                                   <thead>
                                       <tr>
                                           <th>Código</th>
                                           <th>Nome</th>
                                           <th>Endereço</th>
                                           <th>Idade</th>
                                           <th>Email</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($clientes as $c)
                                            <tr>
                                                <td>{{ $c->id }}</td>
                                                <td>{{ $c->nome }}</td>
                                                <td>{{ $c->endereco }}</td>
                                                <td>{{ $c->idade }}</td>
                                                <td>{{ $c->email }}</td>
                                            </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>