<?php include 'header.php'; ?>
<form action="#">
    <section class="bg-body-tertiary" style="padding: 20px; margin-bottom: 10px;">
        <h3>Historia Clínica</h3>
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nombre" placeholder="Nopmbre">
                        <label for="nombre">Nombre</label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="primer_apellido" placeholder="Primer apellido">
                        <label for="primer_apellido">Primer apellido</label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="segundo_apellido" placeholder="Segundo apellido">
                        <label for="segundo_apellido">Segundo apellido</label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    <div class="form-floating">
                        <input type="date" class="form-control" id="fecha_nacimiento">
                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-body-tertiary" style="padding: 20px; margin-bottom: 10px;">
        <h3>Fracturas</h3>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="fracturas">¿Has tenido fracturas?</label>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="fracturas" id="fracturasSi" value="1">
                        <label class="form-check-label" for="fracturasSi">Sí</label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="fracturas" id="fracturasNo" value="0">
                        <label class="form-check-label" for="fracturasNo">No</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fracturasSi">Si respondio que sí, mencionelas a continuación</label>
                    <textarea name="descripcionFracturas" id="fracturas" class="form-control"></textarea>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-body-tertiary" style="padding: 20px; margin-bottom: 10px;">
        <div class="row">
            <div class="col">
                <h3>Interrogatorio de sistemas</h3>
                <p>Por favor marque las casillas correspondientes</p>
                <hr>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">CONSTITUCIONAL</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="fiebreRecurrente" name="constitucional">
                            <label class="form-check-label" for="fiebreRecurrente">
                                Fiebres recurrentes
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="perdidaPeso" name="constitucional">
                            <label class="form-check-label" for="perdidaPeso">
                                Perdida de peso
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="cansancio" name="constitucional">
                            <label class="form-check-label" for="cansancio">
                                Cansancio todo el tiempo
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">ENDOCRINO</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="tiroides" name="endocrino">
                            <label class="form-check-label" for="tiroides">
                                Enfermedad de la tiroides
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="tallaSombrero" name="endocrino">
                            <label class="form-check-label" for="tallaSombrero">
                                Cambio de talla de sombrero
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">OJOS</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="ojosRojos" name="ojos">
                            <label class="form-check-label" for="ojosRojos">
                                Frecuente enrojecimiento de los ojos
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="dolorOjos" name="ojos">
                            <label class="form-check-label" for="dolorOjos">
                                Frecuente dolor en los ojos
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="resequedadOjos" name="ojos">
                            <label class="form-check-label" for="resequedadOjos">
                                Resequedad crónica de los ojos
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="cambiosVision" name="ojos">
                            <label class="form-check-label" for="cambiosVision">
                                Cambios recientes de la visión
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">OIDOS/NARIZ/GARGANTA</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="resequedadBoca" name="ong">
                            <label class="form-check-label" for="resequedadBoca">
                                Resequedad crónica en la boca
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="ulcerasBoca" name="ong">
                            <label class="form-check-label" for="ulcerasBoca">
                                Frecuentes úlceras en la boca
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="ronqueraCronica" name="ong">
                            <label class="form-check-label" for="ronqueraCronica">
                                Ronquera crónica
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="perdidaAudicion" name="ong">
                            <label class="form-check-label" for="perdidaAudicion">
                                Pérdida de la Audición
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">RESPIRATORIO</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="respirarProfundo" name="respiratorio">
                            <label class="form-check-label" for="respirarProfundo">
                                El pecho le duele cuando respira profundo
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="faltaRespiracion" name="respiratorio">
                            <label class="form-check-label" for="faltaRespiracion">
                                Siente que le falta la respiración frecuentemente
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="tosFrecuente" name="respiratorio">
                            <label class="form-check-label" for="tosFrecuente">
                                Tos frecuente
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="asma" name="respiratorio">
                            <label class="form-check-label" for="asma">
                                Asma
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">CARDIOVASCULAR</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="dolorPecho" name="cardiovascular">
                            <label class="form-check-label" for="dolorPecho">
                                Dolor en el pecho cuando se esfuerza
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="faltaAireEsfuerzo" name="cardiovascular">
                            <label class="form-check-label" for="faltaAireEsfuerzo">
                                Esforzarse levemente resulta en una falta de aire
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="desmayos" name="cardiovascular">
                            <label class="form-check-label" for="desmayos">
                                Desmayos recientes
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="inflamacionTobillos" name="cardiovascular">
                            <label class="form-check-label" for="inflamacionTobillos">
                                Inflamación frecuente de los tobillos
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">GASTROINTESTINAL</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="acidez" name="gastrointestinal">
                            <label class="form-check-label" for="acidez">
                                Acidez
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="crohn" name="gastrointestinal">
                            <label class="form-check-label" for="crohn">
                                Enfermedad de Crohn
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="intestinoIrritable" name="gastrointestinal">
                            <label class="form-check-label" for="intestinoIrritable">
                                Síndrome del intestino irritable
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="nauseaFrecuente" name="gastrointestinal">
                            <label class="form-check-label" for="nauseaFrecuente">
                                Náusea frecuente
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">URINARIO</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="dolorOrinar" name="urinario">
                            <label class="form-check-label" for="dolorOrinar">
                                Dolor al orinar
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="sangreOrina" name="urinario">
                            <label class="form-check-label" for="sangreOrina">
                                Sangre en la orina
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="calculosRinones" name="urinario">
                            <label class="form-check-label" for="calculosRinones">
                                Cálculos en los riñones
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="infeccionesVejiga" name="urinario">
                            <label class="form-check-label" for="infeccionesVejiga">
                                Infecciones frecuentes de la vejiga
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">MUSCULOESQUELETAL</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="dolorCuerpo" name="musculoesqueletal">
                            <label class="form-check-label" for="dolorCuerpo">
                                Dolor por todo el cuerpo
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="dolorArticulaciones" name="musculoesqueletal">
                            <label class="form-check-label" for="dolorArticulaciones">
                                Dolor en las articulaciones
                            </label>
                            <input type="text" placeholder="¿Cuáles?" class="form-control" id="dolorArticulacionesInput">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="dolorMuscular" name="musculoesqueletal">
                            <label class="form-check-label" for="dolorMuscular">
                                Dolores musculares
                            </label>
                            <input type="text" placeholder="¿Dónde?" class="form-control" id="dolorMuscularInput">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="inflamacionArticulaciones" name="musculoesqueletal">
                            <label class="form-check-label" for="inflamacionArticulaciones">
                                Inflamación en las articulaciones
                            </label>
                            <input type="text" placeholder="¿Cuáles?" class="form-control" id="inflamacionArticulacionesInput">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">PIEL</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="cambioPicmentacion" name="piel">
                            <label class="form-check-label" for="cambioPicmentacion">
                                Cambios de pigmentación
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="erupcionesCutaneas" name="piel">
                            <label class="form-check-label" for="erupcionesCutaneas">
                                Erupciones cutáneas recurrentes
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="picazon" name="piel">
                            <label class="form-check-label" for="picazon">
                                Picazón frecuente
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="erupcionesCutaneasSol" name="piel">
                            <label class="form-check-label" for="erupcionesCutaneasSol">
                                Exposición breve al sol que causa erupciones cutáneas
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5" id="cambiosUnasManosPies" name="piel">
                            <label class="form-check-label" for="cambiosUnasManosPies">
                                Cambios recientes de las uñas de las manos y de los pies
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="6" id="dedosFrio" name="piel">
                            <label class="form-check-label" for="dedosFrio">
                                Los puntos de los dedos pierden el color cuando hace frio
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">NEUROLÓGICO</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="dolorCabeza" name="neurologico">
                            <label class="form-check-label" for="dolorCabeza">
                                Dolores de cabeza
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="convulsiones" name="neurologico">
                            <label class="form-check-label" for="convulsiones">
                                Convulsiones
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="debilidad" name="neurologico">
                            <label class="form-check-label" for="debilidad">
                                Debilidad reciente en alguna parte del cuerpo
                            </label>
                            <input type="text" placeholder="¿Cuáles?" class="form-control" id="debilidadInput">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="hormigueo" name="neurologico">
                            <label class="form-check-label" for="hormigueo">
                                Sensación de Hormigueo
                            </label>
                            <input type="text" placeholder="¿Dónde?" class="form-control" id="hormigueoInput">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12" style="margin-bottom: 10px;">
                        <h4 style="margin-bottom: 0;">PSIQUIÁTRICO</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="depresion" name="psiquiatrico">
                            <label class="form-check-label" for="depresion">
                                Depresión
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="trastornosSueno" name="psiquiatrico">
                            <label class="form-check-label" for="trastornosSueno">
                                Trastornos de sueño
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="confusion" name="psiquiatrico">
                            <label class="form-check-label" for="confusion">
                                Confusión
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="ansiedad" name="psiquiatrico">
                            <label class="form-check-label" for="ansiedad">
                                Ansiedad
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <input type="submit" value="Guardar" name="enviar" class="btn btn-success mb-3 btn-lg" style="width: auto;">
    </section>
</form>

<?php include 'footer.php'; ?>