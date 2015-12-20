<?php

/* FrLdapBundle:Ldap:ldap_login.html.twig */
class __TwigTemplate_c19d6bbfb7fabb52bc9889038a3b8fa2d79a9d11d7c36a4ef08c9ca06a3e8664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrLdapBundle::layout.html.twig", "FrLdapBundle:Ldap:ldap_login.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'frprojet_body' => array($this, 'block_frprojet_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrLdapBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a3d5e16d48cd79efb21996ec7df39cd3579249edff709d20c2f6a6257e2fb8d = $this->env->getExtension("native_profiler");
        $__internal_7a3d5e16d48cd79efb21996ec7df39cd3579249edff709d20c2f6a6257e2fb8d->enter($__internal_7a3d5e16d48cd79efb21996ec7df39cd3579249edff709d20c2f6a6257e2fb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrLdapBundle:Ldap:ldap_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3d5e16d48cd79efb21996ec7df39cd3579249edff709d20c2f6a6257e2fb8d->leave($__internal_7a3d5e16d48cd79efb21996ec7df39cd3579249edff709d20c2f6a6257e2fb8d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_49788194d2b0838d4f9a391fa8ff6d253ba1004812e72364443177850cb3e9bb = $this->env->getExtension("native_profiler");
        $__internal_49788194d2b0838d4f9a391fa8ff6d253ba1004812e72364443177850cb3e9bb->enter($__internal_49788194d2b0838d4f9a391fa8ff6d253ba1004812e72364443177850cb3e9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "//";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add roles"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_49788194d2b0838d4f9a391fa8ff6d253ba1004812e72364443177850cb3e9bb->leave($__internal_49788194d2b0838d4f9a391fa8ff6d253ba1004812e72364443177850cb3e9bb_prof);

    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_7d2cd8c085e430a9c6bf810793f24d37b9356a5b92e983fc8390624f85835103 = $this->env->getExtension("native_profiler");
        $__internal_7d2cd8c085e430a9c6bf810793f24d37b9356a5b92e983fc8390624f85835103->enter($__internal_7d2cd8c085e430a9c6bf810793f24d37b9356a5b92e983fc8390624f85835103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 10
        echo "
  <h2>admin</h2>



";
        // line 15
        echo twig_include($this->env, $context, "FrLdapBundle:Ldap:form.html.twig");
        echo "

 

";
        
        $__internal_7d2cd8c085e430a9c6bf810793f24d37b9356a5b92e983fc8390624f85835103->leave($__internal_7d2cd8c085e430a9c6bf810793f24d37b9356a5b92e983fc8390624f85835103_prof);

    }

    public function getTemplateName()
    {
        return "FrLdapBundle:Ldap:ldap_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  59 => 10,  53 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/Fr/LdapBundle/Resources/views/Projet/ldap_login.html.twig #}*/
/* */
/* {% extends "FrLdapBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* //{{ 'add roles'|trans }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frprojet_body %}*/
/* */
/*   <h2>admin</h2>*/
/* */
/* */
/* */
/* {{ include("FrLdapBundle:Ldap:form.html.twig") }}*/
/* */
/*  */
/* */
/* {% endblock %}*/
/* */
