
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Le risk">
    <meta name="author" content="grpSwig">
    <link rel="icon" href="glyphicon glyphicon-star">

    <title>RISK</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="blog-masthead">
          <div class="container">
           <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">SpaceRisk</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Acceuil</a></li>
                <li><a href="play.php">Jouer</a></li>
                <li><a href="rules.pjp">Règles</a></li>
                <li><a href="apropos.php">Á propos</a></li>
              </ul>
            </div><!--/.nav-collapse -->
        </nav>
       </div>
    </div>
    <div class="container">
        <div class="row">
        <div id="joueurs" class="col-md-4">
            <p style="color:blue;">Joueur 1</p>
            <p style="color:red;">Joueur 2</p>
            <p style="color:green;">Joueur 3</p>
        </div>
        <div id="phase" class="col-md-4">
            <h2>Déployement</h2>
        </div>
        <div class="col-md-4"><div id="troupes">
            <img src="./res/rocketship.svg" alt="rocket" width="40px" height="40px"></span> 2/9
        </div>
        </div>
        <div class="row">
        <div class="col-md-8">
            <div id="plateau">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <circle id="greencircle" cx="30" cy="30" r="30" fill="green" />
                </svg>
            </div>
        </div>
    
    <div class="col-md-3 col-md-offset-1 blog-sidebar">
        <div class="sidebar-module">
            <h4>Objectifs</h4>
            <div id="objectifs" class="bg-success">
                <p>-Conquérir 5 planètes</p>
                <p>-Ne pas décéder</p>
                <p>-Achever un ennemi</p>
            </div>
          </div>
          <div class="sidebar-module">
            <h4>Chat</h4>
            <ol class="list-unstyled" id="chat">
              <li style="color:green;">Fucking faggot fuck off</li>
              <li style="color:red;">Shut up kill yourself</li>
              <li style="color:blue;">You retarded noob why did you deploy here</li>
              <li style="color:red;">I hate every single one of you</li>
            </ol>
            <form class="form-inline">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Parlez ici..."/></div>
                <button type="button" class="btn btn-primary btn-sm">Envoyer</button>
            </form>
          </div>
        <div class="sidebar-module">
              <div class="text-center">
                <h4 id="instructions">Cliquez sur les planètes pour y déployer vos flottes</h4>
                <p><input id="nextPhase" class="btn btn-success" type="button" value="Prochaine phase"></p>
                <p><input id="adandon" class="btn btn-danger" type="button" value="Abandonner"></div></p>
          </div>
        </div><!-- /.blog-sidebar -->
        </div><!-- /.row -->
        <div class="row">           
            <div class="text-center">
              <div class="col-md-2 col-md-offset-1">
              <svg xmlns="http://www.w3.org/2000/svg">
                    <circle id="a" cx="30" cy="30" r="25" stroke="black" stroke-width="4" fill="white" />
                </svg>
              </div>
                 <div class="col-md-2">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <circle id="b" cx="30" cy="30" r="25" stroke="black" stroke-width="4" fill="white" />
                </svg>
                 </div><div class="col-md-2">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <circle id="c" cx="30" cy="30" r="25" stroke="black" stroke-width="4" fill="white" />
                </svg>
                 </div><div class="col-md-2">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <circle id="d" cx="30" cy="30" r="25" stroke="black" stroke-width="4" fill="white" />
                </svg></div>
          </div>
            </div>
        </div>
       </div><!-- /.container -->

    <footer class="footer">
      <div class="container">
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>