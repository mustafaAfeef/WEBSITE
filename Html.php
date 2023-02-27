<?php
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Html</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php
  if(isset($_SESSION["kim"])){
    require_once('server.php');
    $kim = $_SESSION['kim'];
    $sql = "select * from users WHERE id = '$kim'";
    $sonuc = mysqli_query($connection,$sql);

    while($b = mysqli_fetch_array($sonuc)){
      $username = $b['username'];

    }
    echo '
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
          <a class="nav-link  text-white bg-primary " href="Html.php">Html</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="python.php">Python</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="CSS.php">CSS</a>
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


<div class=" card ms-2 mt-1">
  <div class="card-header">  <h5 class="fw-bold"> Information about HTML:</h5></div>
  <div class="card-body p">
  <p class ="text-right ms-2">HTML stands for HyperText Markup Language. It is used to design web pages using a markup language. HTML is the combination of Hypertext and Markup language. Hypertext defines the link between the web pages. A markup language is used to define the text document within tag which defines the structure of web pages. This language is used to annotate (make notes for the computer) text so that a machine can understand it and manipulate text accordingly. Most markup languages (e.g. HTML) are human-readable. The language uses tags to define what manipulation has to be done on the text. </p> 
</div>
</div>

<div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> What it is HTML :</h4></div>
      <div class="card-body p">
        <!-- <h4 class="card-title">Sıfırdan İleri Seviye Web Programlama</h4> -->
        <p><ul> <li>HTML stands for Hyper Text Markup Language</li>
          <li>HTML is the standard markup language for creating Web pages</li>
          <li>HTML describes the structure of a Web page</li>
          <li>HTML consists of a series of elements</li> 
          <li>HTML elements tell the browser how to display the content</li>
          <li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li></ul></p>
        </div>
      </div>

      <div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> Example Explained</h4></div>
      <div class="card-body p">
        <!-- <h4 class="card-title">Sıfırdan İleri Seviye Web Programlama</h4> -->
        <p><ul> <li>The <code class="fw-bold">&lt;!DOCTYPE html&gt;</code> declaration defines that this document is an HTML5 document</li>
          <li>The <code class="fw-bold">&lt;html&gt;</code>element is the root element of an HTML page</li>
          <li>The <code class="fw-bold">&lt;head&gt;</code> element contains meta information about the HTML page</li>
          <li>The <code class="fw-bold">&lt;title&gt;</code>element specifies a title for the HTML page (which is shown in the browsers title bar or in the pages tab)</li> 
          <li>The<code class="fw-bold">&lt;body&gt;</code> element defines the documents body, and is a container for all the visible</li>
          <li>The <code class="fw-bold">&lt;h1&gt;</code> element defines a large heading</li>
            <li>The <code>&lt;p&gt;</code> element defines a paragraph</li></ul></p>
        </div>
      </div> 

<div class="row ms-auto mt-1 p1 ">
  <div class="col-md-4 ">
  <div class="card mt-1">
  <img class="card-img-top" src="img/html.PNG">
  <div class="card-body mb-4">
    <h4 class="card-title fw-bold">HTML language</h4>
    <p class="card-text text-right  ">HTML is a markup language that web browsers use to interpret and compose text, images, and other material into visual or audible web pages. Default characteristics for every item of HTML markup are defined in the browser, and these characteristics can be altered or enhanced by the web page designers additional use of CSS. Many of the text elements are found in the 1988 ISO technical report TR 9537 Techniques for using SGML, which in turn covers the features of early text formatting languages such as that used by the RUNOFF command developed in the early 1960s for the CTSS (Compatible Time-Sharing System) operating system. these formatting commands were derived from the commands used by typesetters to manually format documents. However, the SGML concept of generalized markup is based on elements (nested annotated ranges with attributes) rather than merely print effects, with also the separation of structure and markup; HTML has been progressively moved in this direction with CSS.</p> 
  </div>
  </div>
  </div>


<div class="col-md-4 p1">
<div class="card mt-1">
  <img class="card-img-top" src="img/html0.PNG">
  <div class="card-body mb-2">
    <h4 class="card-title fw-bold">Why to use HTML ?</h4>
    <p class="card-text text-right ms-2 me-auto mb-4"> It helps to structure our website well. The way a skeleton system gives a structure to the human body, in a similar manner, it acts as a skeleton for a website, without it a website cannot be made. If you want to work as a Software Developer especially in the Web Development domain, then learning HTML is a must, because without knowledge of it you cannot build a website. </p>
    <ul> 
    <li> <h5 class="text-danger fw-bold">Base for creating websites:</h5> It is the basic necessity a developer should know while building a website from scratch.</li>
    <li><h5 class="text-danger fw-bold">Learn web development: </h5>It is the first step towards learning Web Development. Once you learn it, you can build simple, static websites very easily.</li>
    <li><h5 class="text-danger fw-bold"> Can become freelancer:</h5>Since web development has the best scope in freelancing, therefore learning it will surely help you to get the best deals of website development in the market.</li></ul>
     
    </div>
  </div>
</div>

<div class="col-md-4 p1 ">
  <div class="card mt-1 ">
    <img class="card-img-top" src="img/html1.PNG">
    <div class="card-body">
      <h4 class="card-title fw-bold">HTML page structure:</h4>
      <p class="card-text">The basic structure of an HTML page is laid out below. It contains the essential building-block elements (i.e. doctype declaration, HTML, head, title, and body elements) upon which all web pages are created.
      <ul><li> <code class="fw-bold">&lt; DOCTYPE! html&gt; </code>: This is the document type declaration (not technically a tag). It declares a document as being an HTML document. The doctype declaration is not case-sensitive.</li>
      <li><code class="fw-bold">&lt;html&gt;:</code> This is called the HTML root element. All other elements are contained within it.</li>
      <li><code class="fw-bold">&lt;head&gt;:</code>The head tag contains the “behind the scenes” elements for a webpage. Elements within the head aren’t visible on the front-end of a webpage.</li>
      <li><code class="fw-bold">&lt;body&gt;:</code>The body tag is used to enclose all the visible content of a webpage. In other words, the body content is what the browser will show on the front-end.</li></ul></p>
      </div>
    </div>
  </div>
</div>

<div class="card ms-2 mt-1">
  <div class="card-header"> <h4 class="fw-bold"> There are two ways to specify the URL in the src attribute:<h4></div>
  <div class="card-body p">
    <ul><li> Absolute URL - Links to an external image that is hosted on another website. Example:<span class="text-primary">src="https://www.w3schools.com/images/img_girl.jpg"</span> .</li>
       <p > <span class="fw-bold">Notes: </span>External images might be under copyright. If you do not get permission to use it, you may be in violation of copyright laws. In addition, you cannot control external images; it can suddenly be removed or changed.</p>
       <li>Relative URL - Links to an image that is hosted within the website. Here, the URL does not include the domain name. If the URL begins without a slash, it will be relative to the current page. Example:<span class="text-primary">  src="img_girl.jpg".</span> </li>
       <p><span class="fw-bold"> Tip:</span> It is almost always best to use relative URLs. They will not break if you change domain.</p>
      </ul>
</div>
  </div>

<div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> Features of HTML:</h4></div>
      <div class="card-body p">
        <p><ul> <li>It is easy to learn and easy to use</li>
          <li>It is platform-independent.</li>
          <li>Images, videos, and audio can be added to a web page.</li>
          <li>Hypertext can be added to the text.</li> 
          <li>It is a markup language.</li></ul></p>
        </div>
      </div>

      <div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> Advantages:</h4></div>
      <div class="card-body p">
        <p><ul> <li>HTML is used to build websites.</li>
          <li>It is supported by all browsers.</li>
          <li>It can be integrated with other languages like CSS, JavaScript, etc..</li></ul></p>
        </div>
      </div>

      <div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> Disadvantages:</h4></div>
      <div class="card-body p">
        <p><ul> <li>HTML can only create static web pages. For dynamic web pages, other languages have to be used.</li>
          <li>A large amount of code has to be written to create a simple web page.</li>
          <li>The security feature is not good.</li></ul></p>
             
        <p><ul> <li><a href="https://www.w3schools.com/html/default.asp">HTML</a>You can click here to see more information about Html.</li></p>

        </div>
      </div> 

   
<div class="mt-2">
 <ul class="pagination justify-content-end">
      <li class="page-item  active "><a href="Home.php" class="page-link">Previous</a></li>
      <li class="page-item"><a href="#" class="page-link">Home</a></li>
      <li class="page-item"><a href="CSS.php" class="page-link">CSS</a></li>
      <li class="page-item"><a href="Javascript.php" class="page-link">JavaScript</a></li>
      <li class="page-item active"><a href="python.php" class="page-link">Next</a></li> 
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
    echo " You must come from the index page";
    echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\">\n";
  }
?>
</body>
</html>