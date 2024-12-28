<nav class="navbar navbar-expand-lg navbar-dark p-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="MASS GARAGE DOORS EXPERT">
        </a>
        
        <form class="search-form mx-auto d-none d-lg-block">
            <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
            <button class="search-icon" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>
        
        <div class="d-flex align-items-center">
            <ul class="navbar-nav me-4">
                <li class="nav-item">
                    <a class="nav-link" href="#">EXPERT ADVICE</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT US</a>
                </li>
            </ul>
            <a href="tel:888-989-8758" class="phone-number">
                <i class="bi bi-telephone-fill phone-icon"></i>
                888-989-8758
            </a>
        </div>
    </div>
</nav>

<style>
        .header {
            background-color: #000000;
            padding: 18px 40px;
            position: relative;
        }
        .search-form {
            position: relative;
            max-width: 500px;
            width: 100%;
        }
        .search-form .form-control {
            padding-right: 40px;
            border-radius: 4px;
        }
        .search-form .search-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #666;
        }
        .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 0 15px !important;
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            background: #ffd700;
            bottom: -5px;
            left: 0;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        .nav-link:hover::after {
            transform: scaleX(1);
        }
        .phone-number {
            color: #ffd700;
            font-weight: bold;
            text-decoration: none;
        }
        .phone-icon {
            margin-right: 5px;
            color: #ffd700;
        }
</style>