<?php

/* FrLdapBundle:Ldap:form.html.twig */
class __TwigTemplate_64d0a55f4cc052e36881cf61ab43c3bce9812d496f52decc600963acf6b64784 extends Twig_Template
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
        $__internal_a0679dcecf823977151c0f17a0db04ec674c19fed0e124e8b34f10e8d097b575 = $this->env->getExtension("native_profiler");
        $__internal_a0679dcecf823977151c0f17a0db04ec674c19fed0e124e8b34f10e8d097b575->enter($__internal_a0679dcecf823977151c0f17a0db04ec674c19fed0e124e8b34f10e8d097b575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrLdapBundle:Ldap:form.html.twig"));

        // line 2
        echo "

<div class=\"well\">
  ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_a0679dcecf823977151c0f17a0db04ec674c19fed0e124e8b34f10e8d097b575->leave($__internal_a0679dcecf823977151c0f17a0db04ec674c19fed0e124e8b34f10e8d097b575_prof);

    }

    public function getTemplateName()
    {
        return "FrLdapBundle:Ldap:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  22 => 2,);
    }
}
/* {# src/Fr/LdapBundle/Ressources/views/Ldap/form.html.twig #}*/
/* */
/* */
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
