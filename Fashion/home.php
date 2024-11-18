<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>FASHION</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#">FASHION</a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#catalogue">CATALOGUE</a></li>
        <li><a href="#fashion">FASHION</a></li>
        <li><a href="#favourite">FAVOURITE</a></li>
        <li><a href="#lifestyle">LIFESTYLE</a></li>
        <li><a href="php/logout.php">Log-out</a></li>
        <li>
          <button class="btn">SIGN UP</button>
        </li>
      </ul>
    </nav>
    <header>
      <div class="section__container header__container">
        <div class="header__content">
          <h1>
            <span>LET'S</span>
            <br />
            EXPLORE
            <br />
            <span>UNIQUE</span>
            <br />
            CLOTHES.
          </h1>
          <p>Live for influential and innovative fashion!</p>
          <div class="header__btns">
            <button class="btn">Shop Now</button>
          </div>
        </div>
        <div class="header__image">
          <img src="assets/header.png" alt="header" />
        </div>
      </div>
    </header>

    <section class="banner">
      <div class="banner__container">
        <img src="assets/banner-1.png" alt="banner" />
        <img src="assets/banner-2.png" alt="banner" />
        <img src="assets/banner-3.png" alt="banner" />
        <img src="assets/banner-4.png" alt="banner" />
        <img src="assets/banner-5.png" alt="banner" />
        <img src="assets/banner-6.png" alt="banner" />
        <img src="assets/banner-7.png" alt="banner" />
        <img src="assets/banner-8.png" alt="banner" />
      </div>
    </section>

    <section class="section__container arrival__container" id="catalogue">
      <h2 class="section__header">NEW ARRIVALS</h2>
      <div class="arrival__grid">
        <div class="arrival__card">
          <div class="arrival__image">
            <img src="assets/arrival-1.jpg" alt="arrival" />
          </div>
          <div class="arrival__content">
            <div>
              <h4>Hoodies & Sweatshirts</h4>
              <a href="#">Explore Now</a>
            </div>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <div class="arrival__card">
          <div class="arrival__image">
            <img src="assets/arrival-2.jpg" alt="arrival" />
          </div>
          <div class="arrival__content">
            <div>
              <h4>Coats & Parkas</h4>
              <a href="#">Explore Now</a>
            </div>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <div class="arrival__card">
          <div class="arrival__image">
            <img src="assets/arrival-3.jpg" alt="arrival" />
          </div>
          <div class="arrival__content">
            <div>
              <h4>Tees & T-Shirt</h4>
              <a href="#">Explore Now</a>
            </div>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
      </div>
    </section>

    <section class="sale" id="fashion">
      <div class="section__container sale__container">
        <div class="sale__image">
          <img src="assets/sale.png" alt="sale" />
        </div>
        <div class="sale__content">
          <h2><span>PAYDAY</span><br />SALE NOW</h2>
          <p>
            Spend minimal $100 get 30% off voucher code for your next purchase
          </p>
          <h4>1 November - 11 November 2024</h4>
          <p>*Terms and conditions apply</p>
          <div class="sale__btn">
            <button class="btn">Shop Now</button>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container favourite__container" id="favourite">
      <h2 class="section__header">YOUNG'S FAVOURITE</h2>
      <div class="favourite__grid">
        <div class="favourite__card">
          <div class="favourite__image">
            <img src="assets/favourite-1.jpg" alt="favourite" />
          </div>
          <div class="favourite__content">
            <div>
              <h4>Trending on Instagram</h4>
              <a href="#">Explore Now</a>
            </div>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <div class="favourite__card">
          <div class="favourite__image">
            <img src="assets/favourite-2.jpg" alt="favourite" />
          </div>
          <div class="favourite__content">
            <div>
              <h4>All under $40</h4>
              <a href="#">Explore Now</a>
            </div>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container download__container" id="lifestyle">
      <div class="download__image">
        <img src="assets/download.png" alt="download" />
      </div>
      <div class="download__content">
        <h2 class="section__header">DOWNLOAD APP & GET THE VOUCHER!</h2>
        <p>
          Get 30% off for first transaction using our new mobile app for now.
        </p>
        <div class="download__links">
          <a href="#">
            <img src="assets/apple.png" alt="apple" />
          </a>
          <a href="#">
            <img src="assets/google.png" alt="google" />
          </a>
        </div>
      </div>
    </section>

    <section class="promo">
      <div class="section__container promo__container">
        <h2 class="section__header">
          JOIN SHOPPING COMMUNITY TO GET MONTHLY PROMO
        </h2>
        <p>Type your email down below and be young wild generation</p>
        <form action="/">
          <input type="text" placeholder="Add your email here" />
          <button class="btn">SEND</button>
        </form>
      </div>
    </section>

    <footer>
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#">FASHION</a>
          </div>
          <p>Complete your style with awesome clothes from us.</p>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-linkedin-fill"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Company</h4>
          <ul class="footer__links">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Quick Links</h4>
          <ul class="footer__links">
            <li><a href="#">Store Location</a></li>
            <li><a href="#">Order Tracking</a></li>
            <li><a href="#">Size Guide</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Legal</h4>
          <ul class="footer__links">
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  </body>
</html>
