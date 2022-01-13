<?php echo $header; ?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="javascript:;">
                            <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Empresas</li>
                </ol>

            </nav>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/pages/authentication/signin/illustration.html" class="nav-link text-body font-weight-bold px-0" target="_blank">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">

                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-3 col-md-12">
        <div class="card card-body" id="profile">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-auto col-4">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/assets/img/bruce-mars.jpg" alt="bruce" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-sm-auto col-8">
                    <div class="h-100">
                        <h5 class="mb-1 font-weight-bolder col-sm-auto col-8">
                            Empresas
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm col-sm-auto col-8">
                            Registradas
                        </p>
                    </div>
                </div>
                <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex"></div>
            </div>
        </div>
        <br>
        <a href="/Empresa/Add" type="button" class="btn btn-primary btn-sm">Nuevo</a>
        <button type="button" class="btn btn-secondary btn-sm">Eliminar</button>
        <br>
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Clave</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Razon Social</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">RFC</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefono</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha Alta</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Manager</p>
                            </td>
                            <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-info"></i>
                        <span class="text-dark text-xs">positive</span>
                      </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm">john@user.com</p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">23/04/18</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">43431</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Programator</p>
                            </td>
                            <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-info"></i>
                        <span class="text-dark text-xs">positive</span>
                      </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm">alexa@user.com</p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">93021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Executive</p>
                            </td>
                            <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-dark"></i>
                        <span class="text-dark text-xs">neutral</span>
                      </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm">laurent@user.com</p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">10392</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Michael Levi</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Backend developer</p>
                            </td>
                            <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-info"></i>
                        <span class="text-dark text-xs">positive</span>
                      </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm">michael@user.com</p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">34002</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Richard Gran</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Manager</p>
                            </td>
                            <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-danger"></i>
                        <span class="text-dark text-xs">negative</span>
                      </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm">richard@user.com</p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">91879</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Programtor</p>
                            </td>
                            <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-info"></i>
                        <span class="text-dark text-xs">positive</span>
                      </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm">miriam@user.com</p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">23042</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>


<?php echo $footer; ?>
