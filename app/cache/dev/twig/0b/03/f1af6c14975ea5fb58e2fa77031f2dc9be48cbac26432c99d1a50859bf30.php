<?php

/* sprint2RealEstateAdminBundle:Pages:PieChart.html.twig */
class __TwigTemplate_0b03f1af6c14975ea5fb58e2fa77031f2dc9be48cbac26432c99d1a50859bf30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("sprint2RealEstateAdminBundle::admin_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'Image' => array($this, 'block_Image'),
            'Image1' => array($this, 'block_Image1'),
            'Image2' => array($this, 'block_Image2'),
            'StatActive' => array($this, 'block_StatActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'LineChart' => array($this, 'block_LineChart'),
            'StatCore' => array($this, 'block_StatCore'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sprint2RealEstateAdminBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_Image($context, array $blocks = array())
    {
        // line 3
        echo "        <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
    ";
    }

    // line 5
    public function block_Image1($context, array $blocks = array())
    {
        // line 6
        echo "        <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>     
    ";
    }

    // line 8
    public function block_Image2($context, array $blocks = array())
    {
        // line 9
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
    ";
    }

    // line 11
    public function block_StatActive($context, array $blocks = array())
    {
        // line 12
        echo "        class=\"active treeview\"
    ";
    }

    // line 14
    public function block_MailboxEtra($context, array $blocks = array())
    {
        // line 15
        echo "        <small class=\"label pull-right bg-yellow\">";
        echo twig_escape_filter($this->env, (isset($context["countmail4"]) ? $context["countmail4"] : $this->getContext($context, "countmail4")), "html", null, true);
        echo "</small>
    ";
    }

    // line 19
    public function block_LineChart($context, array $blocks = array())
    {
        // line 20
        echo "        <ul class=\"treeview-menu\">
            <li class=\"active\"><a href=\"chartPie\">PieChart</a></li>
            <li><a href=\"chartLine\">LineChart</a></li>   
        </ul>
    ";
    }

    // line 26
    public function block_StatCore($context, array $blocks = array())
    {
        // line 27
        echo "       <section class=\"content\">
       
   
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"

type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>

<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>

<script type=\"text/javascript\">
 
 ";
        // line 40
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "

</script>


<div id=\"piechart\" style=\"min-width: 550px; height: 550px; margin-bottom: 10px\">";
        // line 48
        echo "</div>

     <i>
<center>Notice : 
    Ce graphique schématise les notes les plus fréquents des offres posté par chaque gérant</i></center>
   </section>


";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:PieChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 48,  119 => 40,  104 => 27,  101 => 26,  93 => 20,  90 => 19,  83 => 15,  80 => 14,  75 => 12,  72 => 11,  65 => 9,  62 => 8,  55 => 6,  52 => 5,  45 => 3,  42 => 2,  11 => 1,);
    }
}
