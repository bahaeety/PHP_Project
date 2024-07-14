<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Admin Page</title>
</head>

<body>
  <?php require('../../partials/ConnDB.php'); ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="../acceuil.php">Harmony Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <form class="d-flex ms-auto my-3 my-lg-0">
          <div class="input-group">
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <form method="post" action="deconnexion.php" style="display:inline;">
              <input type="hidden">
              <button class="btn btn-dark" type="submit">Deconnexion</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- top navigation bar -->
  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
              CORE
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Sections
            </div>
          </li>
          <li>
            <a href="#Product" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Product</span>
            </a>
          </li>
          <li>
            <a href="#User" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Users</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4>Dashboard</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header bg-info">
              <span><i class="bi bi-table me-2"></i></span> Product
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="Product" class="table table-striped data-table" style="width: 100%">
                  <thead>
                    <tr>
                      <th>Id produit</th>
                      <th>nom</th>
                      <th>Type produit</th>
                      <th>Prix</th>
                      <th>Description</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT ID_produit,nom,PRIX,typeProduit,Descrition FROM Produits";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <td><?= $row["ID_produit"] ?></td>
                          <td><?= $row["nom"] ?></td>
                          <td><?= $row["typeProduit"] ?> </td>
                          <td><?= $row["PRIX"] ?> $</td>
                          <td><?= $row["Descrition"] ?></td>
                          <td class="col-2">
                            <form method="post" action="modifierproduit.php" style="display:inline;">
                              <input type="hidden" name="ID_produit" value="<?= $row['ID_produit'] ?>">
                              <button class="btn btn-sm btn-warning">Modifier</button>
                            </form>
                            <form method="post" action="supprimerproduit.php" style="display:inline;">
                              <input type="hidden" name="ID_produit" value="<?= $row['ID_produit'] ?>">
                              <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                          </td>
                        </tr>
                    <?php }
                    } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Id produit</th>
                      <th>nom</th>
                      <th>Type produit</th>
                      <th>Prix</th>
                      <th>Description</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header bg-info">
              <span><i class="bi bi-table me-2"></i></span> Users
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="User" class="table table-striped data-table" style="width: 100%">
                  <thead>
                    <tr>
                      <th>Id User</th>
                      <th>nom</th>
                      <th>prenom</th>
                      <th>email</th>
                      <th>cellullaire</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT ID_user,nom,prenom,email,numere_cellulaire FROM user";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <td><?= $row["ID_user"] ?></td>
                          <td><?= $row["nom"] ?></td>
                          <td><?= $row["prenom"] ?> </td>
                          <td><?= $row["email"] ?> </td>
                          <td><?= $row["numere_cellulaire"] ?></td>
                          <td>
                            <form method="post" action="supprimeruser.php" style="display:inline;">
                              <input type="hidden" name="ID_user" value="<?= $row['ID_user'] ?>">
                              <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                          </td>
                        </tr>
                    <?php }
                    } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Id User</th>
                      <th>nom</th>
                      <th>prenom</th>
                      <th>email</th>
                      <th>cellullaire</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>
  <script src="./js/script.js"></script>
  <?php
  mysqli_close($conn);
  ?>
</body>

</html>