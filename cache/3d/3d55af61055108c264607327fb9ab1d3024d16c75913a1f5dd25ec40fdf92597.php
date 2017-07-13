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
            'content_current' => array($this, 'block_content_current'),
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

    // line 6
    public function block_content_current($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 7, "641683682")->display($context);
    }

    // line 14
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
        return array (  53 => 14,  48 => 7,  45 => 6,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_4dbeb44dc7e573b702aa8de975e023721e3deb22a762fd7183b12bcb82027231_641683682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("home/container.twig", "home/_home.twig", 7);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/container.twig";
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
        return array (  82 => 7,  53 => 14,  48 => 7,  45 => 6,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block section %}*/
/* 	<input type="hidden" name="section" id="section" value="home">*/
/* {% endblock %}*/
/* {% block content_current %}*/
/* 	{% embed "home/container.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {#*/
/* {% block projects_container %}*/
/* 	{% embed "sitio/galeria.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* #}*/
/* {% block load_scripts %}*/
/* {% endblock %}*/
