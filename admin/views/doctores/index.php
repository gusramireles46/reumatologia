<div class="container">
    <h1>Doctores</h1>
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="#" class="btn btn-primary">Regresar</a>
                <a href="doctores.php?action=CREATE" class="btn btn-success">Nuevo</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Fotografía</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $dato) : ?>
                        <tr>
                            <th scope="row"><?php echo $dato['id_doctor']; ?></th>
                            <td><?php echo $dato['nombre']; ?></td>
                            <td><?php echo $dato['primer_apellido']; ?></td>
                            <td><?php echo $dato['segundo_apellido']; ?></td>
                            <td><?php echo $dato['fotografia']; ?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="doctores.php?action=UPDATE&id_doctor=<?php echo $dato['id_doctor']; ?>" class="btn btn-primary">Actualizar</a>
                                    <a href="doctores.php?action=DELETE&id_doctor=<?php echo $dato['id_doctor']; ?>" class="btn btn-danger">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>Se encontraron <?php echo $app->getCount(); ?> doctores</p>
        </div>
    </div>
</div>