@extends('template.temp')

@section('content')
<!-- Column -->
<div class="col-lg-8 col-md-7">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h3 class="card-title">Sales Overview</h3>
                            <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                        </div>
                        <div class="ml-auto">
                            <ul class="list-inline">
                                <li>
                                    <h6 class="text-muted text-success"><i
                                            class="fa fa-circle font-10 m-r-10 "></i>Ample</h6>
                                </li>
                                <li>
                                    <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Pixel
                                    </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="amp-pxl" style="height: 360px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-5">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Our Visitors </h3>
            <h6 class="card-subtitle">Different Devices Used to Visit</h6>
            <div id="visitor" style="height:290px; width:100%;"></div>
        </div>
        <div>
            <hr class="m-t-0 m-b-0">
        </div>
        <div class="card-body text-center ">
            <ul class="list-inline m-b-0">
                <li>
                    <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Mobile</h6>
                </li>
                <li>
                    <h6 class="text-muted  text-primary"><i class="fa fa-circle font-10 m-r-10"></i>Desktop</h6>
                </li>
                <li>
                    <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Tablet</h6>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-md-4">
        <div class="card card-inverse card-primary">
            <div class="card-body">
                <div class="d-flex">
                    <div class="m-r-20 align-self-center">
                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                    </div>
                    <div>
                        <h3 class="card-title">Bandwidth usage</h3>
                        <h6 class="card-subtitle">March 2017</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 align-self-center">
                        <h2 class="font-light text-white">50 GB</h2>
                    </div>
                    <div class="col-8 p-t-10 p-b-20 align-self-center">
                        <div class="usage chartist-chart" style="height:65px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-md-4">
        <div class="card card-inverse card-success">
            <div class="card-body">
                <div class="d-flex">
                    <div class="m-r-20 align-self-center">
                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                    </div>
                    <div>
                        <h3 class="card-title">Download count</h3>
                        <h6 class="card-subtitle">March 2017</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 align-self-center">
                        <h2 class="font-light text-white">35487</h2>
                    </div>
                    <div class="col-8 p-t-10 p-b-20 text-right">
                        <div class="spark-count" style="height:65px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-md-4">
        <div class="card">
            <img class="" src="../assets/images/background/weatherbg.jpg" alt="Card image cap">
            <div class="card-img-overlay" style="height:110px;">
                <h3 class="card-title text-white m-b-0 dl">New Delhi</h3>
                <small class="card-text text-white font-light">Sunday 15 march</small>
            </div>
            <div class="card-body weather-small">
                <div class="row">
                    <div class="col-8 b-r align-self-center">
                        <div class="d-flex">
                            <div class="display-6 text-info"><i class="wi wi-day-rain-wind"></i></div>
                            <div class="m-l-20">
                                <h1 class="font-light text-info m-b-0">32<sup>0</sup></h1>
                                <small>Sunny Rainy day</small>
                            </div>
                        </div>

                    </div>
                    <div class="col-4 text-center">
                        <h1 class="font-light m-b-0">25<sup>0</sup></h1>
                        <small>Tonight</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

@endsection
