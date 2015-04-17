<?php

/* sprint2GerantBundle:Default:mail.html.twig */
class __TwigTemplate_23fce9fbd26ead7db1e0ddb3c8888b2059c29e3733f8aa371bd441743191bf8d extends Twig_Template
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
        echo "    <title>MailBox</title>
    <script>
        \$(function() {
            var idexp;
            \$(\"#dialog\").dialog({
                autoOpen: false,
                modal: true,
                show: {
                    effect: \"clip\",
                    duration: 500
                },
                hide: {
                    effect: \"blind\",
                    duration: 500
                }
            });

            \$(\".replyb\").click(function() {
                \$(\"#dialog\").dialog(\"open\");
                idexp = \$(this).attr('idexp');
            });

            \$(\"#annuler\").click(function() {
                \$(\"#dialog\").dialog(\"close\");
            });

            \$(\"#envoyer\").click(function() {
                \$.post(\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("sprint2_gerant_messageajax");
        echo "\",
                        {
                            text: \$(\"textarea\").val(),
                            iddest: idexp,
                            idexp: ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()), "html", null, true);
        echo "
                        },
                function(data, status) {
                    \$(\"#dialog\").dialog(\"close\");
                });
            });
        });
    </script>
";
    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        // line 46
        echo "    <a class=\"item\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_homepage", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"home icon\"></i> Accueil
    </a>
    <a class=\"active item\"  href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_mail", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"mail icon\"></i> Messages
    </a>
    <a class=\"item\"  href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_listeoffres", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()))), "html", null, true);
        echo "\">
        <i class=\"list layout icon\"></i> Liste des offres
    </a>
";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "    <div class=\"ui green segment\">
        <h1 class=\"ui header\">
            <img src=\"/image/mail.png\">
            <div class=\"content\">
                MailBox
            </div>
        </h1>
        <div class=\"ui clearing divider\"></div>
        <table class=\"ui celled striped table\">
            <tbody>
                ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 69
            echo "                    <tr>
                        <td class=\"collapsing\">
                            <i class=\"mail icon\"></i> ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "idExpediteur", array()), "html", null, true);
            echo "
                        </td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
            echo "</td>
                        <td class=\"right aligned collapsing\">";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "tempsEnvoi", array()), "d/m/y \\- h:i"), "html", null, true);
            echo "</td>
                        <td class=\"collapsing\">
                            <div class=\"ui compact icon button circular orange replyb\" idexp=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "idExpediteur", array()), "id", array()), "html", null, true);
            echo "\">
                                <i class=\"reply icon\"></i>
                            </div>
                            <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_suppmail", array("id" => $this->getAttribute((isset($context["gerant"]) ? $context["gerant"] : $this->getContext($context, "gerant")), "id", array()), "idm" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\">
                                <div class=\"ui compact icon button circular red\">
                                    <i class=\"remove icon\"></i>
                                </div>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            </tbody>
        </table>
    </div>
    <div id=\"dialog\" title=\"Envoyer un message\">
        <div class=\"ui form segment orange\">
            <label>Contenu:</label>
            <div class=\"field\">
                <textarea></textarea>
            </div>
            <div style=\"text-align: right\">
                <div class=\"ui inverted green left attached button\" id=\"envoyer\">Envoyer</div>
                <div class=\"ui inverted red right attached ui button\" id=\"annuler\">Annuler</div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "sprint2GerantBundle:Default:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 87,  157 => 79,  151 => 76,  146 => 74,  142 => 73,  137 => 71,  133 => 69,  129 => 68,  117 => 58,  114 => 57,  106 => 52,  100 => 49,  93 => 46,  90 => 45,  77 => 35,  70 => 31,  41 => 4,  38 => 3,  11 => 1,);
    }
}
