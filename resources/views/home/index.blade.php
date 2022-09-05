@include('layout.header')

<div class="main" style="background: #f3fef9;">
    <div class="content ms-xl-5">
        <h1 class="mb-2 text-center text-xl-start text-md-start">
            Bangun Bisnis Anda Dengan <span style="color: #05633B">Bi</span><span style="color: #0BA665">Trends</span>
        </h1>

        <p class="text-center text-xl-start text-md-start px-3 px-xl-0" style="font-size: 19px;">
            <span style="font-weight: 500;">Mulai bisnis tanpa takut ketinggalan zaman dengan <strong><span style="color: #05633B">Bi</span><span style="color: #0BA665">Trends</span></strong></span>.
        </p>

        <div class="text-center text-md-start text-xl-start">
            <a class="btn btn-success" style="border-radius: 65px;">
                Lihat Trend Bisnis
            </a>
            <a class="btn text-success">
                Bangun Bisnis
            </a>
        </div>

    </div>
    <div class="imgBx me-xl-5">
        <img src="{{ asset('image/nepil.png') }}">
    </div>
</div>


@include('layout.footer')