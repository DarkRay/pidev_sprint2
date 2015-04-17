<?php

/* sprint2RealEstateAdminBundle:Pages:agence.html.twig */
class __TwigTemplate_fa7998fd4e725bff0b3e4fa7b4b30a0870bfe481140b407b9744928740a021d7 extends Twig_Template
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
            'AganceActive' => array($this, 'block_AganceActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'AganceCore' => array($this, 'block_AganceCore'),
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
    public function block_AganceActive($context, array $blocks = array())
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
    public function block_AganceCore($context, array $blocks = array())
    {
        // line 18
        echo "       
        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
             

              <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\"></h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Agant</th>
                        <th>Gouvernorat</th>
                        <th>Ville</th>
                        <th>Code postal</th>
                        <th>Description</th>
                        <th>+/-</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["agance"]);
        foreach ($context['_seq'] as $context["_key"] => $context["agance"]) {
            // line 47
            echo "                            <tr>
                              <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["agance"], "id", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["agance"], "nom", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idGerant", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idGerant", array()), "prenom", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idAdresse", array()), "gouvernorat", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idAdresse", array()), "ville", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idAdresse", array()), "codepostal", array()), "html", null, true);
            echo "</td>
                              <td> <textarea>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["agance"], "description", array()), "html", null, true);
            echo "</textarea></td>
                              <td><a href = \"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_real_estate_admin_agence_supp", array("id" => $this->getAttribute($context["agance"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Agant</th>
                        <th>Gouvernorat</th>
                        <th>Ville</th>
                        <th>Code postal</th>
                        <th>Description</th>
                        <th>+/-</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <!-- Ajout des gerant   -->
            <div class=\"col-xs-12\">
            <!--                                                                         -->
            <div class=\"box box-danger direct-chat direct-chat-danger\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Ajout</h3>
              <div class=\"box-tools pull-right\">
                
                  <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
               
              </div>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                <form method=\"POST\">
                <table id=\"mytab\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>                     
                        <th>Nom</th>
                        <th>Agant</th>
                        <th>Gouvernorat / Ville / Code postal</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><input type=\"text\" name=\"nom\"/></td>
                            <td><select name=\"agant\">
                            ";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateur"]);
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 104
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                           
                            </select></td>

                            <td><select name=\"adresse\">
                            ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["adresse"]);
        foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
            // line 110
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "gouvernorat", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "codepostal", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                           
                            </select></td>   
                            <td> <textarea name=\"description\"></textarea></td>
                        </tr>
                    </tbody>
                  </table>
                    <div class=\"box-footer\">
                      <div class=\"pull-right\">
                        <span class=\"input-group-btn\">
                          <input type=\"submit\" name=\"Submit\" value=\"Ajouter\" class=\"btn btn-danger btn-flat\"/>
                        </span>
                      <div class=\"with-border \"></div>
                    </div><!-- /.box-footer-->
                    </div>
                </form>
          </div><!--/.direct-chat -->
            </div>
          </div><!-- /.row -->
        </section><!-- /.content -->
      
        
       <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/demo.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
    <!-- page script --> 
      <script type=\"text/javascript\">
      \$(function () {
        \$(\"#example1\").dataTable();
      });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:agence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 146,  310 => 144,  305 => 142,  300 => 140,  295 => 138,  291 => 137,  286 => 135,  281 => 133,  257 => 111,  242 => 110,  238 => 109,  232 => 105,  219 => 104,  215 => 103,  168 => 58,  159 => 55,  155 => 54,  151 => 53,  147 => 52,  143 => 51,  137 => 50,  133 => 49,  129 => 48,  126 => 47,  122 => 46,  92 => 18,  89 => 17,  82 => 15,  79 => 14,  74 => 12,  71 => 11,  64 => 9,  61 => 8,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }
}
