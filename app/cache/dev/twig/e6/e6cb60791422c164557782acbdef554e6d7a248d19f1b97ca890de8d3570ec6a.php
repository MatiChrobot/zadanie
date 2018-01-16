<?php

/* base.html.twig */
class __TwigTemplate_7adc48606dff8218175a0f7b55c693adae86eaf110e1742c0966cd9fe711cf4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fea629c97cfd557eefca3f7cf55729675f2db82c22ffcc0a272ad960510f81b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea629c97cfd557eefca3f7cf55729675f2db82c22ffcc0a272ad960510f81b4->enter($__internal_fea629c97cfd557eefca3f7cf55729675f2db82c22ffcc0a272ad960510f81b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fea629c97cfd557eefca3f7cf55729675f2db82c22ffcc0a272ad960510f81b4->leave($__internal_fea629c97cfd557eefca3f7cf55729675f2db82c22ffcc0a272ad960510f81b4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d817f4faf4645bcd1c6d1be396d6ca8016024f26c042c6071229d3842fef945a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d817f4faf4645bcd1c6d1be396d6ca8016024f26c042c6071229d3842fef945a->enter($__internal_d817f4faf4645bcd1c6d1be396d6ca8016024f26c042c6071229d3842fef945a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d817f4faf4645bcd1c6d1be396d6ca8016024f26c042c6071229d3842fef945a->leave($__internal_d817f4faf4645bcd1c6d1be396d6ca8016024f26c042c6071229d3842fef945a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e55ff7098a17840b5ae5c8bea1456e71e1bf25e8f7e170561b5d63bbdeaf18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e55ff7098a17840b5ae5c8bea1456e71e1bf25e8f7e170561b5d63bbdeaf18f->enter($__internal_0e55ff7098a17840b5ae5c8bea1456e71e1bf25e8f7e170561b5d63bbdeaf18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e55ff7098a17840b5ae5c8bea1456e71e1bf25e8f7e170561b5d63bbdeaf18f->leave($__internal_0e55ff7098a17840b5ae5c8bea1456e71e1bf25e8f7e170561b5d63bbdeaf18f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_01372108e4fec764a207dc570fc8ec543cf95ac8c31a00e7c767ec71c271ee5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01372108e4fec764a207dc570fc8ec543cf95ac8c31a00e7c767ec71c271ee5d->enter($__internal_01372108e4fec764a207dc570fc8ec543cf95ac8c31a00e7c767ec71c271ee5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01372108e4fec764a207dc570fc8ec543cf95ac8c31a00e7c767ec71c271ee5d->leave($__internal_01372108e4fec764a207dc570fc8ec543cf95ac8c31a00e7c767ec71c271ee5d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec1ae1f18c0558e279a23385e87d2f413d0d7b39984d8cdce5cb5616b0d23000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1ae1f18c0558e279a23385e87d2f413d0d7b39984d8cdce5cb5616b0d23000->enter($__internal_ec1ae1f18c0558e279a23385e87d2f413d0d7b39984d8cdce5cb5616b0d23000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ec1ae1f18c0558e279a23385e87d2f413d0d7b39984d8cdce5cb5616b0d23000->leave($__internal_ec1ae1f18c0558e279a23385e87d2f413d0d7b39984d8cdce5cb5616b0d23000_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\zadanie\\app\\Resources\\views\\base.html.twig");
    }
}
