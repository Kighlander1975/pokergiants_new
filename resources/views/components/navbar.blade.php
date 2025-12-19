<!-- resources/views/components/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navimage">
    <div class="container-fluid myBlur">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="/images/logo.png" alt="Pokergiants.de" class="img-fluid navbar-logo">
            <span class="d-none d-md-inline ms-5 navbar-brand-text">Pokergiants.de</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menü</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center sm:py-2" href="/">
                            <span class="mso me-2">home</span>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center sm:py-2" href="/about">
                            <span class="mso me-2">diversity_3</span>
                            Über uns
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center sm:py-2" href="/contact">
                            <span class="mso me-2">chat</span>
                            Kontakt
                        </a>
                    </li>
                    <!-- Füge weitere Links hinzu -->
                </ul>
            </div>
        </div>
    </div>
</nav>
