<div class="form">
	<h3 class="modificarTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="modificarInput" action="server/modificacion.php" method="POST" enctype="multipart/form-data">
		<div class="container-select">
			<div id="modalModificar" class=""></div>
		</div>

		<?php
		include("modelo/usuario.php");
			echo getUsuarioUsersNamesModificar();
		?>
			<div id="modalModificar" class="registrosbtn"></div>

		Campos a modificar:<br>

		<div class="grupoInputsCambiar">
			<div class="imagenUsuario">
				<img onclick="seleccionarArchivoModificar()" id="iimgPerfilModificar" src="../images/fotoPerfil.png"
					alt=""class="btn-archivo-mod">
				<input type="file" name="foto" class="inputFileModificar">
			</div>
			<label class="labelInput">
					<input type="text" class="cambioInput" id="nombre" placeholder="Nombre de equipo" name="nombre_equipo" required>
				</label>
			<div class="grupoInputsModificar">
				<label class="labelInput">
					<input type="text" class="cambioInput" id="idlider" placeholder="ID Lider" name="idjug_lider" required>
				</label>
				<label class="labelInput">
					<input type="text" class="cambioInput" id="id2" placeholder="ID Jugador 2" name="idjug2" required>
				</label>
				<label class="labelInput">
					<input type="text" class="cambioInput" id="id3" placeholder="ID Jugador 3" name="idjug3" required>
				</label>
				<label class="labelInput">
					<input type="text" class="cambioInput" id="provincia" placeholder="Provincia" name="provincia" required>
				</label>
				
				<div class="btn-submit">
					<input type="submit" onsubmit="modal(event)" class="btn-modificar" value="Modificar">
				</div>
			</div>
		</div>
	</form>
</div>