<style>

#st {

color:#FFF;
font-size:medium;
font-weight:bold;
	
	
}

#st:hover {
	color:#FF0;
	
	
	
}

#s {
	
color:#000;
	
	
}

#s:hover {
	
	color:#FF0;
	background-color:#000;
	
	
}

</style>


<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" id="st"><b>Admin Panel</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li><a href="sales.php" id="st">Sales</a></li>
        <li><a href="User.php" id="st">User</a></li>
        <li>
          <a href="#" id="st"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Maintenace <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="product.php" id="s">Products</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="category.php" id="s">Category</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
<li><a href="logout.php" id="st">Logout</a></li>      
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>
