<?php include 'header.php'; ?>

<section>
    <h1>Especialidades</h1>



    <p class="justify-text">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et error assumenda at a eos exercitationem,
        tenetur asperiores earum ratione optio unde? Enim beatae nostrum qui quod sit tempora sed libero?
    </p>
    <table class="table">
        <thead>
            <tr>
                <th>Especialidad</th>
                <th>Responsabe</th>
                <th>Extensión</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'especialidades.db.php';
            $app = new Especialidad();
            $datos = $app->getAll();
            foreach ($datos as $dato) :
            ?>
                <tr>
                    <td><?php echo $dato['Especialidad'] ?></td>
                    <td><?php echo $dato['Doctor'] ?></td>
                    <td><?php echo $dato['Extension'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php include 'footer.php'; ?>