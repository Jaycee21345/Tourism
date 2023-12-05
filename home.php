<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

<!-- custom css file link  -->
<link rel="stylesheet" href="styles.css">

</head>
<body>
   
<header>

<div class="account-box">
         <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
      </div>

   </div>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><img src="puc-1.jpg" alt="">

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#inquiry">inquiry</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- home selection starts -->

<section class="home" id="home">

<h1 class="heading">
        <span>w</span>
        <span>e</span>
        <span>l</span>
        <span>c</span>
        <span>o</span>
        <span>m</span>
        <span>e</span>
        <span class="space"></span>
        <span>a</span>
        <span>l</span>
        <span class="space"></span>
        <span>m</span>
        <span>a</span>
        <span>t</span>
        <span>r</span>
        <span>o</span>
        <span>s</span>
        <span>i</span>
        <span class="space"></span>
        <span>t</span>
        <span>r</span>
        <span>a</span>
        <span>v</span>
        <span>e</span>
        <span>l</span>
        <span class="space"></span>
        <span>&</span>
        <span class="space"></span>
        <span>t</span>
        <span>o</span>
        <span>u</span>
        <span>r</span>
        <span>i</span>
        <span>s</span>
        <span>m</span>
    </h1>


<div class="box-container">

        <div class="box">
            <img src="vis-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Explore Dubai on a 90-day trip for only AED1890 </h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, voluptatum! </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> AED1890 <span></span> </div>
                <a href="#" class="btn"> inqure now</a>
            </div>
        </div>
        <div class="box">
            <img src="vis-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Explore Dubai on a 14-day trip for only AED390 </h3>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, cumque! </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> AED390 <span></span> </div>
                <a href="#" class="btn"> inqure now</a>
            </div>
        </div>
        <div class="box">
            <img src="vis-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Explore Dubai on a 30-day trip for only AED490 </h3>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, quibusdam. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> AED490 <span></span> </div>
                <a href="#" class="btn"> inqure now</a>
            </div>
            </div>
    
<!-- home selection ends -->

<!-- book section starts -->

<section class="book" id="inquiry">

    <h1 class="heading">
        <span>d</span>
        <span>r</span>
        <span>o</span>
        <span>p</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
        <span class="space"></span>
        <span>y</span>
        <span>o</span>
        <span>u</span>
        <span>r</span>
        <span class="space"></span>
        <span>i</span>
        <span>n</span>
        <span>q</span>
        <span>u</span>
        <span>i</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="row">

        <div class="image">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Number">
                <input type="text" placeholder="Subject">
            </div>
            <div class="inputBox">
            <textarea placeholder="messege" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send messege">
        </form>

    </div>

</section>

<!-- book section ends -->

<!-- packages section starts -->

<section class="heading" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="pi-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> MANILA DUBAI 30-DAYS TOURIST VISA AND TICKET </h3>
                <p> 30 Days </p>
                <p> Cebu Pacific w/ Dummy Ticket </p>
                <p> Non-Extendable </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> AED1800 <span></span> </div>
                <a href="#" class="btn"> inqure now</a>
            </div>
        </div>

        <div class="box">
            <img src="pi-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> MANILA DUBAI 30-DAYS TOURIST VISA AND TICKET </h3>
                <p> 30 Days </p>
                <p> Pal Express w/ Dummy Ticket </p>
                <p> Non-Extendable </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> AED2100 <span></span> </div>
                <a href="#" class="btn"> inqure now</a>
            </div>
        </div>

        <div class="box">
            <img src="pi-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> MANILA DUBAI 30-DAYS TOURIST VISA AND TICKET </h3>
                <p> 30 Days </p>
                <p> Cathay Pacific w/ Dummy Ticket </p>
                <p> Non-Extendable </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> AED2200 <span></span> </div>
                <a href="#" class="btn"> inqure now</a>
            </div>
        </div>

</section>

<!-- packages section ENDS -->

<!-- services section starts -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Visa Facilities</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum hic velit atque eligendi voluptate totam laborum perferendis ex eos doloribus.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Tour and Adventure</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum hic velit atque eligendi voluptate totam laborum perferendis ex eos doloribus.</p>
        </div>
    <div class="box">
        <i class="fas fa-bullhorn"></i>
        <h3>Hotel/Holiday Packages</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum hic velit atque eligendi voluptate totam laborum perferendis ex eos doloribus.</p>
    </div>
<div class="box">
    <i class="fas fa-globe-asia"></i>
    <h3>Air Ticket</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum hic velit atque eligendi voluptate totam laborum perferendis ex eos doloribus.</p>
</div>
<div class="box">
    <i class="fas fa-plane"></i>
    <h3>Travel Insurance</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum hic velit atque eligendi voluptate totam laborum perferendis ex eos doloribus.</p>
</div>
<div class="box">
    <i class="fas fa-hiking"></i>
    <h3>Hotel Reservation</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum hic velit atque eligendi voluptate totam laborum perferendis ex eos doloribus.</p>
</div>

    </div>
    
</section>

<!-- services section ends -->

<!-- gallery section starts -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="gi-1.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, iusto!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="gi-2.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, iusto!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="gi-3.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, iusto!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="gi-4.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, iusto!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="gi-5.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, iusto!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="gi-6.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, iusto!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="gi-7.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, iusto!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="gi-8.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, iusto!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="contact-img.jpg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="messege" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send messege">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- brand section -->
<section class="brand-container">
      
    <div class="swiper-container brand-slide">
        <div class="swiper-slider">
            <div class="slider"><img src="images/1.jpg" alt=""></div>
            <div class="slider"><img src="images/2.jpg" alt=""></div>
            <div class="slider"><img src="images/3.jpg" alt=""></div>
            <div class="slider"><img src="images/4.jpg" alt=""></div>
            <div class="slider"><img src="images/5.jpg" alt=""></div>
            <div class="slider"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>









<!-- custom js file link -->
<script src="css/script.js"></script>
    
</body>
</html>  