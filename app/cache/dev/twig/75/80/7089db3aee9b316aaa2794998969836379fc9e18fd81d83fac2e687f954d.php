<?php

/* sprint2GerantBundle:Default:index.html.twig */
class __TwigTemplate_75807089db3aee9b316aaa2794998969836379fc9e18fd81d83fac2e687f954d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/semantic.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "    </head>
    <body>
        <div class=\"ui fixed inverted main menu\">
            <div class=\"container\">
                <div class=\"ui inverted menu\">
                    ";
        // line 34
        $this->displayBlock('menu', $context, $blocks);
        // line 48
        echo "                    <div class=\"right menu\">
                        <div class=\"item\">
                            <i class=\"user icon green\"></i> ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "html", null, true);
        echo "
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("sprint2_authandlog_logout");
        echo "\">
                            <div class=\"ui vertical animated button red\">
                                <div class=\"visible content\">Déconnexion</div>
                                <div class=\"hidden content\">
                                    <i class=\"large sign out icon\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "    </body>
</html>";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "            <title>Agence immobiliere</title>
            <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rating.js"), "html", null, true);
        echo "\"></script>
            <script>
                \$(document).ready(function() {
                    \$('.ui.rating').rating('disable');
                });
            </script>
            <style>
                div .bg{
                    text-align:center;
                    background-image: url('/image/bg.jpg');
                    background-repeat: no-repeat;
                    height:400px;
                    background-size:cover;
                    background-position-x:center;
                    background-position-y: 0px;
                }
            </style>
        ";
    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        // line 35
        echo "                        <a class=\"active item\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_homepage", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
                            <i class=\"home icon\"></i> Accueil
                        </a>
                        <a class=\"item\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_mail", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
                            <i class=\"mail icon\"></i> Messages
                            ";
        // line 40
        if (((isset($context["nonvu"]) ? $context["nonvu"] : $this->getContext($context, "nonvu")) > 0)) {
            // line 41
            echo "                                <div class=\"ui label blue\">";
            echo twig_escape_filter($this->env, (isset($context["nonvu"]) ? $context["nonvu"] : $this->getContext($context, "nonvu")), "html", null, true);
            echo "</div>
                            ";
        }
        // line 43
        echo "                        </a>
                        <a class=\"item\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_listeoffres", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
                            <i class=\"list layout icon\"></i> Liste des offres
                        </a>
                    ";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "            <div class=\"ui segment\">
                <div class='bg'>
                    <div style=\"padding-top: 50px\">
                        <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("offre_new");
        echo "\">
                            <div class=\"big ui inverted orange button\">Publier une offre</div>
                        </a>
                    </div>

                </div>
                <h4 class=\"ui horizontal header divider\">
                    <i class=\"browser icon\"></i>
                    TOP 4 offres publiées
                </h4>
                <div class=\"ui cards\">
                    ";
        // line 83
        $context["i"] = 4;
        // line 84
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != 0)) {
                // line 85
                echo "                        <div class=\"card\">
                            ";
                // line 86
                if (($this->getAttribute($context["offre"], "note", array()) == 5)) {
                    // line 87
                    echo "                                <div class=\"ui top attached label green\">TOP</div>
                            ";
                }
                // line 89
                echo "                            <a class=\"image\" href=\"#\">
                                <img src=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "urlimage", array()), "html", null, true);
                echo "\">
                            </a>
                            <div class=\"content\">
                                <h4 class=\"ui header\">";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "typeimmob", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nature", array()), "html", null, true);
                echo "</h4>
                                <div class=\"meta\">
                                    ";
                // line 95
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "datepublication", array()), "d/m/y"), "html", null, true);
                echo "
                                </div>
                                <div class=\"description\">
                                    ";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "description", array()), "html", null, true);
                echo "
                                </div>
                            </div>
                            <div class=\"extra\">
                                Rating:
                                <div class=\"ui star rating\" data-rating=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "note", array()), "html", null, true);
                echo "\" data-max-rating=\"5\"></div>
                            </div>
                        </div>
                        ";
                // line 106
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1);
                // line 107
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "sprint2GerantBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 108,  229 => 107,  227 => 106,  221 => 103,  213 => 98,  207 => 95,  200 => 93,  194 => 90,  191 => 89,  187 => 87,  185 => 86,  182 => 85,  176 => 84,  174 => 83,  160 => 72,  155 => 69,  152 => 68,  144 => 44,  141 => 43,  135 => 41,  133 => 40,  128 => 38,  121 => 35,  118 => 34,  96 => 11,  93 => 10,  90 => 9,  85 => 110,  83 => 68,  65 => 53,  59 => 50,  55 => 48,  53 => 34,  46 => 29,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
