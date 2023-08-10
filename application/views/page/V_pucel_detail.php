<!doctype html>
<html amp lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
  <link rel="shortcut icon" href="<?=base_url()?>assets/img/pufavicon.png" type="image/png">
  <title>PUCEL | Podomoro University</title>
  <link rel="canonical" href="/">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
   crossorigin="anonymous">
  <style amp-boilerplate>
    body {
      -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      animation: -amp-start 8s steps(1, end) 0s 1 normal both
    }

    @-webkit-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-moz-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-ms-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-o-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }
  </style><noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none
      }
    </style>
  </noscript>
  <style amp-custom=''>
    * {
      box-sizing: border-box;
      font-family: 'Roboto';
      transition: all 0.2s linear;
    }
    /* Utilities */
    .mt-20 {
      margin-top: 20px;
    }

    .mt-30 {
      margin-top: 30px;
    }

    .mt-40 {
      margin-top: 40px;
    }

    .ml-20 {
      margin-left: 20px;
    }

    .mr-20 {
      margin-left: 20px;
    }

    .clearfix {
      clear: both;
    }

    h2 {
      font-size: 180%;
      word-spacing: 2px;
      margin-bottom: 30px;
      letter-spacing: 1px;
    }

    h2:after {
      display: block;
      height: 2px;
      background-color: #19B5FE;
      content: ' ';
      width: 150px;
      margin-top: 30px;
    }

    .grey-bg {
      background-color: #f6f6f6;
    }

    .button {
      color: #fff;
      padding: 10px 15px;
      background-color: #19B5FE;
      cursor: pointer;
      text-decoration: none;
    }

    .button.green.secondary {
      color: #414141;
      background-color: transparent; 
      border: 2px solid #26A65B;
    }

    .button.green.secondary:hover,
    .button:hover {
      color: #fff;
      background-color: #26A65B;
      box-shadow: 0 0 15px rgba(33,33,33,.5); 
    }

    .meta {
      display: flex;
      flex-direction: row;
      justify-content: center;
    }

    .sub-text {
      text-align: center;
      font-weight: 400;
      color: #a5a5a5;
    }

    .highlight {
      color: #26A65B;
      font-weight: 700;
    }
    .content-width {
      width: 80%;
    }
    .content {
      margin: 0 auto;
      padding: 50px 0px;
      line-height: 140%;
    }

    /* Header */
    header {
      background: #ffffff;
      padding: 10px 0px;
      position: sticky;
      top: 0;
      z-index: 999;
    }
    #sidebar {
      width: 300px;
      background-color: #0B0C10;
      padding: 1.5rem;
    }
    .sidebar-menu {
      padding: 0px;
      margin: 0px;
    }
    .amp-custom-sidebar-header {
      line-height: 3.5rem;
      min-height: 3.5rem;
      color: #fff;
    }
    #sidebar-close {
      cursor: pointer;
    }
    .sidevar-nav-item {
      padding: 10px 0px;
      margin: 0px;
      list-style: none;
      color: #021425;
      text-transform: capitalize;
      letter-spacing: .6px;
      line-height: 2.0625;
    }
    .sidebar-nav-link {
      cursor: pointer;
      text-decoration: none;
      color: #fff;
    }
    .sidebar-nav-link:hover {
      color: #19B5FE;
    }
    .menu {
      display: flex;
      justify-content: space-between;
      margin: 0 auto;
    }
    .logo {
      width: 200px;
    }

    .links {
      display: flex;
      justify-content: flex-end;
    }
    .links .link {
      color: #1c1c1c;
      text-decoration: none;
      display: flex;
      flex-direction: column;
      text-align: center;
      justify-content: center;
      margin-left: 15px;
    }
    .links .link:hover {
      color: #19B5FE;
    }
    #sidebar-menu-btn {
      background: 0 0;
      border: 0;
      color: #b1b1b1;
      font-weight: 700;
      font-size: 24px;
      display: none;
    }


    .heading {
      font-size: 50px;
      color: #ffffff;
      font-weight: 700;
    }

    /* WHY */
    #why-content {
      width: 100%;
    }

    .features {
      display: flex;
      flex-direction: row;
      width: 100%;
    }

    .feature {
      flex: 1;
      padding: 20px;
      flex-basis: 50%;
    }

    .feature-info {
      z-index: 20;
      color: #fff;
      background-color: #0B0C10;;
      font-size: 20px;
      display: flex;
      flex-direction: column;
      padding: 0px 20px 20px 20px;
      min-height: 260px;
    }

    .feature-info h3:after {
      display: block;
      height: 2px;
      background-color: #19B5FE;
      content: ' ';
      width: 50px;
      margin-top: 30px;
    }

    .feature-bg {
      background-color: #0B0C10;;
      width: 100%;
      height: 450px;
      margin-top: -400px;
    }

    /* CONTACT */
    #contact-form {
      width: 60%;
      margin: 0 auto;
      margin-bottom: 30px;
    }

    #contact-form input[type="email"], #contact-form input[type="text"], #contact-form textarea {
      width: 100%;
      border: 1px solid #ebebeb;
      display: block;
      margin: 20px 0px;
      padding: 20px;
    }

    #contact-form input:hover {
      border-color: #414141;
    }

    #contact-form input[type="submit"] {
      width: 100%;
      padding: 20px;
      border: 0;
      background: rgb(41, 221, 116);
      cursor: pointer;
      color: #fff;
      font-weight: bold;
    }

    #contact-form input[type="submit"]:hover {
      background: #26A65B;
    }

    /* FOOTER */
    footer {
      background-color: #0B0C10;
      color: #fff;
    }
    footer a {
        color: #fff;
        text-decoration: none;
    }
    footer a:hover {
      color:#19B5FE;
      text-decoration: underline;
    }
    footer .footer-menu {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .footer-item {
      flex: 1;
      text-align: left;
      flex-basis: 200px;
    }
    .footer-item h2 {
      text-align: left;
    }
    .footer-item h2::after {
      background-color: #ebebeb;
      content: " ";
      width: 50px;
      margin-left: 0px;
    }
    .footer-item ul {
      display: flex;
      flex-direction: column;
      margin-top: 10px;
      padding: 0px;
    }
    .footer-item ul li {
      list-style: none;
      margin-bottom: 5px;
      font-size: 14px;
    }
    footer .social {
      display: flex;
      justify-content: center;
    }
    footer .social ul {
      display: flex;
      flex-direction: row;
      margin-top: 10px;
      padding: 0px;
    }
    footer .social ul li {
      list-style: none;
      margin-right: 10px;
    }
    footer .social ul li a {
      color: #ebebeb;
      font-size: 16px;
    }
    footer .meta-content {
      font-size: 14px;
      text-align: center;
    }
    footer .meta-content a {
      color: #19B5FE;
    }
    @media only screen and (max-width: 1024px) {
      .features {
        flex-wrap: wrap;
      }
      footer h2 {
        font-size: 140%;
      }
      #why-content .meta {
        flex-direction: row;
      }
    }
    @media only screen and (max-width: 768px) {
      .logo {
        width: 160px;
      }
      .links {
        display: none;
      }
      #sidebar-menu-btn {
        display: inline;
      }
      #contact-form {
        width: 80%;
      }
      .footer-item {
        flex-basis: 50%;
      }
    }
    @media only screen and (max-width: 600px) {
      header {
        padding: 5px 0px;
      }
      .content-width { 
        width: 90%;
      }
      #contact-form {
        width: 100%;
      }
      .heading {
        font-size: 28px;
      }
      .feature {
        flex-basis: 100%;
      }
      .meta {
        flex-direction: column;
      }
      .meta > a {
        text-align: center;
        margin-left: 0px;
        margin-bottom: 10px;
      }
      footer h2 {
        font-size: 110%;
      }
    }

    /* Create two equal columns that floats next to each other */
    .column {
      float: left;
      width: 50%;
      padding: 10px;
      height: auto; /* Should be removed. Only for demonstration */
    }

    .left {
      width: 70%;
    }

    .right {
      width: 30%;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
      }
    }

    .badge {
      background-color: blue;
      color: white;
      padding: 4px 8px;
      text-align: center;
      border-radius: 5px;
    }
    

  </style>
</head>

<body>
  <header>
    <div class="menu content-width" style="border-bottom: 1px solid #b1b1b1; padding-bottom: 10px;">
      <div class="logo">
        <a href="<?=base_url()?>">
          <amp-img src="<?=base_url()?>assets/img/logo/new_logo_pu.png" layout="responsive" width="180" height="60"></amp-img>
        </a>
      </div>
      <div class='links'>
        <?php foreach ($this->menu_nav as $key => $value): ?>
            <a class="link" href="<?=$value['link_menu']?>"><?=$value['name_menu_nav']?></a>
        <?php endforeach ?>
        <!-- <a class="link" href="#about">About</a>
        <a class="link" href="#products">Products</a>
        <a class="link" href="#why-dessiner">Why Dessiner?</a>
        <a class="link" href="#contact">Contact</a> -->
      </div>
      <button id="sidebar-menu-btn" on="tap:sidebar.toggle">☰</button>
    </div>
  </header>
  <amp-sidebar id="sidebar" layout="nodisplay" side="right">
    <div class="amp-custom-sidebar-header">
      <div role="button" aria-label="close sidebar" on="tap:sidebar.toggle" tabindex="0" id="sidebar-close">✕</div>
    </div>
    <ul class="sidebar-menu">
      <?php foreach ($this->menu_nav as $key => $value): ?>
        <li class="sidevar-nav-item"><a href="<?=$value['link_menu']?>" class="sidebar-nav-link"><?=$value['name_menu_nav']?></a></li>
        <!-- <a class="link" href="<?=$value['link_menu']?>"><?=$value['name_menu_nav']?></a> -->
      <?php endforeach ?>
      <!-- <li class="sidevar-nav-item"><a href="#about" class="sidebar-nav-link">About</a></li>
      <li class="sidevar-nav-item"><a href="#products" class="sidebar-nav-link">Products</a></li>
      <li class="sidevar-nav-item"><a href="#why-dessiner" class="sidebar-nav-link">Why Dessiner?</a></li>
      <li class="sidevar-nav-item"><a href="#contact" class="sidebar-nav-link">Contact</a></li> -->
    </ul>
  </amp-sidebar>

  <section id="about">
    <div class="content content-width">
      <div class="row">
        <div class="column left">
          <h2 class="text-capitalize"><?=$detail['Title']?></h2>
            <small><?=tgl_ina($detail['CreateAT'])?></small>
            <a href="<?=blogs_url_file?>upload/<?=$detail['Images']?>" target="_blank"><img src="<?=blogs_url_file?>upload/<?=$detail['Images']?>" style="width:100%"></a><br><br>
            <span class="badge"><?=$detail['Name']?></span>
            <?=$detail['Content']?>
        </div>
        <div class="column right">
          <h2>Recent PUCEL</h2>
          <?php foreach ($recent_pucel as $key => $value): ?>
            <a href="<?=base_url()?>/pucel/<?=$value['ID_title']?>"><h3><strong><?=$value['Title']?></strong></h3></a>
            <span class="badge"><?=$value['Name']?></span><br><br>
            <hr>
          <?php endforeach ?>
        </div>
      </div>    
    </div>
  </section>
    
  <footer>
    <div class="content content-width">
      <div class="meta-content">
        <p style="float: left">&#169; 2023 <a href="<?=base_url()?>">Podomoro University</a>. All Rights Reserved.</p>
        <p style="float: right">
          <?php foreach ($this->footer_nav as $key => $value): ?>
            <a href="<?=$value['link_footer']?>"><?=$value['name_footer_nav']?></a> 
            <?php if ($key+1 != count($this->footer_nav)): ?>
              |
            <?php endif ?>
          <?php endforeach ?>
        </p>
      </div>
    </div>
  </footer>
</body>

</html>