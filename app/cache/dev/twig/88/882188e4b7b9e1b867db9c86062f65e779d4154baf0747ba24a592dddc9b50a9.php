<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_201753f07646a78d4bd3074f550ea16eb3ed778b6da1a192bdeb8326f216738f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5254871c5822f4a5dad640b46fd35f52d3d538025dbd611e1e3b4d4ab97267f1 = $this->env->getExtension("native_profiler");
        $__internal_5254871c5822f4a5dad640b46fd35f52d3d538025dbd611e1e3b4d4ab97267f1->enter($__internal_5254871c5822f4a5dad640b46fd35f52d3d538025dbd611e1e3b4d4ab97267f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5254871c5822f4a5dad640b46fd35f52d3d538025dbd611e1e3b4d4ab97267f1->leave($__internal_5254871c5822f4a5dad640b46fd35f52d3d538025dbd611e1e3b4d4ab97267f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c55dd48585861b40bb09627809753eeb2481d58adef777169891daa178732281 = $this->env->getExtension("native_profiler");
        $__internal_c55dd48585861b40bb09627809753eeb2481d58adef777169891daa178732281->enter($__internal_c55dd48585861b40bb09627809753eeb2481d58adef777169891daa178732281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c55dd48585861b40bb09627809753eeb2481d58adef777169891daa178732281->leave($__internal_c55dd48585861b40bb09627809753eeb2481d58adef777169891daa178732281_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a2dfff64dbeccc7a31e4f93d8e1b1c876280ce6d820498b889e92fb10b49c3f = $this->env->getExtension("native_profiler");
        $__internal_1a2dfff64dbeccc7a31e4f93d8e1b1c876280ce6d820498b889e92fb10b49c3f->enter($__internal_1a2dfff64dbeccc7a31e4f93d8e1b1c876280ce6d820498b889e92fb10b49c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1a2dfff64dbeccc7a31e4f93d8e1b1c876280ce6d820498b889e92fb10b49c3f->leave($__internal_1a2dfff64dbeccc7a31e4f93d8e1b1c876280ce6d820498b889e92fb10b49c3f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a664a0ccfb9f6af57d6b3acbb9c1c518a4c74573313855f164767fc811f5e3cb = $this->env->getExtension("native_profiler");
        $__internal_a664a0ccfb9f6af57d6b3acbb9c1c518a4c74573313855f164767fc811f5e3cb->enter($__internal_a664a0ccfb9f6af57d6b3acbb9c1c518a4c74573313855f164767fc811f5e3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a664a0ccfb9f6af57d6b3acbb9c1c518a4c74573313855f164767fc811f5e3cb->leave($__internal_a664a0ccfb9f6af57d6b3acbb9c1c518a4c74573313855f164767fc811f5e3cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
