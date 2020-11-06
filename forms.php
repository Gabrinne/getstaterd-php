<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulario</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
  <div class="container">
  <h1>Formulário</h1>



  <form class="form" action="form.php" method="POST" enctype="multipart/form-data">

  <div class="form-group">
  <input type="file" name="photos[]" class="form-control" multiple>
</div> 

  <!-- <div class="form-group">
  <input type="text" class="form-control"  name="nome" placeholder="Nome:">
  </div>

  <div class="form-group">
  <input type="password" name="senha" placeholder="Senha:" class="form-control">
  </div>

  <div class="form-group">
  <input type="email" name="email" placeholder="E-mail:" class="form-control">
  </div>

  <div class="form-group">
  <label>
      <input type="checkbox" name="concordo" value="SIM"  >  Concordo
  </label>
  </div>

  <div class="form-group">
  <label>
      <input type="checkbox" name="sexo" value="F" > Feminino 
  </label>

  
  <label>
      <input type="radio" name="sexo" value="M" > Masculino  
  </label>
  </div>

  <div class="form-group">
  <select name="estado" class="form-control">
    <option value="">Escolha o estado</option>
    <option value="Go">Goias</option>
    <option value="SP">Sao Paulo</option>
  </select>
  
  </div>

    <div class="form-group">
    <textarea name="descricao" placeholder="descrição" class="form-control" cols="30" rows="10"></textarea>    
    </div> -->
    <div class="form-group">
    <button type="submit" value="enviar" class="btn btn-primary"> Enviar </button>  
  
    </div>
  
  </form>
  
  
  </div>
</body>
</html>