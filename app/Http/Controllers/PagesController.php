<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index() {

        return view('categories');
    }
    public function single($id)
    { $singles=Course::where('id',$id)->first();
      return view('single',['singles'=>$singles]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        $courses=Course::where('categories_id',$id)->paginate(6);
        return view('categories',['courses'=>$courses]);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function search (Request $request){
        $outPut='';

            $courses=Course::where('title','like','%'.$request->search.'%')->orWhere('price','like','%'.$request->search.'%')->get();
            foreach ($courses as $course) {
                $outPut.=
                    '<div class="col-lg-4 col-md-6 col-sm-12 card_width position-relative animation2 mb-5">
                        <div class="card border-0 shadow  ">
                            <div>
                                <img src="/storage/'.$course->image.'" class="card-img-top  " alt="...">
                            </div>

                            <div class=" start-0 price  w-25 ">
                                <p class="bg-info px-3 py-2 text-center">'.$course->price.'$</p>
                            </div>
                            <div class="card-body ">
                                <p class="card-title ">
                                    <i class="fa fa-solid fa-star text-info"> </i>
                                    <i class="fa fa-solid fa-star text-info"> </i>
                                    <i class="fa fa-solid fa-star text-info"> </i>
                                    <i class="fa fa-solid fa-star text-info"> </i>
                                    <i class="fa fa-solid fa-star text-info"> </i>
                                    <small>3.9 ('.$course->reviews.' reviews)</small>
                                </p>
                                <p class="card-text  fw-bold lh-lg ">'.$course->title.'
                                </p>
                                <div class="d-flex justify-content-between ">
                                    <span><i class="fa fa-solid fa-clock pe-1"></i>'.$course->time.' hr</span>
                                    <span><i class="fa fa-solid fa-user-alt pe-1"></i>'.$course->students.' Students</span>
                                    <span><i class="fa fa-solid fa-play-circle pe-1"></i>'.$course->lessons.' Lessons</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-hover animation1  col-lg-4 col-md-6">
                            <div class="container pt-2 ">
                                <h2 class="pt-2 pb-3">'.$course->price.'$</h2>
                                <h3 class="pb-2">
                                    '.$course->title.'
                                </h3>
                                <img src="/storage/'.$course->image_te.'" alt="">
                                <span>'.$course->name_te.'</span>
                                <i class="fa fa-solid fa-file-alt ps-4 pe-2 text-black-50"></i><small>'.$course->lessons.' lessons</small>
                                <p class="lh-lg bt-4 text-black-50">'.$course->content.'</p>
                               <a href="/single/course'.$course->id.'" class="btn btn-info color2 text-light ">Join Now ></a>
                            </div>
                        </div>

                    </div>';
            }
            return response($outPut);


    }
}
