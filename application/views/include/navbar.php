<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Sidebar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Sidebar styling */
        #sidebarMenu {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #343a40;
            color: #fff;
            padding-top: 1rem;
            display: none;
        }

        #sidebarMenu.show {
            display: block;
        }

        .sidebar-link {
            color: #ddd;
            padding: 0.75rem 1rem;
            display: block;
            text-decoration: none;
        }

        .sidebar-link:hover {
            background-color: #495057;
            color: #fff;
        }

        /* Media query for large screens */
        @media (min-width: 992px) {
            #navbarTop {
                display: none;
            }

            #sidebarMenu {
                display: block;
            }
        }
    </style>
</head>

<body>

    <!-- Top Navbar -->
    <nav id="navbarTop" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BrandName</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Luxury</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Natural</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Science</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ayurveda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Wellness</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Offers</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                <div class="d-flex ms-3">
                    <a href="#" class="btn btn-outline-light me-2">Login</a>
                    <a href="#" class="btn btn-outline-light me-2"><i class="bi bi-cart"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar (for larger screens) -->
    <div id="sidebarMenu" class="bg-dark">
        <h5 class="px-3 text-white">BrandName</h5>
        <hr class="text-white">
        <a href="#" class="sidebar-link">Luxury</a>
        <a href="#" class="sidebar-link">Natural</a>
        <a href="#" class="sidebar-link">Science</a>
        <a href="#" class="sidebar-link">Ayurveda</a>
        <a href="#" class="sidebar-link">Wellness</a>
        <a href="#" class="sidebar-link">Offers</a>
        <hr class="text-white">
        <form class="d-flex px-3 pb-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        <a href="#" class="sidebar-link">Login</a>
        <a href="#" class="sidebar-link"><i class="bi bi-cart"></i> Cart</a>
    </div>

    <!-- JavaScript to toggle sidebar on smaller screens -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelector(".navbar-toggler").addEventListener("click", function () {
            document.getElementById("sidebarMenu").classList.toggle("show");
        });
    </script>

</body>

</html>