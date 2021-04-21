<?php
   require APPROOT .'/Config/config.php';
   require APPROOT .'/View/common/head.php';
   require APPROOT .'/View/common/menu.php';
?>
    <div class="contenido">
        <h1>LOGIN DE USUARIOS</h1>

   
    
   <form action="" method="POST">
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
        
    </div>
    </body>
</html>


