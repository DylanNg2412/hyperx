<?php
  if ( !isUserLoggedIn() ) {
    header("Location: /login");
    exit;
  }
    // connect to database
    $database = connectToDB();

    // if user is admin/editor can see all orders
    if (isAdminOrEditor()){
      $sql ="SELECT * 
        FROM orders
        JOIN users
        ON orders.user_id = users.id";
        $query = $database->prepare( $sql );
        // execute
        $query->execute([
       ]);
    }else{ //if is user can only see their orders
      $sql ="SELECT * 
        FROM orders
        JOIN users
        ON orders.user_id = users.id
        WHERE orders.user_id = :user_id";
        $query = $database->prepare( $sql );
        // execute
        $query->execute([
       
           'user_id' => $_SESSION['user']['id']
       ]);
    }
    $orders = $query->fetchAll();

    require "parts/header.php";
    require "parts/navbar.php";

?>
<section id="order">
    <div class="container mb-2 mx-auto" style="max-width: 1000px;">
      <div class="min-vh-100">
        <?php if(isAdminOrEditor()) : ?>
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="text-dark">Customer's Orders</h1>
        </div>
        <?php else : ?>
          <div class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="text-dark"><?= $_SESSION['user']['name'] ?>'s Orders</h1>
          </div>
        <?php  endif; ?>

        <!-- List of orders placed by user  -->
        <table
          class="table table-bordered table-striped table-dark text-white"
        >
          <thead>
            <tr>
              <th scope="col">Username</th>
              <th scope="col">Date</th>
              <th scope="col">Products Bought</th>
              <th scope="col">Total Amount</th>
            </tr>
          </thead>
          <tbody>
          <?php if ( !empty( $orders ) ) : ?>
            <?php foreach( $orders as $order ) : ?>
                <tr>
                <th scope="row"><?= $order['name']; ?></th>
                <td><?php echo $order['added_on']; ?></td>
                <td>
                    <ul class="list-unstyled">
                    <?php
                        $sql = "SELECT cart.*, 
                        products.name,
                        products.price 
                        FROM cart
                        JOIN products 
                        ON cart.product_id = products.id
                        WHERE order_id = :order_id";

                        $query = $database->prepare($sql);

                        $query->execute([
                            'order_id' => $order['id'],
                        ]
                    );
                        $products_in_cart = $query->fetchAll();

                        foreach ( $products_in_cart as $product ) {
                            echo "<ul><li>{$product['name']} </li></ul>";
                        }
                    ?>
                    </ul>
                </td>
                <td>RM<?= $order['total_amount']; ?></td>
                </tr>
            <?php endforeach; ?>
          <?php else : ?>
            <tr>
              <td colspan="4" class="text-center">You have not placed any orders.</td>
            </tr>
            <?php endif; ?>
          </tbody>
        </table>

        <?php if(UserIsNormal()) : ?>
          <div class="d-flex justify-content-center align-items-center ">
          <a href="/products" class="btn btn-danger border border-radius btn-sm"
            >Continue Shopping</a
          >
        </div>
        <?php endif ; ?>
      </div>
    </div>
</section>

<?php require "parts/footer.php"; ?>