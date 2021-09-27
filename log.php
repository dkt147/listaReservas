
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script><link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 
 <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
      <a href="home.php">Reservaciones</a>
      <a href="clients.php">Clientes</a>
      <a href="users.php">Usuarios</a>
      <a href="establish.php">Establecimientos</a>
      <a class="active" href="configuration.php">Configuracion</a>
      <a href="logout.php">Salir</a>
    </div>
<br><br>
<div class="container" style="margin-left: 17%;">
  <h2>Logs</h2>
  <p>All the activities are here.</p>

  <table id="table_id" class="display table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">#
      </th>
      <th class="th-sm">Activity
      </th>
      <th class="th-sm">Date
      </th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td>1</td>
      <td>Louis made a change in order</td>
      <td>22-09-2021</td>
    </tr><tr>
      <td>1</td>
      <td>Louis made a change in order</td>
      <td>22-09-2021</td>
    </tr><tr>
      <td>1</td>
      <td>Louis made a change in order</td>
      <td>22-09-2021</td>
    </tr><tr>
      <td>1</td>
      <td>Louis made a change in order</td>
      <td>22-09-2021</td>
    </tr><tr>
      <td>1</td>
      <td>Louis made a change in order</td>
      <td>22-09-2021</td>
    </tr>
  </tbody>
</table>
</div>

<script>
    $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
</body>
</html>