<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Optica | Site de vente en ligne</title>
   <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/clients.css') }}">
</head>

<body>
   <!-- section start header -->
   <!-- header section start -->
   <header class="header">
      <a href="#" class="logo">
            <i class="fas fa-shopping-basket lo"></i> optica
      </a>
      <nav class="navbar">
            <a href="#carouselHome">Acceuil</a>
            <a href="#categorie">categorie</a>
            <a href="#produits">Produits</a>
            <a href="#gallery">gallery</a>
            <a href="#contact">contacts</a>
      </nav>

      <div class="icons">
            <div class="icon fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search icon" id="search-btn"></div>
            <div class="fas fa-shopping-cart icon" id="cart-btn"></div>
            <div class="fas fa-user icon" id="user-btn"></div>
      </div>

      <form action="" class="search-form">
            <input type="search" name="" id="search-box" placeholder="Recherche...">
            <label for="search-box" class="ser fas fa-search"></label>
      </form>

      <!-- shoppin-cart -->
      <div class="shopping-cart">
            <div class="box">
               <i class="fas fa-trash"></i>
               <img src="./dist/image/categorie/1 .jpg" alt="">
               <div class="contenu">
                  <h3>Vue de loin</h3>
                  <span class="prix">Ar 30.000 /-</span>
                  <span class="quantite">qty : 1</span>
               </div>
            </div>

            <div class="box">
               <i class="fas fa-trash"></i>
               <img src="./assets/image/categorie/3.jpg" alt="">
               <div class="contenu">
                  <h3>Verre loupe</h3>
                  <span class="prix">Ar 60.000 /-</span>
                  <span class="quantite">qty : 1</span>
               </div>
            </div>

            <div class="box">
               <i class="fas fa-trash"></i>
               <img src="./html/dist/image/categorie/2.jpg" alt="">
               <div class="contenu">
                  <h3>anti-reflet</h3>
                  <span class="prix">Ar 10.000 /-</span>

                  <span class="quantite">qty : 1</span>
               </div>
            </div>
            <div class="total">Total : ar 100.000 </div>
            <a href="#" class="recu-btn">Acheter</a>
      </div>

      <!-- connexion -->
      <form action="./php/clients/connecter.php" method="POST" class="login-form">
            <h3>Connecter</h3>
            <input type="email" name="email" id="" placeholder="Votre Email.." class="box">
            <input type="password" name="mdp" id="" placeholder="mots de passe" class="box">
            <p>Creer un <a href="#" data-toggle="modal" data-target="#users"> nouveau Compte</a></p>
            <input type="submit" name="connexion" value="Connexion" class="recu-btn">
      </form>

      <!-- inscription -->
   </header>

   <!-- home start -->
   <div id="carouselHome" class="carousel slide" data-ride="carousel" data-intervale="3000">
      <ol class="carousel-indicators">
            <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
            <li data-target="#carouselHome" data-slide-to="1"></li>
            <li data-target="#carouselHome" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="{{ URL::asset('image/logo/banier.jpg') }}" alt="" class="d-block">
               </div>
               <div class="carousel-item">
                  <img src="{{ URL::asset('image/logo/ban.jpg') }}" alt="" class=" d-block">
               </div>
               <div class="carousel-item">
                  <img src="{{ URL::asset('image/logo/bans.jpg') }}" alt="" class=" d-block">
               </div>
            </div>

      </div>
      <a href="#carouselHome" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
      </a>
      <a href="#carouselHome" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
      </a>
   </div>
   <!-- end start -->
   <!-- produits -->
   <section class="categorie mt-4 mb-4" id="categorie">
      <h1 class="headings"><span>Categorie</span></h1>
      <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-3 text-center">
                <div class="card border-0 bg-light mb-4">
                    <div class="card-body">
                        <img src="{{ URL::asset('image/banier/'. $category->id .'.jpg') }}" class="img-fluid" alt="">
                        <div class="content">
                            <h3>{{ $category->name }}</h3>
                            <p>{{ $category->description }}</p>
                            <a href="#" class="recu-btn">voir tous</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
   </section>

   <section class="produits mt-4 mb-4" id="produits">
      <h1 class="headings"><span>Produits</span></h1>
      <div class="container">
            <div class="row">
               <div class="col-3 mb-4">
                  <div class="card">
                        <div class="card-header">
                           <span class="price">Ar 200.000</span>
                           <img src="{{ URL::asset('image/produit/1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">

                           <h3 class="">Nom Produits</h3>
                           <div class="stars text-center">
                              <i class="fas fa-star st"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                           </div>
                           <a href="#" class=" recu-btn">Acheter</a>
                        </div>
                  </div>
               </div>
               <div class="col-3 mb-4">
                  <div class="card">
                        <div class="card-header">
                           <span class="price">Ar 200.000</span>
                           <img src="{{ URL::asset('image/produit/2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">

                           <h3 class="">Nom Produits</h3>
                           <div class="stars text-center">
                              <i class="fas fa-star st"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                           </div>
                           <a href="#" class=" recu-btn">Acheter</a>
                        </div>
                  </div>
               </div>

               <div class="col-3 mb-4">
                  <div class="card">
                        <div class="card-header">
                           <span class="price">Ar 200.000</span>
                           <img src="{{ URL::asset('image/produit/3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">

                           <h3 class="">Nom Produits</h3>
                           <div class="stars text-center">
                              <i class="fas fa-star st"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                           </div>
                           <a href="#" class=" recu-btn">Acheter</a>
                        </div>
                  </div>
               </div>
               <div class="col-3 mb-4">
                  <div class="card">
                        <div class="card-header">
                           <span class="price">Ar 200.000</span>
                           <img src="{{ URL::asset('image/produit/4.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">

                           <h3 class="">Nom Produits</h3>
                           <div class="stars text-center">
                              <i class="fas fa-star st"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                           </div>
                           <a href="#" class=" recu-btn">Acheter</a>
                        </div>
                  </div>
               </div>
            </div>
      </div>
   </section>

   <section class="continer-fluid bg-light p-3" id="gallery">
      <h1 class="headings"><span>Portofolio</span></h1>
      <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="portofolio">
                        <div class="image1 gal actifs">
                           <div class="text-container">
                              <div class="text">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              </div>
                           </div>
                        </div>

                        <div class="image2 gal">
                           <div class="text-container">
                              <div class="text">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              </div>
                           </div>
                        </div>

                        <div class="image3 gal">
                           <div class="text-container">
                              <div class="text">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              </div>
                           </div>
                        </div>

                        <div class="image4 gal">
                           <div class="text-container">
                              <div class="text">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              </div>
                           </div>
                        </div>

                        <div class="image5 gal">
                           <div class="text-container">
                              <div class="text">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              </div>
                           </div>
                        </div>

                  </div>
               </div>


            </div>
      </div>
   </section>

   <section class="contacts mb-4" id="contact">
      <h1 class="headings"><span>Contats</span></h1>
      <div class="container">
            <div class="row">
               <div class="imgCont">
                  <img src="{{ URL::asset('image/logo/bans.jpg') }}" alt="">
               </div>

               <div class="form">
                  <h3 class="text-center">Contactez-nous</h3>
                  <form action="" method="POST" class="form-box">

                        <input type="text" name="nom" class="form-control" placeholder="nom">
                        <input type="email" name="email" class="form-control" placeholder="email@gmail.com">

                        <textarea name="mes" cols="30" rows="10" class="form-control" placeholder="Votre message"></textarea>
                        <button type="submit" class="btn btn-success btn-lg form-control">Envoyer</button>
                  </form>
               </div>

            </div>
      </div>
   </section>

   <footer class="mt-4 bg-light p-4">
      <div class="container-fluid">
            <div class="row text-center">
               <div class="col-12">
                  Designed by | <a href="#">Valery Randrian</a>
               </div>
            </div>
      </div>
   </footer>

   <script src="{{ URL::asset('js/jquery-slim.min.js') }}"></script>
   <script src="{{ URL::asset('js/popper.min.js') }}"></script>
   <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ URL::asset('js/all.min.js') }}"></script>
   <script src="{{ URL::asset('js/clients.js') }}"></script>
</body>

</html>
