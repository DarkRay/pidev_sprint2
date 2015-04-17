<?php

/* sprint2RealEstateAdminBundle:Pages:LineChart.html.twig */
class __TwigTemplate_8df3b9016ac77cf82e8c406c7212dc85355864274fb98e475276ce13b5090d31 extends Twig_Template
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

    // line 18
    public function block_LineChart($context, array $blocks = array())
    {
        // line 19
        echo "        <ul class=\"treeview-menu\">
            <li class=\"active\"><a href=\"chartPie\">PieChart</a></li>
            <li><a href=\"chartLine\">LineChart</a></li>   
        </ul>
    ";
    }

    // line 25
    public function block_StatCore($context, array $blocks = array())
    {
        // line 26
        echo "       <section class=\"content\">
       

<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"

type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>

<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>

<script type=\"text/javascript\">

 ";
        // line 39
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "

</script>

<div id=\"linechart\" style=\"min-width: 550px; height: 550px; margin: 0 auto\"></div>

<br/>
     <i>
<center>
   Administrateur : 0 , Gérant : 1 , Client , 2</i></center>
   </section>


";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:LineChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  104 => 26,  101 => 25,  93 => 19,  90 => 18,  83 => 15,  80 => 14,  75 => 12,  72 => 11,  65 => 9,  62 => 8,  55 => 6,  52 => 5,  45 => 3,  42 => 2,  11 => 1,);
    }
}
