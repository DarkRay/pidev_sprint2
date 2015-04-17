<?php

/* sprint2RealEstateAdminBundle:Pages:Archive.html.twig */
class __TwigTemplate_7a45a1d93a15cd90eaecce606bb6af6881c3902481ef6cb4bd9e6ac5bf5ab979 extends Twig_Template
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
            'ArchiveActive' => array($this, 'block_ArchiveActive'),
            'ArchiveCore' => array($this, 'block_ArchiveCore'),
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
    public function block_ArchiveActive($context, array $blocks = array())
    {
        // line 12
        echo "    class=\"active treeview\"
";
    }

    // line 15
    public function block_ArchiveCore($context, array $blocks = array())
    {
        // line 16
        echo "    
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <!-- List des Archives   -->
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        
                        <div class=\"col-md-12\">
                        <form method=\"POST\" >
                            
                                <div class=\"col-md-8\">
                                    <input class=\"form-control\" name=\"idGerant\" type=\"number\" min=\"1\"/>
                                </div>
                                <div class=\"col-md-4\">
                                <input type=\"submit\" class=\"btn btn-block btn-default\" value=\"search By Id_Gerant\"/>
                                </div>
                                
                             
                        </form>   
                       </div>
                    </div><!-- /.box-header -->
                    
                    <div class=\"box-body\">
                       
                              
                            <table id=\"mytab\" class=\"table table-bordered table-striped\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Id_Gerant</th>
                                        <th>Date</th>
                                        <th>Url</th>
                                        <th>+/-</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")));
        foreach ($context['_seq'] as $context["_key"] => $context["Archive"]) {
            // line 57
            echo "                                        <tr>
                                            <td class=\"nid\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["Archive"], "id", array()), "html", null, true);
            echo "</td>
                                            <td class=\"nmail\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["Archive"], "idGerant", array()), "html", null, true);
            echo "</td>
                                            <td class=\"nnom\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["Archive"], "date", array()), "html", null, true);
            echo "</td>
                                            <td class=\"nprenom\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["Archive"], "url", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                
                                                <a href = \"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Archive_delete", array("id" => $this->getAttribute($context["Archive"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" ><i class=\"fa fa-trash-o\"></i></button></a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Archive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Id_Gerant</th>
                                        <th>Date</th>
                                        <th>Url</th>
                                        <th>+/-</th>
                                    </tr>
                                </tfoot>
                            </table>
                                </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
           
        
            
        
    </section>
            
            
            
            <!-- jQuery 2.1.3 -->
            <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
           
            <!-- Bootstrap 3.3.2 JS -->
            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- DATA TABES SCRIPT -->
            <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- SlimScroll -->
            <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- FastClick -->
            <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE App -->
            <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- AdminLTE for demo purposes -->
            <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/demo.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
            <!-- page script --> 
            <script type=\"text/javascript\">
                \$(function () {
                    \$('#mytab').dataTable();
                });
            </script>
            <script type=\"text/javascript\">

                \$(\".dddd\").click(function () {
                    \$(\".cvvvvvvb\").show(1000);
                });

                \$(\".dddd\").click(function () {
                    var \$row = \$(this).closest(\"tr\");    // Find the row
                    var \$nid = \$row.find(\".nid\").text(); // Find the text
                    var \$nmail = \$row.find(\".nmail\").text(); // Find the text
                    var \$nnom = \$row.find(\".nnom\").text(); // Find the text
                    var \$nprenom = \$row.find(\".nprenom\").text(); // Find the text
                    var \$nstat = \$row.find(\".nstat\").text(); // Find the text
                    var \$nnummob = \$row.find(\".nnummob\").text(); // Find the text
                    var \$nnumfix = \$row.find(\".nnumfix\").text(); // Find the text
                    // Let's test it out
                    //alert(\$text);
                    \$('.idc').val(\$nid);
                    \$('.mailc').val(\$nmail);
                    \$('.nomc').val(\$nnom);
                    \$('.prenomc').val(\$nprenom);
                    \$('.statmatric').val(\$nstat);
                    \$('.nummobc').val(\$nnummob);
                    \$('.numfixc').val(\$nnumfix);
                });
                ";
        // line 139
        echo "
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:Archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 139,  219 => 106,  214 => 104,  209 => 102,  204 => 100,  199 => 98,  195 => 97,  190 => 95,  184 => 92,  158 => 68,  148 => 64,  142 => 61,  138 => 60,  134 => 59,  130 => 58,  127 => 57,  123 => 56,  81 => 16,  78 => 15,  73 => 12,  70 => 11,  63 => 9,  60 => 8,  53 => 6,  50 => 5,  43 => 3,  40 => 2,  11 => 1,);
    }
}
