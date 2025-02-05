<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipo - Torneo Nacional</title>
    <link rel="stylesheet" href="css/formAltas.css">
</head>
<body>
    <div class="form-container">
        <div class="form-title">
        <h3 class="title">TORNEO NACIONAL</h3>
        </div>
        <form class="form-content" action="server/altas.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <img class="seleccionbtn" onclick="seleccionarArchivo()" src="IMAGENES/mm.png" id="logo" alt="Logo del equipo">
                <input type="file" class="input-file-altas" name="foto" required>
            </div>
               
            <div class="form-group">
                <input type="text" class="input-file-altas" placeholder="Nombre de equipo" name="nombre_equipo" required>
            </div>


            <div class="form-group">
                <input type="text" class="input-file-altas" placeholder="Id líder" name="id_jug_lider" required>
            </div>


            <div class="form-group">
                <input type="text" class="input-file-altas" placeholder="Id jugador 2" name="idjug2" required>
            </div>


            <div class="form-group">
                <input type="text" class="input-file-altas" placeholder="Id jugador 3" name="idjug3" required>
            </div>


            <div class="form-group">
                <select name="provincia" class="btn-prov" required>
                    <option value="Disabled">SELECCIONAR PROVINCIA</option>
                    <option value="1">Buenos Aires</option>
                    <option value="2">Catamarca</option>
                    <option value="3">Chaco</option>
                    <option value="4">Chubut</option>
                    <option value="5">Córdoba</option>
                    <option value="6">Corrientes</option>
                    <option value="7">Entre Ríos</option>
                    <option value="8">Formosa</option>
                    <option value="9">Jujuy</option>
                    <option value="10">La Pampa</option>
                    <option value="11">La Rioja</option>
                    <option value="12">Mendoza</option>
                    <option value="13">Misiones</option>
                    <option value="14">Neuquén</option>
                    <option value="15">Río Negro</option>
                    <option value="16">Salta</option>
                    <option value="17">San Juan</option>
                    <option value="18">San Luis</option>
                    <option value="19">Santa Cruz</option>
                    <option value="20">Santa Fe</option>
                    <option value="21">Santiago del Estero</option>
                    <option value="22">Tierra del fuego</option>
                    <option value="23">Tucumán</option>
                    <option value="24">CABA</option>
                </select>
            </div>


            <div class="form-group">
                <input  class="btn-submit-altas" type="submit" value="REGISTRAR EQUIPO">
            </div>
        </form>
    </div>
    <audio id="errorSound" src="sounds/Voicy_Tick Sound Brawl stars.mp3"></audio>
    <audio id="successSound" src="sounds/Voicy_brawl stars win song meme.mp3"></audio>
    <script src="../js/form-altas.js"></script>
</body>
</html>