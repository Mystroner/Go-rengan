<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top: 33px">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="gorengan-item">
                <div class="image">
                    <div class="bg"></div>
                    <img src="tahu.jpg" alt="" width="100%" class="img-carousel">
                </div>
                <div class="content">
                    <h1>Go-rengan - Tahu</h1>
                    <p>Kami menyediakan tahu yang berkualitas baik dan murah</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="gorengan-item">
                <div class="image">
                    <div class="bg"></div>
                    <img src="ote.jpg" alt="" width="100%" class="img-carousel">
                </div>
                <div class="content">
                    <h1>Go-rengan - Ote-Ote</h1>
                    <p>Ote-Ote yang memiliki rasa manis dan gurih</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="gorengan-item">
                <div class="image">
                    <div class="bg"></div>
                    <img src="tempe.jpg" alt="" width="100%" class="img-carousel">
                </div>
                <div class="content">
                    <h1>Go-rengan - Tempe</h1>
                    <p>Tempe yang memiliki rasa yang nikmat dan terpercaya manfaatnya</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<style>
    .img-carousel {
        height: 540px;
        object-fit: cover
    }
    .gorengan-item {
        position: relative;
        width: 100%;
        height: 540px;
    }
    .gorengan-item .image {
        position: absolute;
        width: 100%;
    }
    .gorengan-item .image .bg {
        position: absolute;
        width: 100%;
        height: 540px;
        background-color: rgba(0, 0, 0, 0.65);
    }
    .gorengan-item .content {
        position: absolute;
        color: white;
        padding: 48px;
    }
</style>