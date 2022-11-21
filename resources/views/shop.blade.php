@include('ast.ast')
@include('ast.navbar')
<br>
<br>
<div style="background-color: #eff0f0">
<div class="ms-3">
    <br>
    <h4>Cari Gorengan</h4>
    <hr>
    <div class="container row">
        <div class="col-lg-3">
        <label for="filterby">Filter</label>
          <select name="filter" id="filter">
            <option value="">Gorengan</option>
            <option value="">Bakwan</option>
            <option value="">Tempe Goreng</option>
            <option value="">Tahu Isi</option>
            <option value="">Pisang Goreng</option>
          </select>
        </div>
        <div class="col-lg-3">
        <label for="sortby">Sort By</label>
            <select name="sort" id="sort">
              <option value="">Best Seller</option>
              <option value="">Harga Terendah</option>
              <option value="">Harga Tertinggi</option>
              <option value="">Terdekat</option>
            </select>
          </div>
        
      </div>

</div>
<br>
<br>
<div class="row ms-4">
    <div class="card ms-4 mt-4" style="width: 18rem;">
        <img src="tahu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card ms-4 mt-4" style="width: 18rem;">
        <img src="tahu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card ms-4 mt-4" style="width: 18rem;">
        <img src="tahu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card ms-4 mt-4" style="width: 18rem;">
        <img src="tahu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card ms-4 mt-4" style="width: 18rem;">
        <img src="tahu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card ms-4 mt-4" style="width: 18rem;">
        <img src="tahu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card ms-4 mt-4" style="width: 18rem;">
        <img src="tahu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card ms-4 mt-4" style="width: 18rem;">
        <img src="tahu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <hr class="mt-5">
</div>

</div>
<br>
<br>
@include('ast.footer')