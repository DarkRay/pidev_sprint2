<?php

/* sprint2GerantBundle:Default:listeoffres.html.twig */
class __TwigTemplate_054b0df28ad51c7e05d412a910563031ba467d1130da72515ef5fb70298ea048 extends Twig_Template
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
        echo "    <title>Liste des offres</title>
    <script>
        \$(function() {
            \$(document).tooltip();
        });
    </script>
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "    <a class=\"item\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_homepage", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"home icon\"></i> Accueil
    </a>
    <a class=\"item\"  href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_mail", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"mail icon\"></i> Messages
        ";
        // line 18
        if (((isset($context["nonvu"]) ? $context["nonvu"] : $this->getContext($context, "nonvu")) > 0)) {
            // line 19
            echo "            <div class=\"ui label blue\">";
            echo twig_escape_filter($this->env, (isset($context["nonvu"]) ? $context["nonvu"] : $this->getContext($context, "nonvu")), "html", null, true);
            echo "</div>
        ";
        }
        // line 21
        echo "    </a>
    <a class=\"active item\"  href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_listeoffres", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"list layout icon\"></i> Liste des offres
    </a>
";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"ui purple segment\">
        <h1 class=\"ui header\">
            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/list.png"), "html", null, true);
        echo "\">
            <div class=\"content\">
                Liste des offres
            </div>
        </h1>
        <div class=\"ui clearing divider\"></div>
        <div class=\"ui divided items\">
            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 38
            echo "                <div class=\"item\">
                    <div class=\"image\">
                        <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "urlimage", array()), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"content\">
                        <h3 class=\"ui black header\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "typeimmob", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nature", array()), "html", null, true);
            echo "</h3>
                        <div class=\"meta\">
                            <span class=\"cinema\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "datepublication", array()), "d/m/y"), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"description\">
                            <p>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "description", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"extra\">
                            <div class=\"ui label\"><i class=\"dollar icon\"></i>Prix: ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "payement", array()), "html", null, true);
            echo " DT</div>
                            <div class=\"ui label\"><i class=\"home icon\"></i>Surface: ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "surface", array()), "html", null, true);
            echo "m²</div>
                            <div class=\"ui label\"><i class=\"sitemap icon\"></i>Nombre des pièces: ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nbrpiece", array()), "html", null, true);
            echo "</div>
                            <br/>
                            <div class=\"ui mini images\">
                                ";
            // line 56
            if (($this->getAttribute($context["offre"], "ascenceur", array()) == 1)) {
                // line 57
                echo "                                    <img class=\"ui image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/elevator.png"), "html", null, true);
                echo "\" title=\"ascenseur\">
                                ";
            }
            // line 59
            echo "                                ";
            if (($this->getAttribute($context["offre"], "meuble", array()) == 1)) {
                // line 60
                echo "                                    <img class=\"ui image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/meuble.jpg"), "html", null, true);
                echo "\" title=\"meublée\">
                                ";
            }
            // line 62
            echo "                                ";
            if (($this->getAttribute($context["offre"], "climatisation", array()) == 1)) {
                // line 63
                echo "                                    <img class=\"ui image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/clim.jpg"), "html", null, true);
                echo "\" title=\"climatiseur\">
                                ";
            }
            // line 65
            echo "                                ";
            if (($this->getAttribute($context["offre"], "chauffage", array()) == 1)) {
                // line 66
                echo "                                    <img class=\"ui image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/chauffage.jpg"), "html", null, true);
                echo "\" title=\"chauffage central\">
                                ";
            }
            // line 68
            echo "                                ";
            if (($this->getAttribute($context["offre"], "gazdeville", array()) == 1)) {
                // line 69
                echo "                                    <img class=\"ui image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gaz.jpg"), "html", null, true);
                echo "\" title=\"gaz de ville\">
                                ";
            }
            // line 71
            echo "                            </div>
                        </div>
                        <div class=\"ui buttons right floated\">
                            <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_update", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()), "ido" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\">
                                <div class=\"ui positive button\">Modifier</div>
                            </a>
                            <div class=\"or\" data-text=\"ou\"></div>
                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_suppoffre", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()), "ido" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\">
                                <div class=\"ui button red\">Supprimer</div>
                            </a>
                        </div>
                    </div>
                    ";
            // line 83
            echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
            echo "
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "sprint2GerantBundle:Default:listeoffres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 87,  213 => 83,  205 => 78,  198 => 74,  193 => 71,  187 => 69,  184 => 68,  178 => 66,  175 => 65,  169 => 63,  166 => 62,  160 => 60,  157 => 59,  151 => 57,  149 => 56,  143 => 53,  139 => 52,  135 => 51,  129 => 48,  123 => 45,  116 => 43,  110 => 40,  106 => 38,  102 => 37,  92 => 30,  88 => 28,  85 => 27,  77 => 22,  74 => 21,  68 => 19,  66 => 18,  61 => 16,  54 => 13,  51 => 12,  41 => 4,  38 => 3,  11 => 1,);
    }
}
