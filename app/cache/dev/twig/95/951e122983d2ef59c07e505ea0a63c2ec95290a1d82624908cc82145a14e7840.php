<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_33474e08f86beea194bdb8fcd9015bbd00310a6bb9dca3e19016740b876f52ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60a3f2283f518cc70014fcece8280a5da68efe9de812899584c117a863410fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a3f2283f518cc70014fcece8280a5da68efe9de812899584c117a863410fd1->enter($__internal_60a3f2283f518cc70014fcece8280a5da68efe9de812899584c117a863410fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a3f2283f518cc70014fcece8280a5da68efe9de812899584c117a863410fd1->leave($__internal_60a3f2283f518cc70014fcece8280a5da68efe9de812899584c117a863410fd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa596150077c92735a6fe8af870dc0c4cb8cce992d15d5017ed1bd9e91b5d05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa596150077c92735a6fe8af870dc0c4cb8cce992d15d5017ed1bd9e91b5d05e->enter($__internal_aa596150077c92735a6fe8af870dc0c4cb8cce992d15d5017ed1bd9e91b5d05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aa596150077c92735a6fe8af870dc0c4cb8cce992d15d5017ed1bd9e91b5d05e->leave($__internal_aa596150077c92735a6fe8af870dc0c4cb8cce992d15d5017ed1bd9e91b5d05e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b081b44577a9497d14198098364ae15b07b048e4305107b7c093251b3f665bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b081b44577a9497d14198098364ae15b07b048e4305107b7c093251b3f665bd->enter($__internal_4b081b44577a9497d14198098364ae15b07b048e4305107b7c093251b3f665bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b081b44577a9497d14198098364ae15b07b048e4305107b7c093251b3f665bd->leave($__internal_4b081b44577a9497d14198098364ae15b07b048e4305107b7c093251b3f665bd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_67469924809767159bca3bcfeaf153e069512136c92647e327812992dd44d178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67469924809767159bca3bcfeaf153e069512136c92647e327812992dd44d178->enter($__internal_67469924809767159bca3bcfeaf153e069512136c92647e327812992dd44d178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_67469924809767159bca3bcfeaf153e069512136c92647e327812992dd44d178->leave($__internal_67469924809767159bca3bcfeaf153e069512136c92647e327812992dd44d178_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\zadanie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
