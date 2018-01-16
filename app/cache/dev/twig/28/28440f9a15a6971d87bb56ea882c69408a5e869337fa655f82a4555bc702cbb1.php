<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_188b0f55f68687a19047bd67d3a5d8e8841560d46f96f076e380fc0e3bfe101f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fa284ef918c4d4a586a249f6cebcffb0eba5d4103912a2553e60b09af337331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa284ef918c4d4a586a249f6cebcffb0eba5d4103912a2553e60b09af337331->enter($__internal_2fa284ef918c4d4a586a249f6cebcffb0eba5d4103912a2553e60b09af337331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fa284ef918c4d4a586a249f6cebcffb0eba5d4103912a2553e60b09af337331->leave($__internal_2fa284ef918c4d4a586a249f6cebcffb0eba5d4103912a2553e60b09af337331_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0db39b08a7cc82540bb7af67634e3aa1fe9838f1a0227f43019f23c06ee31b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db39b08a7cc82540bb7af67634e3aa1fe9838f1a0227f43019f23c06ee31b4f->enter($__internal_0db39b08a7cc82540bb7af67634e3aa1fe9838f1a0227f43019f23c06ee31b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0db39b08a7cc82540bb7af67634e3aa1fe9838f1a0227f43019f23c06ee31b4f->leave($__internal_0db39b08a7cc82540bb7af67634e3aa1fe9838f1a0227f43019f23c06ee31b4f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d0f51b717f12cb7474d7d2b8bb44ac7f2a954d0cb27a7c2ab4a614caabc2905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0f51b717f12cb7474d7d2b8bb44ac7f2a954d0cb27a7c2ab4a614caabc2905->enter($__internal_1d0f51b717f12cb7474d7d2b8bb44ac7f2a954d0cb27a7c2ab4a614caabc2905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1d0f51b717f12cb7474d7d2b8bb44ac7f2a954d0cb27a7c2ab4a614caabc2905->leave($__internal_1d0f51b717f12cb7474d7d2b8bb44ac7f2a954d0cb27a7c2ab4a614caabc2905_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b406eba9d0c5df3e94620ed312f6d3e4895be0ae46e9da0a240ddc604816ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b406eba9d0c5df3e94620ed312f6d3e4895be0ae46e9da0a240ddc604816ef5->enter($__internal_2b406eba9d0c5df3e94620ed312f6d3e4895be0ae46e9da0a240ddc604816ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2b406eba9d0c5df3e94620ed312f6d3e4895be0ae46e9da0a240ddc604816ef5->leave($__internal_2b406eba9d0c5df3e94620ed312f6d3e4895be0ae46e9da0a240ddc604816ef5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\zadanie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
