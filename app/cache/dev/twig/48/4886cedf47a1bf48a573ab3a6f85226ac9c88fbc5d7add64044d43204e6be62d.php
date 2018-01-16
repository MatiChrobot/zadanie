<?php

/* base.html.php */
class __TwigTemplate_4f7bd534bef24e6d361c118e245c06cee9303f92260dcdd21af9d7c7d45a5815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_225fbabee498899f0cf596c4a61f63a10d5fc5a5a04377dbd5cd26e0220d5f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225fbabee498899f0cf596c4a61f63a10d5fc5a5a04377dbd5cd26e0220d5f8c->enter($__internal_225fbabee498899f0cf596c4a61f63a10d5fc5a5a04377dbd5cd26e0220d5f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Zadanie</title>
    </head>
    <body>
        <?php
        \$sep=\";\"; // separator 
        \$mycsv=file(\"export.csv\"); 
        \$row=rand(0,count(\$mycsv)-1); 
        \$data=explode(\$sep,\$mycsv[\$row]); 

        \$num = count (\$data); 

        for (\$a=0; \$a < \$num; \$a++) { 
        print \$data[\$a] . \"<br>\"; 
    } 
    ?> 
    </body>
</html>";
        
        $__internal_225fbabee498899f0cf596c4a61f63a10d5fc5a5a04377dbd5cd26e0220d5f8c->leave($__internal_225fbabee498899f0cf596c4a61f63a10d5fc5a5a04377dbd5cd26e0220d5f8c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Zadanie</title>
    </head>
    <body>
        <?php
        \$sep=\";\"; // separator 
        \$mycsv=file(\"export.csv\"); 
        \$row=rand(0,count(\$mycsv)-1); 
        \$data=explode(\$sep,\$mycsv[\$row]); 

        \$num = count (\$data); 

        for (\$a=0; \$a < \$num; \$a++) { 
        print \$data[\$a] . \"<br>\"; 
    } 
    ?> 
    </body>
</html>", "base.html.php", "C:\\xampp\\htdocs\\zadanie\\app\\Resources\\views\\base.html.php");
    }
}
