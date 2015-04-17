<?php

/* realEstateBundle:authentification:login.html.twig */
class __TwigTemplate_86897e2d52f745b1d0e71c5e9970ad226dfa3661cf47da01fabfeaa68ea361de extends Twig_Template
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
        echo "<style>
/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>




<div class=\"container\">

<div class=\"row\" style=\"margin-top:20px\">
    <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
\t\t<form role=\"form\">
\t\t\t<fieldset>
\t\t\t\t<h2>Please Sign In</h2>
\t\t\t\t<hr class=\"colorgraph\">
\t\t\t\t<div class=\"form-group\">
                    <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-lg\" placeholder=\"Email Address\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
                    <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control input-lg\" placeholder=\"Password\">
\t\t\t\t</div>
\t\t\t\t<span class=\"button-checkbox\">
\t\t\t\t\t<button type=\"button\" class=\"btn\" data-color=\"info\">Remember Me</button>
                    <input type=\"checkbox\" name=\"remember_me\" id=\"remember_me\" checked=\"checked\" class=\"hidden\">
\t\t\t\t\t<a href=\"\" class=\"btn btn-link pull-right\">Forgot Password?</a>
\t\t\t\t</span>
\t\t\t\t<hr class=\"colorgraph\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
                        <input type=\"submit\" class=\"btn btn-lg btn-success btn-block\" value=\"Sign In\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-lg btn-primary btn-block\">Register</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>
\t</div>
</div>

<script>
\$(function(){
    \$('.button-checkbox').each(function(){
\t\tvar \$widget = \$(this),
\t\t\t\$button = \$widget.find('button'),
\t\t\t\$checkbox = \$widget.find('input:checkbox'),
\t\t\tcolor = \$button.data('color'),
\t\t\tsettings = {
\t\t\t\t\ton: {
\t\t\t\t\t\ticon: 'glyphicon glyphicon-check'
\t\t\t\t\t},
\t\t\t\t\toff: {
\t\t\t\t\t\ticon: 'glyphicon glyphicon-unchecked'
\t\t\t\t\t}
\t\t\t};

\t\t\$button.on('click', function () {
\t\t\t\$checkbox.prop('checked', !\$checkbox.is(':checked'));
\t\t\t\$checkbox.triggerHandler('change');
\t\t\tupdateDisplay();
\t\t});

\t\t\$checkbox.on('change', function () {
\t\t\tupdateDisplay();
\t\t});

\t\tfunction updateDisplay() {
\t\t\tvar isChecked = \$checkbox.is(':checked');
\t\t\t// Set the button's state
\t\t\t\$button.data('state', (isChecked) ? \"on\" : \"off\");

\t\t\t// Set the button's icon
\t\t\t\$button.find('.state-icon')
\t\t\t\t.removeClass()
\t\t\t\t.addClass('state-icon ' + settings[\$button.data('state')].icon);

\t\t\t// Update the button's color
\t\t\tif (isChecked) {
\t\t\t\t\$button
\t\t\t\t\t.removeClass('btn-default')
\t\t\t\t\t.addClass('btn-' + color + ' active');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$button
\t\t\t\t\t.removeClass('btn-' + color + ' active')
\t\t\t\t\t.addClass('btn-default');
\t\t\t}
\t\t}
\t\tfunction init() {
\t\t\tupdateDisplay();
\t\t\t// Inject the icon if applicable
\t\t\tif (\$button.find('.state-icon').length == 0) {
\t\t\t\t\$button.prepend('<i class=\"state-icon ' + settings[\$button.data('state')].icon + '\"></i> ');
\t\t\t}
\t\t}
\t\tinit();
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:authentification:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
