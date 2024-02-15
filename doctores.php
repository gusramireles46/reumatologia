<?php include 'header.php'; ?>

<section>
    <h1>Doctores</h1>

    <div class="row">
        <?php
        include 'doctores.db.php';
        foreach ($datos as $dato) :
        ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/doctores/<?php echo $dato['Foto'] ?>" alt="Doctor">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dato['Nombre'] ?></h5>
                        <a href="#" class="btn btn-primary">Curriculum</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'footer.php'; ?>