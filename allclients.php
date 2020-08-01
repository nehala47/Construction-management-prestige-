<html>
<head>
	<title>All Clients</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <style>
        table,tr,td{
            padding:5px;
            font-family: 'Lato', sans-serif; 
            margin-left:20%;
        }

        th,td{
            padding:20px;
            text-align:center;
            margin:10px;
        }

        tr:nth-child(even)  {
            background-color:#f0e3ff;
        }

    </style>
</head>
<body style="background-color:#f7d695;">
<nav class="navbar navbar-expand-sm bg-info navbar-dark">
            <a class="navbar-brand" href="">
                <img src="plogo.png" alt="logo" style="width: 60px;">
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="blog.html">BLOG</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="front.html">LOGOUT</a>
              </li>
            </ul>
          </nav>

          <h1 style="font-family: 'Bangers', cursive;">CLIENTS REQUESTING FOR RENT</h1>
	
    <div style="align:center">
        <?php
            
            $conn=mysqli_connect("localhost","root","","prestige");
            if($conn->connect_error)
            {
                die("conn failed".$conn->connect_error);
            }
            $sql="select * from rent ";
            $result=$conn->query($sql);
            echo"<br>";
            echo"<div class='scrollit'>";
            echo"<table border='2' align='center'>";
            echo"<tr>";
            echo"<th>ID No.</th><th> Client Name</th><th>Client Email<th>Type of flat</th><th>Project interested</th><th>client mobile number</th></tr>";
            if($result->num_rows > 0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<tr>";
                    echo"<td>".$row["id"]."</td>";
                    echo"<td>".$row["name"]."</td>";
                    echo"<td>".$row["email"]."</td>";
                    echo"<td>".$row["type"]."</td>";
                    echo"<td>".$row["project"]."</td>";
                    echo"<td>".$row["phone"]."</td>";
                    echo"</tr>";

                }
            }
            else
            {
                echo"table is empty";

            }
            echo"</table>";
        echo"</div>";
        ?>
    </div>
    <h1 style="font-family: 'Bangers', cursive;">CLIENTS REQUESTING FOR BUYING A FLAT</h1>
    <div style="align:center">
        <?php
            
            $conn=mysqli_connect("localhost","root","","prestige");
            if($conn->connect_error)
            {
                die("conn failed".$conn->connect_error);
            }
            $sql="select * from buying";
            $result=$conn->query($sql);
            echo"<br>";
            echo"<div class='scrollit'>";
            echo"<table border='2' align='center'>";
            echo"<tr>";
            echo"<th>ID No.</th><th> Client Name</th><th>Client Email<th>Type of flat</th><th>Project interested</th><th>client mobile number</th></tr>";
            if($result->num_rows > 0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<tr>";
                    echo"<td>".$row["id"]."</td>";
                    echo"<td>".$row["name"]."</td>";
                    echo"<td>".$row["email"]."</td>";
                    echo"<td>".$row["type"]."</td>";
                    echo"<td>".$row["project"]."</td>";
                    echo"<td>".$row["phone"]."</td>";
                    echo"</tr>";

                }
            }
            else
            {
                echo"table is empty";

            }
            echo"</table>";
        echo"</div>";
        ?>
    </div>



    <h1 style="font-family: 'Bangers', cursive;">FEEDBACKS</h1>

  <div style="align:center">
        <?php
            
            $conn=mysqli_connect("localhost","root","","prestige");
            if($conn->connect_error)
            {
                die("conn failed".$conn->connect_error);
            }
            $sql="select * from feedback ";
            $result=$conn->query($sql);
            echo"<br>";
            echo"<div class='scrollit'>";
            echo"<table border='2' align='center'>";
            echo"<tr>";
            echo"<th> Client Name</th><th>Client Email<th>Feedback</th><th>client mobile number</th></tr>";
            if($result->num_rows > 0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<tr>";
                    echo"<td>".$row["name"]."</td>";
                    echo"<td>".$row["email"]."</td>";
                    echo"<td>".$row["feedback"]."</td>";
                    echo"<td>".$row["phone"]."</td>";
                    echo"</tr>";

                }
            }
            else
            {
                echo"table is empty";

            }
            echo"</table>";
        echo"</div>";


        ?>
            
        </div>
<br><br>
</body>

</html>