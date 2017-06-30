<?php

/* home/_home.twig */
class __TwigTemplate_4dbeb44dc7e573b702aa8de975e023721e3deb22a762fd7183b12bcb82027231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "home/_home.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
            'projects_container' => array($this, 'block_projects_container'),
            'load_scripts' => array($this, 'block_load_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "super.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "\t<input type=\"hidden\" name=\"section\" id=\"section\" value=\"home\">
";
    }

    // line 8
    public function block_projects_container($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 9, "1248206306")->display($context);
    }

    // line 11
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "home/_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  48 => 9,  45 => 8,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_4dbeb44dc7e573b702aa8de975e023721e3deb22a762fd7183b12bcb82027231_1248206306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("sitio/galeria.twig", "home/_home.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "sitio/galeria.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "home/_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 9,  53 => 11,  48 => 9,  45 => 8,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section %}*/
/* 	<input type="hidden" name="section" id="section" value="home">*/
/* {% endblock %}*/
/* {#{% block content_current %}*/
/* {% endblock %}#}*/
/* {% block projects_container %}*/
/* 	{% embed "sitio/galeria.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
