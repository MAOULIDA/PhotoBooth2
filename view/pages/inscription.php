<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inscription</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           
            <!-- /.navbar-static-side -->
        </nav>
        
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                               <img src="../logo2.png" alt="logo" style="width:230px;height:170px;" >
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="simulation.php"><i class="fa fa-dashboard fa-fw"></i>Effectuer Simulation Prêt</a>
                        </li>
                        
                        <li>
                            <a href="tarif.php"><i class="fa  fa-credit-card fa-fw"></i> Tarif </a>
                        </li>
                        
                        <li>
                            <a href="login.php"><i class="fa fa-table fa-fw"></i>Se connecter</a>
                        </li>
                        
                         <li>
                            <a href="contact.php"><i class="fa   fa-dot-circle-o fa-fw"></i> Contact </a>
                        </li>
                        
                        
                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inscription</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <i class="fa  fa-align-justify fa-fw"></i>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                         <div class="form-group">
                                         
                                            <label class="radio-inline">
                                                <input type="radio" name="sexe" id="optionsRadiosInline1" value="M" checked>M
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sexe" id="optionsRadiosInline2" value="F">F
                                            </label>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input class="form-control" placeholder="Entrer le nom">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Prenom</label>
                                            <input class="form-control" placeholder="Enter le prenom">
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label>Tel</label>
                                            <input class="form-control" placeholder="0263145680">
                                        </div>
                                        
                                      
                                        <div class="form-group">
                                            <label>Pays</label>
                                            <input class="form-control" placeholder="France">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Region</label>
                                            <input class="form-control" placeholder="Auvergne">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Ville</label>
                                            <input class="form-control" placeholder="Annecy">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Code Postal</label>
                                            <input class="form-control" placeholder="73000">
                                        </div>
                 
                                        
                                        <div class="form-group">
                                            <label>Adresse</label>
                                            <textarea class="form-control" rows="3" placeholder="3 rue des Arts,Appart 15"></textarea>
                                        </div>
    
                                 
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                  <div class="form-group">
                                        <label>e-mail</label>
                                         <input class="form-control" placeholder="email@example.com">
                                  </div>
                                        
                                  <div class="form-group">
                                          <label>Confirmer le e-mail</label>
                                          <input class="form-control" placeholder="email@example.com">
                                  </div>
            
                                   <div class="form-group">
                                           <label>Mot de passe</label>
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                   </div>   
                                       
                                    <div class="form-group">
                                           <label>Confirmer le Mot de passe</label>
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                     </div>
                                   
                                </div>
                                
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Submit Button</button>
                                <button type="reset" class="btn btn-primary">Reset Button</button>
                                <!-- /.col-lg-6 (nested) -->
                                 
                               
                            <!-- Modal -->
                            
                            </div>
                              </form>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
