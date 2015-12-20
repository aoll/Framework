<?php

/* FrLdapBundle::layout.html.twig */
class __TwigTemplate_1c21f7e63c85f31eeda300003e3b2e00946fdd58b6d34b09dcabcff3a3230a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrLdapBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'frprojet_body' => array($this, 'block_frprojet_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee45d7f78228b58f2bd53ccacf49313b543dcea40f72f50e5dba08383dba157b = $this->env->getExtension("native_profiler");
        $__internal_ee45d7f78228b58f2bd53ccacf49313b543dcea40f72f50e5dba08383dba157b->enter($__internal_ee45d7f78228b58f2bd53ccacf49313b543dcea40f72f50e5dba08383dba157b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrLdapBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee45d7f78228b58f2bd53ccacf49313b543dcea40f72f50e5dba08383dba157b->leave($__internal_ee45d7f78228b58f2bd53ccacf49313b543dcea40f72f50e5dba08383dba157b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fdf6aacfdc6bd5054114e28199ba19d85bc07066864157a1a77d2736f461e69 = $this->env->getExtension("native_profiler");
        $__internal_4fdf6aacfdc6bd5054114e28199ba19d85bc07066864157a1a77d2736f461e69->enter($__internal_4fdf6aacfdc6bd5054114e28199ba19d85bc07066864157a1a77d2736f461e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Projet - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4fdf6aacfdc6bd5054114e28199ba19d85bc07066864157a1a77d2736f461e69->leave($__internal_4fdf6aacfdc6bd5054114e28199ba19d85bc07066864157a1a77d2736f461e69_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a2b5c7d8aa5cdfb488ceee7f95c40e50378adccb76700bf12f80d1fc2724251 = $this->env->getExtension("native_profiler");
        $__internal_5a2b5c7d8aa5cdfb488ceee7f95c40e50378adccb76700bf12f80d1fc2724251->enter($__internal_5a2b5c7d8aa5cdfb488ceee7f95c40e50378adccb76700bf12f80d1fc2724251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  ";
        // line 13
        echo "
  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('frprojet_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_5a2b5c7d8aa5cdfb488ceee7f95c40e50378adccb76700bf12f80d1fc2724251->leave($__internal_5a2b5c7d8aa5cdfb488ceee7f95c40e50378adccb76700bf12f80d1fc2724251_prof);

    }

    // line 17
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_eef7546a80619a541e3322adf62d22bb6af557a913a1948311bef99be84f2d34 = $this->env->getExtension("native_profiler");
        $__internal_eef7546a80619a541e3322adf62d22bb6af557a913a1948311bef99be84f2d34->enter($__internal_eef7546a80619a541e3322adf62d22bb6af557a913a1948311bef99be84f2d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 18
        echo "  ";
        
        $__internal_eef7546a80619a541e3322adf62d22bb6af557a913a1948311bef99be84f2d34->leave($__internal_eef7546a80619a541e3322adf62d22bb6af557a913a1948311bef99be84f2d34_prof);

    }

    public function getTemplateName()
    {
        return "FrLdapBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  79 => 17,  71 => 19,  68 => 17,  63 => 13,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/Fr/LdapBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Projet - {{ parent() }}*/
/* {% endblock %}*/
/*  */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   {# <h1>exemple</h1> #}*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block frprojet_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
