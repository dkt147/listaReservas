<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>listaReservas</title>
    <link rel = "icon" href = 
"Images/logo.jpg" 
        type = "image/x-icon">
    <style>
      body {
        margin: 0;
        font-family: "Lato", sans-serif;
      }

      .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
      }

      .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
      }

      .sidebar a.active {
        background-color: #04aa6d;
        color: white;
      }

      .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
      }

      div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
      }

      @media screen and (max-width: 700px) {
        .sidebar {
          width: 100%;
          height: auto;
          position: relative;
        }
        .sidebar a {
          float: left;
        }
        div.content {
          margin-left: 0;
        }
      }

      @media screen and (max-width: 400px) {
        .sidebar a {
          text-align: center;
          float: none;
        }
      }

      ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 20px;
    width: 5px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

#dp{
    border: 2px solid white;
}
    </style>
  </head>
  <body>
  <?php
  include 'navbar.php';
  ?>
<!-- 
      <div class="row">
      <div class="col-md-1" style="text-align:right;"><img src="Images/logo.jpg" alt="" width="70px" height="70px" style="display:inline">
      </div>
      <div class="col-md-2" style="text-align:left;"><h2 style="display:inline">listaReservas</h2><br><p>Booking just got easier</p>
      </div>
      </div>
       -->

       <div class="sidebar">
      <a class="active" href="home.php">Reservaciones</a>
      <a href="clients.php">Clientes</a>
      <a href="users.php">Usuarios</a>
      <a href="establish.php">Establecimientos</a>
      <a  href="configuration.php">Configuracion</a>
      <a href="logout.php">Salir</a>
    </div>
<br>
    <div class="container" style="width:70%">
    



    <div class="row">
        <div class="col-md-4">
        <div class="row">
<h2>
    listaReservas
</h2>
</div><br>
<div class="row">
<button type="button" class="btn btn-default" style="width:100%;border-left-width:5px;border-left-color:grey;">Primary <span class="badge">7</span></button>
       <br>
       <button type="button" class="btn btn-default" style="width:100%;border-left-width:5px;border-left-color:grey;">Primary <span class="badge">7</span></button>
       <br>
       <button type="button" class="btn btn-default" style="width:100%;border-left-width:5px;border-left-color:grey;">Primary <span class="badge">7</span></button>
        
</div>       
</div>
    <div class="col-md-1"><div style="height: 100%;background:grey;width:5px"></div>
        </div>
        <div class="col-md-7" >
    <form  style="width:150%">
        <div class="row">
            
        </div>
        <div class="row">
        <div class="form-group ml-4" style="width:40%">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group ml-4" style="width:40%">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>          
        </div>
        <div class="row">
        <div class="form-group ml-4" style="width:40%">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group ml-4" style="width:40%">
  <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>          
        </div>
 
  <div class="form-group ml-2" style="width:85%">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
  </div>
  <div class="form-group ml-2" style="width:85%">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <input class="form-control" id="exampleFormControlTextarea1" type="text" placeholder="">
  </div>
  <div class="form-group ml-4" style="width:80%">
    <input type="submit" value="BUTTON1" class="btn btn-danger" style="width:30%;margin-left:25px">
    <input type="submit" value="BUTTON2" class="btn btn-outline-dark" style="width:30%">
    <input type="submit" value="BUTTON3" class="btn btn-success" style="width:30%">
  </div>
</form>
    </div>
    </div>


    
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </body>
</html>
