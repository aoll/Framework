<?php

/* FrProjetBundle:Projet:admin.html.twig */
class __TwigTemplate_ced3733befc230d9947c5a7ce9f61fb1e63f45c605b40996426244398dcd784e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FrProjetBundle:Projet:admin.html.twig", 3);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Admin - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Admin</h2>

<p> <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add user"), "html", null, true);
        echo "</a></p>

  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "  <div class=\"well\">
   ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("name"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "
   email: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "
  
   ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 21
                echo "   ";
                if (($context["role"] === "ROLE_ADMIN")) {
                    // line 22
                    echo "      ";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "
   ";
                }
                // line 24
                echo "   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "

    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 28
                echo "\t";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 29
                    echo "    ";
                    if (($context["role"] === "ROLE_ADMIN")) {
                        // line 30
                        echo "    ";
                    } else {
                        // line 31
                        echo "    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_projet_add_roles", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                        echo "\"class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Upgrade Admin"), "html", null, true);
                        echo "</a>
   ";
                    }
                }
                // line 36
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "




    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 43
                echo "\t";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 44
                    echo "    ";
                    if (($context["role"] === "ROLE_ADMIN")) {
                        // line 45
                        echo "
   ";
                        // line 46
                        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                            // line 47
                            echo "    <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_projet_delete_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                            echo "\"class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      ";
                            // line 49
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete User"), "html", null, true);
                            echo "</a>
    ";
                        }
                        // line 51
                        echo "

    ";
                    } else {
                        // line 54
                        echo "    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_projet_delete_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                        echo "\"class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      ";
                        // line 56
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete User"), "html", null, true);
                        echo "</a>
    <a href=\"";
                        // line 57
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_log_log_as", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                        echo "\"class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
                        // line 59
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Log as User"), "html", null, true);
                        echo "</a>
    ";
                    }
                }
                // line 62
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "  
";
    }

    public function getTemplateName()
    {
        return "FrProjetBundle:Projet:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 65,  233 => 63,  219 => 62,  213 => 59,  208 => 57,  204 => 56,  198 => 54,  193 => 51,  188 => 49,  182 => 47,  180 => 46,  177 => 45,  174 => 44,  171 => 43,  154 => 42,  147 => 37,  133 => 36,  127 => 33,  121 => 31,  118 => 30,  115 => 29,  112 => 28,  95 => 27,  91 => 25,  85 => 24,  79 => 22,  76 => 21,  72 => 20,  67 => 18,  61 => 17,  58 => 16,  54 => 15,  47 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }
}
/* {# src/Fr/ProjetBundle/Resources/views/Projet/admin.html.twig #}*/
/* */
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Admin - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frprojet_body %}*/
/* */
/*   <h2>Admin</h2>*/
/* */
/* <p> <a href="{{ path('fos_user_registration_register') }}">{{ 'Add user'|trans }}</a></p>*/
/* */
/*   {% for user in user %}*/
/*   <div class="well">*/
/*    {{ 'name'|trans }}: {{ user.username }}*/
/*    email: {{ user.email }}*/
/*   */
/*    {% for role in user.roles %}*/
/*    {% if role is sameas('ROLE_ADMIN') %}*/
/*       {{ role }}*/
/*    {% endif %}*/
/*    {% endfor %}*/
/* */
/* */
/*     {% for role in user.roles %}*/
/* 	{%  if loop.index == 1 %}*/
/*     {% if role is sameas('ROLE_ADMIN') %}*/
/*     {% else %}*/
/*     <a href="{{ path('fr_projet_add_roles', {'id': user.id}) }}"class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Upgrade Admin'|trans }}</a>*/
/*    {% endif %}*/
/* {% endif %}*/
/*     {% endfor %}*/
/* */
/* */
/* */
/* */
/* */
/*     {% for role in user.roles %}*/
/* 	{%  if loop.index == 1 %}*/
/*     {% if role is sameas('ROLE_ADMIN') %}*/
/* */
/*    {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*     <a href="{{ path('fr_projet_delete_user', {'id': user.id}) }}"class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       {{ 'Delete User'|trans }}</a>*/
/*     {% endif %}*/
/* */
/* */
/*     {% else %}*/
/*     <a href="{{ path('fr_projet_delete_user', {'id': user.id}) }}"class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       {{ 'Delete User'|trans }}</a>*/
/*     <a href="{{ path('fr_log_log_as', {'id': user.id}) }}"class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Log as User'|trans }}</a>*/
/*     {% endif %}*/
/* {% endif %}*/
/*     {% endfor %}*/
/* */
/*   </div>*/
/* {% endfor %}  */
/* {% endblock %}*/
/* */
