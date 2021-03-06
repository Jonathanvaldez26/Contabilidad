<?php
    echo $header;
?>
    <body class="">
    <main class="main-content main-content-bg mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-start">
                                    <h3 class="font-weight-bolder text-primary text-gradient">GRUPO LAHE</h3>
                                    <p class="mb-0">Introduce tus credenciales para iniciar sesión.</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" class="text-start" id="login" action="/Login/crearSession" method="POST" class="form-horizontal">
                                        <label>Correo Electrónico</label>
                                        <div class="mb-3">
                                            <input type="email" name="usuario" id="usuario" class="form-control" placeholder="usuario@grupolahe.com" aria-label="Email">
                                        </div>
                                        <label>Contraseña</label>
                                        <div class="mb-3">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="•••••••••" aria-label="Password">
                                        </div>

                                        <div class="text-center">
                                            <button type="button" id="btnEntrar" class="btn bg-gradient-primary w-100 mt-4 mb-0">ENTRAR</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/assets/img/curved-images/fondo.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-0 mt-0">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-facebook"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-0">
                    <p class="mb-0 text-secondary">
                        Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> Soft by Creative Grupo LAHE.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    </body>

<?php echo $footer; ?>