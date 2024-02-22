<!-- Begin of html_navbar.php -->


<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">
     <img src="./assets/static/images/header_logo.png" width="30" height="30" class="d-inline-block align-top" alt="" style="margin-right: 10px;">
     Green Foot Foundation
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="./view.php">View data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./submit.php">Submit data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<script>
var textDirection = window.getComputedStyle(document.body, null).getPropertyValue('direction');

console.log(textDirection);

if (textDirection==="ltr") {
  console.log("ltr");
}

if (textDirection==="rtl") {
  document.getElementsByClassName("navbar-nav mw-auto").className = "navbar-nav me-auto";
  console.log("LTR");
}
</script>

<!-- End of html_navbar.php -->
