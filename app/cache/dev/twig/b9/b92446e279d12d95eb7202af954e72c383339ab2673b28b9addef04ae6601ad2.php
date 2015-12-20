<?php

/* FrProjetBundle:Projet:profile.html.twig */
class __TwigTemplate_8e659ad762bc025b33d88247cd26afe938f4a3af7ce153c2a026c12a8239d8bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FrProjetBundle:Projet:profile.html.twig", 3);
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
        $__internal_db770271d7c156c2985544512b1b777c7c0b6acfcdd74790aaac162232d3a308 = $this->env->getExtension("native_profiler");
        $__internal_db770271d7c156c2985544512b1b777c7c0b6acfcdd74790aaac162232d3a308->enter($__internal_db770271d7c156c2985544512b1b777c7c0b6acfcdd74790aaac162232d3a308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrProjetBundle:Projet:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db770271d7c156c2985544512b1b777c7c0b6acfcdd74790aaac162232d3a308->leave($__internal_db770271d7c156c2985544512b1b777c7c0b6acfcdd74790aaac162232d3a308_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4835b3cb14ded32501c9c26b8ef7f105e2c8e72b507a44ef0968b1e309e865c2 = $this->env->getExtension("native_profiler");
        $__internal_4835b3cb14ded32501c9c26b8ef7f105e2c8e72b507a44ef0968b1e309e865c2->enter($__internal_4835b3cb14ded32501c9c26b8ef7f105e2c8e72b507a44ef0968b1e309e865c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4835b3cb14ded32501c9c26b8ef7f105e2c8e72b507a44ef0968b1e309e865c2->leave($__internal_4835b3cb14ded32501c9c26b8ef7f105e2c8e72b507a44ef0968b1e309e865c2_prof);

    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_80228f56bc05a473c4604893ca2860031124106465221a52777cad12ea2ee1ad = $this->env->getExtension("native_profiler");
        $__internal_80228f56bc05a473c4604893ca2860031124106465221a52777cad12ea2ee1ad->enter($__internal_80228f56bc05a473c4604893ca2860031124106465221a52777cad12ea2ee1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 10
        echo "
  <h2>Profile</h2>

  <div class=\"well\">
   ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("name"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
  </div>
  
  <div class=\"well\">
    email: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
  </div>
 
  <div class=\"well\">
    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_projet_set_email", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Set email"), "html", null, true);
        echo "
    </a>
  
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Set password"), "html", null, true);
        echo "</a>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_projet_delete_user", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete profile"), "html", null, true);
        echo "</a>
  </div>


";
        
        $__internal_80228f56bc05a473c4604893ca2860031124106465221a52777cad12ea2ee1ad->leave($__internal_80228f56bc05a473c4604893ca2860031124106465221a52777cad12ea2ee1ad_prof);

    }

    public function getTemplateName()
    {
        return "FrProjetBundle:Projet:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  100 => 31,  95 => 29,  90 => 27,  84 => 24,  79 => 22,  72 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/fr/ProjetBundle/Resources/views/Advert/profile.html.twig #}*/
/* */
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*  Profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frprojet_body %}*/
/* */
/*   <h2>Profile</h2>*/
/* */
/*   <div class="well">*/
/*    {{ 'name'|trans }}: {{ user.username }}*/
/*   </div>*/
/*   */
/*   <div class="well">*/
/*     email: {{ user.email }}*/
/*   </div>*/
/*  */
/*   <div class="well">*/
/*     <a href="{{ path('fr_projet_set_email', {'id' : user.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Set email'|trans }}*/
/*     </a>*/
/*   */
/*     <a href="{{ path('fos_user_change_password') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Set password'|trans }}</a>*/
/* */
/*     <a href="{{ path('fr_projet_delete_user', {'id' : user.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       {{ 'Delete profile'|trans }}</a>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
