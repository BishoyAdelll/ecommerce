@extends('layout.app')
@section('content')

    <!--------------------------------------------------- first section in page  ---------------------------------------------->
    <section class=" {{$contents->bg_color}}">
        <div class="container ">
            <div class="row py-5 text-light">

                <div class="col-lg-5 col-md-12">
                    <h6 class="pt-5">{{$contents->subTitle}}</h6>

                    <h1 class="text-capitalize fa-3x pt-3">{{$contents->title}}</h1>
                    <p class="lh-lg fa-1x">{{$contents->content}}</p>
                    <a href="{{$contents->text1_url}}" class="btn btn-info text-light py-2">{{$contents->text1_title}}</a>
                    <a href="{{$contents->text2_url}}" class="btn bg-light text-secondary  py-2 ms-2"> {{$contents->text2_title}}</a>
                </div>
                <div class="col-lg-7 col-md-12">
                    <img src="/storage/{{$contents->image}}" alt="" class="w-100 pt-5 pb-2">
                </div>


            </div>

            <div class="w-100  controller2  rounded-3 text-light">

                <div class="row text-center py-5 px-2 mx-0 ">
                    <div class="col-lg-3 col-md-6  col-sm-12 ">
                        <span class="fa-3x main" data-val="{{$counters->student}}">000</span><span class="fa-3x">+</span>
                        <h5>Students</h5>
                    </div>
                    <div class="col-lg-3 col-md-6  col-sm-12 ">
                        <span class="fa-3x main" data-val="{{$counters->onlineCourrses}}">000</span>
                        <h5>Online Courses</h5>
                    </div>
                    <div class="col-lg-3 col-md-6  col-sm-12 ">
                        <span class="fa-3x main" data-val="{{$counters->finishedCourses}}">000</span><span class="fa-3x">+</span>
                        <h5>Finished Seasons</h5>
                    </div>
                    <div class="col-lg-3 col-md-6  col-sm-12 ">
                        <span class="fa-3x main" data-val="{{$counters->satisfaction}}"> 000</span><span class="fa-3x">%</span>
                        <h5>Satisfaction</h5>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-------------------------------------------------- second section with search par ---------------------------------------->
    <section class="my-5 pt-5 ">
        <div class="container " style="padding-top: 80px; padding-bottom: 60px;">
            <div class="text-center py-4">
                <h1 class="fw-bold">Recent Courses</h1>
                <p class="text-black-50">Discover Your Perfect Program In Our Courses.</p>
            </div>
            <div class="row ">
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-6 col-sm-12 card_width position-relative animation2 mb-5">
                    <div class="card border-0 shadow  ">
                        <div>
                            <img src="/storage/{{$course->image}}" class="card-img-top  " alt="...">
                        </div>

                        <div class=" start-0 price  w-25 ">
                            <p class="bg-info px-3 py-2 text-center">{{$course->price}}$</p>
                        </div>
                        <div class="card-body ">
                            <p class="card-title ">
                                <i class="fa fa-solid fa-star text-info"> </i>
                                <i class="fa fa-solid fa-star text-info"> </i>
                                <i class="fa fa-solid fa-star text-info"> </i>
                                <i class="fa fa-solid fa-star text-info"> </i>
                                <i class="fa fa-solid fa-star text-info"> </i>
                                <small>3.9 ({{$course->reviews}} reviews)</small>
                            </p>
                            <p class="card-text  fw-bold lh-lg ">{{$course->title}}
                            </p>
                            <div class="d-flex justify-content-between ">
                                <span><i class="fa fa-solid fa-clock pe-1"></i>{{$course->time}} hr</span>
                                <span><i class="fa fa-solid fa-user-alt pe-1"></i>{{$course->students}} Students</span>
                                <span><i class="fa fa-solid fa-play-circle pe-1"></i>{{$course->lessons}} Lessons</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-hover animation1  col-lg-4 col-md-6">
                        <div class="container pt-2 ">
                            <h2 class="pt-2 pb-3">{{$course->price}}$</h2>
                            <h3 class="pb-2">
                                {{$course->title}}
                            </h3>
                            <img src="/storage/{{$course->image_te}}" alt="">
                            <span>{{$course->name_te}}</span>
                            <i class="fa fa-solid fa-file-alt ps-4 pe-2 text-black-50"></i><small>{{$course->lessons}} lessons</small>
                            <p class="lh-lg bt-4 text-black-50">{{$course->content}}</p>
                            <a href="#" class="btn btn-info color2 text-light ">Join Now ></a>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>


        </div>
    </section>

    <!-- ------------------------------------------------cruds section ------------------------------------------------------ -->
    <section class="sectionHeight">

        <div class=" text-center ">
            <div>
                <div class="py-5">
                    <h1 class="fw-bold">Categories you want to learn</h1>
                    <p class="text-black-50">Aenean eu leo quam. Pellentesque ornare sem lacinia quam</p>
                </div>
                <div class="container text-center">
                    <div class="row gap-4 gap-lg-4 gap-md-5 gap-xl-4 text-light">
                        @foreach( $departments as $department)

                        <div class="col-xl-2 col-lg-3 col-md-5 col-sm-12 icons  mx-xl-auto " style="background:{{$department->color}}">
                            <a href="{{route('coursesType',$department->id)}}">
                            <div>
                                <div class="image-icon"><img src="\storage\{{$department->image}}" alt="" class="img-fluid "></div>
                                <h4 class="pt-4">
                                    {{$department->title}}
                                </h4>
                            </div>
                            </a>
                        </div>

                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ----------------------------------------------------video section------------------------ -->
    <section class="sectionHeight">
        <div class="container my-5">
            <div class="row ">
                <h1 class="fw-bold">Start your journey With us</h1>
                <p class="text-black-50">Aenean eu leo quam. Pellentesque ornare sem lacinia quam</p>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-12 mt-5">
                    <div class="row">
                        @foreach($fields as $field)
                        <div class="col-lg-6 col-sm-12 col-md-6 d-flex justify-content-between">
                            <div>
                                <h4 class="rounded-circle color4 p-3 text-light">{{$field->number}}</h4>
                            </div>
                            <div class="ps-2">
                                <h4>{{$field->title}}</h4>
                                <p class="text-black-50">{{$field->subtitle}}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 my-5">
                    <div class="position-relative ">
                        <div class="video ">
                            <img src="{{url('/image/cta-bg.jpg')}}" class="w-100 " alt="" style="max-height:300px">
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle " style="z-index: 500;">
                            <h4 class="rounded-circle color4 p-4 text-light "><i class="fa fa-solid fa-play  fa-xl "></i> </h4>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!----------------------------------------------------- card section --------------------------------------------->
    <section class="my-5">
        <div class="container">
            <div class="row text-center my-5 ">
                <h1 class="fw-bold">Popular Courses</h1>
                <p class="text-black-50">Discover Your Perfect Program In Our Courses.</p>
            </div>
            <div class="row  ">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12   ">
                    <div class="card border-0  dash mb-5">
                        <div>
                            <img src="{{url('/image/img_02.jpg')}}" class="card-img-top  " alt="...">
                        </div>

                        <div class="  price  w-25 ">
                            <h5 class="bg-info ps-2 py-2 ">$300</h5>
                        </div>
                        <div class="card-body ">
                            <p class="card-title ">
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <small class="text-black-50">3.9 (30 reviews)</small>
                            </p>
                            <p class="card-text  fw-bold lh-lg">SQL-Data Analysis: Crash Course
                            </p>
                            <div class="d-flex justify-content-between ">
                                <span class="text-black-50"><i class="fa fa-solid fa-clock pe-2"></i>6.5 hr</span>

                                <span class="text-black-50"> <i class="fa fa-solid fa-play-circle pe-2"></i>26 Lessons</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-sm-5">
                    <div class="card border-0  dash mb-5">
                        <div class="">
                            <img src="{{url('/image/img_06.jpg')}}" class="card-img-top  " alt="...">
                        </div>

                        <div class="  price  w-25 ">
                            <h5 class="bg-info ps-2 py-2 ">$300</h5>
                        </div>
                        <div class="card-body ">
                            <p class="card-title ">
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <small class="text-black-50">3.9 (30 reviews)</small>
                            </p>
                            <p class="card-text  fw-bold lh-lg">SQL-Data Analysis: Crash Course
                            </p>
                            <div class="d-flex justify-content-between ">
                                <span class="text-black-50"><i class="fa fa-solid fa-clock pe-2"></i>6.5 hr</span>

                                <span class="text-black-50"><i class="fa fa-solid fa-play-circle pe-2"></i>26 Lessons</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12  mb-sm-5">
                    <div class="card border-0  dash mb-5">
                        <div>
                            <img src="{{url('/image/img_05.jpg')}}" class="card-img-top  " alt="...">
                        </div>

                        <div class="  price  w-25 ">
                            <h5 class="bg-info ps-2 py-2 ">$300</h5>
                        </div>
                        <div class="card-body ">
                            <p class="card-title ">
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <small class="text-black-50">3.9 (30 reviews)</small>
                            </p>
                            <p class="card-text  fw-bold lh-lg">Emotional Intelligence at Work: Learn Emotions
                            </p>
                            <div class="d-flex justify-content-between ">
                                <span class="text-black-50"><i class="fa fa-solid fa-clock pe-2"></i>6.5 hr</span>

                                <span class="text-black-50"><i class="fa fa-solid fa-play-circle pe-2"></i>26 Lessons</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-sm-5">
                    <div class="card border-0  dash mb-5 ">
                        <div>
                            <img src="{{url('/image/img_03.jpg')}}" class="card-img-top  " alt="...">
                        </div>

                        <div class="  price  w-25 ">
                            <h5 class="bg-info ps-2 py-2 ">$300</h5>
                        </div>
                        <div class="card-body ">
                            <p class="card-title ">
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <i class="fa fa-solid fa-star text-warning"> </i>
                                <small class="text-black-50">3.9 (30 reviews)</small>
                            </p>
                            <p class="card-text  fw-bold lh-lg">Competitive Strategy law & Organization
                            </p>
                            <div class="d-flex justify-content-between ">
                                <span class="text-black-50"><i class="fa fa-solid fa-clock pe-2"></i>6.5 hr</span>

                                <span class="text-black-50"><i class="fa fa-solid fa-play-circle pe-2"></i>26 Lessons</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section cards------------------------------------------------------------------------------------------- -->
    <section>
        <div class="container text-center">
            <h1 class="fw-bold">Transform Your Life</h1>
            <p class="text-black-50">Discover Your Perfect Program In Our Courses.</p>
        </div>
        <div class="container">
            <div class="row ">
               @foreach($transforms as $transform)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 text-center dash py-5 ">
                        <img src="/storage/{{$transform->image}}" class="w-25 py-2" alt="">
                        <h4>{{$transform->title}}</h4>
                        <p class="text-black-50 px-3">{{$transform->subtitle}}</p>
                    </div>
               @endforeach
            </div>
            <section class="my-5">
                <div class="container my-5">
                    <div class="row ">
                        <div class="col-lg-6 col-md-12 col-sm-12 text-start ">
                            <h2 class="fw-bold">Top Rated Instructors</h2>
                            <p class="text-black-50  ">Discover Your Perfect Program In Our Courses.</p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-end  ">
                            <a href="#" class="btn btn-secondary border-0 hoverColor py-3 px-4">All Instructors <i
                                    class="fa fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="row  ">
                      @foreach($ratings as $rating)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 my-sm-4">
                                <div class=" color7 rounded-1  mb-5">
                                    <img src="/storage/{{$rating->image}}" alt="" class="img-fluid imaeg">
                                    <div class="team ">
                                        <div class="height team2">
                                            <a href=""><i class="fa fa-brands fa-facebook fa-2x"></i></a>
                                            <a href=""><i class="fa fa-brands fa-twitter fa-2x"></i></a>
                                            <a href=""><i class="fa fa-brands fa-linkedin fa-2x"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center  ">
                                        <h4 class="fw-bold">
                                            {{$rating->name}}
                                        </h4>
                                        <p class="text-black-50">{{$rating->filed}}</p>
                                        <div class=" color7 border-bottom-0 border-start-0 border-end-0 py-3 text-black-50">
                                            <i class="fa fa-solid fa-user-alt pe-1"></i><small>{{$rating->students}} Students</small>
                                            <i class="fa fa-solid fa-play-circle pe-1 ps-1"></i><small>{{$rating->course}} Courses</small>
                                        </div>

                                    </div>
                                </div>
                            </div>
                      @endforeach

                    </div>
                </div>
            </section>

        </div>
    </section>
    <!-- -------------------------------last section------------------------- -->
    <section class="sectionHeight">
        <div class="container text-center my-5">
            <h2 class="fw-bold">Our Students Says</h2>
            <p class="text-black-50">Discover Your Perfect Program In Our Courses.</p>
        </div>

        <div class="container swiper">
            <div class="slide-content">
                <div class="swiper-wrapper">
                    @foreach($students as $student)
                        <div class="card swiper-slide " style="width: 18rem;">
                            <img src="{{url('/image/left-quote.png')}}" class="card-img-top ps-3 w-25" alt="...">
                            <div class="card-body">
                                <p class="card-text lh-lg">{{$student->countent}}</p>
                                <div class=" d-flex align-items-center">
                                    <img src="/storage/{{$student->image}}" class="rounded-circle  width2" alt="">
                                    <div class="ps-4">
                                        <h6>{{$student->name}}</h6>
                                        <p>{{$student->job}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        </div>

        </div>

    </section>
    <div class="container">
        <div class="w-100  controller2  rounded-3 text-light">

            <div class="row  py-5 px-2 mx-0 ">
                <div class="col-lg-6 col-md-12  col-sm-12 text-center">
                    <img src="{{url('/image/img_9.png')}}" alt="" style="max-width: 260px; " class="mt-3">
                </div>
                <div class="col-lg-6 col-md-12  col-sm-12 text-start ">
                    <p class="mt-3">NOT SURE WHERE TO START?</p>
                    <h2 class="fw-bolder lh-lg">Want to know Special Offers & Updates of new courses?</h2>
                    <a href="#" class="btn bg-info px-4 text-light">Join Now</a>
                </div>

            </div>
        </div>
    </div>
@endsection
