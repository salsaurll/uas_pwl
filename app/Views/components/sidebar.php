
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
      <i class="bi bi-grid"></i>
      <span>Home</span>
    </a>
  </li><!-- End Home Nav -->
  <li class="nav-item">
    <a class="nav-link  <?php echo (uri_string() == 'about') ? "" : "collapsed" ?>" href="about">
      <i class="bi bi-person"></i>
      <span>About Us</span>
    </a>
  </li><!-- End About Nav -->
  <li class="nav-item">
    <a class="nav-link  <?php echo (uri_string() == 'contact') ? "" : "collapsed" ?>" href="contact">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li><!-- End Contact Nav -->

  <li class="nav-item">
    <a class="nav-link  <?php echo (uri_string() == 'shop') ? "" : "collapsed" ?>" href="shop">
      <i class="bi bi-shop"></i>
      <span>Shop</span>
    </a>
  </li><!-- End Shop Nav -->

  <li class="nav-item">
    <a class="nav-link  <?php echo (uri_string() == 'cart') ? "" : "collapsed" ?>" href="cart">
      <i class="bi bi-cart-check"></i>
      <span>Cart</span>
    </a>
  </li><!-- End Cart Nav -->

<?php
if (session()->get('role') == 'admin') {
?>
  <li class="nav-item">
    <a class="nav-link  <?php echo (uri_string() == 'product') ? "" : "collapsed" ?>" href="product">
      <i class="bi bi-receipt"></i>
      <span>Product</span>
    </a>
  </li><!-- End Product Nav -->
<?php
}
?>

  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="pages-faq.html">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li> -->
  <!-- End F.A.Q Page Nav -->

</ul>

</aside><!-- End Sidebar-->