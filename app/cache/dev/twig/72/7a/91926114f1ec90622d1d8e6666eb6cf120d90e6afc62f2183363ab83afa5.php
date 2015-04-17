<?php

/* realEstateBundle:Offre:offreCards.html.twig */
class __TwigTemplate_727a91926114f1ec90622d1d8e6666eb6cf120d90e6afc62f2183363ab83afa5 extends Twig_Template
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
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "<div class=\"col-sm-12 col-md-6 row-space-2\">

  ";
            // line 5
            $context["a"] = $this->getAttribute($context["entity"], "position", array());
            // line 6
            echo "  
    ";
            // line 7
            $context["foo"] = twig_split_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), ",");
            // line 8
            echo "
      <div data-lat= ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), 0, array(), "array"), "html", null, true);
            echo "
           data-lng= ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), 1, array(), "array"), "html", null, true);
            echo "
           data-name=\"Sun-filled room in Boerum Hill\"
           data-url=\"/rooms/4540756?guests=2&amp;s=eNQN\"
           data-user=\"1243559\"
           data-price=\"71&euro;\"
           class=\"listing\"
           itemscope itemtype=\"http://schema.org/Enumeration\">
      
        <div class=\"panel-image listing-img\">
          <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"media-photo media-cover\">
            <div class=\"listing-img-container media-cover text-center\">
                                                                  
                                                          
              <img itemprop=\"image\" data-current=\"0\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "urlImage", array()), "html", null, true);
            echo "?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70\" class=\"img-responsive-height\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "\"  >
            </div>
          </a>
      
      
          <div class=\"panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label\">
            <div>
              <sup class=\"h6 text-contrast\"></sup>
              <span class=\"h3 price-amount\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "payement", array()), "html", null, true);
            echo "</span>
              <sup class=\"h6 text-contrast\">&euro;</sup>
               
            </div>
      
          </div>
      
            
      
          <div class=\"panel-overlay-top-right wl-social-connection-panel\">
            <span class=\"rich-toggle wish_list_button wishlist-button\"
                  data-img=\"https://a0.muscache.com/ic/pictures/66670616/6a2e75e7_original.jpg?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70\"
                  data-name=\"Sun-filled room in ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "\"
                  data-address=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "\"
                  data-hosting_id=\"4540756\">
              <input type=\"checkbox\"
                     id=\"wishlist-widget-4540756\"
                     name=\"wishlist-widget-4540756\"
                     data-for-hosting=\"4540756\">
            </span>
      
      
          </div>
      
        </div>
      
        <div class=\"panel-body panel-card-section\">
          <div class=\"media\">
              <a href=\"/users/show/1243559\"
                 class=\"pull-right media-photo media-round card-profile-picture card-profile-picture-offset\">
                <img src=\"https://a2.muscache.com/ic/users/1243559/profile_pic/1417104530/original.jpg?interpolation=lanczos-none&amp;crop=w:w;*,*&amp;crop=h:h;*,*&amp;resize=68:*&amp;output-format=jpg&amp;output-quality=70\" alt=\"\">
              </a>
            <a href=\"/rooms/4540756?guests=2&amp;s=eNQN\" target=\"listing_4540756\" class=\"text-normal\">
              <div title=\"Sun-filled room in ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "\" class=\"h5 listing-name text-truncate row-space-top-1\">
                Sun-filled room in ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "
              </div>
            </a>
            <div class=\"text-muted listing-location text-truncate\"><a href=\"/rooms/4540756?guests=2&amp;s=eNQN\" class=\"text-normal link-reset\">
   
  ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "
</a>
</div>
          </div>
      
        </div>
    </div>
    
    </div>

  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    

";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:offreCards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 82,  130 => 70,  122 => 65,  118 => 64,  95 => 44,  91 => 43,  76 => 31,  63 => 23,  56 => 19,  44 => 10,  40 => 9,  37 => 8,  35 => 7,  32 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
