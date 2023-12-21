<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
  exit;
}


include 'koneksi.php';
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Gokom</title>
  </head>
  <body>
    <!-- navigatin bar -->



    <header class="bg-header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand text-white fw-bold" href="#" data-bs-toggle="tooltip" data-bs-title="Gokom" data-bs-placement="bottom">Gokom</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" href="#how">How it works</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link cta" href="contact">Contact</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link cta" href="logout.php">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="hero-section py-5" >
        <div class="container py-3">
          <div class="row g-5">
            <div class="d-flex align-items-center justify-content-between">
              <div class="col-12 col-lg-6">
                <h1 class="text-white fw-bold">
                  Delicious Delivered: Discover a World of Flavors at Your
                  Doorstep
                </h1>
                <p class="text-white pt-4">
                  Discover a wide range of delectable dishes from various
                  cuisines. From appetizers and main courses to desserts and
                  beverages, we have something to satisfy every craving.
                </p>
                <button class="btn mt-5">Order Now</button>
              </div>
              <div class="col-12 col-lg-6">
                <div class="d-flex justify-content-end">
                  <img src="assets/hero.png" class="hero-img" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    <main>
      <section class="featured py-5" id="features">
        <div class="container">
          <h2 class="text-dark fw-bold text-center pt-5 pb-5">
            Featured Food Items
          </h2>
        </div>

        <div class="container">
          <div class="row g-5">
            <div class="col-12 col-lg-3">
              <div class="card shadow-sm border-0 rounded">
                <img src="assets/burger.jpg" class="card-img-top" alt="" />
                <div class="card-body">
                  <h3 class="card-title">Sizzling Steakhouse Burger</h3>
                  <p class="card-text">
                    Succulent beef patty topped with melted cheddar cheese,
                    caramelized onions, crispy bacon, and tangy barbecue sauce
                  </p>
                  <button class="btn">Order Now</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="card shadow-sm border-0 rounded">
                <img src="assets/pizza.jpg" class="card-img-top" alt="" />
                <div class="card-body">
                  <h3 class="card-title">Mouthwatering Margherita Pizza</h3>
                  <p class="card-text">
                    Succulent beef patty topped with melted cheddar cheese,
                    caramelized onions, crispy bacon, and tangy barbecue sauce
                  </p>
                  <button class="btn">Order Now</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="card shadow-sm border-0 rounded">
                <img src="assets/sushi.jpg" class="card-img-top" alt="" />
                <div class="card-body">
                  <h3 class="card-title">Mouthwatering Margherita Pizza</h3>
                  <p class="card-text">
                    Succulent beef patty topped with melted cheddar cheese,
                    caramelized onions, crispy bacon, and tangy barbecue sauce
                  </p>
                  <button class="btn">Order Now</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="card shadow-sm border-0 rounded">
                <img src="assets/lavacake.jpg" class="card-img-top" alt="" />
                <div class="card-body">
                  <h3 class="card-title">Mouthwatering Margherita Pizza</h3>
                  <p class="card-text">
                    Succulent beef patty topped with melted cheddar cheese,
                    caramelized onions, crispy bacon, and tangy barbecue sauce
                  </p>
                  <button class="btn">Order Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class = "sugestion">
        <h2 class = "text-center fw-bold mt-5 mb-5">
          Recomended Place
        </h2>
        <a href="olah.php" class="btn btn-primary mb-3" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
        </svg> 
          Add Sugestion
        </a>
        <table class="table text-center table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Place</th>
              <th scope="col">Social</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query="SELECT * FROM recomended";
            $sql=mysqli_query($konek,$query);
            $no=1;
            while($data=mysqli_fetch_array($sql)) {
            ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $data ['nama'];?></td>
              <td><?php echo $data ['rekomendasi'];?></td>
              <td><?php echo $data ['sosial'];?></td>
              <td>
                <a href="update.php?id=<?= $data['id']; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                  </svg>
                </a>
                <a href="hapus.php?id=<?= $data['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                  </svg>
                </a>
                </tr>
              </td>
            
            <?php
              $no++;
            } ?>
          </tbody>
      </table>
      </section>
      
      <section class="how-it-works" id="how">
        <div class="container">
          <h2 class="text-dark fw-bold text-center pt-5 pb-3">
            How Gokom Works
          </h2>

          <div class="container py-5">
            <div class="row g-5">
              <div class="col-12 col-lg-6">
                <div
                  class="p-4 d-flex shadow-sm section-how-card flex-column justify-content-center rounded"
                >
                  <span><ion-icon class="icon" name="search"></ion-icon></span>
                  <h3 class="fw-bold text-dark how-it-works-title">
                    Browse our extensive menu
                  </h3>
                  <p class="how-it-works-text">
                    Discover a wide range of delectable dishes from various
                    cuisines. From appetizers and main courses to desserts and
                    beverages, we have something to satisfy every craving.
                  </p>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div
                  class="d-flex p-4 shadow-sm section-how-card flex-column justify-content-center rounded"
                >
                  <span><ion-icon class="icon" name="search"></ion-icon></span>
                  <h3 class="fw-bold text-dark how-it-works-title">
                    Place your order
                  </h3>
                  <p class="how-it-works-text">
                    Discover a wide range of delectable dishes from various
                    cuisines. From appetizers and main courses to desserts and
                    beverages, we have something to satisfy every craving.
                  </p>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div
                  class="d-flex p-4 shadow-sm section-how-card flex-column justify-content-center rounded"
                >
                  <span><ion-icon class="icon" name="search"></ion-icon></span>
                  <h3 class="fw-bold text-dark how-it-works-title">
                    Track your delivery
                  </h3>
                  <p class="how-it-works-text">
                    Sit back and relax as our dedicated delivery professionals
                    swiftly bring your order to your location. Monitor the
                    progress of your delivery in real-time and know exactly when
                    to expect your food.
                  </p>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div
                  class="d-flex p-4 shadow-sm section-how-card flex-column justify-content-center rounded"
                >
                  <span><ion-icon class="icon" name="search"></ion-icon></span>
                  <h3 class="fw-bold text-dark how-it-works-title">
                    Enjoy your meal
                  </h3>
                  <p class="how-it-works-text">
                    Once your order arrives, indulge in a flavorful dining
                    experience from the comfort of your own home. Our commitment
                    to quality ensures that every bite is a delight.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonials">
        <div class="container">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container py-5">
                  <div class="row">
                    <div class="col-12">
                      <div
                        class="d-flex flex-column align-items-center justify-content-center text-center"
                      >
                        <div class="testimonial-card">
                          <img
                            src="assets/sarah.jpg"
                            width="150px"
                            class="rounded-circle pb-4"
                            alt=""
                          />
                          <p class="testimonial-text pb-2">
                            Gokom has transformed the way I enjoy meals.
                            The convenience of ordering my favorite dishes from
                            local restaurants and having them delivered to my
                            doorstep is simply fantastic.
                          </p>
                          <h3 class="testimonials-name">Sarah M</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="container py-5">
                  <div class="row">
                    <div class="col-12">
                      <div
                        class="d-flex flex-column align-items-center justify-content-center text-center"
                      >
                        <div class="testimonial-card">
                          <img
                            src="assets/john.jpg"
                            width="150px"
                            class="rounded-circle pb-4"
                            alt=""
                          />
                          <p class="testimonial-text pb-2">
                            Gokom has transformed the way I enjoy meals.
                            The convenience of ordering my favorite dishes from
                            local restaurants and having them delivered to my
                            doorstep is simply fantastic.
                          </p>
                          <h3 class="testimonials-name">John j</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
      
  
</main>

<footer>
  <div class="container py-5" id="contact">
    <div class="row">
      <div class="col-12 col-lg-4">
        <h3 class="fw-bold pb-3">Visit us</h3>
        <p>
          1234 Foodie Lane, Cityville, <br />
          State, Country
        </p>
        <a href="mailto:info@Gokom.com" class="text-dark"
        >info@foodieexpress.com</a
            >
          </div>
          <div class="col-12 col-lg-4">
            <h3 class="fw-bold pb-3">Our Link</h3>
            <div class="d-flex flex-column">
              <a href="#" class="text-dark">Home</a>
              <a href="#" class="text-dark">How it works</a>
              <a href="#" class="text-dark">Features</a>
              <a href="#" class="text-dark">Contact</a>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <h3 class="fw-bold pb-3">Our Link</h3>
            <div class="d-flex">
              <a href="#" class="text-dark"
                ><ion-icon name="logo-facebook" class="icon"></ion-icon
              ></a>
              <a href="#" class="text-dark px-3"
                ><ion-icon name="logo-instagram" class="icon"></ion-icon
              ></a>
              <a href="#" class="text-dark px-3"
                ><ion-icon name="logo-github" class="icon"></ion-icon
              ></a>
            </div>
          </div>
        </div>
      </div>
      <p class="text-center copyright"> &copy; 2023 all right reserved by Gokom</p>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
      integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script>
      const tooltipTriggerList = document.querySelectorAll(
        '[data-bs-toggle="tooltip"]'
      );
      const tooltipList = [...tooltipTriggerList].map(
        (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
      );
    </script>
  </body>
</html>
