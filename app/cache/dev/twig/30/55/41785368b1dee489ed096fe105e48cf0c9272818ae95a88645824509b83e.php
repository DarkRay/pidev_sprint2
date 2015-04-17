<?php

/* sprint2RealEstateAdminBundle:Pages:formMail.html.twig */
class __TwigTemplate_305541785368b1dee489ed096fe105e48cf0c9272818ae95a88645824509b83e extends Twig_Template
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
            'ContactActive' => array($this, 'block_ContactActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'ContactCore' => array($this, 'block_ContactCore'),
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
    public function block_ContactActive($context, array $blocks = array())
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
    public function block_ContactCore($context, array $blocks = array())
    {
        // line 18
        echo "       
       <section class=\"content\">
        <div class=\"row\">
            
              <!-- USERS Offre -->
              <div class=\"col-md-12\">
                <ul class=\"offre-list\">
                                     
                        <li style=\"list-style-type: none; margin-left: 200px\" >
                            <div class=\"small-box bg-gray-active text-black\" >
                                <div class=\"inner\">
<html>
    <body>     
    <h2> <strong> Contact</strong> </h2> 
    <hr>  <br/>
   
    <form action=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("sprint2_real_estate_admin_sendMail");
        echo "\" method=\"POST\" >
        <strong>Subject :</strong><br/>
       <input type=\"text\" name=\"Subject\" class=\"label-new\"> <br/><br/>
       </br><strong>Email : </strong><br/>
    <input type=\"text\" name=\"email\" class=\"label-new\">
    </br><br/></br>
    <strong> Text : </strong><br/>
    <textarea type=\"text\" name=\"message\" class=\"label-new\"></textarea>
    <br/>
    <br/>
    <input type=\"submit\" name=\"send\" class=\"btn-facebook\"/>
    <br/><br/>
    </form>
    </body> 
</html>

  </div>

                                
                            </div>
                        </li>
                    
                </ul>
              </div>
        </div>
       </section>       
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:formMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  92 => 18,  89 => 17,  82 => 15,  79 => 14,  74 => 12,  71 => 11,  64 => 9,  61 => 8,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }
}
