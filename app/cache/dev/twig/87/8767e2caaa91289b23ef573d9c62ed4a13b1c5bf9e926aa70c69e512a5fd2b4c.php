<?php

/* FrProjetBundle:Projet:index.html.twig */
class __TwigTemplate_f39800f6fed3f615f0b94f07605676a9027f5e4b67cb8cf35bcd873be034bc3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FrProjetBundle:Projet:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'frprojet_body' => array($this, 'block_frprojet_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrProjetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_921a95c4bc178d0602b9391754bff3dcefc05b45c8318893c7d26352c24c1f31 = $this->env->getExtension("native_profiler");
        $__internal_921a95c4bc178d0602b9391754bff3dcefc05b45c8318893c7d26352c24c1f31->enter($__internal_921a95c4bc178d0602b9391754bff3dcefc05b45c8318893c7d26352c24c1f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrProjetBundle:Projet:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921a95c4bc178d0602b9391754bff3dcefc05b45c8318893c7d26352c24c1f31->leave($__internal_921a95c4bc178d0602b9391754bff3dcefc05b45c8318893c7d26352c24c1f31_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_192dae9758c828f706993354382df8931a2d18f10f440268dda53bcb2a71194e = $this->env->getExtension("native_profiler");
        $__internal_192dae9758c828f706993354382df8931a2d18f10f440268dda53bcb2a71194e->enter($__internal_192dae9758c828f706993354382df8931a2d18f10f440268dda53bcb2a71194e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_192dae9758c828f706993354382df8931a2d18f10f440268dda53bcb2a71194e->leave($__internal_192dae9758c828f706993354382df8931a2d18f10f440268dda53bcb2a71194e_prof);

    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_8ddc5b62508b364a98e297d87fbc2baa9daa41e4f34de780ff7ed46217385520 = $this->env->getExtension("native_profiler");
        $__internal_8ddc5b62508b364a98e297d87fbc2baa9daa41e4f34de780ff7ed46217385520->enter($__internal_8ddc5b62508b364a98e297d87fbc2baa9daa41e4f34de780ff7ed46217385520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo "</h2>

  ";
        // line 14
        echo " 




";
        
        $__internal_8ddc5b62508b364a98e297d87fbc2baa9daa41e4f34de780ff7ed46217385520->leave($__internal_8ddc5b62508b364a98e297d87fbc2baa9daa41e4f34de780ff7ed46217385520_prof);

    }

    public function getTemplateName()
    {
        return "FrProjetBundle:Projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  62 => 11,  59 => 10,  53 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BI/BiodanzaBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   {{ 'Home'|trans }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frprojet_body %}*/
/* */
/*   <h2>{{ 'Home'|trans }}</h2>*/
/* */
/*   {# On vérifie qu'une image soit bien associée à l'annonce #}*/
/*  */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
