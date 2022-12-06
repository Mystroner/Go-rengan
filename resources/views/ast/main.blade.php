@include('ast.ast')
@include('ast.navbar')

@include('ast.carousel')
<div style="background-color: #F7F4D4">
    <div class="section-header text-center">
        <br>
        <h2>- Mitra Kami -</h2>
        <hr>
        <br>
        <div class="row">
            <div class="col-lg-3">
                <img src="ote.jpg" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h2 class="fw-normal">Toko Gorengan A</h2>
                <p>Jln. Untung Suropati</p>
                <p><a class="btn btn-secondary" href="/toko">Lihat Toko »</a></p>
            </div>
            <div class="col-lg-3">
                <img src="pisang.jpg" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h2 class="fw-normal">Toko Gorengan B</h2>
                <p>Jln. Untung Suropati</p>
                <p><a class="btn btn-secondary" href="/toko">Lihat Toko »</a></p>
            </div>
            <div class="col-lg-3">
                <img src="tahu.jpg" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h2 class="fw-normal">Toko Gorengan C</h2>
                <p>Jln. Untung Suropati</p>
                <p><a class="btn btn-secondary" href="/toko">Lihat Toko »</a></p>
            </div>
            <div class="col-lg-3">
                <img src="tempe.jpg" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h2 class="fw-normal">Toko Gorengan D</h2>
                <p>Jln. Untung Suropati</p>
                <p><a class="btn btn-secondary" href="/toko">Lihat toko »</a></p>
                <br>
                <br>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="/shop" class="btn btn-outline-success mt-10">
            Lihat Semua
        </a>

    </div>
    <br>
</div>
</div>
<br>
<div class="container">
    <h3 class="text-center">How Good Go-rengan</h3>

    <hr>
    <br>
    <div class="row">
        <div
            class="col-12 col-md-4 d-flex flex-row flex-md-column align-items-center justify-content-between text-center">
            <img class="img-responsive reduced-width w-50"
                src="https://www.goodsixty.co.uk/assets/customer/home/stage-1-2696a083a7823b31715888678b5226e3a9d805d23655a84169f589c3dba0703f.svg">
            <div class="d-flex flex-column px-3">
                <h3>Discover</h3>
                <p>Go-rengan dapat dipesan melalui website secara real-time</p>
            </div>
        </div>
        <div
            class="col-12 col-md-4 d-flex flex-md-column flex-row-reverse align-items-center justify-content-between text-center">
            <img class="img-responsive reduced-width w-50"
                src="https://www.goodsixty.co.uk/assets/customer/home/stage-2-3d9c9f59ad8016a65557d75dd36813b2395d9bd5ae5bdebcc9bce4aeb833a69c.svg">
            <div class="d-flex flex-column px-3">
                <h3>Quality Produce</h3>
                <p>Kualitas dari gorengan yang kami pilihkan merupakan kualitas yang terbaik</p>
            </div>
        </div>
        <div
            class="col-12 col-md-4 d-flex flex-row flex-md-column align-items-center justify-content-between text-center">
            <img class="img-responsive reduced-width w-50"
                src="https://www.goodsixty.co.uk/assets/customer/home/stage-3-b04367b1e3a70e47a51ba6d34fe803dcae778397e9477c5e9d1a8648a90eff57.svg">
            <div class="d-flex flex-column px-3">
                <h3>Delivered to you</h3>
                <p>Anda tidak perlu datang ke tempat gorengan tersebut. Biar kami yang mengantarnya ke anda</p>
            </div>
        </div>
    </div>
</div>
<br>
<br>

<style>
  .bd-placeholder-img {
    margin-bottom: 16px;
    box-shadow: 1px 1px 5px 5px rgb(0 0 0 / 10%);
  }
</style>

@include('ast.footer')