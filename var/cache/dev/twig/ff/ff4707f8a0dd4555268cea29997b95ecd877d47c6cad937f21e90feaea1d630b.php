<?php

/* layout.html.twig */
class __TwigTemplate_f5205cb3457235c9bd859093ecefcbd2249d606bb3559c874b6eaba66f4a3b84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fde513b828dbf3e4110114a2524a15ef58461d5b0b251a8038e331126adf29f3 = $this->env->getExtension("native_profiler");
        $__internal_fde513b828dbf3e4110114a2524a15ef58461d5b0b251a8038e331126adf29f3->enter($__internal_fde513b828dbf3e4110114a2524a15ef58461d5b0b251a8038e331126adf29f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_fde513b828dbf3e4110114a2524a15ef58461d5b0b251a8038e331126adf29f3->leave($__internal_fde513b828dbf3e4110114a2524a15ef58461d5b0b251a8038e331126adf29f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c009cdf1e8ca7378ad6768eac1990777baa7cdb2fa10296299cd377e1ae4e411 = $this->env->getExtension("native_profiler");
        $__internal_c009cdf1e8ca7378ad6768eac1990777baa7cdb2fa10296299cd377e1ae4e411->enter($__internal_c009cdf1e8ca7378ad6768eac1990777baa7cdb2fa10296299cd377e1ae4e411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c009cdf1e8ca7378ad6768eac1990777baa7cdb2fa10296299cd377e1ae4e411->leave($__internal_c009cdf1e8ca7378ad6768eac1990777baa7cdb2fa10296299cd377e1ae4e411_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c93a57b60066c46974b5092be497f7db9c5c79b63b4e492f6eec0cd667c848d8 = $this->env->getExtension("native_profiler");
        $__internal_c93a57b60066c46974b5092be497f7db9c5c79b63b4e492f6eec0cd667c848d8->enter($__internal_c93a57b60066c46974b5092be497f7db9c5c79b63b4e492f6eec0cd667c848d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\"  />
        
        ";
        
        $__internal_c93a57b60066c46974b5092be497f7db9c5c79b63b4e492f6eec0cd667c848d8->leave($__internal_c93a57b60066c46974b5092be497f7db9c5c79b63b4e492f6eec0cd667c848d8_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1481468a8277caf0a31a8cad02736f7f5627b8a0e3bd761fff87339fbc0b780 = $this->env->getExtension("native_profiler");
        $__internal_e1481468a8277caf0a31a8cad02736f7f5627b8a0e3bd761fff87339fbc0b780->enter($__internal_e1481468a8277caf0a31a8cad02736f7f5627b8a0e3bd761fff87339fbc0b780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        
        ";
        // line 16
        $this->loadTemplate("nav.html.twig", "layout.html.twig", 16)->display($context);
        // line 17
        echo "        
        ";
        
        $__internal_e1481468a8277caf0a31a8cad02736f7f5627b8a0e3bd761fff87339fbc0b780->leave($__internal_e1481468a8277caf0a31a8cad02736f7f5627b8a0e3bd761fff87339fbc0b780_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34156c11a711e3aead57250ebdc786c760ad9c4d99c310b63e88ec4f377506b9 = $this->env->getExtension("native_profiler");
        $__internal_34156c11a711e3aead57250ebdc786c760ad9c4d99c310b63e88ec4f377506b9->enter($__internal_34156c11a711e3aead57250ebdc786c760ad9c4d99c310b63e88ec4f377506b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        <script href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_34156c11a711e3aead57250ebdc786c760ad9c4d99c310b63e88ec4f377506b9->leave($__internal_34156c11a711e3aead57250ebdc786c760ad9c4d99c310b63e88ec4f377506b9_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 21,  115 => 20,  109 => 19,  101 => 17,  99 => 16,  96 => 15,  90 => 14,  80 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 23,  47 => 19,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         */
/*         <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}"  />*/
/*         */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*         */
/*         {% include ("nav.html.twig") %}*/
/*         */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*         <script href="{{ asset('public/js/bootstrap.min.js')}}"></script>*/
/*         <script href="{{ asset('public/js/jquery-1.12.0.min.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
