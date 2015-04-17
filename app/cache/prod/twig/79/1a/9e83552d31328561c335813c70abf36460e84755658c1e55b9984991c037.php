<?php

/* sprint2RealEstateAdminBundle::admin_layout.html.twig */
class __TwigTemplate_791a9e83552d31328561c335813c70abf36460e84755658c1e55b9984991c037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Image' => array($this, 'block_Image'),
            'DashActive' => array($this, 'block_DashActive'),
            'MailboxActive' => array($this, 'block_MailboxActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'MailboxEtra2' => array($this, 'block_MailboxEtra2'),
            'clientsActive' => array($this, 'block_clientsActive'),
            'gerantsActive' => array($this, 'block_gerantsActive'),
            'AganceActive' => array($this, 'block_AganceActive'),
            'offreActive' => array($this, 'block_offreActive'),
            'StatActive' => array($this, 'block_StatActive'),
            'DashCore' => array($this, 'block_DashCore'),
            'MailCore' => array($this, 'block_MailCore'),
            'clientsCore' => array($this, 'block_clientsCore'),
            'gerantsCore' => array($this, 'block_gerantsCore'),
            'AganceCore' => array($this, 'block_AganceCore'),
            'offreCore' => array($this, 'block_offreCore'),
            'StatCore' => array($this, 'block_StatCore'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>TiMob | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/less/dropdown.less"), "html", null, true);
        echo "\" rel=\"stylesheet/less\" type=\"text/css\" />  
    <!-- Morris chart -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- jvectormap -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Daterange picker -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- DATA TABLES -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <style>
        ::-moz-selection { /* Code for Firefox */
            color: #FFF;
            background: #FF5A5F;
        }

        ::selection {
            color: #FFF; 
            background: #FF5A5F;
        }
    </style>
  </head>
  <body class=\"skin-black\">
    <div class=\"wrapper\">
      
      <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"\" class=\"logo\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/logo.png"), "html", null, true);
        echo "\"/></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              <!-- Messages: style can be found in dropdown.less-->
              <li class=\"dropdown messages-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-envelope-o\"></i>
                  <span class=\"label label-success\">4</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li><!-- start message -->
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            Developers
                            <small><i class=\"fa fa-clock-o\"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            Sales Department
                            <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            Reviewers
                            <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class=\"dropdown notifications-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-bell-o\"></i>
                  <span class=\"label label-warning\">10</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-users text-red\"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-user text-red\"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">View all</a></li>
                </ul>
              </li>

              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                  <span class=\"hidden-xs\">Alexander Pierce</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
                ";
        // line 218
        $this->displayBlock('Image', $context, $blocks);
        echo "             
            </div>
            <div class=\"pull-left info\">
              <p>Alexander Pierce</p>

              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
              <span class=\"input-group-btn\">
                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li ";
        // line 239
        $this->displayBlock('DashActive', $context, $blocks);
        echo ">
              <a href=\"./\">
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
              </a> 
            </li>
            <li ";
        // line 244
        $this->displayBlock('MailboxActive', $context, $blocks);
        echo ">
              <a href=\"MailBox\">
                <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                ";
        // line 247
        $this->displayBlock('MailboxEtra', $context, $blocks);
        // line 248
        echo "              </a>
              ";
        // line 249
        $this->displayBlock('MailboxEtra2', $context, $blocks);
        // line 250
        echo "            </li>
            <li ";
        // line 251
        $this->displayBlock('clientsActive', $context, $blocks);
        echo "> 
              <a href=\"Clients\">
                <i class=\"fa fa-users\"></i> <span>Liste des clients</span>
              </a>
            </li>
            
            <li ";
        // line 257
        $this->displayBlock('gerantsActive', $context, $blocks);
        echo ">
              <a href=\"Gerants\">
                <i class=\"fa fa-user\"></i> <span>Liste des gérants</span>
              </a>
            </li>
            
            <li ";
        // line 263
        $this->displayBlock('AganceActive', $context, $blocks);
        echo "> 
              <a href=\"Agences\">
                <i class=\"fa fa-suitcase\"></i> <span>Liste des Agence</span>
              </a>
            </li>
             
            <li ";
        // line 269
        $this->displayBlock('offreActive', $context, $blocks);
        echo ">
              <a href=\"Offres\">
                <i class=\"fa fa-shopping-cart\"></i> <span>Liste des offre</span>
              </a>
            </li>
            <li ";
        // line 274
        $this->displayBlock('StatActive', $context, $blocks);
        echo ">
              <a href=\"\">
                <i class=\"fa fa-pie-chart\"></i> <span>Statistiques</span>
              </a>
            </li>
            
            
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        ";
        // line 289
        $this->displayBlock('DashCore', $context, $blocks);
        // line 290
        echo "        ";
        $this->displayBlock('MailCore', $context, $blocks);
        // line 291
        echo "        ";
        $this->displayBlock('clientsCore', $context, $blocks);
        // line 292
        echo "        ";
        $this->displayBlock('gerantsCore', $context, $blocks);
        // line 293
        echo "        ";
        $this->displayBlock('AganceCore', $context, $blocks);
        // line 294
        echo "        ";
        $this->displayBlock('offreCore', $context, $blocks);
        // line 295
        echo "        ";
        $this->displayBlock('StatCore', $context, $blocks);
        echo "    
      </div>
        
        <footer class=\"main-footer\">
        <strong>Copyright &copy; 2015 Timob</strong> All rights reserved.
      </footer>
    <!-- Include all JavaScripts, compiled by Assetic -->
    </div>
    <!-- AdminLTE App -->
    
    <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- ChartJS 1.0.1 -->
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/chartjs/Chart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/js/pages/dashboard2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- FastClick -->
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>

        <!-- page script -->
    <script type=\"text/javascript\">
        \$(function () {
          \$('#mytab').dataTable();
        });     
    </script>

  </body>
</html>";
    }

    // line 218
    public function block_Image($context, array $blocks = array())
    {
    }

    // line 239
    public function block_DashActive($context, array $blocks = array())
    {
    }

    // line 244
    public function block_MailboxActive($context, array $blocks = array())
    {
    }

    // line 247
    public function block_MailboxEtra($context, array $blocks = array())
    {
    }

    // line 249
    public function block_MailboxEtra2($context, array $blocks = array())
    {
    }

    // line 251
    public function block_clientsActive($context, array $blocks = array())
    {
    }

    // line 257
    public function block_gerantsActive($context, array $blocks = array())
    {
    }

    // line 263
    public function block_AganceActive($context, array $blocks = array())
    {
    }

    // line 269
    public function block_offreActive($context, array $blocks = array())
    {
    }

    // line 274
    public function block_StatActive($context, array $blocks = array())
    {
    }

    // line 289
    public function block_DashCore($context, array $blocks = array())
    {
    }

    // line 290
    public function block_MailCore($context, array $blocks = array())
    {
    }

    // line 291
    public function block_clientsCore($context, array $blocks = array())
    {
    }

    // line 292
    public function block_gerantsCore($context, array $blocks = array())
    {
    }

    // line 293
    public function block_AganceCore($context, array $blocks = array())
    {
    }

    // line 294
    public function block_offreCore($context, array $blocks = array())
    {
    }

    // line 295
    public function block_StatCore($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle::admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 295,  607 => 294,  602 => 293,  597 => 292,  592 => 291,  587 => 290,  582 => 289,  577 => 274,  572 => 269,  567 => 263,  562 => 257,  557 => 251,  552 => 249,  547 => 247,  542 => 244,  537 => 239,  532 => 218,  517 => 339,  511 => 336,  507 => 335,  502 => 333,  496 => 330,  490 => 327,  485 => 325,  480 => 323,  475 => 321,  470 => 319,  465 => 317,  461 => 316,  456 => 314,  451 => 312,  446 => 310,  441 => 308,  436 => 306,  421 => 295,  418 => 294,  415 => 293,  412 => 292,  409 => 291,  406 => 290,  404 => 289,  386 => 274,  378 => 269,  369 => 263,  360 => 257,  351 => 251,  348 => 250,  346 => 249,  343 => 248,  341 => 247,  335 => 244,  327 => 239,  303 => 218,  270 => 188,  261 => 182,  198 => 122,  183 => 110,  168 => 98,  153 => 86,  138 => 74,  111 => 50,  84 => 26,  79 => 24,  73 => 21,  68 => 19,  63 => 17,  58 => 15,  53 => 13,  45 => 8,  36 => 1,);
    }
}
