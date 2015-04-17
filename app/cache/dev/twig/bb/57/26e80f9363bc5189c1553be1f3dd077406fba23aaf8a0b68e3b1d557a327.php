<?php

/* sprint2RealEstateAdminBundle:Pages:admins.html.twig */
class __TwigTemplate_bb5726e80f9363bc5189c1553be1f3dd077406fba23aaf8a0b68e3b1d557a327 extends Twig_Template
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
            'adminssActive' => array($this, 'block_adminssActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'adminsCore' => array($this, 'block_adminsCore'),
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
    public function block_adminssActive($context, array $blocks = array())
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

    // line 18
    public function block_adminsCore($context, array $blocks = array())
    {
        // line 19
        echo "       
        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <!-- List des client   -->
            <div class=\"col-xs-12\">
              <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\"></h3>
                </div><!-- /.box-header -->
                
                <div class=\"box-body\">
                  <table id=\"mytab\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Mail</th>
                        <th>Privilege</th>
                        <th>+/-</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 46
            echo "                            <tr>
                              <td class=\"nid\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "id", array()), "html", null, true);
            echo "</td>
                              <td class=\"nmail\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "nom", array()), "html", null, true);
            echo "</td>
                              <td class=\"nnom\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "prenom", array()), "html", null, true);
            echo "</td>
                              <td class=\"nprenom\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "mail", array()), "html", null, true);
            echo "</td>
                              <td class=\"nprivilege\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "privilege", array()), "html", null, true);
            echo "</td>
                              <td><a href = \"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_real_estate_admin_admins_supp", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn\"><i class=\"fa fa-trash-o\"></i></button></a>
                                  
                              </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Mail</th>
                       <th>Privilege</th>
                        <th>+/-</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            
            <!-- Modif des client   -->
            <div id=\"Modifier\" class=\"col-xs-12 cvvvvvvb\" style=\"display:none\">
            <!--                                                                         -->
            <div class=\"box box-warning direct-chat direct-chat-warning\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Modifier</h3>
              <div class=\"box-tools pull-right\">
                
                  <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
               
              </div>
            </div><!-- /.box-header -->
            <form method=\"POST\">
            <div class=\"box-body\">
                <table id=\"mytab\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>   
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Mail</th>
                        <th>Mot de passe</th>
                        <th>Privilege</th>
                        ";
        // line 97
        echo "                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type=\"text\" name=\"id\" class=\"idc\"/></td>
                            <td><input type=\"text\" name=\"nom\" class=\"mailc\"/></td>
                            <td><input type=\"text\" name=\"prenom\" class=\"nomc\"/></td>
                            <td><input type=\"text\" name=\"mail\" class=\"prenomc\"/></td>
                            ";
        // line 106
        echo "                            <td><input type=\"text\" name=\"password\" class=\"statmatric\"/></td>   
                            <td><SELECT name=\"nom\" size=\"1\">
                            <OPTION>1
                            <OPTION>2
                            <OPTION>3
                            <OPTION>4
                            <OPTION>5
                             <OPTION>6
                            <OPTION>7
                            </SELECT></td> 
                        </tr>
                    </tbody>
                  </table>
               
            </div>    
            <div class=\"box-footer\">
              <div class=\"pull-right\">
                <span class=\"input-group-btn\">
                  <input type=\"submit\" name=\"Submit\" value=\"Modifier\" class=\"btn btn-danger btn-flat\"/>
                </span>
              <div class=\"with-border \"></div>
            </div><!-- /.box-footer-->
            </div>
          </div><!--/.direct-chat -->
          </form>
            </div>
           
            
            
            <!-- Ajout des client   -->
            <div class=\"col-xs-12\">
            <!--                                                                         -->
            <div class=\"box box-danger\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Ajout</h3>
              <div class=\"box-tools pull-right\">
                
                  <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
               
              </div>
            </div><!-- /.box-header -->
            
            
            <div class=\"box-body box-pane\">        
                
                ";
        // line 151
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
               ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
            
                
            </div>
                
            
            
          </div><!--/.direct-chat -->
          
            
          
            
            
          
            
            <!--                                                                         -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      
        
       <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/demo.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
    <!-- page script --> 
      <script type=\"text/javascript\">
      \$(function () {
        \$('#mytab').dataTable();
      });
      
    </script>
    <script type=\"text/javascript\">
    
    \$(\".dddd\").click(function(){
        \$(\".cvvvvvvb\").show(1000);
        });
            
    \$(\".dddd\").click(function() {
    var \$row = \$(this).closest(\"tr\");    // Find the row
    var \$nid = \$row.find(\".nid\").text(); // Find the text
    var \$nmail = \$row.find(\".nmail\").text(); // Find the text
    var \$nnom = \$row.find(\".nnom\").text(); // Find the text
    var \$nprenom = \$row.find(\".nprenom\").text(); // Find the text
    var \$nstat = \$row.find(\".nstat\").text(); // Find the text
    // Let's test it out
    //alert(\$text);
    \$('.idc').val(\$nid);
    \$('.mailc').val(\$nmail);
    \$('.nomc').val(\$nnom);
    \$('.prenomc').val(\$nprenom);
    \$('.statmatric').val(\$nstat);
    });      
    ";
        // line 217
        echo "
    </script>
    
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:admins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 217,  319 => 187,  314 => 185,  309 => 183,  304 => 181,  299 => 179,  295 => 178,  290 => 176,  285 => 174,  260 => 152,  256 => 151,  209 => 106,  199 => 97,  158 => 57,  147 => 52,  143 => 51,  139 => 50,  135 => 49,  131 => 48,  127 => 47,  124 => 46,  120 => 45,  92 => 19,  89 => 18,  82 => 15,  79 => 14,  74 => 12,  71 => 11,  64 => 9,  61 => 8,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }
}
