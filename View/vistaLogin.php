<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login de Usuarios</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
        <style>
            
            body{
                width: 50%;
                margin: auto;
                padding-top: 50px;
            }
            
            h1{
                color: red;
            }
        </style>
    
    </head>
    <body>
        
              <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-start">
            <button class="btn btn-outline-success me-2" type="button">Inicio</button>
            <button class="btn btn-sm btn-outline-secondary" type="button">Registro</button>
        </form>
                  
        <h1>LOGIN DE USUARIOS</h1>

      
    </nav>
   <form>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" aria-describedby="nombre" maxlength="20" required="yes">
         
        </div>
        <div class="mb-3">
          <label for="pass" class="form-label ">Password</label>
          <input type="password" class="form-control" id="pass" required="yes">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-primary">Borrar</button>
</form>
    </body>
</html>


