<!--MODAL DE USUARIOS-->

<div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tituloModal">Nuevo usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUsuario" name="formUsuario">
          <div class="form-group">
            <label for="control-label">Nombre:</label>
            <input type="text" class="nombre" id="nombre">
          </div>
          <div class="form-group">
            <label for="control-label">Usuario:</label>
            <input type="text" class="usuario" id="usuario">
          </div>
          <div class="form-group">
            <label for="control-label">Contraseña:</label>
            <input type="password" class="clave" id="clave">
          </div>
          <div class="form-group">
            <label for="listRol">Rol</label>
            <select name="listRol" id="listRol" class="form-control">
                <option value="1">Administrador</option>
                <option value="1">Asistente</option>
            </select>
          </div>
          <div class="form-group">
            <label for="listEstado">Estado</label>
            <select name="listEstado" id="listEstado" class="form-control">
                <option value="1">Activo</option>
                <option value="1">Inactivo</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" type="submit">Guardar</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>