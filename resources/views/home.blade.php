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
                {{-- loop $banners using foreach --}}
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($banners as $banner)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                                class="{{ $loop->first ? 'active' : '' }}"></li>


                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($banners as $banner)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                                <img class="d-block w-100" src="{{ $banner->url }}" alt="First slide" width="100" height="400" >
                            </div>

                        @endforeach


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        {{-- <div class="container">

        <div class="row justify-content-center">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>รูปภาพ</th>
                        <th>หัวข้อ</th>
                        <th>คำอธิบาย</th>
                        <th>รายละเอียด</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><img src="{{ $post->thumbnail }}" alt="" width="780" height="520"></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->detail }}</td>
                        </tr>
                    @endforeach
                </tbody>
        </div>
    </div> --}}

        </table>


        <div class="container">

            <div class="row justify-content-center">


                <div class="col-md-12">

                    <h4 class="mb-5"><strong>Latest posts</strong></h4>

                    <!-- Post -->
                    @foreach ($posts as $post)
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="bg-image hover-overlay shadow-1-strong rounded ripple"
                                    data-mdb-ripple-color="light">
                                    <img src="{{ $post->thumbnail }}" class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-8 mb-4">
                                <h5>{{ $post->title }}</h5>
                                <p>
                                    {{ $post->description }}
                                </p>

                                <button type="button" class="btn btn-primary">Read</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
            </div>
        </div>
    @endsection
