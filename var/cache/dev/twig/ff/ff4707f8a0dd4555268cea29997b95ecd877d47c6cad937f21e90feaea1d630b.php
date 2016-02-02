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
        $__internal_0711041387390d1f09e86cf905d49f68839a9a7efd204c4c6fbbdc77526989bf = $this->env->getExtension("native_profiler");
        $__internal_0711041387390d1f09e86cf905d49f68839a9a7efd204c4c6fbbdc77526989bf->enter($__internal_0711041387390d1f09e86cf905d49f68839a9a7efd204c4c6fbbdc77526989bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_0711041387390d1f09e86cf905d49f68839a9a7efd204c4c6fbbdc77526989bf->leave($__internal_0711041387390d1f09e86cf905d49f68839a9a7efd204c4c6fbbdc77526989bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_221877901c28592f3afbed4a09449c4e44d4f614704f7de58c3780324c79fb56 = $this->env->getExtension("native_profiler");
        $__internal_221877901c28592f3afbed4a09449c4e44d4f614704f7de58c3780324c79fb56->enter($__internal_221877901c28592f3afbed4a09449c4e44d4f614704f7de58c3780324c79fb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_221877901c28592f3afbed4a09449c4e44d4f614704f7de58c3780324c79fb56->leave($__internal_221877901c28592f3afbed4a09449c4e44d4f614704f7de58c3780324c79fb56_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66cbdd487790fac81f9f20b5f19c637262b0f367169e60969295e257da0e9010 = $this->env->getExtension("native_profiler");
        $__internal_66cbdd487790fac81f9f20b5f19c637262b0f367169e60969295e257da0e9010->enter($__internal_66cbdd487790fac81f9f20b5f19c637262b0f367169e60969295e257da0e9010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\"  />
        
        ";
        
        $__internal_66cbdd487790fac81f9f20b5f19c637262b0f367169e60969295e257da0e9010->leave($__internal_66cbdd487790fac81f9f20b5f19c637262b0f367169e60969295e257da0e9010_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_44d43c6a72dd396386c4084d2030e0dbc1741a11525bd3b5cd72a50ecd0a633e = $this->env->getExtension("native_profiler");
        $__internal_44d43c6a72dd396386c4084d2030e0dbc1741a11525bd3b5cd72a50ecd0a633e->enter($__internal_44d43c6a72dd396386c4084d2030e0dbc1741a11525bd3b5cd72a50ecd0a633e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_44d43c6a72dd396386c4084d2030e0dbc1741a11525bd3b5cd72a50ecd0a633e->leave($__internal_44d43c6a72dd396386c4084d2030e0dbc1741a11525bd3b5cd72a50ecd0a633e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_069e14f862e7abe3fe905dd119b6d6b44d4db0dc036ba1b58c83f1e5b1b385ff = $this->env->getExtension("native_profiler");
        $__internal_069e14f862e7abe3fe905dd119b6d6b44d4db0dc036ba1b58c83f1e5b1b385ff->enter($__internal_069e14f862e7abe3fe905dd119b6d6b44d4db0dc036ba1b58c83f1e5b1b385ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        <script href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_069e14f862e7abe3fe905dd119b6d6b44d4db0dc036ba1b58c83f1e5b1b385ff->leave($__internal_069e14f862e7abe3fe905dd119b6d6b44d4db0dc036ba1b58c83f1e5b1b385ff_prof);

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
        return array (  112 => 17,  107 => 16,  101 => 15,  90 => 14,  80 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 19,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         <script href="{{ asset('public/js/bootstrap.min.js')}}"></script>*/
/*         <script href="{{ asset('public/js/jquery-1.12.0.min.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
