<?php

/* FrProjetBundle::layout.html.twig */
class __TwigTemplate_6ecaa6b8962ecbb413819e1ad069875fabba44097d2fdcc11f7c48c16e925f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrProjetBundle::layout.html.twig", 3);
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
        $__internal_219fd997941e98b1dec9d9c46860ebd0cbde017dd923bdd934840e30adf63cde = $this->env->getExtension("native_profiler");
        $__internal_219fd997941e98b1dec9d9c46860ebd0cbde017dd923bdd934840e30adf63cde->enter($__internal_219fd997941e98b1dec9d9c46860ebd0cbde017dd923bdd934840e30adf63cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219fd997941e98b1dec9d9c46860ebd0cbde017dd923bdd934840e30adf63cde->leave($__internal_219fd997941e98b1dec9d9c46860ebd0cbde017dd923bdd934840e30adf63cde_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f51fbc0240827b0019a4c68adc2c5860a51f8a8636a31dabc98c73db5abe0b14 = $this->env->getExtension("native_profiler");
        $__internal_f51fbc0240827b0019a4c68adc2c5860a51f8a8636a31dabc98c73db5abe0b14->enter($__internal_f51fbc0240827b0019a4c68adc2c5860a51f8a8636a31dabc98c73db5abe0b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Projet - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f51fbc0240827b0019a4c68adc2c5860a51f8a8636a31dabc98c73db5abe0b14->leave($__internal_f51fbc0240827b0019a4c68adc2c5860a51f8a8636a31dabc98c73db5abe0b14_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_89071801cdb7866b21c821e87ffcc3e42a7d7f3e0dd494a195a60678fd14f7d5 = $this->env->getExtension("native_profiler");
        $__internal_89071801cdb7866b21c821e87ffcc3e42a7d7f3e0dd494a195a60678fd14f7d5->enter($__internal_89071801cdb7866b21c821e87ffcc3e42a7d7f3e0dd494a195a60678fd14f7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89071801cdb7866b21c821e87ffcc3e42a7d7f3e0dd494a195a60678fd14f7d5->leave($__internal_89071801cdb7866b21c821e87ffcc3e42a7d7f3e0dd494a195a60678fd14f7d5_prof);

    }

    // line 17
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_615bb38777a4f3145d05195d09fdff68a61f27beae5b1de9fece2932edd6de44 = $this->env->getExtension("native_profiler");
        $__internal_615bb38777a4f3145d05195d09fdff68a61f27beae5b1de9fece2932edd6de44->enter($__internal_615bb38777a4f3145d05195d09fdff68a61f27beae5b1de9fece2932edd6de44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 18
        echo "  ";
        
        $__internal_615bb38777a4f3145d05195d09fdff68a61f27beae5b1de9fece2932edd6de44->leave($__internal_615bb38777a4f3145d05195d09fdff68a61f27beae5b1de9fece2932edd6de44_prof);

    }

    public function getTemplateName()
    {
        return "FrProjetBundle::layout.html.twig";
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
/* {# src/Fr/ProjetBundle/Resources/views/layout.html.twig #}*/
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
