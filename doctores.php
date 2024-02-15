<?php include 'header.php'; ?>

<section>
    <h1>Doctores</h1>

    <div class="row justify-content-center">
        <?php
        include 'doctores.db.php';
        foreach ($datos as $dato) :
        ?>
            <div class="col-lg-3 col-md-12">
                <div class="card" style="width: 100%; margin-bottom: 10px;">
                    <img class="card-img-top" src="images/doctores/<?php echo $dato['Foto'] ?>" alt="Doctor" style="height: 200px;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $dato['Nombre'] ?></h5>
                        <a href="#" class="btn btn-primary">Curriculum</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'footer.php'; ?>