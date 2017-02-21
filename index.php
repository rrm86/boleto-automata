<!DOCTYPE html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Gerador de Boletos Automata</h2>
  <div class="col-md-6">
  <form class="form-horizontal" role="form" method="POST" action="boleto_bb.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Prazo:</label>
      <div class="col-sm-10">
        <input type="" class="form-control" id="prazo" name="prazo" placeholder="Digite o prazo" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Valor Cobrado:</label>
      <div class="col-sm-10">
        <input type="" class="form-control" id="valorCobrado" name="valorCobrado" placeholder="Digite o valor">
      </div>
    </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Gerar Boleto</button>
      </div>
    </div>
  </form>
  </div>
</div>

</body>
</html>

