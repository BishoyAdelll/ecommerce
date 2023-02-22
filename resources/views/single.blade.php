@extends('layout.app')
@section('content')

    <section>
        <div class="addPhoto text-start py-5  " style="height: auto;">
            <div class="container pt-5 lh-lg">
                <h1 class="pt-2">{{$singles->title}}</h1>
                <p class="py-2 w-75">{{$singles->content}}</p>
                <div class="coolection ">
                    <img src="/storage/{{$singles->image_te}}" alt="" width="40px " height="40px" class="rounded-circle me-2 "> {{$singles->name_te}} / <i class="fa fa-solid fa-star text-warning ps-2"></i> <i
                        class="fa fa-solid fa-star text-warning"> </i> <i class="fa fa-solid fa-star text-warning"></i> <i
                        class="fa fa-solid fa-star text-warning"></i> <i class="fa fa-solid fa-star text-warning"></i>
                    (19) / <i class="fa fa-solid fa-user ps-3 pe-1"></i> {{$singles->students}} Enrolled Students
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------- Second section------------------------------------------------------- -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h2 class="py-2 lh-base">Description</h2>
                    <p class="lh-lg">Knowing PHP has allowed me to make enough money to stay home and make courses like this
                        one for
                        students all over the world. Being a PHP developer can allow anyone to make perfect money online and
                        offline, developing dynamic applications. Knowing PHP will allow you to build web applications, websites
                        or Content Management systems, like WordPress, Facebook, Twitter or even Google. There is no limit to
                        what you can do with this knowledge. PHP is one of the most important web programming languages to
                        learn, and knowing it, will give you SUPERPOWERS in the web</p>
                    <h2 class="py-2">What You will Learn?</h2>
                    <h6 class="lh-lg"><i class="fa fa-solid fa-check pe-3"></i>Clean up face imperfections, improve and repair
                        photos</h6>
                    <h6 class="lh-lg"><i class="fa fa-solid fa-check pe-3"></i> Remove people or objects from photos</h6>
                    <h6 class="lh-lg"><i class="fa fa-solid fa-check pe-3"></i> Master selections, layers, and working with
                        the layers panel</h6>
                    <h6 class="lh-lg"><i class="fa fa-solid fa-check pe-3"></i>Use creative effects to design stunning text
                        styles</h6>
                    <h6 class="lh-lg"><i class="fa fa-solid fa-check pe-3"></i>working with the layers panel</h6>
                    <h6 class="lh-lg pb-3"><i class="fa fa-solid fa-check pe-3"></i> Cut away a person from their background
                    </h6>
                    <div class="border border-1 border-secondary rounded-1 ">
                        <table class="table ">


                            <div class="p-4 pb-2">
                                <h5 py-1>Change Simplification</h5>
                                <p class="w-100 lh-lg">Dacere agemusque constantius concessis elit videmusne quia stoici constructio
                                    dissimillimas
                                    audiunt homerus commendationes</p>
                            </div>

                            <td class="d-flex justify-content-between table-active ps-4 py-3">
                                <a href=""><i class="fa fa-solid fa-play-circle pe-2"></i> The importance of data nowsaday </a> <a
                                    href="" class="bg-secondary text-light px-1 rounded-1"><small>10.30 Min</small></a>
                            </td>
                            <td class="d-flex justify-content-between ps-4 py-3">
                                <a href=""><i class="fa fa-solid fa-play-circle pe-2"></i> Why my organization should know about
                                    data </a> <a href="" class="bg-secondary text-light px-1 rounded-1"><small>20.30 Min</small></a>
                            </td>
                            <td class="d-flex justify-content-between table-active ps-4 py-3">
                                <a href=""><i class="fa fa-solid fa-book-atlas pe-2"></i> Assignments </a><span><a href=""><small
                                            class="text-light bg-info px-1 py-1 rounded-1">14 question</small></a> <a href=""><small
                                            class="bg-secondary text-light px-1 py-1 rounded-1">10.21 Min</small></a></span>
                            </td>

                            <td class="d-flex justify-content-between ps-4 py-3 border-0">
                                <a href=""><i class="fa fa-solid fa-clock pe-2"></i> Quiz 1 </a><span><a href=""><small
                                            class="text-light bg-info px-1 py-1 rounded-1 ">14 question</small></a> <a href=""><small
                                            class="bg-secondary text-light px-1 py-1 rounded-1">5.76 Min</small></a></span>
                            </td>


                        </table>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 w  px-sm-4 p-0">
                    <div class=" card border-0  CoastPlace">
                        <img src="/storage/{{$singles->image}}" class="card-img-top rounded-2" alt="..." height="250px">
                        <div class="container card-body">
                            <div class="d-flex justify-content-between pt-5 pb-4">
                                <span class="fa-2xl fw-bold text-info">${{$singles->price}}</span>
                                <span class="me-2 mt-1 fw-bold fa-xl text-secondary"> <del>$150</del></span>
                                <a href=""><small class="text-light bg-info px-1 rounded-1 mb-2">39% Off</small></a>

                            </div>
                            <table class="table text-black-50">
                                <td class="d-flex justify-content-between  py-3">
                                    <span ><i class="fa fa-solid fa-sliders-h pe-2"></i> level </span> <span class=" px-1 "><small>Beginnner</small></span>
                                </td>
                                <td class="d-flex justify-content-between  py-3 ">
                                    <span ><i class="fa fa-solid fa-play-circle pe-2"></i> Lectures </span> <span class=" px-1 "><small>2</small></span>
                                </td>
                                <td class="d-flex justify-content-between  py-3">
                                    <span ><i class="fa fa-solid fa-user pe-2"></i> Students </span> <span class=" px-1 "><small>{{$singles->students}}</small></span>
                                </td>
                                <td class="d-flex justify-content-between py-3">
                                    <span ><i class="fa fa-solid fa-clock pe-2"></i> Duration </span> <span class=" px-1 "><small>{{$singles->time}}hours</small></span>
                                </td>
                                <td class="d-flex justify-content-between  py-3">
                                    <span ><i class="fa fa-solid fa-globe pe-2"></i> Language </span> <span class=" px-1 "><small>English</small></span>
                                </td>
                                <td class="d-flex justify-content-between  py-3">
                                    <span ><i class="fa fa-solid fa-calendar-alt pe-2"></i> Updated </span> <span class=" px-1 "><small>{{$singles->updated_at}}</small></span>
                                </td>
                            </table>
                            <div class="text-black-50 py-3">
                                <a href="" class="btn btn-secondary border-0 text-light w-100 py-3"><i class="fa fa-solid fa-shopping-cart"></i> Enroll Course</a>
                            </div>
                            <div class="text-black-50">
                                <h4 class="pt-4">Material Includes</h4>
                                <h6><i class="fa fa-solid fa-arrow-right pe-2 pt-3"></i>Videos</h6>
                                <h6><i class="fa fa-solid fa-arrow-right pe-2 pt-3"></i>Files For Development</h6>
                                <h6><i class="fa fa-solid fa-arrow-right pe-2 pt-3 "></i>Documentation Files</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="border border-1 border-secondary rounded-1 my-5 py-3 ">
                        <table class="table  ">
                            <div class="p-4 pb-2">
                                <h5 py-1>Key Concepts</h5>
                                <p class="w-100 lh-lg">Dacere agemusque constantius concessis elit videmusne quia stoici constructio dissimillimas audiunt homerus commendationes</p>
                            </div>
                            <td class="d-flex justify-content-between table-active ps-4 py-3">
                                <a href=""><i class="fa fa-solid fa-play-circle pe-2"></i> Basic understanding of data management concepts </a> <a
                                    href="" class="bg-secondary text-light px-1 rounded-1"><small>10.30 Min</small></a>
                            </td>
                        </table>
                    </div>
                    <div class="border border-1 border-secondary rounded-1 py-4">
                        <table class="table">
                            <td class="d-flex justify-content-between table-active ps-4 py-3">
                                <a href=""><i class="fa fa-solid fa-play-circle pe-2"></i> Apply the principles  </a> <a
                                    href="" class="bg-secondary text-light px-1 rounded-1"><small>10.30 Min</small></a>
                            </td>
                            <td class="d-flex justify-content-between ps-4 py-3">
                                <a href=""><i class="fa fa-solid fa-play-circle pe-2"></i> Lesson 2</a> <a href="" class="bg-secondary text-light px-1 rounded-1"><small>20.30 Min</small></a>
                            </td>
                            <td class="d-flex justify-content-between ps-4 py-3 table-active">
                                <a href=""><i class="fa fa-solid fa-play-circle pe-2"></i>Lesson 3 </a> <a href="" class="bg-secondary text-light px-1 rounded-1"><small>20.30 Min</small></a>
                            </td>

                        </table>
                    </div>
                </div>
                <div class="col-lg-4 py-5 col-md-12">
                    <h3>Popular Courses</h3>
                    <table class="table">
                        <td class="table-active rounded-3 border-0">
                            <div class=" py-3   d-flex justify-content-between ">
                                <img src="/image/img_05.jpg" alt="" height="85px" width="95px" class="rounded-3 ps-2">
                                <div class="ps-3 ">
                                    <h6 ><a href="">Wordpress Theme Development</a> </h6>
                                    <h5 class="text-info fw-bold">$120</h5>
                                </div>
                            </div>
                        </td>
                    </table>
                    <table class="table">
                        <td class="table-active rounded-3 border-0">
                            <div class=" py-3  d-flex justify-content-between ">
                                <img src="/image/img_06.jpg" alt="" height="85px" width="95px" class="rounded-3 ps-2">
                                <div class="ps-3 ">
                                    <h6 ><a href="">mastering Photoshop for beginners</a> </h6>
                                    <h5 class="text-info fw-bold">$120</h5>
                                </div>
                            </div>
                        </td>
                    </table>
                    <table class="table">
                        <td class="table-active rounded-3 border-0">
                            <div class=" py-3  d-flex justify-content-between ">
                                <img src="/image/img_02.jpg" alt="" height="85px" width="95px" class="rounded-3 ps-2">
                                <div class="ps-3 ">
                                    <h6 ><a href="">Photography mastering adobe tool</a> </h6>
                                    <h5 class="text-info fw-bold">$120</h5>
                                </div>
                            </div>
                        </td>
                    </table>

                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12">
                    <h3>Reviews</h3>
                    <div>
                        <table class="table">
                            <td class="rounded-3 border-0">
                                <div class="py-3   d-flex justify-content-md-start ">
                                    <img src="/image/author.jpg" alt="" height="90px" width="90px" class="rounded-circle ">
                                    <div class="ps-3 ">
                                        <h4 >Tutori </h4>
                                        <h6 >Cover all topicc</h6>
                                        <h6 >
                                            <i class="fa fa-solid fa-star btn text-warning p-0"></i>
                                            <i class="fa fa-solid fa-star btn text-warning p-0"></i>
                                            <i class="fa fa-solid fa-star btn text-warning p-0"></i>
                                            <i class="fa fa-solid fa-star btn text-warning p-0"></i>
                                            <i class="fa fa-solid fa-star-half btn text-warning p-0"></i>
                                        </h6>
                                        <p class="text-black-50">The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.</p>
                                    </div>
                                </div>
                            </td>
                        </table>
                    </div>
                    <div>
                        <table class="table">
                            <td class="rounded-3 border-0">
                                <div class="  d-flex justify-content-md-start ">
                                    <img src="/image/author.jpg" alt="" height="90px" width="90px" class="rounded-circle ">
                                    <div class="ps-3 ">
                                        <h4 >Tutori </h4>
                                        <h6 >Cover all topicc</h6>
                                        <h6 >
                                            <i class="fa fa-solid fa-star btn text-warning p-0"></i>
                                            <i class="fa fa-solid fa-star btn text-warning p-0"></i>
                                            <i class="fa fa-solid fa-star btn text-warning p-0"></i>
                                            <i class="fa fa-solid fa-star btn text-warning p-0"></i>
                                            <i class="fa fa-solid fa-star-half btn text-warning p-0"></i>
                                        </h6>
                                        <p class="text-black-50">The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.</p>
                                    </div>
                                </div>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
