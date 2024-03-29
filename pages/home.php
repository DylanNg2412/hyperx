<?php

$database = connectToDB();

?>
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
        <div class="row align-items-center">
          <div class="col-md-3 ">
            <h2>New Models</h2>
            <span>Check Out Our New Model Release!</span>
          </div>
          <!--Card 1-->
          <div class="col-md-4 col-size fw-bold rounded p-0 m-2">
              <img
                src="https://row.hyperx.com/cdn/shop/products/hyperx_alloy_origins_60_us_1_top_down_renamed_6_900x.jpg?v=1666377243"
                width="280px"
                height="280px"
              />
            <p class="fw-bold border border-0 bg-white text-center">
            Alloy Origins 60 Percent Mechanical Gaming Keyboard
            </p>
          </div>
          <!--End Card 1-->

          <!--Card 2-->
          <div class="col-md-4 col-size rounded p-0 m-2">
            <img
              src="https://row.hyperx.com/cdn/shop/products/hyperx_alloy_origins_us_1_top_down_900x.jpg?v=1663982727"
              width="280px"
              height="280px"
            />
            <div>
              <p class="fw-bold border border-0 bg-white text-center">
              Alloy Origins Mechanical Gaming Keyboard
              </p>  
            </div>
          </div>
          <!--End Card 2-->

          <!--Card 3-->
          <div class="col-md-4 col-size rounded p-0 m-2">
            <img
              src="https://row.hyperx.com/cdn/shop/products/hyperx_alloy_origins_core_no_1_top_down_900x.jpg?v=1663701487"
              width="280px"
              height="280px"
            />
            <p class="fw-bold border border-0 bg-white text-center">
                HyperX Alloy Origins Core - Mechanical Gaming Keyboard
            </p>
          </div>
          <!--End Card 3-->
        </div>
      </div>
    </section>
    <!--End New Products-->
    <?php require "parts/footer.php"; ?>