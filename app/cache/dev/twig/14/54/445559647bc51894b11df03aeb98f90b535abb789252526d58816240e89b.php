<?php

/* sprint2RealEstateAdminBundle:Pages:offres.html.twig */
class __TwigTemplate_1454445559647bc51894b11df03aeb98f90b535abb789252526d58816240e89b extends Twig_Template
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
            'offreActive' => array($this, 'block_offreActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'offreCore' => array($this, 'block_offreCore'),
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
    public function block_offreActive($context, array $blocks = array())
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

    // line 17
    public function block_offreCore($context, array $blocks = array())
    {
        // line 18
        echo "       
       <section class=\"content\">
        <div class=\"row\">
            
              <!-- USERS Offre -->
              <div class=\"col-md-12\">
                <ul class=\"offre-list\">
                    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["offre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            echo "                   
                        <li style=\"list-style-type: none;\">
                            <div class=\"small-box bg-red\">
                                <div class=\"inner\">
                                    <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "urlimage", array()), "html", null, true);
            echo "\"  height=\"150\"/>                                  
                                  <h3>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "typeimmob", array()), "html", null, true);
            echo "</h3>
                                  <p> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nbrpiece", array()), "html", null, true);
            echo " Piece, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "surface", array()), "html", null, true);
            echo " Metre, Tunisie ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "idAdresse", array()), "gouvernorat", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "idAdresse", array()), "ville", array()), "html", null, true);
            echo ", A ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nature", array()), "html", null, true);
            echo " </p>
                                </div>

                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_real_estate_admin_oneoffre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"small-box-footer\">
                                  Plus d'informations <i class=\"fa fa-arrow-circle-right\"></i>
                                  
                                </a>
                                 <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_real_estate_admin_offres_supp", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"small-box-footer\">
                                 Supprimer <i class=\"fa fa-trash-o\"></i>
                                </a>
                            </div>
                                   
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </ul>

          </div></div>

       </section>             
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 45,  139 => 38,  132 => 34,  118 => 31,  114 => 30,  110 => 29,  101 => 25,  92 => 18,  89 => 17,  82 => 15,  79 => 14,  74 => 12,  71 => 11,  64 => 9,  61 => 8,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }
}
