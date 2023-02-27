<?php
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSS</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>\
  <?php
  if(isset($_SESSION["kim"])){
    require_once('server.php');
    $kim = $_SESSION['kim'];
    $sql = "select * from users WHERE id = '$kim'";
    $sonuc = mysqli_query($connection,$sql);

    while($b = mysqli_fetch_array($sonuc)){
      $username = $b['username'];

    }
    echo'
<div class="bg-dark">

<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand nav-link active bg-primary ">Code.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="Html.php">Html</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="python.php">Python</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white bg-primary " href="CSS.php">CSS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="Javascript.php">JavaScript</a>
        </li>
      </ul>
      <form class="d-flex">
        <a class="navbar-brand nav-link active bg-primary " > '.$username.' </a>
         <a  class="navbar-brand nav-link active bg-primary" href = "comment.php" >Comment/Ask Question</a>
        <a class="navbar-brand nav-link active bg-primary"  href="exit.php" >Exit</a>
      
      </form>
    </div>
  </div>

</nav>
<div class="p-1 bg-light border mt-5"></div>
<style type="text/css">
  .card {
    width:350px
    margin:15;
  }

</style>
<div class="ms-3  me-3">


<div class=" card ms-2 mt-1 ">
  <div class="card-header ">  <h5 class="fw-bold"> Information about CSS:</h5></div>
  <div class="card-body p">
  <p class ="text-right ms-2"><span class=" h5 fw-bold">CSS (Cascading Style Sheets)</span> is a stylesheet language used to design the webpage to make it attractive. The reason for using this is to simplify the process of making web pages presentable. It allows you to apply styles to web pages. More importantly, it enables you to do this independent of the HTML that makes up each web page.</p> 
  <ul> <li><span = class=" fw-bold">Base for web development:</span> HTML and CSS is the basic skill that every web developer should know. It is the basic skill that is required for building a website.</li>
          <li><span = class=" fw-bold">Makes your website look attractive:</span>  A website that’s dull and plain will not attract the user most probably, so adding some style would surely make your website presentable to the user.</li>
          <li><span = class="fw-bold">Makes the design come live:</span>A web developer is responsible for making the design given to him as a live product. It is used for styling to develop the design of the website.</li>
           <li><span = class="fw-bold">Increases user experience of website:</span> A website with a simple yet beautiful UI would help the users to go through the website easily. It is used to make the user interface better.</li>
           <li><span = class=" fw-bold">More career opportunities:</span>  Since CSS is a basic requirement while learning Web Development, therefor there are abundant career opportunities for it. As a freelancer too you can land up to many projects.</li>
          </ul>
</div>
</div>

<div class="card ms-2 mt-1">
      <div class="card-header"><h5 class="fw-bold"> What is CSS :</h5></div>
      <div class="card-body p">
        <!-- <h4 class="card-title">Sıfırdan İleri Seviye Web Programlama</h4> -->
        <p><ul> <li>CSS stands for Cascading Style Sheets .</li>
          <li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media.</li>
          <li>CSS saves a lot of work. It can control the layout of multiple web pages all at once.</li>
          <li>External stylesheets are stored in CSS files.</li> 
          </ul></p>
        </div>
      </div>

      <div class="card ms-2 mt-1">
      <div class="card-header"><h4> Example Explained</h4></div>
      <div class="card-body p">
        <!-- <h4 class="card-title">Sıfırdan İleri Seviye Web Programlama</h4> -->
        <p><ul><li>The <code>p</code> Is a selector in CSS (it points to the HTML element you want to style:<code>&lt;p&gt;</code>)</li>
          <li>The <code>color</code> is a property, and <code>red</code> is the property value</li>
          <li>The <code>text-align</code> text-alignis a property, and <code>center</code>is the property value </li>
          <li><span class="fw-bold">Note:</span> Do not add a space between the property value and the unit:</li>
          <p>Incorrect (space): <code>margin-left: 20 px;</code><br>Correct (nospace): <code>margin-left: 20 px;</code></p>
        </div>
      </div> 

<div class="row ms-auto mt-1 p1 ">
  <div class="col-md-4 ">
  <div class="card mt-1">
  <img class="card-img-top" src="img/css.PNG">
  <div class="card-body ">
    <h4 class="card-title fw-bold">CSS Language</h4>
    <p class="card-text text-right  "> <ul><li>Cascading Style Sheets, fondly referred to as CSS, is a simply designed language intended to simplify the process of making web pages presentable. CSS allows you to apply styles to web pages. More importantly, CSS enables you to do this independent of the HTML that makes up each web page.</li>
   <li>CSS is easy to learn and understand, but it provides powerful control over the presentation of an HTML document.</li></p>
    <li>In the <span = class="fw-bold text-danger">body</span> element, we will give the title of the page using <span = class="fw-bold text-danger">h1 </span>tag after that we will add an <span = class="fw-bold text-danger">image</span> of him in the img tag with some caption. We will create another div tag and write all the contents (using p tags). We have also given<span = class="fw-bold text-danger"> ID</span> for each tag so that we can beautify the design using respective-ID in the CSS file.</li>
    <li>In the CSS section we have basically maintained a central design and used <span = class="fw-bold text-danger">box-shadow </span>to create box effect around the main content.</li></ul>
  </div>
  </div>
  </div>


<div class="col-md-4 p1">
<div class="card mt-1">
  <img class="card-img-top" src="img/css0.PNG">
  <div class="card-body mb-1">
    <h4 class="card-title fw-bold">Why to use CSS ?</h4>CSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes.</p>
    <ul> 
    <li><span = class="fw-bold text-danger">CSS saves time:</span> You can write CSS once and reuse the same sheet in multiple HTML pages.</li>
    <li><span = class="fw-bold text-danger">Easy Maintenance: </span>To make a global change simply change the style, and all elements in all the webpages will be updated automatically.</li>
    <li><span = class="fw-bold text-danger"> Search Engines: </span>CSS is considered a clean coding technique, which means search engines won’t have to struggle to “read” its content.</li> 
    <li><span = class="fw-bold text-danger"> Superior styles to HTML:</span>CSS has a much wider array of attributes than HTML, so you can give a far better look to your HTML page in comparison to HTML attributes.</li>
   <li><span = class="fw-bold text-danger bg-primary">Offline Browsing:</span>CSS can store web applications locally with the help of an offline cache. Using this we can view offline websites.</li></ul>
     
    </div>
  </div>
</div>

<div class="col-md-4 p1 ">
  <div class="card mt-1 ">
    <img class="card-img-top" src="img/css1.PNG">
    <div class="card-body mb-0">
      <h4 class="card-title fw-bold">CSS Designed:</h4>
      <p class="card-text"><ul><li>CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts.</li><li> This separation can improve content accessibility; provide more flexibility and control in the specification of presentation characteristics; enable multiple web pages to share formatting by specifying the relevant CSS in a separate .css file, which reduces complexity and repetition in the structural content; and enable the .css file to be cached to improve the page load speed between the pages that share the file and its formatting.</li>
      <li>The name cascading comes from the specified priority scheme to determine which style rule applies if more than one rule matches a particular element. This cascading priority scheme is predictable.</li>
      <li>The CSS specifications are maintained by the World Wide Web Consortium (W3C). Internet media type (MIME type) text/css is registered for use with CSS by RFC 2318 (March 1998). The W3C operates a free CSS validation service for CSS documents.</li></ul></p>
      
      </div>
    </div>
  </div>
</div> 

<div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> CSS Backgrounds :</h4></div>
      <div class="card-body p">
        <ul> <li>The CSS background properties are used to add background effects for elements.</li>
          <li><code>background-color</code></li>
          <li><code>background-image</code></li>
          <li><code>background-repeat</code></li>
          <li><code>background-attachment</code></li>
          <li><code>background-position</code></li>
          We can set the background color for any HTML elements<ul></p>
        </div>
      </div>

      <div class="card ms-2 mt-1">
      <div class="card-header"><h5> Important Points about CSS :</h5></div>
      <div class="card-body p">
        <p><h5 class="fw-bold text-danger"> ABox Model:</h5>Everything displayed by CSS is a box. Understanding how the CSS Box Model works is therefore a core foundation of CSS</p>
        <h5 class="fw-bold text-danger"> Selectors:</h5>To apply CSS to an element you need to select it. CSS provides you with a number of different ways to do this, and you can explore them in this module.</p>
        <p><h5 class="fw-bold text-danger"> The cascade:</h5>Sometimes two or more competing CSS rules could apply to an element. In this module find out how the browser chooses which to use, and how to control this selection.</p>
        <p><h5 class="fw-bold text-danger"> Specificity:</h5>This module takes a deeper look at specificity, a key part of the cascade.</p>
        <p><h5 class="fw-bold text-danger"> Borders:</h5>A border provides a frame for your boxes. In this module find out how to change the size, style and color of borders using CSS.</p>
        </div>
      </div>


<div class="mt-2">
 <ul class="pagination justify-content-end">
      <li class="page-item  active"><a href="python.php" class="page-link">Previous</a></li>
      <li class="page-item"><a href="#" class="page-link">Home</a></li>
      <li class="page-item"><a href="html.php" class="page-link">Html</a></li>
      <li class="page-item"><a href="python.php" class="page-link">Python</a></li>
      <li class="page-item active"><a href="Javascript.php" class="page-link">Next</a></li> 
    </ul>
    </div>

    <div class="p-1 bg-light border"></div>
  <div class="footer">
  <div class="container">
    <span> For more Information : </span>
        <ul>
        <li class="nav-item"><img src="img/facebook.png"> code@face</li>
         <li class="nav-item"><img src="img/insta.png">code@inst</li>
          <li class="nav-item"><img src="img/yout.png">code.youtube</li>
           <li class="nav-item"><img src="img/tw.png">@code.com</li>
      </ul>    
  </div>
</div>
</div>';
}else{
    echo " hatttta";
  }
?>
</body>
</html>