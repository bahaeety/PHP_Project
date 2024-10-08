<header class="speedyui speedyui-header">
    <div class="top-bar py-2">
        <div class="container">
            <div class="row">
                <div class="col-auto col-lg-4">
                    <span class="d-none d-lg-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <a class="nav-link text-uppercase disabled" href="#">1 855 588 2436 </a>
                    </span>
                </div>
                <div class="col-12 col-md-auto mx-auto">
                    <a class="nav-link text-uppercase text-center disabled" href="#">Discover what makes BHFO unique!</a>
                </div>
                <div class="col-auto col-lg-4">
                    <ul class="d-none d-lg-flex align-items-center justify-content-end gap-2 gap-lg-3 list-unstyled mb-0">
                        <li>
                            <a class="nav-link text-uppercase" href="../views/Aboutus.php">About us</a>
                        </li>
                        <li>
                            <a class="nav-link text-uppercase" href="../views/giftcard.php">Gift cards</a>
                        </li>
                        <li>
                            <a class="nav-link text-uppercase" href="Shipping.php">Shipping</a>
                        </li>
                        <li>
                            <a class="nav-link text-uppercase" href="Returns.php">Returns</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav id="navb" class="bg-light navbar navbar-expand-lg py-2 py-md-0">
        <div class="container py-2 py-lg-0">
            <button class="navbar-toggler border-0 shadow-none px-0 me-2" type="button" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="acceuil.php">
                <img class="img-fluid" src="../images/Screenshot_2024-06-27_001249-removebg-preview.png" width="120px" alt="" />
            </a>
            <div class="social-wrapper order-1 order-lg-2 d-flex align-items-center gap-3 ms-auto">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                    </svg>
                </span>
                <span>
                    <form class="d-flex align-items-center" role="search">
                        <input id="form-control" name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </form>
                  
                </span>
                <span>
                    <a href="LogIn.php">
                        <svg width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 8.31836C11.0711 8.31836 12.75 6.63943 12.75 4.56836C12.75 2.49729 11.0711 0.818359 9 0.818359C6.92893 0.818359 5.25 2.49729 5.25 4.56836C5.25 6.63943 6.92893 8.31836 9 8.31836Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M0.818359 17.1819C0.818359 15.2531 1.68037 13.4032 3.21476 12.0393C4.74915 10.6754 6.83022 9.90918 9.00018 9.90918C11.1701 9.90918 13.2512 10.6754 14.7856 12.0393C16.32 13.4032 17.182 15.2531 17.182 17.1819" stroke="currentColor" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                    <?php
                    if(isset($_SESSION['name_user'])){
                     echo 'Bonjour '.$_SESSION['name_user'] ;
                    } 
                     ?>
                   
                </span>
                <span>
                    <a href="shoppincard.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6h4z" />
                        </svg>
                    </a>
                </span>
                <span>
                    <?php
                    if (isset($_SESSION['ID_USER'])) { ?>
                        <a class="btn btn-outline-warning" href="Dashbord/deconnexion.php">
                           Log out 
                        </a>
                    <?php } ?>
                </span>
            </div>
            <div class="navbar-collapse order-2 order-lg-1 collapse py-2 py-lg-0" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3 py-2 py-lg-4" href="Living room.php">
                            Living room
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 py-2 py-lg-4" href="renovation tools.php">
                            renovation tools
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 py-2 py-lg-4" href="Bedroom.php">
                            Bedroom
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 py-2 py-lg-4" href="Acessory.php">
                            Acessory
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-body position-relative p-0">
            <div class="outer-listings bg-white text-dark w-100 h-100 pb-3">
                <div class="submenu-header bg-light text-dark d-flex align-items-center justify-content-between gap-3 px-4 py-3 mb-3">
                    <span class="menu-heading text-uppercase small mb-0">Menu</span>
                    <button type="button" class="btn-close border-0 shadow-none ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <ul class="offcanvas-listing list-unstyled">
                    <li>
                        <a class="nav-link px-3 py-3" href="#">
                            Living room
                        </a>
                    </li>
                    <li>
                        <a class="nav-link px-3 py-3" href="#">
                            Dining room
                        </a>
                    </li>
                    <li>
                        <a class="nav-link px-3 py-3" href="#">
                            Bedroom
                        </a>
                    </li>
                    <li>
                        <a class="nav-link px-3 py-3" href="#">
                            Flooring
                        </a>
                    </li>
                    <li>
                        <a id="submenu-handler" class="nav-link d-flex align-items-center justify-content-between px-3 py-3" href="#">
                            Accessories
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
