<div class="container">
    <h1>Doctores</h1>
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Regresar</button>
                <button type="button" class="btn btn-success">Nuevo</button>
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
                            <th scope="row"><?php echo $dato['ID']; ?></th>
                            <td><?php echo $dato['nombre']; ?></td>
                            <td><?php echo $dato['primer_apellido']; ?></td>
                            <td><?php echo $dato['segundo_apellido']; ?></td>
                            <td><?php echo $dato['Foto']; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-warning">Actualizar</button>
                                    <a href="doctores.php?action=DELETE&id_doctor=<?php echo $dato['ID']; ?>" class="btn btn-danger">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>