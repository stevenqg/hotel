<?php

/* ControlBundle:Client:index.html.twig */
class __TwigTemplate_10586a0a5a82cf46e68d83a2faa2b30336da70b7f698520ee9de9cbc71125952 extends Twig_Template
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
        $__internal_98bf52c915b6c971585561e23f5b9024e08b0d4da7c7edd98e7b303183e3824f = $this->env->getExtension("native_profiler");
        $__internal_98bf52c915b6c971585561e23f5b9024e08b0d4da7c7edd98e7b303183e3824f->enter($__internal_98bf52c915b6c971585561e23f5b9024e08b0d4da7c7edd98e7b303183e3824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Client:index.html.twig"));

        // line 1
        echo "<table>
    <tablehead>
        <tr>
            <th>name</th>
            <th>lastname</th>
            <th>identification type</th>
            <th>indentification number</th>
            <th>phone</th>
            <th>cellphone</th>
            <th>adress</th>
            <th>birthdate</th>
        </tr>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 14
            echo "        
            <tr>
                <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
            echo "</th>
                <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "lastname", array()), "html", null, true);
            echo "</th>
                <th>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "identificationType", array()), "html", null, true);
            echo "</th>
                <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "identificationNumber", array()), "html", null, true);
            echo "</th>
                <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "phone", array()), "html", null, true);
            echo "</th>
                <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cellphone", array()), "html", null, true);
            echo "</th>
                <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "address", array()), "html", null, true);
            echo "</th>
                <th>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "birthdate", array()), "d-m-Y H:i"), "html", null, true);
            echo "</th>
            </tr>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tablehead>
    
</table>
";
        
        $__internal_98bf52c915b6c971585561e23f5b9024e08b0d4da7c7edd98e7b303183e3824f->leave($__internal_98bf52c915b6c971585561e23f5b9024e08b0d4da7c7edd98e7b303183e3824f_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  56 => 19,  52 => 18,  48 => 17,  44 => 16,  40 => 14,  36 => 13,  22 => 1,);
    }
}
/* <table>*/
/*     <tablehead>*/
/*         <tr>*/
/*             <th>name</th>*/
/*             <th>lastname</th>*/
/*             <th>identification type</th>*/
/*             <th>indentification number</th>*/
/*             <th>phone</th>*/
/*             <th>cellphone</th>*/
/*             <th>adress</th>*/
/*             <th>birthdate</th>*/
/*         </tr>*/
/*         {% for client in clients %}*/
/*         */
/*             <tr>*/
/*                 <th>{{ client.name }}</th>*/
/*                 <th>{{ client.lastname}}</th>*/
/*                 <th>{{ client.identificationType }}</th>*/
/*                 <th>{{ client.identificationNumber }}</th>*/
/*                 <th>{{ client.phone }}</th>*/
/*                 <th>{{ client.cellphone }}</th>*/
/*                 <th>{{ client.address}}</th>*/
/*                 <th>{{ client.birthdate | date('d-m-Y H:i') }}</th>*/
/*             </tr>*/
/*         */
/*         {% endfor %}*/
/*     </tablehead>*/
/*     */
/* </table>*/
/* */
