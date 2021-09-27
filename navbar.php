<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<nav class="navbar navbar-expand-lg  navbar-light bg-light shadow-sm">
  <div class="container">
    <a href="#" class="navbar-brand">
      <!-- Logo Image -->
      <img src="Images/logo.jpg" width="45" alt="" class=" ">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold">Company</span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav" style="margin-left:250px ;" >
        <li class="nav-item active"><a href="#" class="nav-link " >
            <select class="dropdown" id="dp">
            <option class="dropdown-content">Pate Palo</option>
            <option>Lulu</option>
            <option>PPO LR</option>
            <option>Time</option>
            <option>patepalo</option>
        </select>
    </a></li>
      </ul>
      <ul class="navbar-nav" style="margin-left:500px ;" >
        <!-- <li class="nav-item active"><a href="#" class="nav-link " ><img src="Images/profile.jpg" width="30px"> -->
        <div class="dropdown">
<i style='font-size:24px;margin-right:30px' class='fas'>&#xf0f3;</i>
  <div class="dropdown-content">
    <a href="#">Daniyal add a new order to the list..</a>
    <a href="#">Moin delete the record of ALbert..</a>
    <a href="#">Daniyal add a new order to the list..</a>
    <a href="#">Moin delete the record of ALbert..</a>
    <a href="#">Daniyal add a new order to the list..</a>
    <a href="log.php">See All >></a>
  </div>
</div>
        <div class="dropdown">
  <i style='font-size:24px;' class='fas'>&#xf2bd</i>
  <div class="dropdown-content">
    <a href="#">Louis@gmail.com</a>
    <hr>
    <a href="logout.php" class="btn btn-danger" style="color: white;">Logout</a>
  </div>
</div>


        
        <!-- <li class="nav-item active"><a href="#" class="nav-link " ><img src="Images/profile.jpg" width="30px"> -->
    </a></li>
      </ul>
    </div>
  </div>
</nav>