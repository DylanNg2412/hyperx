<?php 

  // make sure the user is logged in
  if ( !isUserLoggedIn() ) {
    // if is not logged in, redirect to /login page
    header("Location: /login");
    exit;
  }


  // load the database
  $database = connectToDB();

  // get the user id from the url query
  $id = isset( $_GET["id"] ) ? $_GET["id"] : '';

  // load the user data based on the provided id
  // 1 - sql command (recipe)
  $sql = "SELECT * FROM products WHERE id = :id";

  // 2 - prepare
  $query = $database->prepare($sql);
  // 3 - execute
  $query->execute([
    'id' => $_GET['id']
  ]);
  // 4 - fetch 
  $product = $query->fetch(); // get only one row of data

require "parts/navbar.php"; 
require "parts/header.php"; ?>

    <div class="container mx-auto my-5 text-center" style="max-width: 1000px;">
      <?php if ( $product ) : ?>
        <h1 class="h1 mb-4 text-center"><?=  $product['name']; ?></h1>
        <h4 class="mb-4 text-center">Price: MYR <?php
           echo ($product['price']) ;
        ?></h4>

            <?php require "parts/message_success.php"; ?>
            
        <?php if ( !empty( $product["image_url"] ) ) : ?>
          <img src="/<?= $product["image_url"]; ?>" class="img-fluid pb-3"/>
        <?php endif; ?>
<hr>
      <div class="d-flex justify-content-center align-items-center gap-3 pt-5 pb-3">
        <!-- switch -->
          <?php if ( $product["switch"] === 'Blue Switch' ) : ?>
            <p class="card-text">
            Switch:<span class="badge bg-primary">Blue</span> 
            </p>
          <?php endif; ?>

           <?php if ( $product["switch"] === 'Red Switch' ) : ?>
            <p class="card-text">
            <p>Switch:<span class="badge bg-danger">Red</span></p>
            </p>
          <?php endif; ?>
        <!-- switch -->


        <!-- status -->
         <?php if ( $product["status"] === 'No Stock' ) : ?>
            <p class="card-text">
            <p>Status: <span class="badge bg-danger">No Stock</span> </p>
            </p>
         <?php endif; ?>

        <?php if ( $product["status"] === 'In Stock' ) : ?>
            <p class="card-text">
            <p>Status: <span class="badge bg-success">In Stock</span> </p>
            </p>
         <?php endif; ?>
        <!--status -->
    </div>
     <div class="d-flex justify-content-center align-items-center pb-3">
    <form method="POST" action="/cart/add">
      <input type="hidden" name="product_id" value="<?= $product["id"];  ?>"/>
            <button type="submit" class="btn btn-secondary border border-radius ">
            Add to Cart
          </button>
    </form>
    </div>
    <hr>
      <?php else : ?>
        <p class="lead text-center">Product Not Found.</p>
      <?php endif; ?>
      <div class="text-center mt-3">
        <a href="/" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i> Back</a
        >
      </div>
    </div>
    <?php 
    require "parts/footer.php";
