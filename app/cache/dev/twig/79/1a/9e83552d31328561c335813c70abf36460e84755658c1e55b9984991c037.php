<?php

/* sprint2RealEstateAdminBundle::admin_layout.html.twig */
class __TwigTemplate_791a9e83552d31328561c335813c70abf36460e84755658c1e55b9984991c037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Image1' => array($this, 'block_Image1'),
            'Image2' => array($this, 'block_Image2'),
            'Image' => array($this, 'block_Image'),
            'DashActive' => array($this, 'block_DashActive'),
            'MailboxActive' => array($this, 'block_MailboxActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'MailboxEtra2' => array($this, 'block_MailboxEtra2'),
            'adminsActive' => array($this, 'block_adminsActive'),
            'clientsActive' => array($this, 'block_clientsActive'),
            'gerantsActive' => array($this, 'block_gerantsActive'),
            'AganceActive' => array($this, 'block_AganceActive'),
            'offreActive' => array($this, 'block_offreActive'),
            'StatActive' => array($this, 'block_StatActive'),
            'PieChart' => array($this, 'block_PieChart'),
            'LineChart' => array($this, 'block_LineChart'),
            'ContactActive' => array($this, 'block_ContactActive'),
            'ArchiveActive' => array($this, 'block_ArchiveActive'),
            'DashCore' => array($this, 'block_DashCore'),
            'MailCore' => array($this, 'block_MailCore'),
            'clientsCore' => array($this, 'block_clientsCore'),
            'gerantsCore' => array($this, 'block_gerantsCore'),
            'AganceCore' => array($this, 'block_AganceCore'),
            'offreCore' => array($this, 'block_offreCore'),
            'StatCore' => array($this, 'block_StatCore'),
            'ArchiveCore' => array($this, 'block_ArchiveCore'),
            'adminsCore' => array($this, 'block_adminsCore'),
            'ContactCore' => array($this, 'block_ContactCore'),
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
                            
                                
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    ";
        // line 65
        $this->displayBlock('Image1', $context, $blocks);
        // line 66
        echo "                                    
                                    <span class=\"hidden-xs\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "compte"), "method"), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "compte"), "method"), "prenom", array()), "html", null, true);
        echo "</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">
                                        ";
        // line 72
        $this->displayBlock('Image2', $context, $blocks);
        // line 73
        echo "                                        
                                        <p>
                                            ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "compte"), "method"), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "compte"), "method"), "prenom", array()), "html", null, true);
        echo "
                                            <small>";
        // line 76
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "compte"), "method"), "privilege", array()) == 7)) {
            echo " Super Admin";
        }
        echo "</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                        
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        
                                        <div class=\"pull-right\">
                                            <a href=\"logout\" class=\"btn btn-default btn-flat\">Sign out</a>
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
        // line 101
        $this->displayBlock('Image', $context, $blocks);
        echo "             
                    </div>
                    <div class=\"pull-left info\">
                        <p>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "compte"), "method"), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "compte"), "method"), "prenom", array()), "html", null, true);
        echo "</p>
                            
                        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class=\"sidebar-menu\">
                    <li class=\"header\">MAIN NAVIGATION</li>
                    <li ";
        // line 115
        $this->displayBlock('DashActive', $context, $blocks);
        echo ">
                        <a href=\"./\">
                            <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                        </a> 
                    </li>
                    <li ";
        // line 120
        $this->displayBlock('MailboxActive', $context, $blocks);
        echo ">
                        <a href=\"MailBox\">
                            <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                        ";
        // line 123
        $this->displayBlock('MailboxEtra', $context, $blocks);
        // line 124
        echo "                    </a>
                ";
        // line 125
        $this->displayBlock('MailboxEtra2', $context, $blocks);
        // line 126
        echo "            </li>
            <li ";
        // line 127
        $this->displayBlock('adminsActive', $context, $blocks);
        echo ">
              <a href=\"Admins\">
                <i class=\"fa fa-user\"></i> <span>Liste des Admins</span>
              </a>
            </li>
            <li ";
        // line 132
        $this->displayBlock('clientsActive', $context, $blocks);
        echo "> 
                <a href=\"Clients\">
                    <i class=\"fa fa-users\"></i> <span>Liste des clients</span>
                </a>
            </li>
                
            <li ";
        // line 138
        $this->displayBlock('gerantsActive', $context, $blocks);
        echo ">
                <a href=\"Gerants\">
                    <i class=\"fa fa-user\"></i> <span>Liste des gérants</span>
                </a>
            </li>
                
            <li ";
        // line 144
        $this->displayBlock('AganceActive', $context, $blocks);
        echo "> 
                <a href=\"Agences\">
                    <i class=\"fa fa-suitcase\"></i> <span>Liste des Agence</span>
                </a>
            </li>
                
            <li ";
        // line 150
        $this->displayBlock('offreActive', $context, $blocks);
        echo ">
                <a href=\"Offres\">
                    <i class=\"fa fa-shopping-cart\"></i> <span>Liste des offre</span>
                </a>
            </li>
            <li ";
        // line 155
        $this->displayBlock('StatActive', $context, $blocks);
        echo ">
              <a href=\"chartPie\">
                <i class=\"fa fa-pie-chart\"></i> <span>Statistiques</span>
              
              ";
        // line 159
        $this->displayBlock('PieChart', $context, $blocks);
        // line 160
        echo "              </a>
              ";
        // line 161
        $this->displayBlock('LineChart', $context, $blocks);
        // line 162
        echo "            </li>
            
            <li ";
        // line 164
        $this->displayBlock('ContactActive', $context, $blocks);
        echo ">
              <a href=\"sendMail\">
                <i class=\"fa fa-envelope-o\"></i> <span>Contacter</span>
              </a>
            <li ";
        // line 168
        $this->displayBlock('ArchiveActive', $context, $blocks);
        echo ">
                <a href=\"listArchive\">
                    <i class=\"fa fa-folder\"></i> <span>Archive</span>
                </a>
            </li>
                
                
    </section>
    <!-- /.sidebar -->
</aside>
    
<!-- Content Wrapper. Contains page content -->
    
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
";
        // line 183
        $this->displayBlock('DashCore', $context, $blocks);
        // line 184
        $this->displayBlock('MailCore', $context, $blocks);
        // line 185
        $this->displayBlock('clientsCore', $context, $blocks);
        // line 186
        $this->displayBlock('gerantsCore', $context, $blocks);
        // line 187
        $this->displayBlock('AganceCore', $context, $blocks);
        // line 188
        $this->displayBlock('offreCore', $context, $blocks);
        // line 189
        $this->displayBlock('StatCore', $context, $blocks);
        echo "    
";
        // line 190
        $this->displayBlock('ArchiveCore', $context, $blocks);
        echo " 
";
        // line 191
        $this->displayBlock('adminsCore', $context, $blocks);
        // line 192
        $this->displayBlock('ContactCore', $context, $blocks);
        // line 193
        echo "</div>
    
<footer class=\"main-footer\">
    <strong>Copyright &copy; 2015 Timob</strong> All rights reserved.
</footer>
<!-- Include all JavaScripts, compiled by Assetic -->
</div>
<!-- AdminLTE App -->
    
<!-- jQuery 2.1.3 -->
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- jvectormap -->
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- datepicker -->
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- iCheck -->
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- SlimScroll 1.3.0 -->
<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- ChartJS 1.0.1 -->
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/chartjs/Chart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/js/pages/dashboard2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- DATA TABES SCRIPT -->
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
<!-- FastClick -->
<script src=\"";
        // line 236
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

    // line 65
    public function block_Image1($context, array $blocks = array())
    {
    }

    // line 72
    public function block_Image2($context, array $blocks = array())
    {
    }

    // line 101
    public function block_Image($context, array $blocks = array())
    {
    }

    // line 115
    public function block_DashActive($context, array $blocks = array())
    {
    }

    // line 120
    public function block_MailboxActive($context, array $blocks = array())
    {
    }

    // line 123
    public function block_MailboxEtra($context, array $blocks = array())
    {
    }

    // line 125
    public function block_MailboxEtra2($context, array $blocks = array())
    {
    }

    // line 127
    public function block_adminsActive($context, array $blocks = array())
    {
    }

    // line 132
    public function block_clientsActive($context, array $blocks = array())
    {
    }

    // line 138
    public function block_gerantsActive($context, array $blocks = array())
    {
    }

    // line 144
    public function block_AganceActive($context, array $blocks = array())
    {
    }

    // line 150
    public function block_offreActive($context, array $blocks = array())
    {
    }

    // line 155
    public function block_StatActive($context, array $blocks = array())
    {
    }

    // line 159
    public function block_PieChart($context, array $blocks = array())
    {
    }

    // line 161
    public function block_LineChart($context, array $blocks = array())
    {
    }

    // line 164
    public function block_ContactActive($context, array $blocks = array())
    {
    }

    // line 168
    public function block_ArchiveActive($context, array $blocks = array())
    {
    }

    // line 183
    public function block_DashCore($context, array $blocks = array())
    {
    }

    // line 184
    public function block_MailCore($context, array $blocks = array())
    {
    }

    // line 185
    public function block_clientsCore($context, array $blocks = array())
    {
    }

    // line 186
    public function block_gerantsCore($context, array $blocks = array())
    {
    }

    // line 187
    public function block_AganceCore($context, array $blocks = array())
    {
    }

    // line 188
    public function block_offreCore($context, array $blocks = array())
    {
    }

    // line 189
    public function block_StatCore($context, array $blocks = array())
    {
    }

    // line 190
    public function block_ArchiveCore($context, array $blocks = array())
    {
    }

    // line 191
    public function block_adminsCore($context, array $blocks = array())
    {
    }

    // line 192
    public function block_ContactCore($context, array $blocks = array())
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
        return array (  590 => 192,  585 => 191,  580 => 190,  575 => 189,  570 => 188,  565 => 187,  560 => 186,  555 => 185,  550 => 184,  545 => 183,  540 => 168,  535 => 164,  530 => 161,  525 => 159,  520 => 155,  515 => 150,  510 => 144,  505 => 138,  500 => 132,  495 => 127,  490 => 125,  485 => 123,  480 => 120,  475 => 115,  470 => 101,  465 => 72,  460 => 65,  445 => 236,  439 => 233,  435 => 232,  430 => 230,  424 => 227,  418 => 224,  413 => 222,  408 => 220,  403 => 218,  398 => 216,  393 => 214,  389 => 213,  384 => 211,  379 => 209,  374 => 207,  369 => 205,  364 => 203,  352 => 193,  350 => 192,  348 => 191,  344 => 190,  340 => 189,  338 => 188,  336 => 187,  334 => 186,  332 => 185,  330 => 184,  328 => 183,  310 => 168,  303 => 164,  299 => 162,  297 => 161,  294 => 160,  292 => 159,  285 => 155,  277 => 150,  268 => 144,  259 => 138,  250 => 132,  242 => 127,  239 => 126,  237 => 125,  234 => 124,  232 => 123,  226 => 120,  218 => 115,  202 => 104,  196 => 101,  166 => 76,  160 => 75,  156 => 73,  154 => 72,  144 => 67,  141 => 66,  139 => 65,  121 => 50,  94 => 26,  89 => 24,  83 => 21,  78 => 19,  73 => 17,  68 => 15,  63 => 13,  55 => 8,  46 => 1,);
    }
}
