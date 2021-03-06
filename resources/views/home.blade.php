@extends('layouts.app')

@section('content')
    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold">Welcome to the site:</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">laravel.dmitriy.backend-education.hulk.nixdev.co/</p>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            //( get_the_ID() == $lastID )?'carousel-item active':'carousel-item
            <div class="" style="height:auto; background: url('https://image.tmdb.org/t/p/w500/'); background-size: cover; background-position: center ">
                <div style="background: rgba(0,0,0,0.78)">
                    <div class="container" >
                        <img src="https://image.tmdb.org/t/p/w500/" class="bd-placeholder-img" width="auto" height="500px">
                        <div class="carousel-caption text-end">
                            <h1>t</h1>
                            <p><a class="btn btn-lg btn-primary" href="">Read</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="b-example-divider"></div>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://image.tmdb.org/t/p/w500/" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">T</h1>
                <p class="lead">C</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Read</a>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Official site</button>
                </div>
            </div>
        </div>
    </div>


    <div class="b-example-divider mb-0"></div>

@endsection
