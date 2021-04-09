<?php

require_once '../src/setup.php';
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="Project_Website.php">Project Website</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="Project_Website.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Our_Work.php">Our Work</a>
          <li class="nav-item">
          <a class="nav-link" href="Contact-Us.php">Contact Us</a>
            <li class="nav-item">
                <?php if (!empty($loggedInUser)) : ?>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <href class="p-3 mb-2 bg-dark text-white">Hello, <?= $loggedInUser->name ?></a>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    <li class="nav-item">
                        <a class="nav-link" href="Payment.php">Payment</a>

                <?php else: ?>
                    <a class="nav-link" href="register.php">Register</a>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                <?php endif; ?>
        </ul>

        <form class="form-inline mt-2 mt-md-0">

          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-info-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>