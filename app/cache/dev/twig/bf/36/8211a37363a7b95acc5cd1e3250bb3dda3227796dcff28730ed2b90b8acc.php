<?php

/* realEstateBundle:Default:index.html.twig */
class __TwigTemplate_bf368211a37363a7b95acc5cd1e3250bb3dda3227796dcff28730ed2b90b8acc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<html>
<head>   
\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/customBootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"https://a0.muscache.com/airbnb/static/packages/common_o2.1-ec3a181fa47f7eeeccce237530c4bdf9.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://a2.muscache.com/airbnb/static/p1/main-pretzel-d13973fd70f8c67a5804eef0ff3f7513.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    
</head>

<body class=\"home_view v2 simple-header p1\">

";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<!-- Include all JavaScripts, compiled by Assetic -->
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  59 => 12,  52 => 20,  47 => 18,  44 => 17,  42 => 15,  39 => 14,  37 => 12,  26 => 4,  21 => 1,);
    }
}
