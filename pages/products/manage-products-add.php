<?php 

if ( !isAdminOrEditor() ) {
  // if current user is not an admin, redirect to dashboard
  header("Location: /");
  exit;
}

require "parts/navbar.php";
require "parts/header.php";
 ?>

    <div class="container mx-auto my-5" style="max-width: 700px;">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Add New Product</h1>
      </div>
      <div class="card mb-2 p-4">
      <?php require "parts/message_error.php"; ?>
        <form class="row g-3" method="POST" action="/products/add" enctype="multipart/form-data">

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Product Name</label>
            <input type="name" class="form-control" id="-" name="name">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Price</label>
            <input type="text" class="form-control" id="-" name="price">
        </div>

        <div class="col-md-6">
            <label for="inputState" class="form-label">Switch</label>
            <select id="inputState" class="form-select" name="switch">
            <option selected>Choose...</option>
            <option>Red Switch</option>
            <option>Blue Switch</option>
            </select>
        </div>
        
        <div class="col-md-6">
            <label for="inputState" class="form-label">Status</label>
            <select id="inputState" class="form-select" name="status">
            <option selected>Choose...</option>
            <option>No Stock</option>
            <option>In Stock</option>
            </select>
        </div>

        <div class="col-12">
            Paste URL to upload:
            <input type="text" name="image_url" class="form-control" >
        </div>

        <div class="text-center">
            <input type="hidden" name="product_id" />
            <button type="submit" class="btn btn-danger">Add</button>
        </div>

        </form>
      </div>
      <div class="text-center">
        <a href="/manage-products" class="btn btn-link btn-sm bg-white text-black"
          ><i class="bi bi-arrow-left"></i> Back to Manage Products</a
        >
      </div>
    </div>
    <?php require "parts/footer.php" ?>