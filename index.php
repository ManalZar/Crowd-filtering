<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<title>Idea Filtering</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Bootstrap core CSS -->
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
<!-- Custom styles for this template -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
<link href="styles.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="bootstrap.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <!--a class="text-muted" href="#">Subscribe</a-->
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="index.php">BOS & BOL</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <!--a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a-->
          <!--a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a-->
        </div>
      </div>
    </header>
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="index.php">Home</a>
      </nav>
    </div>
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">BOS & BOL for idea filtering</h1>
        <p class="lead my-3">Participate with your idea, rate others ideas and share knowledge. Intelligence is Collective.</p>
        <p class="lead mb-0">
          <!--a href="#" class="text-white font-weight-bold">Continue reading...</a-->
          <script>
            var sites = [
              'http://localhost/bol/bol.php',
              'http://localhost/bol/bos.php'
            ];

            function randomSite() {
              var i = parseInt(Math.random() * sites.length);
              location.href = sites[i];
            }
          </script>
          <!--a href="#" onclick="randomSite();" class="text-white font-weight-bold">Rate Ideas</a-->
        </p>
      </div>
    </div>
    <!--a href="#" onclick="randomSite();" class="card-block clearfix"-->
    <div class="row mb-2">
    <a href="#" onclick="randomSite();" class="card-block clearfix">

      <div class="col-md-12">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">How can we make public transportations better?</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#" onclick="randomSite();">Public Transportation Ideas</a>
              </h3>
              <div class="mb-1 text-muted">June 07</div>
              <p class="card-text mb-auto">Help us choose the best and the worst among the ideas that we have to make 
                public transportation better.
              </p>
              <p>
                <script>
                  var sites = [
                    'PT/bol.php',
                    'PT/bos.php',
                    'PT/hybrid.php'
                  ];

                  function randomSite() {
                    var i = parseInt(Math.random() * sites.length);
                    location.href = sites[i];
                  }
                </script>
              </p>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" src="Public-Transport.jpg" alt="Card image cap">
        </div>
      </div> </a>
    </div>
  </div>

  <main role="main" class="container">
   
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <!--img class="card-img-top" src="img/dan-aragon-n20DUSVsUk8-unsplash.jpg" alt="Card image cap"-->
            <div class="card-body">
              <p class="card-text">Bag of Stars: The bag of stars consists of identifying ideas of high quality.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button-->
                </div>
                <small class="text-muted">BOS</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <!--img class="card-img-top" src="img/dan-aragon-n20DUSVsUk8-unsplash.jpg" alt="Card image cap"-->
            <div class="card-body">
              <p class="card-text">Bag of Lemons: The bag of lemons aims at identifying and eliminating ideas of low quality.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button-->
                </div>
                <small class="text-muted">BOL</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <!--img class="card-img-top" src="img/dan-aragon-n20DUSVsUk8-unsplash.jpg" alt="Card image cap"-->
            <div class="card-body">
              <p class="card-text">Hybrid: The bag of stars and lemons combined consists of placing red and green stars on the best and worst ideas respectively.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button-->
                </div>
                <small class="text-muted">BOS & BOL</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/div-->

  </main><!-- /.container -->

  <footer class="blog-footer">
    <p>Home page for <a href="index.php">BOS & BOL</a> by <a href="https://sci.um6p.ma/"> ZARIK Manal, JEDDI Younes, ZAMBA Fatima</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>
</body>

</html>