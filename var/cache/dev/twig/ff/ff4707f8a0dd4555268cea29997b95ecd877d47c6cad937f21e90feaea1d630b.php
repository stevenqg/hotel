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
        $__internal_b7943255d4743ea94b235e9635536177de8d68ec378cc9b8e78ab96ea14ec52c = $this->env->getExtension("native_profiler");
        $__internal_b7943255d4743ea94b235e9635536177de8d68ec378cc9b8e78ab96ea14ec52c->enter($__internal_b7943255d4743ea94b235e9635536177de8d68ec378cc9b8e78ab96ea14ec52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_b7943255d4743ea94b235e9635536177de8d68ec378cc9b8e78ab96ea14ec52c->leave($__internal_b7943255d4743ea94b235e9635536177de8d68ec378cc9b8e78ab96ea14ec52c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e67d285df9584b1d6ba45e42f29686d3e2431613aea772466b7e545d7df5553 = $this->env->getExtension("native_profiler");
        $__internal_3e67d285df9584b1d6ba45e42f29686d3e2431613aea772466b7e545d7df5553->enter($__internal_3e67d285df9584b1d6ba45e42f29686d3e2431613aea772466b7e545d7df5553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3e67d285df9584b1d6ba45e42f29686d3e2431613aea772466b7e545d7df5553->leave($__internal_3e67d285df9584b1d6ba45e42f29686d3e2431613aea772466b7e545d7df5553_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53c15917a24ba8a7fec048e3ec1f311c29794ac28ef074bb703177e17cfb7e9f = $this->env->getExtension("native_profiler");
        $__internal_53c15917a24ba8a7fec048e3ec1f311c29794ac28ef074bb703177e17cfb7e9f->enter($__internal_53c15917a24ba8a7fec048e3ec1f311c29794ac28ef074bb703177e17cfb7e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\"  />
        
        ";
        
        $__internal_53c15917a24ba8a7fec048e3ec1f311c29794ac28ef074bb703177e17cfb7e9f->leave($__internal_53c15917a24ba8a7fec048e3ec1f311c29794ac28ef074bb703177e17cfb7e9f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_9538e53dd71aa4528d71c8303a3a49c957cd816575a0db74222d922e0e2d64ab = $this->env->getExtension("native_profiler");
        $__internal_9538e53dd71aa4528d71c8303a3a49c957cd816575a0db74222d922e0e2d64ab->enter($__internal_9538e53dd71aa4528d71c8303a3a49c957cd816575a0db74222d922e0e2d64ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        
        ";
        // line 16
        $this->loadTemplate("nav.html.twig", "layout.html.twig", 16)->display($context);
        // line 17
        echo "        
        ";
        
        $__internal_9538e53dd71aa4528d71c8303a3a49c957cd816575a0db74222d922e0e2d64ab->leave($__internal_9538e53dd71aa4528d71c8303a3a49c957cd816575a0db74222d922e0e2d64ab_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fe523ada35bba033ffb8b0afc009ea220fbfe2e312da83ef245ce35199b0bf8 = $this->env->getExtension("native_profiler");
        $__internal_9fe523ada35bba033ffb8b0afc009ea220fbfe2e312da83ef245ce35199b0bf8->enter($__internal_9fe523ada35bba033ffb8b0afc009ea220fbfe2e312da83ef245ce35199b0bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        <script href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9fe523ada35bba033ffb8b0afc009ea220fbfe2e312da83ef245ce35199b0bf8->leave($__internal_9fe523ada35bba033ffb8b0afc009ea220fbfe2e312da83ef245ce35199b0bf8_prof);

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
