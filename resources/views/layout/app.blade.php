<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>

<div class="bg-light">

<!--------------------------------------------------- first header ------------------------------------------------------>
<div class="mainHeader">
    <section class="color2">
        <div class="container">
            <div class=" pt-2 text-light">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 text-md-center d-none d-md-block d-lg-block text-lg-start">
                        <i class="fa fa-solid fa-phone"> (02)01226764759</i>
                        <h6 class="d-inline-block ps-3"><i class="fa fa-solid fa-envelope"></i> CAPTAIN@gmail.com</h6>

                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12  text-center text-lg-end ">
                        <div class="links ">
                            <i class="fa fa-brands fa-facebook px-2"></i>
                            <i class="fa fa-brands fa-twitter px-2"></i>
                            <i class="fa fa-brands fa-linkedin px-2"></i>
                            <i class="fa fa-brands fa-pinterest px-2"></i>
                            <i class="fa fa-brands fa-youtube px-1"></i>
                            <a href="#" class="d-block d-lg-inline-block d-md-inline-block text-light"><i
                                    class="fa fa-solid fa-user-alt px-1"></i> <small>Login/Register</small></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<!--------------------------------------------------- second header ------------------------------------------------------>
<div class="pt-2">
    <div>
        <nav class="navbar sticky-top navbar-expand-lg bg-light  " id="transition">

            <div class="container ">
                <a class="navbar-brand" href="#"><img src="{{url('image/Logopit_1670172009852.png')}}" alt="#" width="60px"
                                                      height="60px"><span>CAPTAIN</span></a>
                <div class="Categories">
                    <a class=" d-none d-lg-block navbar ms-1 pe-2" href="#"><i class="fa fa-solid fa-th"></i>Categories</a>

                    <div class="CategoriesTable">
                        <ul>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Freelancing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="  text-end searchInput d-none d-lg-block">
                    <input class="form-control    " type="search" placeholder="Search for Course" aria-label="Search">
                    <i class="fa fa-solid fa-search searchIcon"></i>
                </div>

                <button class="navbar-toggler bg-secondary text-light" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-light "><i class="fa fa-solid fa-bars pt-1"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <div class="Home">
                            <li class="nav-item me-3 text-secondary">
                                <a class="nav-link active text-secondary " aria-current="page" href="#"><i
                                        class="fa- fa-solid fa-angle-down "></i> Home</a>
                            </li>
                            <div class=" HomeTable">
                                <ul>
                                    <li><a href="#">Home One </a></li>
                                    <li><a href="#">Home Tow</a></li>
                                    <li><a href="#">Home three</a></li>
                                    <li><a href="#">Home four</a></li>
                                </ul>
                            </div>
                        </div>
                        <li class="nav-item me-3">
                            <a class="nav-link text-secondary " href="#">
                                About</a>
                        </li>
                        <div class="Courses">
                            <li class="nav-item me-3">
                                <a class="nav-link text-secondary " href="#"><i class="fa- fa-solid fa-angle-down"></i>
                                    Courses</a>
                            </li>
                            <div class=" CoursesTable">
                                <ul>
                                    <li><a href="#">Courses </a></li>
                                    <li><a href="#">Course Gride 2</a></li>
                                    <li><a href="#">Course Gride 3</a></li>
                                    <li><a href="#">Course Gride 4</a></li>
                                    <li><a href="#">Course List </a></li>

                                    <li><a href="#" class="pe-1">Single Layout</a><i class="fa- fa-solid fa-angle-right mx-5"></i>
                                        <div class=" SingleTable">
                                            <ul>
                                                <li><a href="#">Course Single 1 </a></li>
                                                <li><a href="#">Course Single 2 </a></li>
                                                <li><a href="singlePage.html">Course Single 3 </a></li>
                                                <li><a href="#">Course Single 4 </a></li>
                                                <li><a href="#">Course Single 5 </a></li>

                                            </ul>
                                        </div>
                                    </li>
                                </ul>


                            </div>
                        </div>


                        <div class="Pages">
                            <li class="nav-item me-3">
                                <a class="nav-link text-secondary " href="#"><i class="fa- fa-solid fa-angle-down "></i>
                                    Pages</a>
                            </li>
                            <div class=" PagesTable">
                                <ul>
                                    <li><a href="#">Instructors </a></li>
                                    <li><a href="#">Cart </a> </li>
                                    <li><a href="#">Checkout </a></li>
                                    <li><a href="#">Login </a></li>
                                    <li><a href="#">Register </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="Blog">
                            <li class="nav-item me-3">
                                <a class="nav-link text-secondary " href="#"><i class="fa- fa-solid fa-angle-down"></i>
                                    Blog</a>
                            </li>
                            <div class=" BlogTable">
                                <ul>
                                    <li><a href="#">Blog </a></li>
                                    <li><a href="#">Blog Details</a></li>

                                </ul>
                            </div>
                        </div>
                        <li class="nav-item me-3 text-secondary">
                            <a class="nav-link text-secondary">Contact</a>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
        <!-- navbar collapse -->
        <section>
            <div class="offcanvas bg-secondary w-75 offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false"
                 tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-light" id="offcanvasScrollingLabel"><img src="{{url('image/Logopit_1670171987981.png')}}"
                                                                                             alt="" height="80px"> Captain</h5>
                    <button type="button" class="btn-close bg-light " data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">


                    <button class="btn btn-secondary w-100 d-flex justify-content-between border-bottom" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                        <h6>Home</h6> <i class="fa fa-solid fa-angle-down border-start px-3 py-1"></i>
                    </button>

                    <div class="collapse " id="collapseExample">
                        <div class="card card-body bg-secondary text-light">
                            <a class="text-light border-bottom py-2" href="#">Home One </a>
                            <a class="text-light border-bottom py-2" href="#">Home Tow</a>
                            <a class="text-light border-bottom py-2" href="#">Home three</a>
                            <a class="text-light  pt-2" href="#">Home four</a>

                        </div>
                    </div>




                    <button class="btn btn-secondary w-100 d-flex justify-content-between border-bottom" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseAbout" aria-expanded="false"
                            aria-controls="collapseExample">
                        <h6>About</h6>
                    </button>



                    <button class="btn btn-secondary w-100 d-flex justify-content-between border-bottom" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseCourses" aria-expanded="false"
                            aria-controls="collapseExample">
                        <h6>Courses</h6> <i class="fa fa-solid fa-angle-down border-start px-3 py-1"></i>
                    </button>

                    <div class="collapse " id="collapseCourses">
                        <div class="card card-body bg-secondary text-light">
                            <a href="#" class="text-light border-bottom py-2">Courses </a>
                            <a href="#" class="text-light border-bottom py-2">Course Gride 2</a>
                            <a href="#" class="text-light border-bottom py-2">Course Gride 3</a>
                            <a href="#" class="text-light border-bottom py-2">Course Gride 4</a>
                            <a href="#" class="text-light ">Course List </a>

                            <button class="btn bg-secondary text-light w-100 d-flex justify-content-between border-bottom"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSingleLayout" aria-expanded="false"
                                    aria-controls="collapseExample">
                                <h6>Single Layout</h6> <i class="fa fa-solid fa-angle-down border-start px-3 py-1"></i>
                            </button>
                            <div class="collapse " id="collapseSingleLayout">
                                <div class="card card-body bg-secondary text-light">
                                    <a href="#" class="text-light border-bottom py-2">Course Single 1 </a>
                                    <a href="#" class="text-light border-bottom py-2">Course Single 2 </a>
                                    <a href="singlePage.html" class="text-light border-bottom py-2">Course Single 3 </a>
                                    <a href="#" class="text-light border-bottom py-2">Course Single 4 </a>
                                    <a href="#" class="text-light ">Course Single 5 </a>

                                </div>
                            </div>

                        </div>
                    </div>

                    <button class="btn btn-secondary w-100 d-flex justify-content-between border-bottom" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false"
                            aria-controls="collapseExample">
                        <h6>Pages</h6> <i class="fa fa-solid fa-angle-down border-start px-3 py-1"></i>
                    </button>

                    <div class="collapse " id="collapsePages">
                        <div class="card card-body bg-secondary text-light">
                            <a href="#" class="text-light border-bottom py-2">Instructors </a>
                            <a href="#" class="text-light border-bottom py-2">Cart </a>
                            <a href="#" class="text-light border-bottom py-2">Checkout </a>
                            <a href="#" class="text-light border-bottom py-2">Login </a>
                            <a href="#" class="text-light ">Register </a>

                        </div>
                    </div>

                    <div class="accordion-item bg-secondary border-0">
                        <button class="btn btn-secondary w-100 d-flex justify-content-between border-bottom" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseBlog" aria-expanded="false"
                                aria-controls="collapseExample">
                            <h6>Blog</h6> <i class="fa fa-solid fa-angle-down border-start px-3 py-1"></i>
                        </button>

                        <div class="collapse " id="collapseBlog">
                            <div class="card card-body bg-secondary text-light">
                                <a href="#" class="text-light border-bottom py-2">Blog</a>
                                <a href="#" class="text-light ">Blog Details</a>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-secondary border-0">
                        <button class="btn btn-secondary w-100 d-flex justify-content-between border-bottom" type="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
                            <h6>Contact</h6>

                        </button>


                    </div>
                </div>
            </div>
        </section>
        @yield('content')
</div>


</div>

</section>


<!--------------------------------------------------- footer section  ------------------------------------------------------>
<section class="mt-5  mt-5 text-light color2 " style="padding-top: 100px;">
    <div class="container py-3 ">
        <div class="row py-5">
            <div class="col-lg-4 col-md-6 ">
                <h3> <img src="{{url('image/Logopit_1670171987981.png')}}" alt="#" width="80px" height="80px">Captain
                </h3>
                <p class="w-75 lh-lg">Edumel is a Bootstrap Template for online courses education websites
                    support multiple courses</p>
            </div>
            <div class="col-lg-2 col-md-6 text-start">
                <h2>Explore</h2>
                <ul class="p-0 lh-lg">
                    <li class="py-2"><a class="text-light hover py-2" href="#">About us</a></li>

                    <li class="py-2"> <a class="text-light hover py-2" href="#">Contact us</a></li>

                    <li class="py-2"><a class="text-light hover py-2" href="#">Services</a></li>

                    <li class="py-2"><a class="text-light hover py-2" href="#">Support</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4">
                <h3>Categories</h3>
                <ul class="p-0 lh-lg">
                    <li class="py-2"><a class="text-light hover py-2" href="#">SEO Business</a></li>

                    <li class="py-2"> <a class="text-light hover py-2" href="#">Digital Marketing</a></li>

                    <li class="py-2"><a class="text-light hover py-2" href="#">Graphic Design</a></li>

                    <li class="py-2"><a class="text-light hover py-2" href="#">Social Marketing</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4">
                <h3>Links</h3>
                <ul class="p-0 lh-lg">
                    <li class="py-2"><a class="text-light hover py-2" href="#">News & Blogs</a></li>

                    <li class="py-2"> <a class="text-light hover py-2" href="#">Privacy Policy</a></li>

                    <li class="py-2"><a class="text-light hover py-2" href="#">Support</a></li>

                    <li class="py-2"><a class="text-light hover py-2" href="#">Return Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4">
                <h3>Address</h3>
                <ul class="p-0 lh-lg">
                    <li>Phone</li>
                    <li><a class="text-light hover py-2" href="#">+0800 327 8534</a></li>
                    <li>Email</li>
                    <li><a class="text-light hover py-2" href="#">support@edumel.com</a></li>
                </ul>
                <div>
                    <a class="text-light hover py-2 px-1" href="#"><i class="fa fa-brands fa-facebook"></i></a>
                    <a class="text-light hover py-2 px-1" href="#"><i class="fa fa-brands fa-twitter"></i></a>
                    <a class="text-light hover py-2 px-1" href="#"><i class="fa fa-brands fa-linkedin"></i></a>
                    <a class="text-light hover py-2 px-1" href="#"><i class="fa fa-brands fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <hr class="mt-2">
    <div class="container">
        <div class="row d-flex justify-content-between py-3">
            <div class="col-lg-9 col-md-6 ">© 2021 Edumel All rights reserved by Captain</div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="px-2 border-start text-light hover py-2">Legal </a>
                <a href="#" class="px-3 border-start text-light hover py-2">Supports </a>
                <a href="#" class="px-2 border-start text-light hover py-2">Terms</a>
            </div>
        </div>
    </div>

    </div>
    </div>


</section>
<button type="button" class="btn btn-info px-3 py-2 text-light angle " style="display: none;" id="angle"><i
        class="fa fa-solid fa-angle-up"></i> </button>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="{{url('js/main.js')}}"></script>

</body>

</html>
