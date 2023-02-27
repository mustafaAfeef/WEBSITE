exit.php<?php
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>python</title>
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
          <a class="nav-link  text-white bg-primary " href="python.php">Python</a>
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
  <div class="card-header">  <h5 class="fw-bold"> Information about Python:</h5></div>
  <div class="card-body p">
  <p class ="text-right ms-2">Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.
<br>It is used for:
<ul><li> web development (server-side),</li>
<li>software development</li>
<li>mathematics</li>
<li>system scripting</li></ul></p> 
</div>
</div>

<div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> What can Python Do:</h4></div>
      <div class="card-body p">
        <!-- <h4 class="card-title">Sıfırdan İleri Seviye Web Programlama</h4> -->
        <p><ul> <li>Python can be used on a server to create web applications.</li>
          <li>Python can be used alongside software to create workflows.</li>
          <li>Python can connect to database systems. It can also read and modify files.</li>
          <li>Python can be used to handle big data and perform complex mathematics.</li> 
          <li>Python can be used for rapid prototyping, or for production-ready software development.</li></ul></p>
        </div>
      </div>

      <div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> Why Python?</h4></div>
      <div class="card-body p">
      <p><ul> <li>Python works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc).</li>
      <li>Python has a simple syntax similar to the English language.</li>
      <li>Python has syntax that allows developers to write programs with fewer lines than some other programming languages.</li>
      <li>Python runs on an interpreter system, meaning that code can be executed as soon as it is written. This means that prototyping can be very quick.</li> 
      <li>Python can be treated in a procedural way, an object-oriented way or a functional way.</li></ul></p>
        </div>
      </div>

     <!--  <div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> Example Explained</h4></div>
      <div class="card-body p">
        <p><ul> <li>The <code class="fw-bold">&lt;!DOCTYPE html&gt;</code> declaration defines that this document is an HTML5 document</li>
          <li>The <code class="fw-bold">&lt;html&gt;</code>element is the root element of an HTML page</li>
          <li>The <code class="fw-bold">&lt;head&gt;</code> element contains meta information about the HTML page</li>
          <li>The <code class="fw-bold">&lt;title&gt;</code>element specifies a title for the HTML page (which is shown in the browsers title bar or in the pages tab)</li> 
          <li>The<code class="fw-bold">&lt;body&gt;</code> element defines the documents body, and is a container for all the visible</li>
          <li>The <code class="fw-bold">&lt;h1&gt;</code> element defines a large heading</li>
            <li>The <code>&lt;p&gt;</code> element defines a paragraph</li></ul></p>
        </div>
      </div> 
 -->
<div class="row ms-auto mt-1 p1 ">
  <div class="col-md-4 ">
  <div class="card mt-1">
  <img class="card-img-top" src="img/python0.PNG">
  <div class="card-body mb-4">
    <h4 class="card-title fw-bold">Python language</h4>
    <p class="card-text text-right mb-1 "><ul><li>The most recent major version of Python is Python 3, which we shall be using in this tutorial. However, Python 2, although not being updated with anything other than security updates, is still quite popular.</li>
    <li>Python was designed for readability, and has some similarities to the English language with influence from mathematics.</li> 
    <li>Python uses new lines to complete a command, as opposed to other programming languages which often use semicolons or parentheses.</li>
    <li>Python relies on indentation, using whitespace, to define scope; such as the scope of loops, functions and classes. Other programming languages often use curly-brackets for this purpose.</li></ul></p> 
  </div>
  </div>
  </div>


<div class="col-md-4 p1">
<div class="card mt-1">
  <img class="card-img-top" src="img/python1.PNG">
  <div class="card-body mb-3">
    <h4 class="card-title fw-bold">Why to use Python ?</h4>
    <p class="card-text text-right ms-2 me-auto mb-4"><ul> Python is commonly used for developing websites and software, task automation, data analysis, and data visualization. Since its relatively easy to learn, Python has been adopted by many non-programmers such as accountants and scientists, for a variety of everyday tasks, like organizing finances.</p>
    <li></h5> Python is popular and widely supported. Python is quickly ascending to the forefront of the most popular programming languages in the world. </li>
    <li>Writing Python code is easy, which speeds up development.</li>
    <li></h5>Reading Python code is intuitive, making maintenance a breeze.</li>
   <li><h5 class="text-danger fw-bold"></h5>Python gives you tried and tested scalability.</li></ul>
     
    </div>
  </div>
</div>

<div class="col-md-4 p1 ">
  <div class="card mt-1 ">
    <img class="card-img-top" src="img/python5.PNG">
    <div class="card-body mb-0">
      <h4 class="card-title fw-bold">Base language of Python</h4>
      <p class="card-text">You cant say that Python is written in some programming language, since Python as a language is just a set of rules (like syntax rules, or descriptions of standard functionality). So we might say, that it is written in English :). However, mentioned rules can be implemented in some programming language. Hence, if you send a string like import this to that program called interpreter, itd return you "Zen of Python".</p>

        <ul><p class="fw-bold">There are other implementations:
         <li> <code class="fw-bold"> IronPython</code>: (Python running on .NET).</li>
      <li><code class="fw-bold">Jython</code>(Python running on the Java Virtual Machine).</li>
      <li><code class="fw-bold">PyPy</code>(A fast python implementation with a JIT compiler).</li>
      <li><code class="fw-bold">Stackless</code>Python (Branch of CPython supporting microthreads).</li>
      </ul></p>
      </div>
    </div>
  </div>
</div>

<div class="card ms-2 mt-1">
  <div class="card-header"> <h4 class="fw-bold">Advantages:<h4></div>
  <div class="card-body p">
    <p>Python is a high-level, interpreted, and general-purpose dynamic programming language that focuses on code readability. It has fewer steps when compared to Java and C. It was founded in 1991 by developer Guido Van Rossum. Python ranks among the most popular and fastest-growing languages in the world.</p>
       <p> <h5 class="fw-bold">Advantages : </h5></p>
       <ul><li>Presence of third-party modules </li>
        <li>Extensive support libraries(NumPy for numerical calculations, Pandas for data analytics etc)</li>
        <li>Open source and community development </li>
        <li>Versatile, Easy to read, learn and write</li>
        <li>User-friendly data structures </li>
        <li>High-level language </li>
      </ul>
</div>
  </div>

<div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> Features of Python:</h4></div>
      <div class="card-body p">
        <p>Python is a dynamic, high level, free open source and interpreted programming language. It supports object-oriented programming as well as procedural oriented programming.</p>
       <ul> 
        <li> <h5 class="text-danger fw-bold">Easy to code:</h5> Python is a high-level programming language. Python is very easy to learn the language as compared to other languages like C, C#, Javascript, Java, etc. It is very easy to code in python language and anybody can learn python basics in a few hours or days. It is also a developer-friendly language.</li>
        <li><h5 class="text-danger fw-bold">Free and Open Source: </h5>ython language is freely available at the official website and you can download it from any website.</li>
        <li><h5 class="text-danger fw-bold"> Object-Oriented Language:</h5>One of the key features of python is Object-Oriented programming. Python supports object-oriented language and concepts of classes, objects encapsulation, etc.</li>
       <li><h5 class="text-danger fw-bold"> GUI Programming Support:</h5>Graphical User interfaces can be made using a module such as PyQt5, PyQt4, wxPython, or Tk in python.PyQt5 is the most popular option for creating graphical apps with Python.</li>
       <li><h5 class="text-danger fw-bold"> Interpreted Language:</h5>Python is an Interpreted Language because Python code is executed line by line at a time. like other languages C, C++, Java, etc. there is no need to compile python code this makes it easier to debug our code. The source code of python is converted into an immediate form called bytecode.</li>
     </ul>
        </div>
      </div>

<div class="mt-2">
 <ul class="pagination justify-content-end">
      <li class="page-item  active "><a href="Html.php" class="page-link">Previous</a></li>
      <li class="page-item"><a href="#" class="page-link">Home</a></li>
      <li class="page-item"><a href="CSS.php" class="page-link">CSS</a></li>
      <li class="page-item"><a href="Javascript.php" class="page-link">JavaScript</a></li> 
      <li class="page-item active"><a href="CSS.php" class="page-link">Next</a></li> 
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