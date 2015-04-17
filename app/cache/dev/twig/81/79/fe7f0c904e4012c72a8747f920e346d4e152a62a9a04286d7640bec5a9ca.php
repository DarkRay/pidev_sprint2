<?php

/* sprint2GerantBundle:Default:ajout.html.twig */
class __TwigTemplate_8179fe7f0c904e4012c72a8747f920e346d4e152a62a9a04286d7640bec5a9ca extends Twig_Template
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
        <form class=\"ui form\">
            <h4 class=\"ui dividing header\">Ajouter une offre</h4>
            <div class=\"field\">
                <div class=\"two fields\">
                    <div class=\"field\">
                        <div class=\"two fields\">
                            <div class=\"field\">
                                <input type=\"text\" name=\"first-name\" placeholder=\"Surface\">
                            </div>
                            <div class=\"field\">
                                <input type=\"text\" name=\"last-name\" placeholder=\"Prix\">
                            </div>
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"two fields\">
                            <div class=\"field\">
                                <input type=\"text\" name=\"first-name\" placeholder=\"Nombre des pièces\">
                            </div>
                            <div class=\"field\">
                                <input type=\"text\" name=\"last-name\" placeholder=\"Etage\">
                            </div>
                        </div>
                    </div>
                </div>
                <label>Description</label>
                <textarea></textarea>
                <div class=\"ui divider\"></div>
                <div class=\"two fields\">
                    <div class=\"field\">
                        <div class=\"two fields\">
                            <div class=\"field\">
                                <label>Type</label>
                                <select class=\"ui search dropdown\">
                                    <option>Studio</option>
                                    <option>Appartement</option>
                                </select>
                            </div>
                            <div class=\"field\">
                                <label>Nature</label>
                                <select class=\"ui search dropdown\">
                                    <option>Location</option>
                                    <option>Vente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"two fields\">
                            <div class=\"field\">
                                <label>Etat</label>
                                <select class=\"ui search dropdown\">
                                    <option></option>
                                    <option>Bon</option>
                                    <option>Moyenne</option>
                                </select>
                            </div>
                            <div class=\"field\">
                                <label>Adresse</label>
                                <select class=\"ui search dropdown\">
                                    <option>a</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"ui divider\"></div>
                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"public\">
                    <label>Ascenceur</label>
                </div>
                <br/>
                <br/>
                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"public\">
                    <label>Meublé</label>
                </div>
                <br/>
                <br/>
                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"public\">
                    <label>Chauffage central</label>
                </div>
                <br/>
                <br/>
                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"public\">
                    <label>Gaz de ville</label>
                </div>

            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "sprint2GerantBundle:Default:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  79 => 25,  71 => 20,  65 => 17,  58 => 14,  55 => 13,  44 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
