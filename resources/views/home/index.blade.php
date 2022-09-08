@include('layout.header')

<div class="main" style="background: linear-gradient(#e8fff8, #fff);">
    <div class="content ms-xl-5">
        <h1 class="mb-2 text-center text-xl-start text-md-start" style="font-weight: bold;">
            <span style="color: #3AB883">Bangun</span> <span style="color: #05633B">Bisnis Anda</span> Dengan <span style="color: #05633B">Bi</span><span style="color: #0BA665">Trends!</span>
        </h1>

        <p class="text-center text-xl-start text-md-start px-3 px-xl-0">
                Ayo Mulai Bisnis Anda dan Meluncur 
                Tanpa Ragu Dengan <strong>Bitrends</strong>.
        </p>

        <div class="text-center text-md-start text-xl-start">
            <a class="btn btn-success" style="border-radius: 5px;">
                Bangun Bisnis
            </a>
            <a class="btn text-success">
                <strong>Lihat Trends ></strong>
            </a>
        </div>

    </div>
    <div class="imgBx me-xl-5">
        <img src="{{ asset('image/nepil.png') }}" style="width: 100%">
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row bg-success p-3" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px; position: relative;bottom: 5em; border-radius:20px">
            <div class="col-12">
                <h4 class="mb-3 text-center text-light"><strong>Halo Pebisnis! Mungkin anda sedang mencari..</strong></h4>
                
                <button class="btn" style="background: #ffa15c;">Trend Bisnis Makanan ></button>
                <button class="btn" style="background: #7bbffe;">Trend Bisnis Fashion ></button>
                <button class="btn" style="background: #f1f1f1;">Trend Bisnis Lainnya ></button>
            </div>
        </div>

        <div class="row justify-content-between" style="margin-bottom: 10em;">
            <div class="col-xl-5">
                <h3>
                    <strong><span style="color: #05633B">Kenapa Harus</span> <span style="color: #0BA665">BiTrends?</span></strong>
                </h3>

                <p>
                    Ayo Mulai Bisnis Anda dan Meluncur 
                    Tanpa Ragu Dengan BiTrends.
                </p>

                <div class="col-12">
                    <div class="card" style="border: 0;box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;">
                        <div class="card-body d-flex" style="border:0;">
                            <div class="col-3 rounded" style="height: 10vh;background:#92E3A9">
                                
                            </div>
                            <div class="col-9 d-flex align-items-center ms-2">
                                <strong>Data Terpercaya</strong>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3" style="border: 0;">
                        <div class="card-body d-flex" style="border:0;">
                            <div class="col-3 rounded" style="height: 10vh;background:#92E3A9">
                                
                            </div>
                            <div class="col-9 d-flex align-items-center ms-2">
                                <strong>Referensi Serba Go Digital</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 d-flex justify-content-center align-items-center rounded" style="background: #6CDA8B;">
                VIDEO
            </div>
        </div>
    </div>
</div>


@include('layout.footer')