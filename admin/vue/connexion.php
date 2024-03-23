

<section class="vh-75 containerConnexion">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="assets/img/bcb-logo.jpeg" alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form class="form-signin" method="post" action="../controller/traitement_connexion.php">
                <h1 class="fw-bold fst-italic">BOXING CLUB BEHREN</h1>




                <div class="mt-3">
                  <h2 class="h3 font-weight-normal">Connexion Admin</h2>
                </div>
                <div class="mt-5">
                  <div class="py-2"> <label for="inputEmail" class="sr-only">Adresse email</label>
                    <input type="email" name="email" id="inputEmail" class="form-control py-3" placeholder="Adresse email" required autofocus>
                  </div>
                  <div class="py-2"> <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control py-3" placeholder="Mot de passe" required>
                  </div>

                </div>

                <button class="btn btn-lg btn-primary btn-block btn btn-dark rounded-rounded mt-4 justify-content-end" type="submit">Connexion</button>

                <?php
                if (isset($_GET['erreur'])){
                    if ($_GET['erreur'] == 'identifiants') {
                      echo '<p class="erreur">Identifiant incorrect</p>';
                    }
                    
                }
                ?>
                <!-- <p class="mt-3"><a href="../public/index.php?page=7" style="text-decoration:none" class="fw-bold fw-italic text-black">Mot de passe oublié ?</a></p> -->
                <!-- <p class="mt-4 text-dark">Vous n'avez pas encore de compte ?<a href="../public/index.php?page=4" style="text-decoration:none" class="fw-bold text-black"> Créez en un ici !</a></p> -->
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
</section>