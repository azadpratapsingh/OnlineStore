<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>cart page</title>
         <link href="index.css" rel="stylesheet" type="text/css"/>
        <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table {
  width: 100%;
  border-collapse: collapse;
  padding: 2px;
}
a{
    color:white;
}
       footer{
 position:fixed;
 bottom:0;
 left:0;
 right:0;
}
#top {
  min-width: 200px;
  margin: 150px 150px 150px 200px;
}
</style>
    </head>
    <body> 
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="setting.html"><span class="glyphicon glyphicon-user"></span> setting</a></li>
                        <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="top" class="bg-warning mt-5">
        <div class="container">
            <div class="table-responsive">
                <table>
                    <tbody>
        
                         <tr>
                            <th class="col-md-4">Item Number</th> <th class="col-md-4" >Item Name</th> <th class="col-md-4">Price</th> <th class="col-md-4"> </th>
                        </tr>
                        <tr><td> </td><td> </td><td> </td><td> </td></tr>
                        <tr><td> </td><td>Total </td><td> Rs 0/-</td> <td><button class="btn btn-primary"><a href="success.html">Confirm Order</a></button> </td></tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
        <footer>
        <div class="container">
            <center>
                <p>
                   Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.
                </p>
                </center>
            </div>
    </footer>
    </body>
</html>
