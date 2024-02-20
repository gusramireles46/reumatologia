<div class="container">
    <h1>Doctores</h1>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Regresar</button>
        <button type="button" class="btn btn-success">Nuevo</button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fotografía</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $dato) : ?>
                <tr>
                    <th scope="row"><?php echo $dato['ID']; ?></th>
                    <td><?php echo $dato['Nombre']; ?></td>
                    <td><?php echo $dato['Foto']; ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-warning">Actualizar</button>
                            <button type="button" class="btn btn-danger" onclick="">Eliminar</button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>