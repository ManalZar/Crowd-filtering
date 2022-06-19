<!DOCTYPE html>
<html>

<head>
  <title>Display all records from Database</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="CICS">
  <meta name="generator" content="Jeddi . 2021">
  <title>BOS/BOL</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }
  </style>
</head>

<body>
  <!-- bol -->
  <div class="block">
    <div id="show_bol" class="bolTable">
      <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">BOL Rating Data</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button class="btn btn-sm btn-outline-secondary">Share</button>
              <button onclick="Export()" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>
        <div class="mb-3 card">
          <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
              <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
              Ideas' scores
              <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            </div>
          </div>
        </div>
        <!--AVG-->
        <?php

        $servername = "localhost"; //Server Name
        $username = "root"; //Server User Name
        $password = ""; //Server Password
        $dbname = "filter";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        ////Averages
        $avgs = array();

        $sql_avg = "SELECT AVG(rate1_bol),AVG(rate1_bol) FROM bol";

        $result = $conn->query($sql_avg);
        //display data on web page
        while ($row = mysqli_fetch_array($result)) {
          array_push($avgs, number_format($row['AVG(rate1_bol)'], 2));
        }

        $sql_avg = "SELECT AVG(rate2_bol) FROM bol";

        $result = $conn->query($sql_avg);
        //display data on web page
        while ($row = mysqli_fetch_array($result)) {
          array_push($avgs, number_format($row['AVG(rate2_bol)'], 2));
        }

        $sql_avg = "SELECT AVG(rate3_bol) FROM bol";

        $result = $conn->query($sql_avg);
        //display data on web page
        while ($row = mysqli_fetch_array($result)) {
          array_push($avgs, number_format($row['AVG(rate3_bol)'], 2));
        }

        $sql_avg = "SELECT AVG(rate4_bol) FROM bol";

        $result = $conn->query($sql_avg);
        //display data on web page
        while ($row = mysqli_fetch_array($result)) {
          array_push($avgs, number_format($row['AVG(rate4_bol)'], 2));
        }

        $sql_avg = "SELECT AVG(rate5_bol) FROM bol";

        $result = $conn->query($sql_avg);
        //display data on web page
        while ($row = mysqli_fetch_array($result)) {
          array_push($avgs, number_format($row['AVG(rate5_bol)'], 2));
        }

        $sql_avg = "SELECT AVG(rate6_bol) FROM bol";

        $result = $conn->query($sql_avg);
        //display data on web page
        while ($row = mysqli_fetch_array($result)) {
          array_push($avgs, number_format($row['AVG(rate6_bol)'], 2));
        }

        $sql_avg = "SELECT AVG(rate7_bol) FROM bol";

        $result = $conn->query($sql_avg);
        //display data on web page
        while ($row = mysqli_fetch_array($result)) {
          array_push($avgs, number_format($row['AVG(rate7_bol)'], 2));
        }

        $sql_avg = "SELECT AVG(rate8_bol) FROM bol";

        $result = $conn->query($sql_avg);
        //display data on web page
        while ($row = mysqli_fetch_array($result)) {
          array_push($avgs, number_format($row['AVG(rate8_bol)'], 2));
        }

        //show avgs
        echo "<table class=\"table\">";
        echo "<thead><tr><th scope=\"col\">1<th scope=\"col\">2</th><th scope=\"col\">3</th><th scope=\"col\">4</th><th scope=\"col\">5</th><th scope=\"col\">6</th><th scope=\"col\">7</th><th scope=\"col\">8</th></tr></thead>";
        echo "<div class=\"container\"><div class=\"row\">";
        foreach ($avgs as $avg) {
          echo "<div class=\"col col-sm\"><th scope=\"row\">" . $avg . "</th></div>";
        }
        echo "</table>";

        ?>

        <div style="overflow-x:auto;">
          <table border="2" class="table">
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Expertise</th>
                <th>rate1</th>
                <th>rate2</th>
                <th>rate3</th>
                <th>rate4</th>
                <th>rate5</th>
                <th>rate6</th>
                <th>rate7</th>
                <th>rate8</th>
                <th>total</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              //bol Fetching
              $sql = "SELECT * FROM bol";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                  #echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
                  //echo "<tbody>";
                  echo "<tr> <td>" . $row['id_bol'] . "</td> <td>" . $row['name_bol'] . "</td> <td>" . $row['email_bol'] . "</td> <td>" . $row['expertise_bol'] . "</td>";
                  echo "<td>" . $row['rate1_bol'] . "</td> <td>" . $row['rate2_bol'] . "</td> <td>" . $row['rate3_bol'] . "</td> <td>" . $row['rate4_bol'] . "</td> <td>" . $row['rate5_bol'] . "</td>";
                  echo "<td>" . $row['rate6_bol'] . "</td> <td>" . $row['rate7_bol'] . "</td> <td>" . $row['rate8_bol'] . "</td>";
                  echo "<td>" . ($row['rate1_bol'] + $row['rate2_bol'] + $row['rate3_bol'] + $row['rate4_bol'] + $row['rate5_bol'] + $row['rate6_bol'] + $row['rate7_bol'] + $row['rate8_bol']) . "</td>";
                  echo "<td><a href=\"delete-process.php?tab=bol&name=id_bol&id=" . $row["id_bol"] . "\">Delete</a></td></tr>";
                  //echo "</tbody>";
                }
              } else {
                echo "0 results";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!--Scripts-->
    <script>
      function showbol() {
        var x = document.getElementById("show_bol");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }

      var toggler = document.getElementsByClassName("caret");
      var i;

      for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
          this.parentElement.querySelector(".nested").classList.toggle("active");
          this.classList.toggle("caret-down");
        });
      }
    </script>

    <?php

    $dataPoints = array(
      array("y" => $avgs[0], "label" => "idea1"),
      array("y" => $avgs[1], "label" => "idea2"),
      array("y" => $avgs[2], "label" => "idea3"),
      array("y" => $avgs[3], "label" => "idea4"),
      array("y" => $avgs[4], "label" => "idea5"),
      array("y" => $avgs[5], "label" => "idea6"),
      array("y" => $avgs[6], "label" => "idea7"),
      array("y" => $avgs[7], "label" => "idea8"),
    );

    ?>

    <script>
      window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          theme: "light2",
          title: {
            text: "Ideas"
          },
          axisY: {
            title: "Average scores (bol)"
          },
          data: [{
            type: "column",
            yValueFormatString: "#,##0.## ",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
          }]
        });
        chart.render();

      }
    </script>

    <script>
      function Export() {
        var conf = confirm("Export data to CSV?");
        if (conf == true) {
          window.open("download.php?tab=bol", '_blank');
        }
      }
    </script>
</body>

</html>

<?php
//Close connection
mysqli_close($conn);
?>