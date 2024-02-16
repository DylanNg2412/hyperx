<?php

$database = connectToDB();

?>
<style>
  .bg-overlay {
  background-image: url(https://mms.businesswire.com/media/20220228005162/en/1372529/5/pr-alloy-origins-65-1000x610.jpg);
  background-size: cover;
  height: 650px;
}

.hero-text-right {
  max-width: 425px;
  padding-top: 200px;
  float: right;
}

.hero-text {
  background-color: white;
  color: black;
  padding: 50px;
  padding-left: 70px;
}

.hero-text-weight {
  font-weight: bolder;
}

.hero-button:hover {
  color: red;
}

.item-size {
  padding-top: 75px;
  padding-bottom: 75px;
}

.item-bg {
  background-color: black;
}

.col-size {
  width: 280px;
  height: 280px;
}

</style>
<?php require "parts/header.php"; ?>
<?php require "parts/navbar.php"; ?>

    <!--Hero Section-->
    <section id="hero">
      <div class="container-fluid bg-overlay">
        <div class="hero-text-right">
          <div class="row">
            <div class="col-md-12 hero-text align-item-center">
              <h1 class="hero-text-weight">HYPERX ALLOY ORIGINS 65</h1>
              <h5 class="pb-4">Functionally compact 65% form factor</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Hero Section-->

    <!--New Products-->
    <section class="item-size">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h2>New Models</h2>
            <span>Check Out Our New Model Release!</span>
            <div class="pt-3">
              <a href="learnmore" class="hero-button fw-bold border border-0 bg-white">
                LEARN MORE
              </a>
            </div>
          </div>
          <!--Card 1-->
          <div class="col-md-4 col-size fw-bold rounded p-0">
              <img
                src="https://row.hyperx.com/cdn/shop/products/hyperx_alloy_origins_60_us_1_top_down_renamed_6_900x.jpg?v=1666377243"
                width="280px"
                height="280px"
              />
            <button class="hero-button fw-bold border border-0 bg-white">
            Alloy Origins 60 Percent Mechanical Gaming Keyboard
            </button>
          </div>
          <!--End Card 1-->

          <!--Card 2-->
          <div class="col-md-4 col-size rounded p-0">
            <img
              src="https://row.hyperx.com/cdn/shop/products/hyperx_alloy_origins_us_1_top_down_900x.jpg?v=1663982727"
              width="280px"
              height="280px"
            />
            <div>
              <button class="hero-button fw-bold border border-0 bg-white">
              Alloy Origins Mechanical Gaming Keyboard
              </button>  
            </div>
          </div>
          <!--End Card 2-->

          <!--Card 3-->
          <div class="col-md-4 col-size rounded p-0">
            <img
              src="https://row.hyperx.com/cdn/shop/products/hyperx_alloy_origins_core_no_1_top_down_900x.jpg?v=1663701487"
              width="280px"
              height="280px"
            />
            <button class="hero-button fw-bold border border-0 bg-white">
                HyperX Alloy Origins Core - Mechanical Gaming Keyboard
            </button>
          </div>
          <!--End Card 3-->
        </div>
      </div>
    </section>
    <!--End New Products-->
    <?php require "parts/footer.php"; ?>