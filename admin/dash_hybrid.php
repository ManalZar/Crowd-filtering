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
    <div class="block">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Hybrid Data</h1>
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
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            <!-- BOS -->
            <?php

            $servername = "localhost"; //Server Name
            $username = "root"; //Server User Name
            $password = ""; //Server Password
            $dbname = "filter";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            //Avgs for BOS
            $avgs_bos = array();

            $sql_avg = "SELECT AVG(rate1_bos) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs_bos, number_format($row['AVG(rate1_bos)'], 2));
            }

            $sql_avg = "SELECT AVG(rate2_bos) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs_bos, number_format($row['AVG(rate2_bos)'], 2));
            }

            $sql_avg = "SELECT AVG(rate3_bos) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs_bos, number_format($row['AVG(rate3_bos)'], 2));
            }

            $sql_avg = "SELECT AVG(rate4_bos) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs_bos, number_format($row['AVG(rate4_bos)'], 2));
            }

            $sql_avg = "SELECT AVG(rate5_bos) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs_bos, number_format($row['AVG(rate5_bos)'], 2));
            }

            $sql_avg = "SELECT AVG(rate6_bos) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs_bos, number_format($row['AVG(rate6_bos)'], 2));
            }

            $sql_avg = "SELECT AVG(rate7_bos) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs_bos, number_format($row['AVG(rate7_bos)'], 2));
            }

            $sql_avg = "SELECT AVG(rate8_bos) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs_bos, number_format($row['AVG(rate8_bos)'], 2));
            }

            //show avgs
            echo "<table class=\"table\">";
            echo "<thead><tr><th scope=\"col\">BOS1<th scope=\"col\">BOS2</th><th scope=\"col\">BOS3</th><th scope=\"col\">BOS4</th><th scope=\"col\">BOS5</th><th scope=\"col\">BOS6</th><th scope=\"col\">BOS7</th><th scope=\"col\">BOS8</th></tr></thead>";
            echo "<div class=\"container\"><div class=\"row\">";
            foreach ($avgs_bos as $avg) {
                echo "<div class=\"col col-sm\"><th scope=\"row\">" . $avg . "</th></div>";
            }
            echo "</table>";
            ?>


            <!--BOL-->
            <?php
            //Averages
            $avgs = array();

            $sql_avg = "SELECT AVG(rate1_bol) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs, number_format($row['AVG(rate1_bol)'], 2));
            }

            $sql_avg = "SELECT AVG(rate2_bol) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs, number_format($row['AVG(rate2_bol)'], 2));
            }

            $sql_avg = "SELECT AVG(rate3_bol) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs, number_format($row['AVG(rate3_bol)'], 2));
            }

            $sql_avg = "SELECT AVG(rate4_bol) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs, number_format($row['AVG(rate4_bol)'], 2));
            }

            $sql_avg = "SELECT AVG(rate5_bol) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs, number_format($row['AVG(rate5_bol)'], 2));
            }

            $sql_avg = "SELECT AVG(rate6_bol) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs, number_format($row['AVG(rate6_bol)'], 2));
            }

            $sql_avg = "SELECT AVG(rate7_bol) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs, number_format($row['AVG(rate7_bol)'], 2));
            }

            $sql_avg = "SELECT AVG(rate8_bol) FROM hybrid";

            $result = $conn->query($sql_avg);
            //display data on web page
            while ($row = mysqli_fetch_array($result)) {
                array_push($avgs, number_format($row['AVG(rate8_bol)'], 2));
            }

            //show avgs
            echo "<table class=\"table\">";
            echo "<thead><tr><th scope=\"col\">BOL1<th scope=\"col\">BOL2</th><th scope=\"col\">BOL3</th><th scope=\"col\">BOL4</th><th scope=\"col\">BOL5</th><th scope=\"col\">BOL6</th><th scope=\"col\">BOL7</th><th scope=\"col\">BOL8</th></tr></thead>";
            echo "<div class=\"container\"><div class=\"row\">";
            foreach ($avgs as $avg) {
                echo "<div class=\"col col-sm\"><th scope=\"row\">" . $avg . "</th></div>";
            }
            echo "</table>";

            ?>

            <!-- Table -->
            <div style="overflow-x:auto;">
                <table border="2" class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Expertise</th>
                            <th>1_bos</th>
                            <th>2_bos</th>
                            <th>3_bos</th>
                            <th>4_bos</th>
                            <th>5_bos</th>
                            <th>6_bos</th>
                            <th>7_bos</th>
                            <th>8_bol</th>
                            <th>1_bol</th>
                            <th>2_bol</th>
                            <th>3_bol</th>
                            <th>4_bol</th>
                            <th>5_bol</th>
                            <th>6_bol</th>
                            <th>7_bol</th>
                            <th>8_bol</th>
                            <th>total</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        //data Fetching
                        $sql = "SELECT * FROM hybrid";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                #echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
                                //echo "<tbody>";
                                echo "<tr> <td>" . $row['id'] . "</td> <td>" . $row['name'] . "</td> <td>" . $row['email'] . "</td> <td>" . $row['expertise'] . "</td>";
                                echo "<td>" . $row['rate1_bos'] . "</td> <td>" . $row['rate2_bos'] . "</td> <td>" . $row['rate3_bos'] . "</td> <td>" . $row['rate4_bos'] . "</td> <td>" . $row['rate5_bos'] . "</td>";
                                echo "<td>" . $row['rate6_bos'] . "</td> <td>" . $row['rate7_bos'] . "</td> <td>" . $row['rate8_bos'] . "</td>";
                                echo "<td>" . $row['rate1_bol'] . "</td> <td>" . $row['rate2_bol'] . "</td> <td>" . $row['rate3_bol'] . "</td> <td>" . $row['rate4_bol'] . "</td> <td>" . $row['rate5_bol'] . "</td>";
                                echo "<td>" . $row['rate6_bol'] . "</td> <td>" . $row['rate7_bol'] . "</td> <td>" . $row['rate8_bol'] . "</td>";
                                echo "<td>" . ($row['rate1_bol'] + $row['rate2_bol'] + $row['rate3_bol'] + $row['rate4_bol'] + $row['rate5_bol'] + $row['rate6_bol'] + $row['rate7_bol'] + $row['rate8_bol'] + $row['rate1_bos'] + $row['rate2_bos'] + $row['rate3_bos'] + $row['rate4_bos'] + $row['rate5_bos'] + $row['rate6_bos'] + $row['rate7_bos'] + $row['rate8_bos']) . "</td>";
                                echo "<td><a href=\"delete-process.php?tab=hybrid&name=id&id=" . $row["id"] . "\">Delete</a></td></tr>";
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

    $dataPoints1 = array(
        array("y" => $avgs[0], "label" => "idea1"),
        array("y" => $avgs[1], "label" => "idea2"),
        array("y" => $avgs[2], "label" => "idea3"),
        array("y" => $avgs[3], "label" => "idea4"),
        array("y" => $avgs[4], "label" => "idea5"),
        array("y" => $avgs[5], "label" => "idea6"),
        array("y" => $avgs[6], "label" => "idea7"),
        array("y" => $avgs[7], "label" => "idea8"),
    );

    $dataPoints2 = array(
        array("y" => $avgs_bos[0], "label" => "idea1"),
        array("y" => $avgs_bos[1], "label" => "idea2"),
        array("y" => $avgs_bos[2], "label" => "idea3"),
        array("y" => $avgs_bos[3], "label" => "idea4"),
        array("y" => $avgs_bos[4], "label" => "idea5"),
        array("y" => $avgs_bos[5], "label" => "idea6"),
        array("y" => $avgs_bos[6], "label" => "idea7"),
        array("y" => $avgs_bos[7], "label" => "idea8"),
    );

    ?>


    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Ideas' Scores"
                },
                theme: "light2",
                animationEnabled: true,
                toolTip: {
                    shared: true,
                    reversed: true
                },
                axisY: {
                    title: "Average scores",
                    yValueFormatString: "#,##0"
                },
                legend: {
                    cursor: "pointer",
                    itemclick: toggleDataSeries
                },
                data: [{
                    type: "stackedColumn",
                    name: "BOL",
                    showInLegend: true,
                    yValueFormatString: "#,##0",
                    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                }, {
                    type: "stackedColumn",
                    name: "BOS",
                    showInLegend: true,
                    yValueFormatString: "#,##0",
                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                }]
            });

            chart.render();

            function toggleDataSeries(e) {
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                e.chart.render();
            }

        }
    </script>
    <script>
        function Export() {
            var conf = confirm("Export data to CSV?");
            if (conf == true) {
                window.open("download.php?tab=hybrid", '_blank');
            }
        }
    </script>
</body>

</html>

<?php
//Close connection
mysqli_close($conn);
?>