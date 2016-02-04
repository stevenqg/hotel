<?php

/* nav.html.twig */
class __TwigTemplate_c881504104584c80c8af809ebfdf4489f109c48b3b5d41c51afd40f9153c85f8 extends Twig_Template
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
        $__internal_937d14948236d4dee07d88e0c14f8512d44003cdb407518a7f60f48061ee9b1b = $this->env->getExtension("native_profiler");
        $__internal_937d14948236d4dee07d88e0c14f8512d44003cdb407518a7f60f48061ee9b1b->enter($__internal_937d14948236d4dee07d88e0c14f8512d44003cdb407518a7f60f48061ee9b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid container\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\">hola</span>
        <span class=\"icon-bar\">mundo</span>
        <span class=\"icon-bar\">pathan</span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">hotel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("control_client_index");
        echo "\">list clients</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("control_client_add");
        echo "\">new client</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
";
        
        $__internal_937d14948236d4dee07d88e0c14f8512d44003cdb407518a7f60f48061ee9b1b->leave($__internal_937d14948236d4dee07d88e0c14f8512d44003cdb407518a7f60f48061ee9b1b_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  40 => 17,  22 => 1,);
    }
}
/* <nav class="navbar navbar-inverse">*/
/*   <div class="container-fluid container">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar">hola</span>*/
/*         <span class="icon-bar">mundo</span>*/
/*         <span class="icon-bar">pathan</span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="#">hotel</a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*         <li><a href="{{ path('control_client_index')}}">list clients</a></li>*/
/*         <li><a href="{{ path('control_client_add')}}">new client</a></li>*/
/*       </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
