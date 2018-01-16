<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5e2710e34da1ec1a744c378d288740adad56a5d91f5ebf430c34d5cb2cdc4cc1 extends Twig_Template
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
        $__internal_9becb114060a3d0162b78d3c6c6c75df4612a42f73231655b3b4eda138902277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9becb114060a3d0162b78d3c6c6c75df4612a42f73231655b3b4eda138902277->enter($__internal_9becb114060a3d0162b78d3c6c6c75df4612a42f73231655b3b4eda138902277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9becb114060a3d0162b78d3c6c6c75df4612a42f73231655b3b4eda138902277->leave($__internal_9becb114060a3d0162b78d3c6c6c75df4612a42f73231655b3b4eda138902277_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5568e8a66f6cd9a57f06362444047690486f84ad5e884a4ddb004313d9c2a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5568e8a66f6cd9a57f06362444047690486f84ad5e884a4ddb004313d9c2a99->enter($__internal_a5568e8a66f6cd9a57f06362444047690486f84ad5e884a4ddb004313d9c2a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a5568e8a66f6cd9a57f06362444047690486f84ad5e884a4ddb004313d9c2a99->leave($__internal_a5568e8a66f6cd9a57f06362444047690486f84ad5e884a4ddb004313d9c2a99_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9611406b0838ac9fdced7030d7855bbc6cc97afb399ed824ade2366631152dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9611406b0838ac9fdced7030d7855bbc6cc97afb399ed824ade2366631152dd8->enter($__internal_9611406b0838ac9fdced7030d7855bbc6cc97afb399ed824ade2366631152dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9611406b0838ac9fdced7030d7855bbc6cc97afb399ed824ade2366631152dd8->leave($__internal_9611406b0838ac9fdced7030d7855bbc6cc97afb399ed824ade2366631152dd8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b65673b3009449245f9b660523e08e75f8388a28d558d12a5d9fbb9ea8c72e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b65673b3009449245f9b660523e08e75f8388a28d558d12a5d9fbb9ea8c72e0->enter($__internal_6b65673b3009449245f9b660523e08e75f8388a28d558d12a5d9fbb9ea8c72e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6b65673b3009449245f9b660523e08e75f8388a28d558d12a5d9fbb9ea8c72e0->leave($__internal_6b65673b3009449245f9b660523e08e75f8388a28d558d12a5d9fbb9ea8c72e0_prof);

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
