@extends('template/main')

@section('judul',"HomePage")
@section('konten')

<body>
        

    <div class="container mb-3">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-caption d-none d-md-block" >
                                <p style="font-size: 20mm;">Selamat Datang</p>
                            </div>
                        <div class="carousel-item active">
                            <img src={{ asset('image/bg.JPG')}} style="width: 100%; height: 400px;" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src={{ asset('image/bg1.JPG')}} style="width: 100%; height: 400px;" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src={{ asset('image/bg2.JPG')}} style="width: 100%; height: 400px;" class="d-block" alt="...">
                        </div>
                        
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </a>
                    </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card rounded-circle mb-3" ">
                        <div class="card-body">
                            <a href="#content">
                                <img src="{{ asset('image/arrow.png')}}" style="width: 80px; height: 80px" class="rounded-circle" alt="" >
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div id="content" class="container d-flex justify-content-start mb-5" data-aos="fade-up" data-aos-duration="15000">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="width: 500px;">
                    <div class="card-body">
                        <img src="{{ asset('image/Digital Alliance T Zero 355 Ti.jpg')}}" style="width: 200px; height: 200px" class="rounded-circle" alt="" >
                        <h5 class="card-title">Digital Alliance T Zero 355 Ti</h5>
                            <table style="width:100%" border="0px">
                                <tr>
                                <th colspan="2";align="center">Spesifikasi</th>
                                </tr>
                                <tr>
                                    <td>Mainboard</td>
                                    <td> : MSI H310</td>
                                </tr>
                                <tr>
                                    <td>Processor</td>
                                    <td> : Intel Core i3-8100 @3.60 GHz</td>
                                </tr>
                                <tr>
                                    <td>VGA</td>
                                    <td> : NVIDIA GeForce GTX 1050Ti 4GB GDDR5</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td> : Team Elite 2 x 4GB PC2400 DDR4</td>
                                </tr>
                            </table><br>
                        <a class="btn btn-primary" href="#" role="button">Lihat Detail</a> 	&nbsp;<a class="btn btn-primary" href="#" role="button">Beli Di Shopee</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="container d-flex justify-content-end mb-5" data-aos="fade-up" data-aos-duration="15000">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="width: 500px;">
                    <div class="card-body">
                        <img src="{{ asset('image/ASUS_ROG_Strix_GL12CX_L_1.jpg')}}" style="width: 200px; height: 200px" class="rounded-circle" alt="" >
                        <h5 class="card-title">ASUS ROG GL10CS-ID501T</h5>
                            <table style="width:100%" border="0px">
                                <tr>
                                <th colspan="2";align="center">Spesifikasi</th>
                                </tr>
                                <tr>
                                    <td>Mainboard</td>
                                    <td> : Intel H310</td>
                                </tr>
                                <tr>
                                    <td>Processor</td>
                                    <td> : Intel Core i5-8400 @2.80 GHz (up to 4.00 GHz)</td>
                                </tr>
                                <tr>
                                    <td>VGA</td>
                                    <td> : NVIDIA GeForce GTX 1050 2GB GDDR5</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td> : 8GB DDR4 2666Mhz</td>
                                </tr>
                            </table><br>
                        <a class="btn btn-primary" href="#" role="button">Lihat Detail</a> 	&nbsp;<a class="btn btn-primary" href="#" role="button">Beli Di Shopee</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="container d-flex justify-content-start mb-5" data-aos="fade-up" data-aos-duration="15000">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="width: 500px;">
                    <div class="card-body">
                        <img src="{{ asset('image/msi-nightblade-mi3-9s6-b91911-059-.jpg')}}" style="width: 200px; height: 200px" class="rounded-circle" alt="" >
                        <h5 class="card-title">MSI Nightblade MI3-059ID</h5>
                            <table style="width:100%" border="0px">
                                <tr>
                                <th colspan="2";align="center">Spesifikasi</th>
                                </tr>
                                <tr>
                                    <td>Mainboard</td>
                                    <td> : MSI B250</td>
                                </tr>
                                <tr>
                                    <td>Processor</td>
                                    <td> : Intel Core i5-8400 2.80 GHz (up to 4.0 GHz)</td>
                                </tr>
                                <tr>
                                    <td>VGA</td>
                                    <td> : NVIDIA GeForce GTX 1050Ti 4GB GDDR5</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td> : 8GB DDR4</td>
                                </tr>
                            </table><br>
                        <a class="btn btn-primary" href="#" role="button">Lihat Detail</a> 	&nbsp;<a class="btn btn-primary" href="#" role="button">Beli Di Shopee</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    @endsection
</body>
</html>