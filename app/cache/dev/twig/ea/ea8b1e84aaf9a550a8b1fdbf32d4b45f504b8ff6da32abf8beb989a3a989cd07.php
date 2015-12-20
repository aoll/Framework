<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_23cbb82844b63a4caef8f1b750e75cfbdb599ce7db5d7e489b3c96a398819da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrProjetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a2ce26a535aa452385b53318047ff0dc698e76ff6095f85bcc539e3635ef921 = $this->env->getExtension("native_profiler");
        $__internal_5a2ce26a535aa452385b53318047ff0dc698e76ff6095f85bcc539e3635ef921->enter($__internal_5a2ce26a535aa452385b53318047ff0dc698e76ff6095f85bcc539e3635ef921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a2ce26a535aa452385b53318047ff0dc698e76ff6095f85bcc539e3635ef921->leave($__internal_5a2ce26a535aa452385b53318047ff0dc698e76ff6095f85bcc539e3635ef921_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9f157273200c958d98f116e48495ec2b2d89f5c7c36a8541c70cecccdbb1773 = $this->env->getExtension("native_profiler");
        $__internal_b9f157273200c958d98f116e48495ec2b2d89f5c7c36a8541c70cecccdbb1773->enter($__internal_b9f157273200c958d98f116e48495ec2b2d89f5c7c36a8541c70cecccdbb1773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 11
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
";
            // line 13
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
  ";
        // line 17
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_b9f157273200c958d98f116e48495ec2b2d89f5c7c36a8541c70cecccdbb1773->leave($__internal_b9f157273200c958d98f116e48495ec2b2d89f5c7c36a8541c70cecccdbb1773_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9d69e7e825ed6a434d94b734d411ec4986d8c5d4d5974994ae82ed2415cfb18 = $this->env->getExtension("native_profiler");
        $__internal_f9d69e7e825ed6a434d94b734d411ec4986d8c5d4d5974994ae82ed2415cfb18->enter($__internal_f9d69e7e825ed6a434d94b734d411ec4986d8c5d4d5974994ae82ed2415cfb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "  ";
        
        $__internal_f9d69e7e825ed6a434d94b734d411ec4986d8c5d4d5974994ae82ed2415cfb18->leave($__internal_f9d69e7e825ed6a434d94b734d411ec4986d8c5d4d5974994ae82ed2415cfb18_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  75 => 17,  67 => 19,  64 => 17,  61 => 15,  54 => 13,  49 => 11,  44 => 10,  41 => 8,  35 => 7,  11 => 4,);
    }
}
/* {# src/OC/UserBundle/Resources/views/layout.html.twig #}*/
/* */
/* {# On étend notre layout #}*/
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/*   {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*   {% for key, message in app.session.flashbag.all() %}*/
/*     <div class="alert alert-{{ key }}">*/
/* {#      {{ message|trans({}, 'FOSUserBundle') }}#}*/
/*     </div>*/
/*   {% endfor %}*/
/* */
/*   {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
