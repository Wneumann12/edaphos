<!-- Contact-->
<section class="contact-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">

                <!-- formulario de contacto -->
                <div class="container contact-form border rounded bg-blanco">
                    
                    <form method="post" ><!--action="../modulos/formulariocontactos.php" -->
                        <h3 class="text-center p-3">Contactanos</h3>
                        <p class="text-center">
                            Pregunta por cualquier sistema de pisos seguro te podemos ayuda.
                        </p>

                       <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group p-2">
                                    <input type="text" name="txtName" class="form-control" placeholder="Tu Nombre *" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" name="txtEmail" class="form-control" placeholder="Tu Correo *" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" name="txtPhone" class="form-control" placeholder="Tu numero telefonico *" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="submit" name="btnSubmit" class="btnContact" value="Enviar" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group p-2">
                                    <textarea name="txtMsg" class="form-control" placeholder="Tu Mensaje *" style="width: 100%; height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Fin de formulario -->
                    
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <!-- <a class="mx-2" href="#!"><i class="fab fa-github"></i></a> --> 
                </div>
            </div>
        </section>