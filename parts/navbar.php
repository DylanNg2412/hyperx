
<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="https://1000logos.net/wp-content/uploads/2021/04/HyperX-logo.png"
            alt="Logo"
            width="140"
            height="80"
            class="d-inline-block align-text-top"
          />
        </a>
        <?php if ( isset( $_SESSION["user"] ) ) : ?>
      <span class="fs-5 text-dark"><p>User: <?= $_SESSION["user"]["name"]; ?> </p></span>
      <?php endif ; ?>
        <div
        class="collapse navbar-collapse justify-content-end"
        id="navbarSupportedContent"
      >
      
        <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link fw-bold" aria-current="page" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" aria-current="page" href="/products">PRODUCTS</a>
          </li>
          <?php if ( isAdminOrEditor() ) : ?>
         <li class="nav-item">
            <a class="nav-link fw-bold" aria-current="page" href="/dashboard">DASHBOARD</a>
          </li>
        <?php endif ; ?>
        <?php if ( isset( $_SESSION["user"] ) ) : ?>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="/orders">ORDERS</a>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="/cart">
              CART
            </a>
          </li>
          <?php endif ; ?>
                 
          <?php if ( isset( $_SESSION["user"] ) ) : ?>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="/logout">LOGOUT</a>
          </li>
          <?php else : ?>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="/signup">SIGN UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="/login">LOGIN</a>
          </li>
          <?php endif ; ?>
          
        </ul>
        <!-- navbar collapse -->
      </div>
      <!-- container  -->
    </div>
      </div>
    </nav>
    <!--End Nav Bar-->
