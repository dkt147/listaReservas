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
    <div class="sidebar">
      <a class="active" href="home.php">Reservaciones</a>
      <a href="clients.php">Clientes</a>
      <a href="users.php">Usuarios</a>
      <a href="establish.php">Establecimientos</a>
      <a href="configuration.php">Configuracion</a>
      <a href="logout.php">Salir</a>
    </div>
    <br><br>
    <div class="content">
        <select name="" class="form-control">
            <option value="">Locallizer reserva</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        <ul style="margin-top:30px">
            <li>FETCH DA DATA</li>
        </ul>
    <div class="form-inline">
        <select name="" class="form-control" style="display:inline;width:40%;margin:20px">
            <option value="">Locallizer reserva</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
    
        <select name="" class="form-control" style="display:inline;width:40%">
            <option value="">Locallizer reserva</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        </div>

        <form>
        <div class="row">
        <label class="radio-inline" style="margin-left:35px">
      <input type="radio" name="optradio" checked>MALE 
       </label>
    <label class="radio-inline" style="margin-left:420px">
      <input type="radio" name="optradio">MALE
    </label>
    </div>

    <div class="row">
        <label class="radio-inline" style="margin-left:35px">
      <input type="radio" name="optradio" checked>MALE 
       </label>
    <label class="radio-inline" style="margin-left:420px">
      <input type="radio" name="optradio">MALE
    </label>
    </div><br>  
    <input type="submit" value="Print Reservasions" class="btn btn-success btn-block">
  </form>
<br>    
  <div class="row">
    		<div class="col-md-6 offset-md-3">
    			<h4>
  Reserve</h4>
    			<ul class="timeline">
    				<li>
    					<a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
    					<a href="#" class="float-right">21 March, 2014</a>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
    				</li>
    				<li>
    					<a href="#">21 000 Job Seekers</a>
    					<a href="#" class="float-right">4 March, 2014</a>
    					<p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
    				</li>
    				<li>
    					<a href="#">Awesome Employers</a>
    					<a href="#" class="float-right">1 April, 2014</a>
    					<p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
    				</li>
    			</ul>
    		</div>
    	</div>
    </div>
    
  </body>
</html>
