<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap CSS Link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Link CSS  -->
    <link rel="stylesheet" href="style.css">

    <!-- Fontawesome Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="container">



        <div class="container">
            <!-- Navbar Start --  -->
            <nav class="navbar navbar-expand-lg bg-info">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Crystal Blues</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="#">Gallery</a>
                            <a class="nav-link" href="#">Latest</a>
                            <a class="nav-link" href="#">Cart</a>
                            <a class="nav-link" href="#contact">Contact</a>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End  -->
            <!-- Header Start   -->
            <div class="">
                <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./new img/07.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./new img/08.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./new img/09.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Header End   -->

            <!-- Catagories -->
            <div class="row row-cols-1 row-cols-md-3 g-4 catagori">
                <div class="col">
                    <div class="card h-100">
                        <img src="./new img/catagori01.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ear Rings</h5>

                            <button id="btn" type="button" class="btn btn-info text-white"><a
                                    href="./Catagories/Ear_rings.php">Show
                                    More</a></button>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./new img/catagori02.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bracelete</h5>
                            <button id="btn" type="button" class="btn btn-info text-white"><a
                                    href="./Catagories/Brecelete.php">Show
                                    More</a></button>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./new img/catagori03.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rings</h5>
                            <button id="btn" type="button" class="btn btn-info text-white"><a
                                    href="./Catagories/Rings.php">Show
                                    More</a></button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Catagories End -->


            <!-- Wedding Jwellery   -->
            <div class="container text-center mt-4 ">
                <div class="row text_wedding ">
                    <div class="col-sm-6" style="font-size: 40px;font-weight:bold;color:red;">Wedding Jwellery
                        <p style="font-size: 15px;font-weight:thin;color:grey">Lorem, ipsum dolor sit amet consectetur
                            adipisicing
                            elit. Aspernatur facilis nostrum sit atque
                            modi laboriosam explicabo reiciendis tenetur ab ullam sunt voluptates veritatis doloribus
                            fugit
                            natus exercitationem, et sint tempore.</p>
                        <button id="btn" type="button" class="btn btn-info text-white my-2"><a
                                href="./Latest.php">Latest
                                Collections</a></button>
                    </div>

                    <div class="col-md-6">
                        <img class="img_wedding" src="./new img/02.jpg" alt="" />
                    </div>

                </div>

                <!-- Wedding Jwellery End  -->

                <!-- New Products -->
                <div class="my-3">
                    <h3>
                        OUR <span style="color:blue-300;">NEW</span> PRODUCTS
                    </h3>
                    <hr>
                    </hr>
                </div>
                <div class=" text-center my-4">
                    <div class="row ">
                        <div class="col-md-6">
                            <img id="products" src="./new img/10.jpg" alt="">
                        </div>
                        <div class="col-md-6">
                            <img id="products" src="./new img/11.jpg" alt="">

                        </div>
                        <div class="col-md-6 mt-3">
                            <img id="products" src="./new img/12.jpg" alt="">
                        </div>
                        <div class="col-md-6 mt-3">
                            <img id="products" src="./new img/13.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!-- New Products End -->
            </div>

            <!-- Contact Us   -->

            <div class="my-3" id="contact">
                <h3 class="bg-info" style="align-items:center;justify-content:center;display:flex;">
                    GET IN TOUCH
                </h3>
                <hr>
                </hr>

                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationTooltip01" value="" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationTooltip02" value="" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltipUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                            <input type="text" class="form-control" id="validationTooltipUsername"
                                aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltip03" class="form-label">City</label>
                        <input type="text" class="form-control" id="validationTooltip03" required>
                        <div class="invalid-tooltip">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3 position-relative">
                        <label for="validationTooltip04" class="form-label">State</label>
                        <select class="form-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="invalid-tooltip">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 position-relative">
                        <label for="validationTooltip05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationTooltip05" required>
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-info fw-bold text-white" type="submit">Submit form</button>
                    </div>
                </form>
                <!-- Contact Us  End -->



                <!-- Footer Start -->

                <div class="container text-center bg-dark mt-4">
                    <div class="row">
                        <div class="col">
                            <div class=" text-center my-4">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <img id="footer" src="./new img/01.jpg" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <img id="footer" src="./new img/02.jpg" alt="">

                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <img id="footer" src="./new img/03.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <img id="footer" src="./new img/04.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">


                            <h3 class="my-3 text-info">CRYSTAL BLUE</h3>
                            <p class="text-info">Email:crystalblue@gmail.com</p>
                            <p class="text-info">Address:Zindabazar Sylhet</p>
                            <p class="text-info">Contact:+887659135</p>



                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
                <!-- Footer End -->



            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                crossorigin="anonymous"></script>
</body>

</html>