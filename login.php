<!DOCTYPE html>
<html>

<head>
    <?php
    include("headcss.php");
    ?>
    </head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <?php
        include("menu.php");
        ?>
      
    </header>
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          LOGIN
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <img src="images\D6.png" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" >
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <form action="#">
            
            <div>
              <input type="Email" placeholder="Email" />
            </div>
            <div>
              <input type="Password" placeholder="Password" />
            </div>
            
            <div class="d-flex ">
              <button>
               SUMBIT
              </button>
            </div>
          </form>

          <button> <a href="registration.php">New Customer</a></button>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
   <?php
   include("footer.php");
   ?>

              </body>

</html>