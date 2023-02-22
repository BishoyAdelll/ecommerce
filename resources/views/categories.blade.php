@extends('layout.app')
@section('content')
    <!--------------------------------------------------- first section in page  ---------------------------------------------->
    <section>
        <div class="addPhoto text-center pt-5 ">
            <h1 class="pt-2">Course Layout 1</h1>
            <span class="text-info">Home</span> / Courses
        </div>
    </section>
    <!-------------------------------------------------- second section with search par ---------------------------------------->
    <section class="my-5 pt-5">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-8 text-black-50 col-md-12">
                    <p>Showing 1-6 of 8 results</p>
                </div>

                <div class="col-lg-4 col-md-12 text-end searchInput">
                    <input class="form-control me-2  rounded-pill " type="search"
                           placeholder="Search our Course" aria-label="Search">
                    <i class="fa fa-solid fa-search searchIcon"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------cruds section ------------------------------------------------------ -->
{{--    @dd($courses)--}}
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
                                <a href="{{route('single',$course->id)}}" class="btn btn-info color2 text-light ">Join Now ></a>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>


        </div>
    </section>

@endsection
