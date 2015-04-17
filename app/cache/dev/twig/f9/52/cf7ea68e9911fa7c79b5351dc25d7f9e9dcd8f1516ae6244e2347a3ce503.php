<?php

/* sprint2RealEstateAdminBundle:Default:index.html.twig */
class __TwigTemplate_f952cf7ea68e9911fa7c79b5351dc25d7f9e9dcd8f1516ae6244e2347a3ce503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("sprint2RealEstateAdminBundle::admin_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'Image' => array($this, 'block_Image'),
            'Image1' => array($this, 'block_Image1'),
            'Image2' => array($this, 'block_Image2'),
            'DashActive' => array($this, 'block_DashActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'DashCore' => array($this, 'block_DashCore'),
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

    // line 2
    public function block_Image($context, array $blocks = array())
    {
        // line 3
        echo "        <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
    ";
    }

    // line 5
    public function block_Image1($context, array $blocks = array())
    {
        // line 6
        echo "        <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>     
    ";
    }

    // line 8
    public function block_Image2($context, array $blocks = array())
    {
        // line 9
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
    ";
    }

    // line 11
    public function block_DashActive($context, array $blocks = array())
    {
        // line 12
        echo "        class=\"active treeview\"
    ";
    }

    // line 14
    public function block_MailboxEtra($context, array $blocks = array())
    {
        // line 15
        echo "        <small class=\"label pull-right bg-yellow\">";
        echo twig_escape_filter($this->env, (isset($context["countmail4"]) ? $context["countmail4"] : $this->getContext($context, "countmail4")), "html", null, true);
        echo "</small>
    ";
    }

    // line 17
    public function block_DashCore($context, array $blocks = array())
    {
        // line 18
        echo "        <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                  <h3>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["offren"]) ? $context["offren"] : $this->getContext($context, "offren")), "html", null, true);
        echo "</h3>
                  <p>Offres</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-shopping-cart\"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-green\">
                <div class=\"inner\">
                  <h3>";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["utilisateurgn"]) ? $context["utilisateurgn"] : $this->getContext($context, "utilisateurgn")), "html", null, true);
        echo "</h3>
                  <p>Gérants</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user\"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-yellow\">
                <div class=\"inner\">
                  <h3>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["utilisateurcn"]) ? $context["utilisateurcn"] : $this->getContext($context, "utilisateurcn")), "html", null, true);
        echo "</h3>
                  <p>Clients</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-users\"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-red\">
                <div class=\"inner\">
                  <h3>";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["agancen"]) ? $context["agancen"] : $this->getContext($context, "agancen")), "html", null, true);
        echo "</h3>
                  <p>Agance</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-suitcase\"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
          </div>
        <div class=\"row\">
        <!-- Offres LIST -->
        <div class=\"col-md-6\">
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Recently Added Offres</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <ul class=\"products-list product-list-in-box\">
                    ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["offre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 87
            echo "                      <li class=\"item\">
                      <div class=\"product-img\">
                        <img src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "urlimage", array()), "html", null, true);
            echo "\" alt=\"Product Image\"/>
                      </div>
                      <div class=\"product-info\">
                        <a  class=\"product-type\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "typeimmob", array()), "html", null, true);
            echo "</a><span class=\"label label-warning pull-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "payement", array()), "html", null, true);
            echo " TD</span>
                        <span class=\"product-description\">
                          ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nbrpiece", array()), "html", null, true);
            echo " Piece, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "surface", array()), "html", null, true);
            echo " Metre, Tunisie ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "idAdresse", array()), "gouvernorat", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "idAdresse", array()), "ville", array()), "html", null, true);
            echo ", A ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nature", array()), "html", null, true);
            echo " 
                        </span>
                      </div>
                      </li><!-- /.item -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                  </ul>
                </div>
              </div>
        </div>
                      
              <!-- Client LIST -->
              <div class=\"col-md-6\">
              <div class=\"box box-warning\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Latest Client</h3>
                  <div class=\"box-tools pull-right\">
                   
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <ul class=\"users-list clearfix\">
                    ";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateurc"]);
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateurc"]) {
            // line 118
            echo "                    <li>
                      <img src=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurc"], "urlp", array()), "html", null, true);
            echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" >";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurc"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurc"], "nom", array()), "html", null, true);
            echo "</a>
                    </li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateurc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                  </ul><!-- /.users-list -->
                </div>
              </div>
              </div>
        </div>       
              <div class=\"row\">
                  
                  <!-- Agence LIST -->
        <div class=\"col-md-6\">
              <div class=\"box box-danger\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Recently Added Agence</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <ul class=\"products-list product-list-in-box\">
                    ";
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["agance"]);
        foreach ($context['_seq'] as $context["_key"] => $context["agance"]) {
            // line 143
            echo "                      <li class=\"item\"> 
                          <div class=\"product-img\">
                        <img src=\"https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSAJkvd0MYu8xLY4QJqfzM-1a2UbUvIyN0W3FxyS97C-D7uXaQA\" alt=\"Product Image\"/>
                      </div>
                      <div class=\"product-info\">
                        <a  class=\"product-type\">";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["agance"], "nom", array()), "html", null, true);
            echo "</a>
                        <span class=\"product-description\">
                          Gerait par <a  class=\"product-type\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idGerant", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idGerant", array()), "prenom", array()), "html", null, true);
            echo "</a>, Localiser ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idAdresse", array()), "gouvernorat", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idAdresse", array()), "ville", array()), "html", null, true);
            echo "
                      </div>
                      </li><!-- /.item -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                  </ul>
                </div>
              </div>
        </div>
                      
              <!-- USERS LIST -->
              <div class=\"col-md-6\">

              <div class=\"box box-tools\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Latest gerant</h3>
                  <div class=\"box-tools pull-right\">
                   
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <ul class=\"users-list clearfix\">
                    ";
        // line 173
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateurg"]);
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateurg"]) {
            // line 174
            echo "                    <li>
                      <img src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurg"], "urlp", array()), "html", null, true);
            echo "\" alt=\"User Image\"/>
                      <a class=\"users-list-name\" >";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurg"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateurg"], "nom", array()), "html", null, true);
            echo "</a>
                    </li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateurg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                  </ul><!-- /.users-list -->
                </div>
              </div></div>
               
        </div>
        </section>       
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 179,  341 => 176,  337 => 175,  334 => 174,  330 => 173,  309 => 154,  293 => 150,  288 => 148,  281 => 143,  277 => 142,  256 => 123,  245 => 120,  241 => 119,  238 => 118,  234 => 117,  214 => 99,  195 => 94,  188 => 92,  182 => 89,  178 => 87,  174 => 86,  148 => 63,  132 => 50,  116 => 37,  100 => 24,  92 => 18,  89 => 17,  82 => 15,  79 => 14,  74 => 12,  71 => 11,  64 => 9,  61 => 8,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }
}
