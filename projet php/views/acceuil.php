<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>acceuil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="../search.js" defer></script>
  <script src="../script1.js" defer></script>
</head>

<body>
  <?php session_start() ?>
  <?php require('../partials/ConnDB.php') ?>

  <?php require('../partials/header.php') ?>


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
          <p>At Harmony House, we pride ourselves on using only the finest materials to bring your interior design dreams to life.
            Each piece is carefully selected to ensure quality, durability, and elegance, creating spaces that are both beautiful and lasting.</p>
          <a href="../views/Lits.php"><button class="btn btn-dark rounded-pill">Explore</button></a>
        </div>
        <?php
        $sql = "SELECT Sourceimg ,ID_produit  FROM produits WHERE ID_produit = 19; ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
              <img src="<?= $row['Sourceimg'] ?>" class="card-img-top" alt="Nordic Chair">
              <div class="card-body">
                <h5 class="card-title">NEIDEN Lit</h5>
                <p class="card-text">$50.00</p>
                <form action="../Controllers/panier.php?redirect=acceuil.php" method="post" style="display:inline;">
                  <input type="hidden" name="ID_produit" value="<?php echo $row['ID_produit']; ?>">
                  <button type="submit" class="bg-white border-0"><img class="iconPanier" src="../images/panierIcon.png" alt="acheter"></button>
                </form>
              </div>
            </div>
          </div>
        <?php } ?>

        <!-- Repeat for other product cards -->
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="container mt-5">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-4">Why Choose Us</h3>
          <p class="mb-4">we are dedicated to providing exceptional interior design services that stand out in quality and style.</p>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="d-flex align-items-start">
                <i class="fa-solid fa-truck fs-4 me-3"></i>
                <div>
                  <h6>Fast & Free Shipping</h6>
                  <p>We offer fast and free shipping on all orders, ensuring your purchases arrive quickly and without any additional cost. </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="d-flex align-items-start">
                <i class="fa-solid fa-bag-shopping fs-4 me-3"></i>
                <div>
                  <h6>Easy To Shop</h6>
                  <p>Our user-friendly website makes shopping for interior design pieces a breeze. </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="d-flex align-items-start">
                <i class="fa-solid fa-life-ring fs-4 me-3"></i>
                <div>
                  <h6>24/7 Support</h6>
                  <p>Our dedicated support team is available 24/7 to assist you with any questions or concerns.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="d-flex align-items-start">
                <i class="fa-solid fa-arrow-right-arrow-left fs-4 me-3"></i>
                <div>
                  <h6>Hassle Free Returns</h6>
                  <p>We stand by the quality of our products, but if for any reason you’re not completely satisfied.</p>
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
          <p class="mb-4">At Harmony House, we are passionate about transforming spaces into stylish, modern sanctuaries. Our expert team collaborates with you to create interiors that reflect your unique taste and lifestyle. We combine cutting-edge design principles with the latest trends to craft environments that are both functional and beautiful. </p>
          <div class="row mb-4">
            <div class="col-md-6 mb-3">
              <div class="d-flex align-items-center">
                <i class="fa-solid fa-circle-dot me-2"></i>
                <p class="mb-0">Personalized Consultations</p>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="d-flex align-items-center">
                <i class="fa-solid fa-circle-dot me-2"></i>
                <p class="mb-0">Innovative Design Solutions</p>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="d-flex align-items-center">
                <i class="fa-solid fa-circle-dot me-2"></i>
                <p class="mb-0">High-Quality Materials</p>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="d-flex align-items-center">
                <i class="fa-solid fa-circle-dot me-2"></i>
                <p class="mb-0">Seamless Project Management</p>
              </div>
            </div>
          </div>
          <a href="../views/Décoration intérieure.php"><button class="btn btn-dark rounded-pill">Explore</button></a>
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
                  <p class="card-text">The Nordic Chair is the epitome of Scandinavian design, </p>
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
                  <p class="card-text">The Kruzo Aero Chair combines cutting-edge design with ultimate comfort, </p>
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
                  <p class="card-text">The Ergonomic Chair is designed with your health and comfort in mind, offering superior support</p>
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
            <p class="text-center mb-4">"I recently purchased furniture from Harmony House, and I couldn't be happier with my experience. From the moment I landed on their website, I was impressed by the clean, user-friendly design that made browsing their extensive selection of furniture a breeze. The product descriptions were detailed, and the high-quality images gave me a clear idea of what to expect.<br>
              One of the standout features of Harmony House is their customer service. I had a few questions about some items, and their team was incredibly responsive and helpful, providing me with all the information I needed to make an informed decision. They went above and beyond to ensure I felt confident in my purchases."</p>
            <div class="text-center">
              <img src="../images/Rayane.jpg" class="rounded-circle mb-3" alt="Testimonial" style="width: 120px; height: 120px;">
              <h6 class="mb-0">Aberbach Rayane</h6>
              <span class="text-muted">Maxi Worker</span>
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
              <p class="card-text">by <span>Richard Azouz</span> on <span>Apr 18th, 2024</span></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src="https://i.ibb.co/Hp07Fnq/post-2-1.png" class="card-img-top" alt="Blog post">
            <div class="card-body">
              <h6 class="card-title">How To Keep Your Furniture Clean</h6>
              <p class="card-text">by <span>Kilwa Zoldik</span> on <span>Mar 26th, 2024</span></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src="https://i.ibb.co/tYBsDdc/post-3-1.png" class="card-img-top" alt="Blog post">
            <div class="card-body">
              <h6 class="card-title">Small Space Furniture Apartment Ideas</h6>
              <p class="card-text">by <span>Gon Freecss</span> on <span>Jun 5th, 2024</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container bg-light mt-5 py-5">
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
    </div>

    <button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>

    <script>
      // Back to top button functionality
      let mybutton = document.getElementById("btn-back-to-top");

      window.onscroll = function() {
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
  <?php require('../partials/footer.php') ?>
</body>

</html>