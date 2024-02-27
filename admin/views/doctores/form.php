<div class="container">
    <h1><?php echo ($action == 'UPDATE') ? 'Actualizar información del doctor' : 'Agregar nuevo doctor'; ?></h1>
    <form action="doctores.php?action=<?php echo ($action == 'UPDATE') ? 'EDIT&id_doctor='.$datos['id_doctor']: 'SAVE'; ?>" method="post">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <div class="form-floating">
                        <input required="requiered" type="text" class="form-control" id="nombre" placeholder="Nopmbre" name="nombre" value="<?php echo (isset($datos['nombre'])) ? $datos['nombre'] : '' ?>">
                        <label for="nombre">Nombre</label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="primer_apellido" placeholder="Primer apellido" name="primer_apellido" value="<?php echo (isset($datos['primer_apellido'])) ? $datos['primer_apellido'] : '' ?>">
                        <label for="primer_apellido">Primer apellido</label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="segundo_apellido" placeholder="Segundo apellido" name="segundo_apellido" value="<?php echo (isset($datos['segundo_apellido'])) ? $datos['segundo_apellido'] : '' ?>">
                        <label for="segundo_apellido">Segundo apellido</label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-image"></i></span>
                    <div class="form-floating">
                        <input required="required" type="text" class="form-control" id="fotografia" placeholder="Fotografía" name="fotografia" value="<?php echo (isset($datos['fotografia'])) ? $datos['fotografia'] : '' ?>">
                        <label for="fotografia">Fotografía</label>
                    </div>
                </div>
                <input type="submit" value="Guardar" class="btn btn-success mb-3 btn-lg" style="width: auto;" name="SAVE">
            </div>
        </div>
    </form>
</div>