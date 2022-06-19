<html>

<head>

    <meta charset="utf-8">
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
    <link rel="stylesheet" href="../styles.css">
</head>



<body class="py-4">
    <main>
        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1"></div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-dark" href="../index.php">BOS & BOL</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                    </div>
            </header>
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-muted" href="../index.php">Home</a>
                </nav>
            </div>

            <div class="row">
                <ul id="myUL">
                    <li>
                        <h4 class="caret">How does it work?</h4>
                        <ul class="nested">
                            <li><span class="caret">You are given <span style="color:green;font-weight:bold">6 green stars</span> to rate the following set of ideas:</span></li>
                            <li><span class="caret">Place your <span style="color:green;font-weight:bold">green stars</span> on the ideas that you deem to be most useful, feasible and innovative.</span></li>
                            <li><span class="caret">You only have the right to use <span style="color:green;font-weight:bold">6 green stars in total.</span> Make sure to use them wisely.</span></li>
                            <li><span class="caret">PS: Every submission that exceeds <span style="color:green;font-weight:bold">6 green stars</span> will not be considered.</span></li>
                        </ul>
                    </li>
                </ul>
                <form action="bos.php" method="post">

                    <div>
                        <br><h3>Rate ideas using the Green Stars (Bag of Stars).</h3>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">What's your field of expertise</label>
                        <small id="expertiseHelp" class="form-text text-muted">Example: Data Science Student, Lawyer, Doctor...</small>
                        <input type="text" class="form-control" name="expertise" placeholder="expertise" required>
                    </div>


                    <div class="row mb-3">
                        <div class="form-group">
                        <ul id="myUL">
                            <li>
                                <h5 class="caret">Read about the problem we are solving so you can rate the best ideas. [don't forget to use only 6 stars 😉)]</h5>
                                <ul class="nested">
                                    <li><span class="caret">The following is a list of innovative ideas aimed at improving public transportation in urban areas.</span></li>
                                    <li><span class="caret">You are asked to rank them performing pairwise comparisons according to these three main criterias:</span></li>
                                    <li><span class="caret"><span style="font-weight:bold">Utility :</span> Do you think that the idea is useful? Is there a need for it?</span></li>
                                    <li><span class="caret"><span style="font-weight:bold">Feasibility :</span> Do you think that the idea is practical? Can it be easily implemented?</span></li>
                                    <li><span class="caret"><span style="font-weight:bold">Innovativeness :</span> How innovative it is?</span></li>
                                    <li><span class="caret">(4: excellent, 3: very good, 2: good, 1: average, 0: bad)</li>
                                </ul>
                            </li>
                        </ul>
                        </div>
                        <div class="col-md-8 themed-grid-col" id="idea1"><label>
                                1. App that counts the CO2 emissions and informs the users about their CO2 footprint for each PT trip with gamification aspects.
                            </label></div>
                        <div class="col-md-4 themed-grid-col">
                            <div class="rateyo" id="rating1" data-rateyo-rating="0" data-rateyo-num-stars="4" data-rateyo-score="3">
                            </div>
                            <span class='result'>0</span>
                            <input type="hidden" name="rating1">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-8 themed-grid-col" id="idea2"><label>
                                2. Through these services, travelers can submit a travel request (origin, destination, and time frame) and all submitted requests are grouped spatially and temporally and minibuses are routed to serve them.
                            </label></div>
                        <div class="col-md-4 themed-grid-col">
                            <div class="rateyo" id="rating2" data-rateyo-rating="0" data-rateyo-num-stars="4" data-rateyo-score="3">
                            </div>
                            <span class='result'>0</span>
                            <input type="hidden" name="rating2">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-8 themed-grid-col" id="idea3"><label>
                                3. Enabling a seamless journey, using the best possible connections and the most suitable transport modes, provided through one interface, such as a platform that brings together different types of transport options and the provision of real time transport information.
                            </label></div>
                        <div class="col-md-4 themed-grid-col">
                            <div class="rateyo" id="rating3" data-rateyo-rating="0" data-rateyo-num-stars="4" data-rateyo-score="3">
                            </div>
                            <span class='result'>0</span>
                            <input type="hidden" name="rating3">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-8 themed-grid-col" id="idea4"><label>
                                4.App that allows PT users (public transport) to interact with other people travelling with the same mode of transport at the same time.
                            </label></div>
                        <div class="col-md-4 themed-grid-col">
                            <div class="rateyo" id="rating4" data-rateyo-rating="0" data-rateyo-num-stars="4" data-rateyo-score="3">
                            </div>
                            <span class='result'>0</span>
                            <input type="hidden" name="rating4">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-8 themed-grid-col" id="idea5"><label>
                                5. High quality service (equipped with Wi-Fi, suitable seats, recharge plugs, etc.) targeted to serve commuters and enable work during the trip, with the option to book the seat in a larger range of PT services.
                            </label></div>
                        <div class="col-md-4 themed-grid-col">
                            <div class="rateyo" id="ratin5" data-rateyo-rating="0" data-rateyo-num-stars="4" data-rateyo-score="3">
                            </div>
                            <span class='result'>0</span>
                            <input type="hidden" name="rating5">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-8 themed-grid-col" id="idea6"><label>
                                6.An app for the passengers to find out which parts of the vehicle are less crowded and more likely to have available seats in order to prefer the respective entrances, using sensors mounted in the seats.
                            </label></div>
                        <div class="col-md-4 themed-grid-col">
                            <div class="rateyo" id="rating6" data-rateyo-rating="0" data-rateyo-num-stars="4" data-rateyo-score="3">
                            </div>
                            <span class='result'>0</span>
                            <input type="hidden" name="rating6">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-8 themed-grid-col" id="idea7"><label>
                                7.The charge-before-departure lockers are designed to safely fast charge mobile phones while waiting for the next train.
                            </label></div>
                        <div class="col-md-4 themed-grid-col">
                            <div class="rateyo" id="rating7" data-rateyo-rating="0" data-rateyo-num-stars="4" data-rateyo-score="3">
                            </div>
                            <span class='result'>0</span>
                            <input type="hidden" name="rating7">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-8 themed-grid-col" id="idea8"><label>
                                8. Entrance tickets for social events (e.g. concerts, sports, museums, etc.) will include the use of PT for the whole day free of charge.
                            </label></div>
                        <div class="col-md-4 themed-grid-col">
                            <div class="rateyo" id="rating8" data-rateyo-rating="0" data-rateyo-num-stars="4" data-rateyo-score="3">
                            </div>
                            <span class='result'>0</span>
                            <input type="hidden" name="rating8">
                        </div>
                    </div>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            </form>
        </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <script>
        $(function() {
            $(".rateyo").rateYo({
                rating: 4,
                fullStar: true,
                ratedFill: "#00FF00",
                maxValue: "4"
            }).on("rateyo.change", function(e, data) {
                var rating = data.rating;
                $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('rating :' + rating);
                $(this).parent().find('input[name=rating1]').val(rating); //add rating value to input field
                $(this).parent().find('input[name=rating2]').val(rating); //add rating value to input field
                $(this).parent().find('input[name=rating3]').val(rating); //add rating value to input field
                $(this).parent().find('input[name=rating4]').val(rating); //add rating value to input field
                $(this).parent().find('input[name=rating5]').val(rating); //add rating value to input field
                $(this).parent().find('input[name=rating6]').val(rating); //add rating value to input field
                $(this).parent().find('input[name=rating7]').val(rating); //add rating value to input field
                $(this).parent().find('input[name=rating8]').val(rating); //add rating value to input field
                //Limit rating
            });
        });
    </script>
</body>

</html>
<?php
require 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $name = $_POST["name"];
    $expertise = $_POST["expertise"];
    $rating1 = $_POST["rating1"];
    $rating2 = $_POST["rating2"];
    $rating3 = $_POST["rating3"];
    $rating4 = $_POST["rating4"];
    $rating5 = $_POST["rating5"];
    $rating6 = $_POST["rating6"];
    $rating7 = $_POST["rating7"];
    $rating8 = $_POST["rating8"];


    $sql = "INSERT INTO 
    bos (name_bos,email_bos,expertise_bos,rate1_bos,rate2_bos,rate3_bos,rate4_bos,rate5_bos,rate6_bos,rate7_bos,rate8_bos) 
    VALUES (
        '$name','$email','$expertise','$rating1','$rating2','$rating3', '$rating4', '$rating5', '$rating6', '$rating7', '$rating8'
        )";
    if (mysqli_query($conn, $sql)) {
        echo "<div class=\"alert alert-success md-8\" role=\"alert\">New Rate added successfully</div>";
    } else {
        echo '<div class="alert alert-danger">' ."Error: " . $sql . "<br>" . mysqli_error($conn). '</div>';;
        
    }
    mysqli_close($conn);
}
?>
<script>
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("caret-down");
        });
    }
</script>