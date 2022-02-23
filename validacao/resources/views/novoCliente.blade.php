<html>
    <head>
        <title>Cadastro de Cliente</title>
        <link href="./assets/css/app.css" rel="stylesheet">
        <meta name="csfr-token" content="{{csrf_token()}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        </head>
    <body>
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
                            <form action="/cliente" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="none">Nome do Cliente</label>
                                    <input type="text" id="none" class="form-control" name="none" placeholder="Nome do Cliente">
                                 </div>
                                 <div class="form-group">
                                    <label for="idade">Idade do Cliente</label>
                                    <input type="number" id="idade" class="form-control" name="idade" placeholder="Idade do Cliente">
                                 </div>
                                 <div class="form-group">
                                    <label for="dendereco">Endereço do Cliente</label>
                                    <input type="text" id="dendereco" class="form-control" name="dendereco" placeholder="Nome do Cliente">
                                 </div>
                                 <div class="form-group">
                                    <label for="email">E-mail do Cliente</label>
                                    <input type="text" id="email" class="form-control" name="email" placeholder="Email do Cliente">
                                 </div>
                                 <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                                 <button type="cancel" class="btn btn-primary btn-sm">Cancelar</button>
                                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <script src="./assets/js/app.js" type="text/javascript"></script>
    </body>
</html>