<?php

/* sprint2AuthandlogBundle:Default:registration.html.twig */
class __TwigTemplate_afa6edf69f654215833d59591d307f1bfb896435e9b129b85c5054fffaa19ffe extends Twig_Template
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
        echo "
<!DOCTYPE html> 
<html>
\t<head>
\t\t<title>Inscription</title>
\t\t
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0\">
\t\t
\t\t<link rel=\"stylesheet\" href=\"css/demo.css\">
\t\t<link rel=\"stylesheet\" href=\"css/sky-forms.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/logandauth/demo.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/logandauth/sky-forms.css"), "html", null, true);
        echo "\">

\t\t<!--[if lt IE 9]>
\t\t\t<link rel=\"stylesheet\" href=\"css/sky-forms-ie8.css\">
\t\t<![endif]-->
\t\t
\t\t<!--[if lt IE 10]>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
\t\t\t<script src=\"js/jquery.placeholder.min.js\"></script>
\t\t<![endif]-->\t\t
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t\t<script src=\"js/sky-forms-ie8.js\"></script>
\t\t<![endif]-->
                
\t</head>
        <body class=\"bg-cyan\" style=\"background-image: url('";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/bg-cyan.jpg"), "html", null, true);
        echo "') \">
            
\t\t<div class=\"body body-s\">
\t\t
\t\t\t<form action=\"\" class=\"sky-form\" onsubmit=\"return verifPassword()\" method=\"POST\">
\t\t\t\t<header>Inscription </header>
\t\t\t\t
\t\t\t\t<fieldset>\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t<i class=\"icon-append icon-envelope-alt\"></i>
\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Adresse Mail\"  name=\"mail\" required>
\t\t\t\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Votre e-mail</b>
\t\t\t\t\t\t</label>
\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t<i class=\"icon-append icon-lock\"></i>
\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Mot de passe\"  name=\"pwd\" id=\"pwd\" required>
\t\t\t\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Seulement des caracters et nombres</b>
\t\t\t\t\t\t</label>
\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t<i class=\"icon-append icon-lock\"></i>
\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Confirmer mot de passe\"  name=\"pwdc\" id=\"pwdc\" required>
\t\t\t\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Seulement des caracters et nombres</b>
\t\t\t\t\t\t</label>
\t\t\t\t\t</section>
\t\t\t\t</fieldset>
\t\t\t\t\t
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<section class=\"col col-6\">
\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Nom\"  name=\"nom\" required>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"col col-6\">
\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Prenom\"  name=\"prenom\" required>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"select\">
\t\t\t\t\t\t\t<select  name=\"typecompte\" required>
\t\t\t\t\t\t\t\t<option value=\"0\" selected disabled>En tant que ?</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Gerant</option>
\t\t\t\t\t\t\t\t<option value=\"2\">Client</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</section>

\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"select\">
\t\t\t\t\t\t\t<select  name=\"statmatri\" required>
\t\t\t\t\t\t\t\t<option value=\"Celibataire\" selected> Celibataire</option>
\t\t\t\t\t\t\t\t<option value=\"Mariee\">Mariee</option>
\t\t\t\t\t\t\t\t<option value=\"Divorcee\">Divorcee</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</section>

\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"Numero Mobile\" name=\"nummobile\">
\t\t\t\t\t\t</label>
\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"Numero Fix\" name=\"numfix\">
\t\t\t\t\t\t</label>
\t\t\t\t\t</section>

\t\t\t\t\t
\t\t\t\t</fieldset>
\t\t\t\t<footer>
\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Confirmer\">
\t\t\t\t</footer>
\t\t\t</form>
\t\t\t
\t\t</div>
\t</body>
\t<script type=\"text/javascript\">
\t\tfunction verifPassword() {
    \tvar pass1 = document.getElementById(\"pwd\").value;
   \t\t var pass2 = document.getElementById(\"pwdc\").value;
    \t\tvar ok = true;
    \t\tif (pass1 != pass2) {
        //alert(\"Passwords Do not match\");
        document.getElementById(\"pwd\").style.borderColor = \"#E34234\";
        document.getElementById(\"pwdc\").style.borderColor = \"#E34234\";
   \t     ok = false;
  \t\t\t }
  \t\t  
   \t\t return ok;
\t\t}
\t</script>
</html>
";
    }

    public function getTemplateName()
    {
        return "sprint2AuthandlogBundle:Default:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 29,  36 => 13,  32 => 12,  19 => 1,);
    }
}
