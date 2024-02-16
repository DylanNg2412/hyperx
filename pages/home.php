<?php

$database = connectToDB();

?>
<style>
  .bg-overlay {
  background-image: url(https://log-wp-media.s3.amazonaws.com/wp-content/uploads/2023/03/Pulsefire-haste-2-feautred-image.jpg);

  background-size: cover;
  background-position: center;
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
              <h1 class="hero-text-weight">HYPERX PULSEFIRE HASTE 2 MINI</h1>
              <h5 class="pb-4">Wireless gaming at the speed of ultra-light</h5>
              <a
                style = "text-decoration: none;"
                class="border border-0 p-0 bg-white fw-bold hero-button "
                href="/pages/products/mouse.html"
              >
                SHOP NOW
              </a>
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
            <h2>New Products</h2>
            <span>Check Out New Gaming Tech!</span>
            <div class="pt-3">
              <button class="hero-button fw-bold border border-0 bg-white">
                LEARN MORE
              </button>
            </div>
          </div>
          <!--Card 1-->
          <div class="col-md-4 col-size fw-bold rounded p-0">
            <a href="/pages/products/mouse.html" target="_blank"
              ><img
                src="https://cdn.shopify.com/s/files/1/0590/9600/6792/files/hyperx_pulsefire_haste_2_mini_wireless_white_7d389aa_main_1_450x.jpg?v=1704317398"
                width="280px"
                height="280px"
            /></a>
            <button class="hero-button fw-bold border border-0 bg-white">
              HyperX Pulsefire Haste 2 Mini - Wireless Gaming Mouse
            </button>
          </div>
          <!--End Card 1-->

          <!--Card 2-->
          <div class="col-md-4 col-size rounded p-0">
            <a href="/pages/products/headset.html" target="_blank"><img
              src="https://cdn.shopify.com/s/files/1/0561/8345/5901/files/hyperx_cloud_ii_wireless_1_main_large.jpg?v=1706551489"
              width="280px"
              height="280px"
            /></a>
            <div>
              <button class="hero-button fw-bold border border-0 bg-white">
                HyperX Cloud III Wireless - Gaming Headset
              </button>  
              </a>
            </div>
          </div>
          <!--End Card 2-->

          <!--Card 3-->
          <div class="col-md-4 col-size rounded p-0">
            <a href="/pages/products/keyboard.html" target="_blank"><img
              src="https://row.hyperx.com/cdn/shop/products/hyperx_alloy_origins_core_no_1_top_down_900x.jpg?v=1663701487"
              width="280px"
              height="280px"
            /></a>
            <button class="hero-button fw-bold border border-0 bg-white">
                HyperX Alloy Origins Core - Mechanical Gaming Keyboard
            </button>
          </div>
          <!--End Card 3-->
        </div>
      </div>
    </section>
    <!--End New Products-->

    <!--Top Categories-->
    <section id="categories" class="item-size">
      <div class="container">
        <h1 class="text-center">Top Categories</h1>
        <div class="row">
          <!--Category 1-->
          <div class="col-md-4 p-0">
            <a href="/pages/collection/gaming_headsets.html"
              ><img
                src="https://ca.hyperx.com/cdn/shop/products/hyperx_cloud_ii_wireless_3_side_900x.jpg?v=1677185767"
                class="item-bg"
                width="300px"
                height="300px"
              />
            </a>
            <button
              href=""
              class="hero-button fw-bold border border-0 bg-white"
            >
              GAMING HEADSET
            </button>
          </div>
          <!--End Category 1-->

          <!--Category 2-->
          <div class="col-md-4 p-0">
            <a href="/pages/collection/gaming_keyboards.html"
              ><img
                src="https://row.hyperx.com/cdn/shop/products/hyperx_alloy_origins_core_no_1_top_down_720x.jpg?v=1663701487"
                class="item-bg"
                width="300px"
                height="300px"
              />
            </a>
            <button
              href=""
              class="hero-button fw-bold border border-0 bg-white"
            >
              GAMING KEYBOARD
            </button>
          </div>
          <!--End Category 2-->

          <!--Category 3-->
          <div class="col-md-4 p-0">
            <a href="/pages/collection/gaming_mice.html"
              ><img
                src="https://row.hyperx.com/cdn/shop/files/hyperx_pulsefire_haste_2_mini_wireless_black_7d388aa_main_1_720x.jpg?v=1704231343"
                class="item-bg"
                width="300px"
                height="300px"
              />
            </a>
            <button
              href=""
              class="hero-button fw-bold border border-0 bg-white"
            >
              GAMING MOUSE
            </button>
          </div>
          <!--End Category 3-->
        </div>
      </div>
    </section>
    <?php require "parts/footer.php"; ?>