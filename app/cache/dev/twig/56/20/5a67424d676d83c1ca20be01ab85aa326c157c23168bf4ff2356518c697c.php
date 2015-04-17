<?php

/* sprint2RealEstateAdminBundle:Default:connect.html.twig */
class __TwigTemplate_56205a67424d676d83c1ca20be01ab85aa326c157c23168bf4ff2356518c697c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

  <meta charset=\"UTF-8\">

  <title>RealEstate - Connection</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);


</style>

    <script src=\"js/prefixfree.min.js\"></script>
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/css/logandauth/style.css"), "html", null, true);
        echo "\">
</head>

<body>

  <div class=\"body\"></div>
\t\t<div class=\"grad\"></div>
\t\t<div class=\"header\">
\t\t\t<div>Real<span>Estate</span></div>
\t\t</div>
\t\t<br>
\t\t<div class=\"login\" >
\t\t\t<form method=\"POST\">
\t\t\t\t<input type=\"email\" placeholder=\"e-mail\" name=\"mail\" id=\"mail\"><br>
\t\t\t\t<input type=\"password\" placeholder=\"mot de passe\" name=\"password\" id=\"password\"><br>
\t\t\t\t<input type=\"submit\" value=\"connection\">
\t\t\t</form>\t
\t\t</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Default:connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 18,  19 => 1,);
    }
}
