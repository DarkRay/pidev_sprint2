<?php

/* realEstateBundle:Offre:err.html.twig */
class __TwigTemplate_2168584720e1dd4c7a4c4a570345e737730d35e153e1a1d28a89bbdd372d514c extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:err.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
