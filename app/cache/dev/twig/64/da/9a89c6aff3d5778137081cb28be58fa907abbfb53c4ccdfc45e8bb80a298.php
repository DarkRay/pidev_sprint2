<?php

/* sprint2RealEstateAdminBundle:Pages:sentmail.html.twig */
class __TwigTemplate_64da9a89c6aff3d5778137081cb28be58fa907abbfb53c4ccdfc45e8bb80a298 extends Twig_Template
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
            'MailboxActive' => array($this, 'block_MailboxActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'MailboxEtra2' => array($this, 'block_MailboxEtra2'),
            'MailCore' => array($this, 'block_MailCore'),
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
    public function block_MailboxActive($context, array $blocks = array())
    {
        // line 12
        echo "        class=\"active treeview\"
    ";
    }

    // line 14
    public function block_MailboxEtra($context, array $blocks = array())
    {
        // line 15
        echo "        <i class=\"fa fa-angle-left pull-right\"></i>
    ";
    }

    // line 17
    public function block_MailboxEtra2($context, array $blocks = array())
    {
        // line 18
        echo "        <ul class=\"treeview-menu\">
            <li><a class=\"inboxnaber\" href=\"MailBox\">Inbox </a></li>
            <li class=\"active\"><a href=\"SentMail\">Sent</a></li>   
        </ul>
    ";
    }

    // line 23
    public function block_MailCore($context, array $blocks = array())
    {
        // line 24
        echo "        <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                
                <div class=\"box box-solid\">
                    
                    <div class=\"box-body no-padding\">
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li ><a class=\"inboxnaber\" href=\"MailBox\"><i class=\"fa fa-inbox\"></i> Inbox </a></li>
                            <li class=\"active\"><a href=\"SentMail\"><i class=\"fa fa-envelope-o\"></i> Sent</a></li>
                        </ul>
                    </div><!-- /.box-body -->
                </div><!-- /. box -->
                    
            </div><!-- /.col -->
            <div class=\"col-md-9\">
                ";
        // line 41
        echo "                <div class=\"box box-primary xwcvbnfghj\" style=\"display:none\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Read Mail</h3>
                        <div class=\"box-tools pull-right\">
                            <a data-original-title=\"Previous\" href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"\"><i class=\"fa fa-chevron-left\"></i></a>
                            <a data-original-title=\"Next\" href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding\">

                        <div class=\"mailbox-read-message cvbhdhdhhdhdh\">
                            <p>Hello John,</p>
                            <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American Apparel.</p>
                            <p>Raw denim McSweeney's bicycle rights, iPhone trust fund quinoa Neutra VHS kale chips vegan PBR&amp;B literally Thundercats +1. Forage tilde four dollar toast, banjo health goth paleo butcher. Four dollar toast Brooklyn pour-over American Apparel sustainable, lumbersexual listicle gluten-free health goth umami hoodie. Synth Echo Park bicycle rights DIY farm-to-table, retro kogi sriracha dreamcatcher PBR&amp;B flannel hashtag irony Wes Anderson. Lumbersexual Williamsburg Helvetica next level. Cold-pressed slow-carb pop-up normcore Thundercats Portland, cardigan literally meditation lumbersexual crucifix. Wayfarers raw denim paleo Bushwick, keytar Helvetica scenester keffiyeh 8-bit irony mumblecore whatever viral Truffaut.</p>
                            <p>Post-ironic shabby chic VHS, Marfa keytar flannel lomo try-hard keffiyeh cray. Actually fap fanny pack yr artisan trust fund. High Life dreamcatcher church-key gentrify. Tumblr stumptown four dollar toast vinyl, cold-pressed try-hard blog authentic keffiyeh Helvetica lo-fi tilde Intelligentsia. Lomo locavore salvia bespoke, twee fixie paleo cliche brunch Schlitz blog McSweeney's messenger bag swag slow-carb. Odd Future photo booth pork belly, you probably haven't heard of them actually tofu ennui keffiyeh lo-fi Truffaut health goth. Narwhal sustainable retro disrupt.</p>
                            <p>Skateboard artisan letterpress before they sold out High Life messenger bag. Bitters chambray leggings listicle, drinking vinegar chillwave synth. Fanny pack hoodie American Apparel twee. American Apparel PBR listicle, salvia aesthetic occupy sustainable Neutra kogi. Organic synth Tumblr viral plaid, shabby chic single-origin coffee Etsy 3 wolf moon slow-carb Schlitz roof party tousled squid vinyl. Readymade next level literally trust fund. Distillery master cleanse migas, Vice sriracha flannel chambray chia cronut.</p>
                            <p>Thanks,<br>Jane</p>
                        </div><!-- /.mailbox-read-message -->
                    </div><!-- /.box-body -->

                    <div class=\"box-footer\">
                        <div class=\"pull-right\">
                            <button class=\"btn btn-default\" onclick=\"backinbox()\"><i class=\"fa fa-reply\"></i> Back</button>
                            
                        </div>
                        <button class=\"btn btn-default\"><i class=\"fa fa-trash-o\"></i> Delete</button>
                        <button class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</button>
                    </div><!-- /.box-footer -->
                    
                </div>
                ";
        // line 72
        echo "                <div class=\"box box-primary xwcvbnfghj1\" >
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Inbox</h3>
                        <div class=\"box-tools pull-right\">
                            <div class=\"has-feedback\">
                                <input id=\"target\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Search Mail\"/>
                                <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                            </div>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding\">
                        <div class=\"mailbox-controls\">
                            <!-- Check all button -->
                            <button class=\"btn btn-default btn-sm\" onclick=\"upDateinbox()\"><i class=\"fa fa-refresh\"></i></button>
                            <div class=\"pull-right\">
                                <label class=\"xxxx1\"> </label>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default btn-sm\" onclick=\"previnbox()\"><i class=\"fa fa-chevron-left\"></i></button>
                                    <button class=\"btn btn-default btn-sm\" onclick=\"nextinbox()\"><i class=\"fa fa-chevron-right\"></i></button>
                                </div><!-- /.btn-group -->
                            </div><!-- /.pull-right -->
                        </div>
                        <div class=\"box-body no-padding\">
                            <div class=\"table-responsive mailbox-messages\">
                                <table class=\"table table-hover table-striped\">
                                    <tbody class=\"kgksnbkjnkjgnkjjsnggd\">
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            
                            
                        <div class=\"box-footer no-padding\">
                            <div class=\"mailbox-controls\">
                                <!-- Check all button -->
                                <button class=\"btn btn-default btn-sm\" onclick=\"upDateinbox()\"><i class=\"fa fa-refresh\"></i></button>
                                <div class=\"pull-right\">
                                    <label class=\"xxxx2\"> </label>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-default btn-sm\" onclick=\"previnbox()\"><i class=\"fa fa-chevron-left\"></i></button>
                                        <button class=\"btn btn-default btn-sm\" onclick=\"nextinbox()\"><i class=\"fa fa-chevron-right\"></i></button>
                                    </div><!-- /.btn-group -->
                                    <div class=\"overlay1\"/>
                                    <div class=\"overlay\">
                                        <i class=\"fa fa-refresh fa-spin\"></i>
                                    </div>
                                </div><!-- /.pull-right -->
                            </div>
                        </div>
                    </div><!-- /. box -->
                </div><!-- /.col -->
                    
            </div><!-- /.row -->
    </section><!-- /.content -->
    <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var pageX;
        var countmailX
        var countmailX4
        \$(document).ready(function(){ 
           
            pageX=0;
            
            
            \$.ajax({
                type: 'GET',
                url:  'ajax5/0',
                beforeSend: function () {
                    console.log(\"before send\");
                    
                },
                success: function (data) {
                    
                    console.log(data.datalist);
                    countmailX = data.cmail - 1;   
                    countmailX4 = data.cmail4 - 1;  
                    \$( '<span class=\"label label-primary pull-right inboxnaberspam\">'+countmailX4+'</span>').appendTo('.inboxnaber');
                    
                    \$( \".overlay\").remove();  
                    upDateinbox()
                }                          
            });
        }) ;
        
        function upDateinbox() {
            console.log(pageX);
            pageXMx = (pageX + 1) * 10;
            pageXMn = pageXMx - 9;
            
            \$( '<div class=\"overlay\"><i class=\"fa fa-refresh fa-spin\"></i></div>').appendTo('.overlay1');
            
            \$( \".dkj\").remove(); 
            
            \$.ajax({
                type: 'GET',
                url:  'ajax5/'+pageX,
                beforeSend: function () {
                    console.log(\"before send\");

                },
                success: function (data) {

                    console.log(data.datalist);
                    countmailX = data.cmail - 1;
                    countmailX4 = data.cmail4 - 1; 
                    console.log(data.cmail4);
                    \$( \".inboxnaberspam\").remove(); 
                    \$( '<span class=\"label label-primary pull-right inboxnaberspam\">'+countmailX4+'</span>').appendTo('.inboxnaber');
                    data.datalist.forEach(function(rowData) {         
                        \$('<tr class=\"dkj\"><td> <button class=\"btn btn-default btn-sm\" onclick=\"dellOneMailinbox('+rowData[2]+')\"><i class=\"fa fa-trash-o\"></i></button></td><td class=\"mailbox-name\"><a href=\"read-mail.html\">'+rowData[0]+'</a></td><td class=\"mailbox-subject\">'+rowData[1].slice(0,30)+'</td><td class=\"mailbox-date\"></td></tr>').appendTo('.kgksnbkjnkjgnkjjsnggd');
                    });
                    \$( \".xxxx3\").remove(); 
                    \$( \".xxxx4\").remove(); 
                    if(pageXMx>countmailX){
                        pageXMx=countmailX;
                    }
                    
                    \$( '<label class=\"xxxx3\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx2');
                    \$( '<label class=\"xxxx4\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx1');
                    \$( \".overlay\").remove();                                      
                }                          
            });
        };
        
        function nextinbox() {
            console.log(pageX);
            pageX=pageX+1;
            pageXMx = (pageX + 1) * 10;
            pageXMn = pageXMx - 9;
            if(pageXMn>countmailX)
            {pageX=pageX-1;}else{
                if(pageXMx>countmailX){
                    pageXMx=countmailX;
                }
            \$( \".xxxx3\").remove();
            \$( \".xxxx4\").remove(); 
            \$( '<label class=\"xxxx3\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx2');
            \$( '<label class=\"xxxx4\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx1');
            \$( '<div class=\"overlay\"><i class=\"fa fa-refresh fa-spin\"></i></div>').appendTo('.overlay1');

            \$( \".dkj\").remove(); 
        
            \$.ajax({
                type: 'GET',
                url:  'ajax5/'+pageX,
                beforeSend: function () {
                    console.log(\"before send\");

                },
                success: function (data) {

                    console.log(data.datalist);

                    data.datalist.forEach(function(rowData) {         
                        \$('<tr class=\"dkj\"><td> <button class=\"btn btn-default btn-sm\" onclick=\"dellOneMailinbox('+rowData[2]+')\"><i class=\"fa fa-trash-o\"></i></button></td><td class=\"mailbox-name\"><a href=\"read-mail.html\">'+rowData[0]+'</a></td><td class=\"mailbox-subject\">'+rowData[1].slice(0,30)+'</td><td class=\"mailbox-date\"></td></tr>').appendTo('.kgksnbkjnkjgnkjjsnggd');
                    });
                    \$( \".overlay\").remove();                                      
                }                          
            });}
        };
        
        function previnbox() {
            console.log(pageX);
            pageX=pageX-1;
            pageXMx = (pageX + 1) * 10;
            pageXMn = pageXMx - 9;
            if(pageXMn<0)
            {pageX=pageX+1;}else{
            \$( \".xxxx3\").remove(); 
            \$( \".xxxx4\").remove(); 
            \$( '<label class=\"xxxx3\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx2');
            \$( '<label class=\"xxxx4\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx1');
            \$( '<div class=\"overlay\"><i class=\"fa fa-refresh fa-spin\"></i></div>').appendTo('.overlay1');

            \$( \".dkj\").remove(); 
        
            \$.ajax({
                type: 'GET',
                url:  'ajax5/'+pageX,
                beforeSend: function () {
                    console.log(\"before send\");

                },
                success: function (data) {

                    console.log(data.datalist);

                    data.datalist.forEach(function(rowData) {         
                        \$('<tr class=\"dkj\"><td> <button class=\"btn btn-default btn-sm\" onclick=\"dellOneMailinbox('+rowData[2]+')\"><i class=\"fa fa-trash-o\"></i></button></td><td class=\"mailbox-name\"><a href=\"read-mail.html\">'+rowData[0]+'</a></td><td class=\"mailbox-subject\">'+rowData[1].slice(0,30)+'</td><td class=\"mailbox-date\"></td></tr>').appendTo('.kgksnbkjnkjgnkjjsnggd');
                    });
                    \$( \".overlay\").remove();                                      
                }                          
            });}    
        };
        
        function dellOneMailinbox(sdfg) {
            console.log(pageX);
            
            \$( '<div class=\"overlay\"><i class=\"fa fa-refresh fa-spin\"></i></div>').appendTo('.overlay1');

            \$( \".dkj\").remove(); 
        
            \$.ajax({
                type: 'GET',
                url:  'ajax2/'+pageX+'/'+sdfg,
                beforeSend: function () {
                    console.log(\"before send\");
                },
                success: function (data) {
                    \$( \".overlay\").remove();
                   
                    pageXMx = (pageX + 1) * 10;
                    pageXMn = pageXMx - 9;
                    ";
        // line 290
        echo "                    countmailX = data.cmail - 1;
                   
                     console.log(\"fdggsgrgr \"+data.cmail%10);
                    console.log(data.datalist);
                    upDateinbox();                                 
                }                          
            });
        };  
        
    \$( \"#target\" ).keyup(function() {
        var bla = \$('#target').val();
        ";
        // line 302
        echo "        console.log(pageX);
        
        \$( '<div class=\"overlay\"><i class=\"fa fa-refresh fa-spin\"></i></div>').appendTo('.overlay1');
        
        \$( \".dkj\").remove(); 
        
        \$.ajax({
            type: 'GET',
            url:  'ajax3/'+pageX+'/'+bla,
            beforeSend: function () {
                console.log(\"before send\");
                
            },
            success: function (data) {
                
                console.log(data.datalist);
                
                data.datalist.forEach(function(rowData) {         
                    \$('<tr class=\"dkj\"><td> <button class=\"btn btn-default btn-sm\" onclick=\"dellOneMailinbox('+rowData[2]+')\"><i class=\"fa fa-trash-o\"></i></button></td><td class=\"mailbox-name\"><a href=\"readinbox('+rowData[2]+')\">'+rowData[0]+'</a></td><td class=\"mailbox-subject\">'+rowData[1].slice(0,30)+'</td><td class=\"mailbox-date\"></td></tr>').appendTo('.kgksnbkjnkjgnkjjsnggd');
                });
                countmailX = data.cmail - 1;
                if(pageXMx>countmailX){
                        pageXMx=countmailX;
                    }
                \$( \".xxxx3\").remove();
                \$( \".xxxx4\").remove(); 
                \$( '<label class=\"xxxx3\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx2');
                \$( '<label class=\"xxxx4\">'+pageXMn+'-'+pageXMx+'/'+countmailX+'</label>').appendTo('.xxxx1');
                \$( \".overlay\").remove();                                      
            }                          
        });
    });   
    function readinbox(id) {
        \$.ajax({
            type: 'GET',
            url:  'ajax4/'+id,
            beforeSend: function () {
                console.log(\"before send\");
                
            },
            success: function (data) {
                
                console.log(data.datalist);
                
                data.datalist.forEach(function(rowData) {         
                   ";
        // line 347
        echo "                });
                \$( \".overlay\").remove();                                      
            }                          
        });
        \$(\".xwcvbnfghj1\").hide(1000);
        \$(\".xwcvbnfghj\").show(1000);
    };   
    function backinbox() {
        \$(\".xwcvbnfghj1\").show(1000);
        \$(\".xwcvbnfghj\").hide(1000);
    };   
    </script>
";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:sentmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 347,  385 => 302,  372 => 290,  210 => 128,  152 => 72,  120 => 41,  102 => 24,  99 => 23,  91 => 18,  88 => 17,  83 => 15,  80 => 14,  75 => 12,  72 => 11,  65 => 9,  62 => 8,  55 => 6,  52 => 5,  45 => 3,  42 => 2,  11 => 1,);
    }
}
