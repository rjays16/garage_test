<nav class="navbar navbar-expand-lg secondary-nav">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#secondaryNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="secondaryNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BLOG</a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link active" href="#" id="servicesDropdown">
                        SERVICES
                    </a>
                    <div class="dropdown-menu mega-dropdown-menu">
                        <div class="container">
                            <h2 class="locations-title">SERVICES</h2>
                            <div class="locations-grid">
                                <a href="#">Garage Door Repairs</a>
                                <a href="#">Garage Cable Repairs</a>
                                <a href="#">Automatic Door Openers</a>
                                <a href="#">Broken Springs</a>
                                <a href="#">Commercial Repair</a>
                                <a href="#">Commercial Cables</a>
                                <a href="#">Commercial Openers</a>
                                <a href="#">Commercial Springs</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ESTIMATE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GALLERY</a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link active" href="#" id="locationsDropdown">
                        LOCATION
                    </a>
                    <div class="dropdown-menu mega-dropdown-menu">
                        <div class="container">
                            <h2 class="locations-title">LOCATIONS</h2>
                            <div class="locations-grid">
                                <a href="#">Bristol County, MA</a>
                                <a href="#">Essex County, MA</a>
                                <a href="#">Middlesex County, MA</a>
                                <a href="#">Norfolk County, MA</a>
                                <a href="#">Plymouth County, MA</a>
                                <a href="#">Suffolk County, MA</a>
                                <a href="#">Worcester County, MA</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .mega-dropdown {
        position: static !important;
    }

    .mega-dropdown:hover .mega-dropdown-menu {
        display: block;
    }

    .mega-dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        padding: 20px 0;
        width: 100%;
        border-radius: 0;
        margin-top: 0;
        border: none;
        background-color: #f8f9fa;
        z-index: 1000;
    }

    .locations-title {
        font-family: Arial, sans-serif;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #000;
    }

    .locations-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        padding: 0 15px;
    }

    .locations-grid a {
        color: #000;
        text-decoration: none;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .locations-grid a:hover {
        color: #666;
    }

    .secondary-nav {
        background-color: #ffd700;
        padding: 0;
    }

    .secondary-nav .nav-link {
        color: #000 !important;
        font-weight: 600;
        padding: 15px 20px !important;
    }

    .secondary-nav .active:hover {
        background-color: #000;
        color: #fff !important;
    }
</style>
