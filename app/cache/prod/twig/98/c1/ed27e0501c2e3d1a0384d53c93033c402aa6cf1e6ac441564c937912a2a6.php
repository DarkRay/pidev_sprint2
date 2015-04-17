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
        echo "<div class=\"airbnb-header shift-with-hiw\" id=\"header\">

<div class=\"regular-header clearfix hide-sm\">


  <ul class=\"nav pull-right list-unstyled\">
    
    <li class=\"list-your-space pull-left\">
      <a id=\"list-your-space\" class=\"btn btn-special\" href=\"/#\">
        Publiez votre annonce
      </a>
    </li>
  </ul>
>
 <ul class=\"nav pull-right logged-out list-unstyled medium-right-margin\">
    <li id=\"sign_up\" class=\"pull-left medium-right-margin\">
      <a data-signup-modal=\"\" data-header-view=\"true\" href=\"/#\" class=\"link-reset\" rel=\"nofollow\">
        Inscription
      </a>
    </li>
    <li id=\"login\" class=\"pull-left\">
      <a data-login-modal=\"\" href=\"/#\" class=\"link-reset\" rel=\"nofollow\">
        Connexion
      </a>
    </li>
  </ul>

</div>
</div>


 

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

          <a href=\"#\" class=\"btn hide-sm btn-contrast btn-large btn-semi-transparent how-it-works\">
            Mode d'emploi
          </a>
          <a href=\"#discovery-container\" class=\"mobile-discovery-arrow row-space-top-2 hide-md hide-lg\">
            <i class=\"icon icon-chevron-down icon-white icon-size-2\"></i>
          </a>
        </div>
        <div class=\"p1-hero-search-form hide-sm\">
          <div class=\"col-12\"><form id=\"search_form\" method=\"get\" data-reactid=\".0\"><div class=\"search-form-input-wrapper\" data-reactid=\".0.0\"><div class=\"location-wrapper\" data-reactid=\".0.0.0\"><span class=\"input-placeholder-group\" data-reactid=\".0.0.0.0\"><input class=\"form-inline location input-large input-contrast\" aria-autocomplete=\"both\" aria-owns=\"menu-1\" autocomplete=\"off\" value=\"\" placeholder=\"Où voulez-vous aller&nbsp;?\" name=\"location\" id=\"location\" data-reactid=\".0.0.0.0.1\" type=\"text\"></span>

          <p id=\"enter_location_error_message\" class=\"bad hide\" data-reactid=\".0.0.0.1\">Merci d'entrer un emplacement</p>
          </div><span class=\"input-placeholder-group\" data-reactid=\".0.0.1\">

          </span>

         <button type=\"submit\" class=\"search-button form-inline btn btn-primary btn-large\" id=\"submit_location\" data-reactid=\".0.2\">Rechercher</button></form></div>
        </div>
      </div>

    </div>
  </div>
</div>
</section>
</div>

";
    }

    // line 126
    public function block_content($context, array $blocks = array())
    {
        // line 127
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


  <div class=\"col-lg-8 col-md-12 rm-padding-sm\">
    <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a1.muscache.com/ic/discover/85?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px');\" sm-img-url=\"https://a1.muscache.com/ic/discover/85?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px\">
    <a href=\"/s/New-York--NY?source=ds\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"New York\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            New York
          </div>
      </div>
    </div>
    </a>
</div>

  </div>
  <div class=\"col-lg-4 col-md-6 col-sm-12 rm-padding-sm row-space-4\">
  <div class=\"\">
    <div class=\"darken-on-hover-container\">
        <a href=\"/rooms/459878\" class=\"text-normal link-reset\">
          <div class=\"discovery-card darken-on-hover discovery-listing\" style=\"background-image:url('https://a2.muscache.com/ic/pictures/5638957/da9f7808_original.jpg?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70')\">
            <div class=\"panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label\">
              <sup class=\"h6 text-contrast\">
                
              </sup>
              <span class=\"h3 price-amount\">
                457
              </span>
              <sup class=\"h6 text-contrast\">
                €
              </sup>
            </div>

            <div class=\"va-container va-container-v va-container-h\">
              <div class=\"va-middle text-center text-contrast\">
                    <div class=\"media-photo media-round row-space-2 card-profile-picture\">
                        <img alt=\"Original\" src=\"https://a0.muscache.com/ic/users/2286529/profile_pic/1343923179/original.jpg?interpolation=lanczos-none&amp;crop=w:w;*,*&amp;crop=h:h;*,*&amp;resize=68:*&amp;output-format=jpg&amp;output-quality=70\" height=\"50\" width=\"50\">
                    </div>
                <div class=\"h3 strong\">Où vit Justin</div>
                <div>Washington</div>
              </div>
            </div>

          </div>
        </a>

    </div>
  </div>
</div>


    <div class=\"col-lg-4 col-md-6 col-sm-12 rm-padding-sm \">
      <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a0.muscache.com/ic/pictures/discovery/attribute_photos/beach_1x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=326px:326px&amp;v=6');\" sm-img-url=\"https://a0.muscache.com/ic/pictures/discovery/attribute_photos/beach_2x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=655px:326px&amp;v=6\">
    <a href=\"/s/Hawaii--United-States?source=ds\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            Séjour au soleil à Hawaï
          </div>
      </div>
    </div>
    </a>
</div>

    </div>
    <div class=\"col-lg-4 col-md-6 col-sm-12 rm-padding-sm hide-sm\">
      <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a1.muscache.com/ic/discover/396?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=326px:326px');\" sm-img-url=\"https://a0.muscache.com/ic/discover/397?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px\">
    <a href=\"/s/Paris--France?source=ds\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"Paris\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            Paris
          </div>
      </div>
    </div>
    </a>
</div>

    </div>
    <div class=\"col-lg-4 col-md-6 col-sm-12 rm-padding-sm hide-sm\">
      <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a0.muscache.com/ic/discover/228?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;crop=0.67xw:1xh;*,*&amp;downsize=326px:326px');\" sm-img-url=\"https://a2.muscache.com/ic/discover/2752?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;crop=0.67xw:1xh;*,*&amp;downsize=655px:326px\">
    <a href=\"/s/Barcelona--Spain?source=ds\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"Barcelona\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            Barcelone
          </div>
      </div>
    </div>
    </a>
</div>

    </div>

  <div class=\"col-lg-4 col-md-6 col-sm-12 rm-padding-sm row-space-4\">
  <div class=\"\">
    <div class=\"darken-on-hover-container\">
        <a href=\"/rooms/492596\" class=\"text-normal link-reset\">
          <div class=\"discovery-card darken-on-hover discovery-listing\" style=\"background-image:url('https://a2.muscache.com/ic/pictures/12978640/7d58d55d_original.jpg?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70')\">
            <div class=\"panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label\">
              <sup class=\"h6 text-contrast\">
                
              </sup>
              <span class=\"h3 price-amount\">
                195
              </span>
              <sup class=\"h6 text-contrast\">
                €
              </sup>
            </div>

            <div class=\"va-container va-container-v va-container-h\">
              <div class=\"va-middle text-center text-contrast\">
                    <div class=\"media-photo media-round row-space-2 card-profile-picture\">
                        <img alt=\"Original\" src=\"https://a1.muscache.com/ic/users/2430022/profile_pic/1422648116/original.jpg?interpolation=lanczos-none&amp;crop=w:w;*,*&amp;crop=h:h;*,*&amp;resize=68:*&amp;output-format=jpg&amp;output-quality=70\" height=\"50\" width=\"50\">
                    </div>
                <div class=\"h3 strong\">Où vit Peter &amp; James</div>
                <div>Londres</div>
              </div>
            </div>

          </div>
        </a>

    </div>
  </div>
</div>

  <div class=\"col-lg-8 col-md-12 hide-sm rm-padding-sm\">
    <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a2.muscache.com/ic/discover/42?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px');\" sm-img-url=\"https://a2.muscache.com/ic/discover/42?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px\">
    <a href=\"/s/London--United-Kingdom?source=ds\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"London\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            Londres
          </div>
      </div>
    </div>
    </a>
</div>

  </div>

    <div class=\"col-lg-4 col-md-6 hide-sm rm-padding-sm col-switch col-md-push-6 col-lg-push-0\">
      <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a2.muscache.com/ic/discover/275?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=326px:326px');\" sm-img-url=\"https://a1.muscache.com/ic/discover/276?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px\">
    <a href=\"/s/San-Francisco--CA?source=ds\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"San Francisco\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            San Francisco
          </div>
      </div>
    </div>
    </a>
</div>

    </div>
    <div class=\"col-lg-4 col-md-6 hide-sm rm-padding-sm \">
      <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a1.muscache.com/ic/discover/94?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=326px:326px');\" sm-img-url=\"https://a0.muscache.com/ic/discover/95?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px\">
    <a href=\"/s/Berlin--Germany?source=ds\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"Berlin\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            Berlin
          </div>
      </div>
    </div>
    </a>
</div>

    </div>
    <div class=\"col-lg-4 col-md-6 hide-sm rm-padding-sm \">
      <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a0.muscache.com/ic/pictures/discovery/attribute_photos/romantic_1x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=326px:326px&amp;v=6');\" sm-img-url=\"https://a0.muscache.com/ic/pictures/discovery/attribute_photos/romantic_2x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=655px:326px&amp;v=6\">
    <a href=\"/s/Budapest--Hungary?source=ds\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"Budapest\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            Escapade romantique à Budapest
          </div>
      </div>
    </div>
    </a>
</div>

    </div>

  <div class=\"col-sm-12 text-center row-space-4 row-space-top-4 hide-sm\">
    <a class=\"btn btn-large show-more hide\">En voir plus</a>
  </div>
</div>



        <div class=\"hide all-destinations row-space-top-6\">
          <h3 class=\"row-space-4 strong\">Toutes les destinations populaires</h3>
<div class=\"row row-space-8\">
    <div class=\"col-2\">
        <p><a href=\"/s/Amsterdam--Pays~Bas?ref=top-destinations\">Amsterdam</a></p>
        <p><a href=\"/s/Bali--Indon%C3%A9sie?ref=top-destinations\">Bali</a></p>
        <p><a href=\"/s/Barcelone--Espagne?ref=top-destinations\">Barcelone</a></p>
        <p><a href=\"/s/Berlin--Allemagne?ref=top-destinations\">Berlin</a></p>
    </div>
    <div class=\"col-2\">
        <p><a href=\"/s/Chicago--Illinois?ref=top-destinations\">Chicago</a></p>
        <p><a href=\"/s/Copenhague--Danemark?ref=top-destinations\">Copenhague</a></p>
        <p><a href=\"/s/Florence--Italie?ref=top-destinations\">Florence</a></p>
        <p><a href=\"/s/Hong-Kong?ref=top-destinations\">Hong Kong</a></p>
    </div>
    <div class=\"col-2\">
        <p><a href=\"/s/Istanbul--Turquie?ref=top-destinations\">Istanbul</a></p>
        <p><a href=\"/s/Lisbonne--Portugal?ref=top-destinations\">Lisbonne</a></p>
        <p><a href=\"/s/Londres--Royaume~Uni?ref=top-destinations\">Londres</a></p>
        <p><a href=\"/s/Los-Angeles--Californie?ref=top-destinations\">Los Angeles</a></p>
    </div>
    <div class=\"col-2\">
        <p><a href=\"/s/Madrid--Espagne?ref=top-destinations\">Madrid</a></p>
        <p><a href=\"/s/Miami--?ref=top-destinations\">Miami</a></p>
        <p><a href=\"/s/Montr%C3%A9al--Canada?ref=top-destinations\">Montréal</a></p>
        <p><a href=\"/s/New-York--New-York?ref=top-destinations\">New York</a></p>
    </div>
    <div class=\"col-2\">
        <p><a href=\"/s/Paris--France?ref=top-destinations\">Paris</a></p>
        <p><a href=\"/s/Rio-de-Janeiro--Br%C3%A9sil?ref=top-destinations\">Rio de Janeiro</a></p>
        <p><a href=\"/s/Rome--Italie?ref=top-destinations\">Rome</a></p>
        <p><a href=\"/s/San-Francisco--Californie?ref=top-destinations\">San Francisco</a></p>
    </div>
    <div class=\"col-2\">
        <p><a href=\"/s/S%C4%97oul--Cor%C3%A9e-du-Sud?ref=top-destinations\">Sėoul</a></p>
        <p><a href=\"/s/Sydney--Australie?ref=top-destinations\">Sydney</a></p>
        <p><a href=\"/s/Tokyo--Japon?ref=top-destinations\">Tokyo</a></p>
        <p><a href=\"/s/Venise--Italie?ref=top-destinations\">Venise</a></p>
    </div>
</div>

        </div>
      </div>
    </div>
  </div>
</div>
";
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
        return array (  163 => 127,  160 => 126,  40 => 5,  37 => 4,  11 => 2,);
    }
}
