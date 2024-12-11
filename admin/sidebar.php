<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <?php
  $link = $_SERVER['PHP_SELF'];
  $link_array = explode('/', $link);
  $page = end($link_array);
  ?>

  <li <?php if ($page == "index.php") { ?> class="active nav-item" <?php } else { ?> class="nav-item" <?php } ?>>
    <a class="nav-link" href="index.php">
      <div class="wrapped">
        <i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;&nbsp;
        <span>Dashboard</span>
      </div>
    </a>
  </li>
  <li <?php if ($page == "gallery.php") { ?> class="active nav-item" <?php } else { ?> class="nav-item" <?php } ?>>
    <a class="nav-link" href="gallery.php">
      <div class="wrapped">
        <i class="fas fa-image"></i>&nbsp;&nbsp;&nbsp;
        <span>Gallery</span>
      </div>
    </a>
  </li>
  <li <?php if ($page == "contact.php") { ?> class="active nav-item" <?php } else { ?> class="nav-item" <?php } ?>>
    <a class="nav-link" href="contact.php">
      <div class="wrapped">
        <i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;
        <span>Contact Us</span>
      </div>
    </a>
  </li>
  
  <li <?php if ($page == "portfolio.php") { ?> class="active nav-item" <?php } else { ?> class="nav-item" <?php } ?>>
    <a class="nav-link" href="portfolio.php">
      <div class="wrapped">
        <i class="fas fa-briefcase"></i>&nbsp;&nbsp;&nbsp;
        <span>Portfolio</span>
      </div>
    </a>
  </li>

  <li class="list_divider"></li>

  <li class="nav-item signout <?php if ($page == "logout.php") { ?> active <?php } ?>">
    <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
      <div class="wrapped">
        <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;&nbsp;
        <span>Logout</span>
      </div>
    </a>
  </li>
</ul>