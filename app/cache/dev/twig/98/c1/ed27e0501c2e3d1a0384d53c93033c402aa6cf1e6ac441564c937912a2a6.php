<?php

/* realEstateBundle:Default:header.html.twig */
class __TwigTemplate_98c1ed27e0501c2e3d1a0384d53c93033c402aa6cf1e6ac441564c937912a2a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("realEstateBundle:Default:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'offreCard8' => array($this, 'block_offreCard8'),
            'offreCard' => array($this, 'block_offreCard'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "realEstateBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "compte"), "method") == false)) {
            // line 7
            echo "<div class=\"airbnb-header shift-with-hiw\" id=\"header\">
<div class=\"regular-header clearfix hide-sm\">

  <ul class=\"nav pull-right list-unstyled\">
    <li class=\"list-your-space pull-left\">
      <a id=\"list-your-space\" class=\"btn btn-special\" href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("sprint2_authandlog_login");
            echo "\">
        Publiez votre annonce
      </a>
    </li>
  </ul>

 <ul class=\"nav pull-right logged-out list-unstyled medium-right-margin\">
    <li id=\"sign_up\" class=\"pull-left medium-right-margin\">
      <a data-signup-modal=\"\" data-header-view=\"true\" href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("sprint2_authandlog_register");
            echo "\" class=\"link-reset\" rel=\"nofollow\">
        Inscription
      </a>
    </li>
    <li id=\"login\" class=\"pull-left\">
      <a data-login-modal=\"\" href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("sprint2_authandlog_login");
            echo "\" class=\"link-reset\" rel=\"nofollow\">
        Connexion
      </a>
    </li>
  </ul>

</div>
</div>
";
        }
        // line 34
        echo "

";
        // line 36
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "compte"), "method") == true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "type"), "method") != "Admin"))) {
            // line 37
            echo "
";
            // line 38
            $context["user"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "compte"), "method");
            // line 39
            echo "<div id=\"header\" class=\"airbnb-header new shift-with-hiw logged_in is_host\">

  <div class=\"header--sm show-sm\">
  <a href=\"#\" data-prevent-default=\"\" class=\"link-reset burger--sm\">
    <i class=\"icon icon-reorder icon-rausch\"></i>
  </a>
  <div class=\"title--sm text-center\">
      <a href=\"/\" class=\"header-belo1\"><img src=\"/pidev_sprint2/web/bundles/sprint2realestateadmin/img/logo.png\"></img></a>

      
  </div>
  <div class=\"action--sm\"></div>
  <nav class=\"nav--sm\"></nav>
  <div class=\"search-modal-container\"></div>
</div>


  <div class=\"regular-header clearfix hide-sm\" id=\"old-header\">
  <a href=\"/\" class=\"header-belo1 pull-left\"><img src=\"/pidev_sprint2/web/bundles/sprint2realestateadmin/img/logo.png\"></img></a>


  <ul class=\"nav pull-left hide-sm list-unstyled search-form-container\" id=\"search-form-header\">
    <li class=\"browse-container pull-left hide-md\">
      <a class=\"link-reset header-browse-trigger\" href=\"#\" data-prevent-default=\"\" id=\"header-browse-trigger\">
  Naviguer
   <i class=\"icon icon-caret-down icon-light-gray h5\"></i>
</a>


    </li>
</ul>


  <ul class=\"nav pull-right help-menu list-unstyled\">
  <li id=\"header-help-menu\" class=\"help-menu-container pull-left large-right-margin hide-md\" data-dropdown-sticky=\"true\">
    <a id=\"header-help-trigger\" class=\"help-toggle link-reset header-help-trigger\" href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("sprint2_authandlog_logout");
            echo "\">
      déconnexion
      <i class=\"icon icon-caret-down icon-light-gray h5\"></i>
    </a>
    
  </li>
    <li class=\"list-your-space pull-left\">
      <a id=\"list-your-space\" class=\"btn btn-special list-your-space-btn\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_gerant_homepage", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">
        Publiez votre annonce
      </a>
    </li>
</ul>
<div id=\"help-panel-modal\">
</div>


  <ul class=\"nav pull-right logged-out list-unstyled medium-right-margin\">
  <li id=\"sign_up\" class=\"pull-left medium-right-margin\">
    <a data-signup-modal=\"\" data-header-view=\"true\" href=\"/signup_login?redirect_params[action]=show&amp;redirect_params[controller]=homepages\" class=\"link-reset\" rel=\"nofollow\">
      Inscription
    </a>
  </li>
  <li id=\"login\" class=\"pull-left\">
    <a data-login-modal=\"\" href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("sprint2_authandlog_login");
            echo "\" class=\"link-reset\" rel=\"nofollow\">
      Connexion
    </a>
  </li>
</ul>


  <ul class=\"nav pull-right logged-in list-unstyled medium-right-margin\">
<li class=\"user-item pull-left medium-right-margin dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
    <div class=\"link-reset header-avatar-trigger\" id=\"header-avatar-trigger\" >
      <div class=\"media-photo media-round user-profile-image\">
        ";
            // line 109
            echo "        <img width=\"28\" height=\"28\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "urlP", array()), "html", null, true);
            echo "?interpolation=lanczos-none&amp;crop=w:w;*,*&amp;crop=h:h;*,*&amp;resize=50:*&amp;output-format=jpg&amp;output-quality=70\" alt=\"\">
        }
</div>
      <span class=\"value_name\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "</span>
     
    </div>
    
  </li>
  <li id=\"inbox-item\" class=\"inbox-item pull-left\">
    <a href=\"/inbox\" data-href=\"/inbox\" rel=\"nofollow\" class=\"no-crawl link-reset inbox-icon\">
      <i class=\"alert-count fade text-center\">0</i>
      <i class=\"icon icon-envelope icon-gray\">
        <span class=\"text-hide hide\">
          Boîte de réception
        </span>
      </i>
    </a>
  </li>
</ul>
</div>
</div>
";
        }
        // line 131
        echo "

 

<div class=\"p1-hero-wrapper shift-with-hiw\">
  <div id=\"hero\" data-native-currency=\"EUR\">
    <ul class=\"list-unstyled hide\" id=\"slideshow\">
      <li class=\"active\">
        <img alt=\"Croatia-887a17b9994536f0d95bfd3f43ed664c\" src=\"https://a2.muscache.com/airbnb/static/landing_pages/pretzel/stills/croatia-887a17b9994536f0d95bfd3f43ed664c.jpg\" width=\"100%\">
      </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero1-a68542704634a6f7594b158aa8d4a0cd.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero2-414b89b87b11fb3fbaa3915810bf6a72.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a1.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero3-5064a585b15385b2b1d15a3fb682e722.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a2.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero4-3862c8fa8ac2925dd1ce76a9bc6c4962.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero5-662b34b371029c13f549a2e554b8a046.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero6-1b571925beb84a386bd4873a41992f21.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero7-118352cd807abf230459940cc8246f91.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero8-7187849aff939a535678d94c25d3c88c.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a1.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero9-211ff1a336a72c0eadaa9d1ba1ab7828.jpg\" width=\"100%\">
        </li>
    </ul>
      <video class=\"video-playing\" loop=\"loop\" preload=\"auto\" id=\"pretzel-video\">
        <source src=\"//a0.muscache.com/airbnb/static/Croatia-P1-1.mp4\" type=\"video/mp4\">
        <source src=\"//a0.muscache.com/airbnb/static/Croatia-P1-0.webm\" type=\"video/webm\">
      </video>
  </div>

  <div class=\"search-area text-center\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"intro-area va-middle\">
        <h1 id=\"tagline\" class=\"uppercase text-jumbo text-contrast row-space-1\">Bienvenue à la maison</h1>
        <div class=\"col-sm-12 col-center\">
          <div id=\"subtitle\" class=\"h4 text-contrast row-space-4\">
            Louez des logements uniques auprès d'hôtes locaux dans plus de 190 pays.
          </div>

          <div class=\"show-sm\">
            <div class=\"input-addon\" id=\"sm-search-field\">
              <span class=\"input-stem input-large fake-search-field\">
                Où voulez-vous aller&nbsp;?
              </span>
              <i class=\"input-suffix btn btn-primary icon icon-full icon-search\"></i>
            </div>
          </div>

          
          <a href=\"#discovery-container\" class=\"mobile-discovery-arrow row-space-top-2 hide-md hide-lg\">
            <i class=\"icon icon-chevron-down icon-white icon-size-2\"></i>
          </a>
        </div>
        <div class=\"p1-hero-search-form hide-sm\">
          <div class=\"col-12\">

          <form id=\"search_form\" method=\"Post\" action=\"";
        // line 201
        echo $this->env->getExtension('routing')->getPath("offre_search_gouvern");
        echo "\" >
          <div class=\"search-form-input-wrapper\" data-reactid=\".0.0\">
          <div class=\"location-wrapper\" data-reactid=\".0.0.0\">
          <span class=\"input-placeholder-group\" data-reactid=\".0.0.0.0\">

          <input class=\"form-inline location input-large input-contrast\" aria-autocomplete=\"both\" aria-owns=\"menu-1\" autocomplete=\"off\" value=\"\" placeholder=\"Où voulez-vous aller&nbsp;?\" name=\"gouvernorat\" id=\"location\"  type=\"text\">

          </span>

          <p id=\"enter_location_error_message\" class=\"bad hide\" >Merci d'entrer une gouvernorat</p>
          </div><span class=\"input-placeholder-group\" >

          </span>

         <button type=\"submit\" class=\"search-button form-inline btn btn-primary btn-large\" id=\"submit_location\" data-reactid=\".0.2\" >Rechercher</button></form></div>
        </div>
      </div>

    </div>
  </div>
</div>

</section>
</div>

";
    }

    // line 231
    public function block_content($context, array $blocks = array())
    {
        // line 232
        echo "<div class=\"panel panel-dark\">
  <div id=\"discovery-container\">
    <div class=\"discovery-section hide page-container-responsive page-container-no-padding\" id=\"upcoming-trips\">
      <div class=\"section-intro text-center row-space-6 row-space-top-8\">
        <h2 class=\"row-space-1 strong\">
          Votre voyage à venir
        </h2>
      </div>
      <div class=\"discovery-tiles\">
        <div class=\"homepage-module\"></div>
      </div>
    </div>

    <div class=\"discovery-section hide page-container-responsive page-container-no-padding\" id=\"discovery-saved-searches\">
      <div class=\"section-intro text-center row-space-6 row-space-top-8\">
        <h2 class=\"row-space-1 strong\">
          Démarrez votre nouvelle aventure
        </h2>
      </div>
      <div class=\"discovery-tiles\">
        <div class=\"homepage-module\"></div>
      </div>
    </div>

    <div class=\"discovery-section hide page-container-responsive page-container-no-padding\" id=\"weekend-recommendations\">
    </div>

    <div class=\"discovery-section page-container-responsive page-container-no-padding row-space-6\" id=\"discover-recommendations\">
      <div class=\"section-intro text-center row-space-6 row-space-top-8\">
        <h2 class=\"row-space-1 strong\">
          Explorez le monde
        </h2>
        <p class=\"text-lead\">
          Découvrez où voyagent les gens, à travers le monde entier.
        </p>
      </div>
      <div class=\"discovery-tiles\">
        
<div class=\"row\">
";
        // line 271
        $this->displayBlock('offreCard8', $context, $blocks);
        // line 273
        echo "
";
        // line 274
        $this->displayBlock('offreCard', $context, $blocks);
        // line 276
        echo "

  <div class=\"col-sm-12 text-center row-space-4 row-space-top-4 hide-sm\">
    <a class=\"btn btn-large show-more hide\">En voir plus</a>
  </div>
</div>



       

";
    }

    // line 271
    public function block_offreCard8($context, array $blocks = array())
    {
    }

    // line 274
    public function block_offreCard($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 274,  373 => 271,  358 => 276,  356 => 274,  353 => 273,  351 => 271,  310 => 232,  307 => 231,  277 => 201,  205 => 131,  183 => 112,  176 => 109,  162 => 97,  143 => 81,  133 => 74,  96 => 39,  94 => 38,  91 => 37,  89 => 36,  85 => 34,  73 => 25,  65 => 20,  54 => 12,  47 => 7,  45 => 6,  42 => 5,  39 => 4,  11 => 2,);
    }
}
