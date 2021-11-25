@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <!-- Carousel wrapper -->

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!--Image Carosel-->
            <div class="d-flex justify-content-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">
                        </li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://placeimg.com/1080/500/animals" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>My Caption Title (1st Image)</h5>
                                <p>The whole caption will only show up if the screen is at least medium size.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://placeimg.com/1080/500/arch" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://placeimg.com/1080/500/nature" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-12">

            <h4 class="mb-5"><strong>Latest posts</strong></h4>

            <!-- Post -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-8 mb-4">
                    <h5>Very long post title</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
                        necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
                        ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
                    </p>

                    <button type="button" class="btn btn-primary">Read</button>
                </div>
            </div>

            <!-- Post -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-8 mb-4">
                    <h5>Very long post title</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
                        necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
                        ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
                    </p>

                    <button type="button" class="btn btn-primary">Read</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-8 mb-4">
                    <h5>Very long post title</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
                        necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
                        ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
                    </p>

                    <button type="button" class="btn btn-primary">Read</button>
                </div>
            </div>

            <!-- Post -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-8 mb-4">
                    <h5>Very long post title</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
                        necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
                        ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
                    </p>

                    <button type="button" class="btn btn-primary">Read</button>
                </div>
            </div>

        </div>

    </div>
    <!-- Pagination -->
    <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
</div>
@endsection
