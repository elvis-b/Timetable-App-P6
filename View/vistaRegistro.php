<?php
   require '../Config/config.php';
   require APPROOT .'/View/common/head.php';
?>
        
    <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-start">
            <button class="btn btn-outline-success me-2" type="button">Inicio</button>
            <a href="vistaLogin.php"> <button class="btn btn-sm btn-outline-secondary" type="button">Login</button> </a>
        </form>
    </nav>
        
        <div class="contenido">
        
        <h1>REGISTRO DE USUARIOS</h1>


        
        <form action="" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" aria-describedby="nombre" maxlength="20" required="yes">
         
        </div>
        <div class="mb-3">
          <label for="pass" class="form-label ">Password</label>
          <input type="password" class="form-control" id="pass" required="yes">
        </div>
        <div class="mb-3">
          <label for="passConfirm" class="form-label ">Repetir Password</label>
          <input type="password" class="form-control" id="passConfirm" required="yes">
        </div>


          <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="name" aria-describedby="name" maxlength="20" required="yes">
         
        </div>
       
               <div class="mb-3">
          <label for="surname" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="surname" aria-describedby="surname" maxlength="20" required="yes">
         
        </div>
       
                      <div class="mb-3">
          <label for="telephone" class="form-label">Telefono</label>
          <input type="tel" class="form-control" id="telephone" aria-describedby="telephone" maxlength="20" required="yes">
         
        </div>
       
             <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="email" maxlength="20" required="yes">
         
        </div>
       
        <div class="mb-3">
          <label for="nif" class="form-label">Nif</label>
          <input type="tel" class="form-control" id="nif" aria-describedby="nif" maxlength="20" required="yes">
         
        </div>
       
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-primary">Borrar</button>
        
        
</form>
        </div>
    </body>
</html>


