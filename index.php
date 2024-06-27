<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>
    <title>DESIS TEST</title>
  </head>
  <body>

    <h4 class="m-3"> <strong> FORMULARIO DE VOTACIÓN : </strong></h4 class="m-3">

   
      <div class="row col-3 m-1">
              <div class="ms-auto col-6">
               <label for="name">Nombre y Apellido:</label>
              </div>
              <div class="col-6 ">
                <input type="text" id="name" name="name" required>
              </div>
      </div>
      <div class="row col-3 m-1">
              <div class="ms-auto col-6">
               <label for="name">Nombre y Apellido:</label>
              </div>
              <div class="col-6 ">
                <input type="text" id="name" name="name" required>
              </div>
      </div>
      <div class="row col-3 m-1">
              <div class="ms-auto col-6">
               <label for="name">Nombre y Apellido:</label>
              </div>
              <div class="col-6 ">
                <input type="text" id="name" name="name" required>
              </div>
      </div>
      <div class="row col-3 m-1">
              <div class="ms-auto col-6">
               <label for="name">Nombre y Apellido:</label>
              </div>
              <div class="col-6 ">
                <input type="text" id="name" name="name" required>
              </div>
      </div>




        <div class="row">



          <div class="col-2 ms-1  ">
            <div class="div mt-1">
              
              <label for="name">Nombre y Apellido:</label>

            </div>
            <div class="div mt-1">
              <label for="alias">Alias:</label> 
            </div>

            <div class="div mt-1">
              <label for="rut">RUT:</label>

            </div>
            <div class="div mt-1">
              <label for="email">Email:</label>
            </div>

            <div class="div mt-1">
              <label for="region">Región:</label>
        
            </div>

            <div class="div mt-1">
              <label for="comuna">Comuna:</label>
            </div>

            <div class="div mt-1">
              <label for="candidate">Candidato:</label>
            </div>
            <div class="div mt-1">
              <label class="lbl-input" style="font-size:14px;" >¿Cómo se enteró de Nosotros?</label><br>
            </div>
          </div>

          <div class="col-6">
            <div class="div mt-1">
              <input type="text" id="name" name="name" required>
              
            </div>
            <div class="div mt-1">
              <input type="text" id="alias" name="alias" required>

            </div>
            <div class="div mt-1">
              <input type="text" id="rut" name="rut" required>

            </div>
            <div class="div mt-1">
              <input type="email" id="email" name="email" required>

            </div>
            <div class="div mt-1">
              <select id="region" name="region" required>
                  <option value="">Seleccione una región</option>
                  <option value="region1">Región 1</option>
                  <option value="region2">Región 2</option>
                  <!-- Agregar más opciones según sea necesario -->
              </select>

            </div>

            <div class="div mt-1">
              <select id="candidate" name="candidate" required>
                  <option value="">Seleccione un candidato</option>
                  <option value="candidate1">Candidato 1</option>
                  <option value="candidate2">Candidato 2</option>
                  <!-- Agregar más opciones según sea necesario -->
              </select>

            </div>

            <div class="div">
              <label class="">
                            <input type="checkbox" name="cbxAbout" value="1" class=""/> 
                            Web
              </label>
              <label class="ms-1">
                            <input type="checkbox" name="cbxAbout" value="2" class=""/> 
                            TV
              </label>
              <label class="ms-1">
                            <input type="checkbox" name="cbxAbout" value="3" class=""/> 
                            Redes Sociales
              </label>
              <label class="ms-1">
                            <input type="checkbox" name="cbxAbout" value="4" class=""/> 
                            Amigo
              </label>
            </div>
          </div>
        </div >





        <input class="mt-4" type="submit" value="Votar">
    <!-- </form> -->

    <script src="/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>