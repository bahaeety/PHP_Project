
<main>
<header class="header">
  <div class="container">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <div class="arrow" id="left-arrow">&lt;</div>
        <div class="category-container" id="category-container">
            <div class="category">
                <img src="../images/a-yellow-and-white-background-with-a-logo-that-reads-summer--5099e464865014879c25609f6bdc5f77.avif" alt="Summer SALE">
                <div class="category-title"><a href="Offres d'ete.php">Offres d'ete</a></div>
            </div>
            <div class="category">
                <img src="../images/kulturskog-plant-stand-light-green__1185312_pe898352_s5.avif" alt="New">
                <div class="category-title"><a href="nouveautes.php">Nouveautés</a></div>
            </div>
            <div class="category">
              <img src="../images/furniture-fu001.avif" alt="New">
              <div class="category-title"><a href="Tous les meubles.php">Tous les meubles</a></div>
          </div>
            <div class="category">
                <img src="../images/home-improvement-hi001.webp" alt="All furniture">
                <div class="category-title"><a href="Rénovations maison.php">Rénovations maison</a></div>
            </div>
            <div class="category">
                <img src="../images/smart-home-hs001.webp" alt="All furniture">
                <div class="category-title"><a href="Maison intelligente.php">Maison intelligente</a></div>
            </div>
            <div class="category">
                <img src="../images/lighting-li001.avif" alt="Summer SALE">
                <div class="category-title"><a href="Éclairage.php">Éclairage</a></div>
            </div>
            <div class="category">
                <img src="../images/beds-mattresses-bm001.avif" alt="All furniture">
                <div class="category-title"><a href="Lits.php">Lits</a></div>
            </div>
            <div class="category">
                <img src="../images/decoration-de001.avif" alt="Summer SALE">
                <div class="category-title"><a href="Décoration intérieure.php">Décoration intérieure</a></div>
            </div>
            <div class="category">
                <img src="../images/laundry-cleaning-lc001.avif" alt="New">
                <div class="category-title"><a href="Blanchisserie & nettoyage.php">Blanchisserie & nettoyage</a></div>
            </div>
            <div class="category">
                <img src="../images/pet-products-pt001.avif" alt="All furniture">
                <div class="category-title"><a href="Produits pour animaux de compagnie.php">Produits pour animaux de compagnie</a></div>
            </div>
            
        </div>
        <div class="arrow" id="right-arrow">&gt;</div>
    </div>
</div>
    <div class="row align-items-center mt-5">
      <div class="col-lg-4">
        <h2 class="mb-4">Modern Interior Design Studio</h2>
        <div class="d-flex gap-3">
          <a href="../views/Tous les meubles.php"><button class="btn btn-dark rounded-pill">Shop now</button></a>
        </div>
      </div>
      <div class="col-lg-8 position-relative">
        <img src="https://i.ibb.co/G9qPXCg/Dotted.png" class="position-absolute top-0 start-0" alt="Dots">
        <img src="https://i.ibb.co/WkG9fyB/couch-1.png" class="img-fluid" alt="Couch">
      </div>
    </div>
  </div>
</header>

<section class="container mt-5">
  <div class="row">
    <div class="col-lg-3 mb-4">
      <h3>Crafted with excellent material</h3>
      <p>Donec mattis porta eros, aliquet finibus risus interdum at. Nulla vivethe as it was for us to know what was to be done.</p>
      <a href="../views/Lits.php"><button class="btn btn-dark rounded-pill">Explore</button></a>
    </div>
    <?php 
    $sql = "SELECT Sourceimg ,ID_produit  FROM produits WHERE ID_produit = 19; ";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card">
        <img src="<?= $row['Sourceimg'] ?>" class="card-img-top" alt="Nordic Chair">
        <div class="card-body">
          <h5 class="card-title">NEIDEN Lit</h5>
          <p class="card-text">$50.00</p>
          <form method="post" action="" style="display:inline;">
            <input type="hidden" name="ID_produit" value="<?php echo $row['ID_produit']; ?>">
            <button type="submit" class="bg-white border-0"><img class="iconPanier" src="../images/panierIcon.png" alt="acheter"></button>
            </form>
        </div>
      </div>
    </div>
    <?php } ?>
    <?php
    if($_SERVER['REQUEST_METHOD']= 'post' && isset($_POST['ID_produit'])){
        $ID_produit = $_POST['ID_produit'];
    }
    ?>
    <!-- Repeat for other product cards -->
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <h3 class="mb-4">Why Choose Us</h3>
      <p class="mb-4">Donec mattis porta eros, aliquet finibus risus interdum at. Nulla vivethe as it was for us to know what was to be done.</p>
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="d-flex align-items-start">
            <i class="fa-solid fa-truck fs-4 me-3"></i>
            <div>
              <h6>Fast & Free Shipping</h6>
              <p>Donec mattis porta eros, aliquet finibus risus interdum at. Nulla vivethe as it was</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="d-flex align-items-start">
            <i class="fa-solid fa-bag-shopping fs-4 me-3"></i>
            <div>
              <h6>Easy To Shop</h6>
              <p>Donec mattis porta eros, aliquet finibus risus interdum at. Nulla vivethe as it was</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="d-flex align-items-start">
            <i class="fa-solid fa-life-ring fs-4 me-3"></i>
            <div>
              <h6>24/7 Support</h6>
              <p>Donec mattis porta eros, aliquet finibus risus interdum at. Nulla vivethe as it was</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="d-flex align-items-start">
            <i class="fa-solid fa-arrow-right-arrow-left fs-4 me-3"></i>
            <div>
              <h6>Hassle Free Returns</h6>
              <p>Donec mattis porta eros, aliquet finibus risus interdum at. Nulla vivethe as it was</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 position-relative">
      <img src="https://i.ibb.co/crmvPV4/Dot-1.png" class="position-absolute top-0 start-0" alt="Dots">
      <img src="https://i.ibb.co/HNmycwp/why-choose-us-img-1.png" class="img-fluid" alt="Why Choose Us">
    </div>
  </div>
</section>

<!-- We Help You Make Modern Interior Design Section -->
<section class="container mt-5">
  <div class="row">
    <div class="col-lg-6 mb-4">
      <div class="row">
        <div class="col-6 mb-4"><img src="https://i.ibb.co/DfBkV9s/img-grid-1-1.png" class="img-fluid" alt="Interior 1"></div>
        <div class="col-6 mb-4"><img src="https://i.ibb.co/0nX4qK0/img-grid-2-1.png" class="img-fluid" alt="Interior 2"></div>
        <div class="col-12"><img src="https://i.ibb.co/yYgBWms/img-grid-3-1.png" class="img-fluid" alt="Interior 3"></div>
      </div>
    </div>
    <div class="col-lg-6">
      <h2 class="mb-4">We help you make Modern Interior Design</h2>
      <p class="mb-4">Donec mattis porta eros, aliquet finibus risus interdum at. Nulla vivethe as it was for us to know what was to be done. This small text has to be placed here, since this is a place holder.</p>
      <div class="row mb-4">
        <div class="col-md-6 mb-3">
          <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-dot me-2"></i>
            <p class="mb-0">Donec mattis porta eros, let aliquet finibus ri</p>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-dot me-2"></i>
            <p class="mb-0">Donec mattis porta eros, let aliquet finibus ri</p>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-dot me-2"></i>
            <p class="mb-0">Donec mattis porta eros, let aliquet finibus ri</p>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-dot me-2"></i>
            <p class="mb-0">Donec mattis porta eros, let aliquet finibus ri</p>
          </div>
        </div>
      </div>
      <button class="btn btn-dark rounded-pill">Explore</button>
    </div>
  </div>
</section>

<!-- Product Showcase Section -->
<section class="container mt-5">
  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card">
        <div class="row g-0">
          <div class="col-4">
            <img src="https://i.ibb.co/xgFbh5d/product-1-1.png" class="img-fluid rounded-start" alt="Nordic chair">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Nordic chair</h5>
              <p class="card-text">Donec mattis porta eros, aliquet finibus risus in. Donecd</p>
              <a href="#" class="text-decoration-none">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <div class="row g-0">
          <div class="col-4">
            <img src="https://i.ibb.co/jzn021R/product-2.png" class="img-fluid rounded-start" alt="Kruzo Aero Chair">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Kruzo Aero Chair</h5>
              <p class="card-text">Donec mattis porta eros, aliquet finibus risus in. Donecd</p>
              <a href="#" class="text-decoration-none">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <div class="row g-0">
          <div class="col-4">
            <img src="https://i.ibb.co/ZmZjhDN/product-3.png" class="img-fluid rounded-start" alt="Ergonomic Chair">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Ergonomic Chair</h5>
              <p class="card-text">Donec mattis porta eros, aliquet finibus risus in. Donecd</p>
              <a href="#" class="text-decoration-none">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="container mt-5">
  <h3 class="text-center mb-4">Testimonials</h3>
  <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <p class="text-center mb-4">"Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque."</p>
        <div class="text-center">
          <img src="path-to-image" class="rounded-circle mb-3" alt="Testimonial" style="width: 80px; height: 80px;">
          <h6 class="mb-0">Maria Jones</h6>
          <span class="text-muted">CEO, Co-Founder, XYZ Inc.</span>
        </div>
      </div>
      <!-- Add more carousel items for other testimonials -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- Blog Section -->
<section class="container mt-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Recent Blog</h2>
    <a href="#" class="text-decoration-none">View All Posts</a>
  </div>
  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="https://i.ibb.co/y026sQs/post-1-1.png" class="card-img-top" alt="Blog post">
        <div class="card-body">
          <h6 class="card-title">First Time Home Owner Ideas</h6>
          <p class="card-text">by <span>Nana Ama</span> on <span>Nov 18th, 2022</span></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="https://i.ibb.co/Hp07Fnq/post-2-1.png" class="card-img-top" alt="Blog post">
        <div class="card-body">
          <h6 class="card-title">How To Keep Your Furniture Clean</h6>
          <p class="card-text">by <span>Nana Ama</span> on <span>Nov 18th, 2022</span></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="https://i.ibb.co/tYBsDdc/post-3-1.png" class="card-img-top" alt="Blog post">
        <div class="card-body">
          <h6 class="card-title">Small Space Furniture Apartment Ideas</h6>
          <p class="card-text">by <span>Nana Ama</span> on <span>Nov 18th, 2022</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-light mt-5 py-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col-lg-8">
        <div class="input-group">
          <input type="email" class="form-control" placeholder="Enter your email">
          <button class="btn btn-dark" type="button">Subscribe</button>
        </div>
      </div>
      <div class="col-lg-4">
        <img src="https://i.ibb.co/HxMrn2w/sofa-1.png" class="img-fluid" alt="Newsletter chair">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-4">
        <h3 class="mb-3">Furni.</h3>
        <p>Donec mattis porta eros, aliquet finibus risus interdum at. Nulla vivethe as it was for us to know what was to be done. the this is a long post for the text.</p>
      </div>
      <div class="col-6 col-lg-2 mb-4">
        <h6 class="mb-3">Company</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-muted">About us</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Services</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Blog</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Contact us</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-4">
        <h6 class="mb-3">Support</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-muted">Support</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Knowledge base</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Live Chat</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-4">
        <h6 class="mb-3">Jobs</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-muted">Our Team</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Leadership</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-4">
        <h6 class="mb-3">Nordic Chair</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-muted">Kruzo Aero</a></li>
          <li><a href="#" class="text-decoration-none text-muted">Ergonomic</a></li>
        </ul>
      </div>
      </div>
    <hr>
    <div class="row mt-4">
      <div class="col-md-6 mb-3 mb-md-0">
        <ul class="list-inline mb-0">
          <li class="list-inline-item me-3">
            <a href="#" class="text-muted"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="list-inline-item me-3">
            <a href="#" class="text-muted"><i class="fab fa-instagram"></i></a>
          </li>
          <li class="list-inline-item me-3">
            <a href="#" class="text-muted"><i class="fab fa-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="text-muted"><i class="fab fa-linkedin-in"></i></a>
          </li>
        </ul>
      </div>
      <div class="col-md-6 text-md-end">
        <p class="mb-0 text-muted">&copy; 2024 Furni. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<!-- Back to top button -->
<button type="button" class="btn btn-primary btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<script>
  // Back to top button functionality
  let mybutton = document.getElementById("btn-back-to-top");

  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  mybutton.addEventListener("click", backToTop);

  function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
</main>