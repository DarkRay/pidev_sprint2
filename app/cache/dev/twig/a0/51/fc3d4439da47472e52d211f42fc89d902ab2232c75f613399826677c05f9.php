<?php

/* sprint2RealEstateAdminBundle:Pages:gerants.html.twig */
class __TwigTemplate_a051fc3d4439da47472e52d211f42fc89d902ab2232c75f613399826677c05f9 extends Twig_Template
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
            'gerantsActive' => array($this, 'block_gerantsActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'gerantsCore' => array($this, 'block_gerantsCore'),
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
    public function block_gerantsActive($context, array $blocks = array())
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
    public function block_gerantsCore($context, array $blocks = array())
    {
        // line 18
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
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Status Matrimonial</th>
                        <th>Num mobile</th>
                        <th>Num fix</th>
                        <th>+/-</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateur"]);
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 47
            echo "                            <tr>
                              <td class=\"nid\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "</td>
                              <td class=\"nmail\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "mail", array()), "html", null, true);
            echo "</td>
                              <td class=\"nnom\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                              <td class=\"nprenom\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</td>
                              <td class=\"nstat\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "statusMatrimonial", array()), "html", null, true);
            echo "</td>
                              <td class=\"nnummob\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nummobile", array()), "html", null, true);
            echo "</td>
                              <td class=\"nnumfix\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "numfix", array()), "html", null, true);
            echo "</td>
                              <td><a href = \"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_real_estate_admin_gerants_supp", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn\"><i class=\"fa fa-trash-o\"></i></button></a>
                                  <a href = \"#Modifier\"><button type=\"button\" class=\"btn dddd\" ><i class=\"fa fa-edit\"></i></button></a>
                                  <a ><button id=\"dfdggd\" type=\"button\" class=\"btn example\" ><i class=\"fa fa-envelope\"></i></button></a>
                                  <a ><button id=\"dfdggd\" type=\"button\" class=\"btn example2\" ><i class=\"fa fa-exchange\"></i></button></a>
                              </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Status Matrimonial</th>
                        <th>Num mobile</th>
                        <th>Num fix</th>
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
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        ";
        // line 102
        echo "                        <th>Status Matrimonial</th>
                        <th>Num mobile</th>
                        <th>Num fix</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type=\"text\" name=\"id\" class=\"idc\"/></td>
                            <td><input type=\"text\" name=\"mail\" class=\"mailc\"/></td>
                            <td><input type=\"text\" name=\"nom\" class=\"nomc\"/></td>
                            <td><input type=\"text\" name=\"prenom\" class=\"prenomc\"/></td>
                            ";
        // line 114
        echo "                            <td><input type=\"text\" name=\"statmatri\" class=\"statmatric\"/></td> 
                            <td><input type=\"text\" name=\"nummob\" class=\"nummobc\"/></td>  
                            <td><input type=\"text\" name=\"numfix\" class=\"numfixc\"/></td> 
                            
                        </tr>
                    </tbody>
                  </table>
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
          </div></div>
           
            
            
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
            </div>
          
            </div>
    
          </div><!--/.direct-chat -->
          
          <dialog id=\"favDialog\" class=\"direct-chat\" style=\"min-height: 220px; width: 566px; box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                        border-color: #eee; border-radius: 3%;\">
                            
                            
                    <section>
                        
                        
                        <div class=\"box-header with-border\">
                            
                            <i data-brackets-id=\"1412\" class=\"fa fa-envelope\"></i>
                            <h3 class=\"box-title\">Contact</h3>
                            <div class=\"box-tools pull-right\">
                                <button class=\"btn btn-box-tool close\" id=\"cancel\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div><!-- /.box-tools -->
                        </div><!-- /.box-header -->
                            
                        <form method=\"POST\">
                            
                            
                            <div class=\"row\">
                                
                                <div class=\"col-lg-12\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
                                        <input class=\"form-control mailvalue\" placeholder=\"Email\" type=\"text\" name=\"mailxc\">
                                    </div>
                                </div>
                                    
                                <input class=\"form-control idvaluexcccc\" type=\"text\" name=\"idxc\" style=\" display: none;\">
                                    
                            </div>
                                
                            <br>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-book\"></i></span>
                                <input class=\"form-control subvalue\" placeholder=\"Subject\" type=\"text\" name=\"subxc\">
                            </div>
                            <br>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-comments\"></i></span>
                                <textarea class=\"form-control bodyvalue\" name=\"bodyxc\"></textarea>
                                    
                            </div>
                                
                            <div class=\"box-footer\">
                                <div class=\"pull-right\">
                                    <span class=\"input-group-btn\">
                                        <input type=\"submit\" name=\"Submit\" value=\"Envoier\" class=\" pull-right btn btn-default\"/><i data-brackets-id=\"1427\" class=\"fa fa-arrow-circle-right\"></i>
                                    </span><div class=\"with-border \"></div>
                                </div><!-- /.box-footer-->
                            </div>
                                
                                
                        </form>
                            
                    </section>
                        
                        
                </dialog>
          
          <dialog id=\"favDialog2\" class=\"direct-chat\" style=\" border-bottom-color: #00CC00; min-height: 320px; width: 566px; box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                        border-color: #eee; border-radius: 10px;\" >
                            
                            
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Sent/Recive</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" id=\"hhhbbbbbnnn\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"cvbfghjky1\">
                        </div>
                        <br>
                        <div class=\"cvbfghjky\">
                        </div>
                    </div><!-- /.box-body -->
                        
          </dialog>   
          </div><!-- /.row -->
        </section><!-- /.content -->
      
        
       <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 255
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
        // line 288
        echo "
    </script>
    <script>
        (function() {
            
            var cancelButton = document.getElementById('cancel');
            
            // Update button opens a modal dialog
            \$(\".example\").click(function(){
                document.getElementById('favDialog').showModal();
                var \$row = \$(this).closest(\"tr\");    // Find the row
                var \$nid = \$row.find(\".nid\").text(); // Find the text
                var \$nmail = \$row.find(\".nmail\").text(); // Find the text
                var \$nnom = \$row.find(\".nnom\").text(); // Find the text
                var \$nprenom = \$row.find(\".nprenom\").text(); // Find the text
                var \$nstat = \$row.find(\".nstat\").text(); // Find the text
                
                \$('.mailvalue').val(\$nmail);
                \$('.idvaluexcccc').val(\$nid);
                
            });
            // Form cancel button closes the dialog box
            cancelButton.addEventListener('click', function() {
                document.getElementById('favDialog').close();
            });
            
        })();
    </script>
    
    <script>
        var cancelButton = document.getElementById('hhhbbbbbnnn');

        \$(\".example2\").click(function(){
            
            document.getElementById('favDialog2').showModal();
            var \$row = \$(this).closest(\"tr\");    // Find the row
            var \$nid = \$row.find(\".nid\").text(); // Find the text
        
        \$.ajax({
            type: 'GET',
            url:  'ajax/'+ \$nid,
            beforeSend: function () {
                
                console.log(\"before send\");
            },
            success: function (data) {
                
                console.log(data.datalist);
                console.log(data.datalist1);
                
                createTable(data.datalist, data.datalist1);
            }
            
            
        });
    });  
    cancelButton.addEventListener('click', function() {
        document.getElementById('favDialog2').close(); 
        \$(\".vvvvvvbbbbb\").remove();
        \$(\".vvvvvvbbbbb2\").remove();
    });
    function createTable(tableData,tableData1) {
        
        \$('#mytab2').dataTable();
        \$('#mytab1').dataTable();
        
        if(tableData1.length === 0){
            trbody1 = '<table id=\"mytab2\" class=\"table table-bordered table-striped vvvvvvbbbbb\"><thead><tr><th>To</th><th>Message</th></tr></thead><tbody><tr><td colspan = \"2\">No DATA<td></tr></tbody></table>';
            \$( trbody1 ).appendTo('.cvbfghjky'); 
        }else{
        
        
        var trbody1 = \"\";               
        tableData1.forEach(function(rowData) {
                  
            trbody1 = trbody1 + '<tr><td>'+rowData[0]+'</td><td>'+rowData[1]+'</td></tr>';
            
                    
        }); 
        
        trbody1 = '<table id=\"mytab2\" class=\"table table-bordered table-striped vvvvvvbbbbb\"><thead><tr><th>To</th><th>Message</th></tr></thead><tbody>'+trbody1+'</tbody></table>';
        \$( trbody1 ).appendTo('.cvbfghjky1');       
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////:
        
        var trbody2 = \"\";   
        
        if(tableData.length === 0){
            trbody2 = '<table id=\"mytab1\" class=\"table table-bordered table-striped vvvvvvbbbbb2\"><thead><tr><th>From</th><th>Message</th></tr></thead><tbody><tr><td colspan = \"2\">No DATA<td></tr></tbody></table>';
            \$( trbody2 ).appendTo('.cvbfghjky'); 
        }else{
        
        tableData.forEach(function(rowData1) {
                  
            trbody2 = trbody2 + '<tr><td>'+rowData1[0]+'</td><td>'+rowData1[1]+'</td></tr>';
            
                    
        }); 
        
        trbody2 = '<table id=\"mytab1\" class=\"table table-bordered table-striped vvvvvvbbbbb2\"><thead><tr><th>From</th><th>Message</th></tr></thead><tbody>'+trbody2+'</tbody></table>';
        \$( trbody2 ).appendTo('.cvbfghjky');          
         }
    };
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:gerants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 288,  391 => 255,  386 => 253,  381 => 251,  376 => 249,  371 => 247,  367 => 246,  362 => 244,  357 => 242,  263 => 151,  224 => 114,  211 => 102,  170 => 62,  157 => 55,  153 => 54,  149 => 53,  145 => 52,  141 => 51,  137 => 50,  133 => 49,  129 => 48,  126 => 47,  122 => 46,  92 => 18,  89 => 17,  82 => 15,  79 => 14,  74 => 12,  71 => 11,  64 => 9,  61 => 8,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }
}
