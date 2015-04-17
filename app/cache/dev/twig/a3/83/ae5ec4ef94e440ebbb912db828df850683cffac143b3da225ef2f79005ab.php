<?php

/* sprint2GerantBundle:Default:update.html.twig */
class __TwigTemplate_a383ae5ec4ef94e440ebbb912db828df850683cffac143b3da225ef2f79005ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("sprint2GerantBundle:Default:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sprint2GerantBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <title>Publier une offre</title>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/checkbox.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('.checkbox').checkbox('attach events', '.toggle.button');
        });
    </script>
";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"item\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_homepage", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"home icon\"></i> Accueil
    </a>
    <a class=\"item\"  href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_mail", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"mail icon\"></i> Messages
    </a>
    <a class=\"item\"  href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_listeoffres", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"list layout icon\"></i> Liste des offres
    </a>
";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"ui orange segment\">
        <form class=\"ui form\" method=\"POST\">
            <h4 class=\"ui dividing header\">Modifier une offre</h4>
            <div class=\"field\">
                <div class=\"two fields\">
                    <div class=\"field\">
                        <div class=\"two fields\">
                            <div class=\"field\">
                                <label>Surface</label>
                                <input type=\"text\" name=\"surface\" placeholder=\"Surface\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "surface", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"field\">
                                <label>Prix</label>
                                <input type=\"text\" name=\"prix\" placeholder=\"Prix\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "payement", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"two fields\">
                            <div class=\"field\">
                                <label>Nombre des pièces</label>
                                <input type=\"text\" name=\"nbrpieces\" placeholder=\"Nombre des pièces\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "nbrpiece", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"field\">
                                <label>Etage</label>
                                <input type=\"text\" name=\"etage\" placeholder=\"Etage\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "etage", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </div>
                </div>
                <label>Description</label>
                <textarea>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), "html", null, true);
        echo "</textarea>
                <div class=\"ui divider\"></div>
                <div class=\"two fields\">
                    <div class=\"field\">
                        <div class=\"two fields\">
                            <div class=\"field\">
                                <label>Type</label>
                                <select class=\"ui search dropdown\" name=\"typeimmob\">
                                    <option>Studio</option>
                                    <option>Appartement</option>
                                    <option>Villa</option>
                                    <option>Maison</option>
                                </select>
                            </div>
                            <div class=\"field\">
                                <label>Nature</label>
                                <select class=\"ui search dropdown\"  name=\"nature\">
                                    <option>Location</option>
                                    <option>Vente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"field\">
                        <label>Etat</label>
                        <select class=\"ui search dropdown\" name=\"etat\">
                            <option>Bonne</option>
                            <option>Moyenne</option>
                            <option>Mauvaise</option>
                        </select>
                    </div>
                </div>
                <div class=\"ui divider\"></div>
                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"ascenceur\" ";
        // line 91
        if (($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "ascenceur", array()) == 1)) {
            echo "checked ";
        }
        echo ">
                    <label>Ascenceur</label>
                </div>
                <br/>
                <br/>
                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"meuble\" ";
        // line 97
        if (($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "meuble", array()) == 1)) {
            echo "checked ";
        }
        echo ">
                    <label>Meublé</label>
                </div>
                <br/>
                <br/>
                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"chauffage\" ";
        // line 103
        if (($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "chauffage", array()) == 1)) {
            echo "checked ";
        }
        echo ">
                    <label>Chauffage central</label>
                </div>
                <br/>
                <br/>
                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"gaz\" ";
        // line 109
        if (($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "gazdeville", array()) == 1)) {
            echo "checked ";
        }
        echo ">
                    <label>Gaz de ville</label>
                </div>

            </div>
                    <input type=\"submit\" value=\"Modifier\">
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "sprint2GerantBundle:Default:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 109,  186 => 103,  175 => 97,  164 => 91,  127 => 57,  118 => 51,  111 => 47,  100 => 39,  93 => 35,  82 => 26,  79 => 25,  71 => 20,  65 => 17,  58 => 14,  55 => 13,  44 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
