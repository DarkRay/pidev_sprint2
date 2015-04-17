<?php

/* sprint2RealEstateAdminBundle:Pages:detailsoffre.html.twig */
class __TwigTemplate_fef25265d6a437da7111ce34f03dacaaadb679ae6e6e4ced40a68ca004895a47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("sprint2RealEstateAdminBundle::admin_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'OffreActive' => array($this, 'block_OffreActive'),
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

    // line 3
    public function block_OffreActive($context, array $blocks = array())
    {
        // line 4
        echo "    class=\"active treeview\"
";
    }

    // line 7
    public function block_offreCore($context, array $blocks = array())
    {
        // line 8
        echo "        <script
            src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyBzE3mGNaIQaBLClCVVEwHb82y4zIFlEgA\">
        </script>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <section class=\"content\">
        <div class=\"row\">
            <input id=\"pos\" name=\"pos\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "position", array()), "html", null, true);
        echo "\" style=\"display:none\" />
        
            <!-- USERS Offre -->

            <ul class=\"offre-list\">

                <li style=\"list-style-type: none; margin-left: 200px\" >
                    <div class=\"small-box bg-black-gradient\" >
                        <div class=\"inner\">
                                                        
                            <h3 style=\"color:crimson;font-family:Palatino Linotype; \">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "typeimmob", array()), "html", null, true);
        echo "</h3>
                            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "urlimage", array()), "html", null, true);
        echo "\"  width=\"350\"/>   <br> <br>
                              <font style=\"color:crimson;font-family:Palatino Linotype; font-size:130%\">  Adresse  : </font>Tunisie , ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "idAdresse", array()), "gouvernorat", array()), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "idAdresse", array()), "ville", array()), "html", null, true);
        echo "<br><br>
                                 
                                   <font style=\"color:crimson;font-family:Palatino Linotype; font-size:130%\"> Gerant : </font>  ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "idGerant", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "idGerant", array()), "prenom", array()), "html", null, true);
        echo " <br><br>
                                 <font style=\"color:crimson;font-family:Palatino Linotype;font-size:130% \">Nbr de pièces : </font>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "nbrpiece", array()), "html", null, true);
        echo " <br><br>
                             <font style=\"color:crimson;font-family:Palatino Linotype; font-size:130%\"> Surface :</font>
                             ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "surface", array()), "html", null, true);
        echo " Mètres <br><br>
                             <font style=\"color:crimson;font-family:Palatino Linotype;font-size:130% \"> Etat :  </font>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "nature", array()), "html", null, true);
        echo " <br><br>
                            <font style=\"color:crimson;font-family:Palatino Linotype; font-size:130%\">   Prix : </font> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "payement", array()), "html", null, true);
        echo " DT <br><br>
                            <font style=\"color:crimson;font-family:Palatino Linotype; font-size:130% \"> Publié le </font>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "datepublication", array()), "d/m/y"), "html", null, true);
        echo " <br><br>
   <font style=\"color:crimson;font-family:Palatino Linotype; font-size:130% \">Modifé le </font> ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "datemodification", array()), "d/m/y"), "html", null, true);
        echo "<br><br>
  <font style=\"color:crimson;font-family:Palatino Linotype; font-size:130% \">Note : </font> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "note", array()), "html", null, true);
        echo " / 5 <br><br>
  <font style=\"color:crimson;font-family:Palatino Linotype; font-size:130% \">Description :  </font>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), "html", null, true);
        echo " <br><br>
    <font style=\"color:crimson;font-family:Palatino Linotype; font-size:130% \">Position  </font>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), "html", null, true);
        echo " <br><br>
  <div id=\"googleMap\" style=\"width:auto;height:380px;\"></div>
                        </div>
                        
                       

                    </div>
                         
                </li>

            </ul>
                <!DOCTYPE html>

        <script>
            function initialize() {
                
              
                var pos = document.getElementById(\"pos\").value;
               var pos1 = pos.split(\",\");
                var myCenter=new google.maps.LatLng(pos1[0],pos1[1]);
                var mapProp = {
                    center: new google.maps.LatLng(pos1[0],pos1[1]),
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);
           
          
             marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE
            });
            marker.setMap(map);
            

   }   
             google.maps.event.addDomListener(window, 'load', initialize);
             
             
         
        </script>
  

        </div>
    </section> 
";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:detailsoffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  90 => 29,  84 => 28,  77 => 26,  73 => 25,  69 => 24,  56 => 14,  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 2,);
    }
}
