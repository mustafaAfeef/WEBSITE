<?php
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>JavaScript</title>
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
          <a class="nav-link  text-white" href="python.php">Python</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="CSS.php">CSS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white bg-primary " href="Javascript.php">JavaScript</a>
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
  <div class="card-header">  <h5 class="fw-bold"> Information about JavaScript:</h5></div>
  <div class="card-body p">
  <p class ="text-right ms-2">JavaScript and Java are completely different languages, both in concept and design. JavaScript was invented by Brendan Eich in 1995, and became an ECMA standard in 1997. ECMA-262 is the official name of the standard. ECMAScript is the official name of the language <ul><li>JavaScript was initially created to “make web pages alive”.</li>
<li>The programs in this language are called scripts. They can be written right in a web page’s HTML and run automatically as the page loads.</li>
<li>Scripts are provided and executed as plain text. They don’t need special preparation or compilation to run.</li></ul></p> 
</div>
</div>

<div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> What is JavaScript ?</h4></div>
      <div class="card-body p">
        <!-- <h4 class="card-title">Sıfırdan İleri Seviye Web Programlama</h4> -->
        <p><ul> <li>JavaScript is a programming language for use in HTML pages</li>
          <li>Invented in 1995 at Netscape Corporation(LiveScript)</li>
          <li>JavaScript has nothing to do with Java</li>
          <li>JavaScript programs are run by an interpreter built into the users web browser (not on the server)</li></ul></p>
        </div>
      </div>

      <div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> What can JavaScript Do?</h4></div>
      <div class="card-body p">
        <p><ul> <li>JavaScript can dynamically modify an HTML page</li>
          <li>JavaScript can react to user input</li>
          <li>JavaScript can validate user input</li>
          <li>JavaScript can be used to create cookies (yum!)</li> 
          <li>JavaScript is a full-featured programming language</li>
          <li>JavaScript user interaction does not require any communication with the server</li></ul></p>
        </div>
      </div>

      <div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> JavaScript Display Possibilities</h4></div>

      <div class="card-body p">
        <h5>JavaScript can "display" data in different ways:</h5>
        <!-- <h4 class="card-title">Sıfırdan İleri Seviye Web Programlama</h4> -->
        <p><ul><li> Writing into an HTML element, using<code class="fw-bold"> innerHTML.</code></li>
          <li>Writing into the HTML output using<code class="fw-bold"> document.write()</code></li>
          <li>Writing into an alert box, using<code class="fw-bold"> window.alert().</code></li>
          <li>Writing into the browser console, using<code class="fw-bold"> console.log().</code></li> 
          <h5 class="text-danger fw-bold"># Using innerHTML :</h5>
          <li>To access an HTML element, JavaScript can use the<code class="fw-bold">document.getElementById(id)</code>method.</li>
          <li>The <code class="fw-bold">id</code> attribute defines the HTML element. The<code class="fw-bold"> innerHTML</code>property defines the HTML content</li></ul></p>
        </div>
      </div> 

<div class="row ms-auto mt-1 p1 ">
  <div class="col-md-4 ">
  <div class="card mt-1">
  <img class="card-img-top" src="img/js3.png">
  <div class="card-body mb-4">
    <h4 class="card-title fw-bold">What can in-browser JavaScript do?</h4>
    <p class="card-text text-right">Modern JavaScript is a “safe” programming language. It does not provide low-level access to memory or CPU, because it was initially created for browsers which do not require it.
      <p>JavaScript’s capabilities greatly depend on the environment it’s running in. For instance, Node.js supports functions that allow JavaScript to read/write arbitrary files, perform network requests, etc.</p> 
      <p>In-browser JavaScript can do everything related to webpage manipulation, interaction with the user, and the webserver.</p>
      <h5 class="fw-bold">For instance, in-browser JavaScript is able to:</h5>
      <ul><li>Add new HTML to the page, change the existing content, modify styles.</li>
        <li>React to user actions, run on mouse clicks, pointer movements, key presses.</li>
        <li>Get and set cookies, ask questions to the visitor, show messages.</li>
        <li>Send requests over the network to remote servers, download and upload files (so-called AJAX and <code>COMET</code> technologies).</li>
        <li>Remember the data on the client-side (“local storage”).</li></ul><p>  <br><br></p></p></p> 
  </div>
  </div>
  </div>


<div class="col-md-4 p1">
<div class="card mt-1">
  <img class="card-img-top" src="img/js1.PNG">
  <div class="card-body mb-1">
    <h4 class="card-title fw-bold">What CAN’T in-browser JavaScript do?</h4>
    <p class="card-text text-right ms-2 me-auto mb-4">JavaScript’s abilities in the browser are limited for the sake of a user’s safety. The aim is to prevent an evil webpage from accessing private information or harming the user’s data.<h5 class="fw-bold">Examples of such restrictions include:</h5>
    <ul><li>JavaScript on a webpage may not read/write arbitrary files on the hard disk, copy them or execute programs. It has no direct access to OS functions<p>Modern browsers allow it to work with files, but the access is limited and only provided if the user does certain actions, like “dropping” a file into a browser window or selecting it via an <code>&lt;input&gt;</code>tag</li> <li>Different tabs/windows generally do not know about each other. Sometimes they do, for example when one window uses JavaScript to open the other one. But even in this case, JavaScript from one page may not access the other if they come from different sites (from a different domain, protocol or port).</li><li>JavaScript can easily communicate over the net to the server where the current page came from. But its ability to receive data from other sites/domains is crippled. Though possible, it requires explicit agreement (expressed in HTTP headers) from the remote side. Once again, that’s a safety limitation.</li></ul></p>
    </div>
  </div>
</div>

<div class="col-md-4 p1 ">
  <div class="card mt-1 ">
    <img class="card-img-top" src="img/js5.PNG">
    <div class="card-body mb-4">
      <h4 class="card-title fw-bold">Languages “over” JavaScript</h4>
      <p class="card-text">The syntax of JavaScript does not suit everyone’s needs. Different people want different features.<p>That’s to be expected, because projects and requirements are different for everyone.
      So recently a plethora of new languages appeared, which are transpiled (converted) to JavaScript before they run in the browser.</p><p>Modern tools make the transpilation very fast and transparent, actually allowing developers to code in another language and auto-converting it “under the hood”</p>
      <ul><li><code class="fw-bold">CoffeeScript </code>:  is a “syntactic sugar” for JavaScript. It introduces shorter syntax, allowing us to write clearer and more precise code. Usually, Ruby devs like it.</li>
      <li><code class="fw-bold">TypeScript</code> is concentrated on adding “strict data typing” to simplify the development and support of complex systems. It is developed by Microsoft.</li>
      <li><code class="fw-bold">Flow </code>also adds data typing, but in a different way. Developed by Facebook.</li>
      <li><code class="fw-bold">Dart </code>is a standalone language that has its own engine that runs in non-browser environments (like mobile apps), but also can be transpiled to JavaScript. Developed by Google.</li>
      <li><code class="fw-bold">Brython</code> is a Python transpiler to JavaScript that enables the writing of applications in pure Python without JavaScript.</li>
    </ul></p>
      </div>
    </div>
  </div>
</div>

<div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold"> How do engines work?</h4></div>
      <div class="card-body p">
        <p> Engines are complicated. But the basics are easy.
          <ul> <li>The engine (embedded if it’s a browser) reads (“parses”) the script.</li>
          <li>Then it converts (“compiles”) the script to the machine language.</li>
          <li>And then the machine code runs, pretty fast.</li>
          </ul>The engine applies optimizations at each step of the process. It even watches the compiled script as it runs, analyzes the data that flows through it, and further optimizes the machine code based on that knowledge.</p>
        </div>
      </div>

      <div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold">The best Code editors</h4></div>
      <div class="card-body p">
        <p>A code editor is the place where programmers spend most of their time.<p>There are two main types of code editors: IDEs and lightweight editors. Many people use one tool of each type.</p> 
        </div>
      </div>

      <div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold">The Frist Code editor is IDE</h4></div>
      <div class="card-body p ">
        <p>The term IDE (Integrated Development Environment) refers to a powerful editor with many features that usually operates on a “whole project.” As the name suggests, it’s not just an editor, but a full-scale “development environment.”</p> <p>An IDE loads the project (which can be many files), allows navigation between files, provides autocompletion based on the whole project (not just the open file), and integrates with a version management system (like git), a testing environment, and other “project-level” stuff</p><p>If you haven’t selected an IDE yet, consider the following options:</p><ul><li><a href="https://code.visualstudio.com/">Visual Studio Code.</a>(cross-platform, free)</li>
          <li><a href="https://www.jetbrains.com/webstorm/">WebStorm.</a>(cross-platform, paid).</li></ul></p>
        </div>
      </div>

       <div class="card ms-2 mt-1">
      <div class="card-header"><h4 class="fw-bold">The second Code editor is Lightweight </h4></div>
      <div class="card-body p">
        <p>“Lightweight editors” are not as powerful as IDEs, but they’re fast, elegant and simple.</p>
        <p>They are mainly used to open and edit a file instantly.</p><p>The following options deserve your attention:</p><ul><li><a href="https://www.jetbrains.com/webstorm/">WebStorm.</a>(cross-platform, paid).</li>
        <li><a href="https://www.jetbrains.com/webstorm/">WebStorm.</a>(cross-platform, paid).</li>
      <li><a href="https://www.jetbrains.com/webstorm/">WebStorm.</a>(cross-platform, paid).</li></ul></p>
        </div>
      </div>

<div class="mt-2">
 <ul class="pagination justify-content-end">
      <li class="page-item  active "><a href="CSS.php" class="page-link">Previous</a></li>
      <li class="page-item"><a href="#" class="page-link">Home</a></li>
      <li class="page-item"><a href="Html.php" class="page-link">Html</a></li>
      <li class="page-item"><a href="python.php" class="page-link">Python</a></li>
      <li class="page-item disabled"><a href="#" class="page-link">Next</a></li> 
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