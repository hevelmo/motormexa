<?php

/* super.twig */
class __TwigTemplate_a7ff9a5cef2386457cf0e7959ab2540ae85827ab284edbff819a73eba345280f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'facebook_tag' => array($this, 'block_facebook_tag'),
            'title' => array($this, 'block_title'),
            'links' => array($this, 'block_links'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'section' => array($this, 'block_section'),
            'content_current' => array($this, 'block_content_current'),
            'body_scripts' => array($this, 'block_body_scripts'),
            'load_scripts' => array($this, 'block_load_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang=\"es-MX\" class=\"no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html lang=\"es-MX\" class=\"no-js lt-ie10 lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html lang=\"es-MX\" class=\"no-js lt-ie10 lt-ie9\"> <![endif]-->
<!--[if IE 9]>         <html lang=\"es-MX\" class=\"no-js lt-ie10\"> <![endif]-->
\t<html class=\"no-js\" lang=\"es\">
\t\t<head>
\t\t\t";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "\t\t\t<title>
\t\t\t\t";
        // line 39
        $this->displayBlock('title', $context, $blocks);
        // line 41
        echo "\t\t\t</title>
\t\t\t";
        // line 42
        $this->displayBlock('links', $context, $blocks);
        // line 49
        echo "\t\t\t<!--[if lt IE 9]>
\t\t\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t\t<![endif]-->
\t\t\t";
        // line 52
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 93
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "lib/assets/modernizr";
        echo twig_escape_filter($this->env, (isset($context["_pro"]) ? $context["_pro"] : null), "html", null, true);
        echo ".js\"></script> ";
        // line 94
        echo "\t\t</head>
\t\t<body id=\"index\">
\t\t\t";
        // line 96
        $this->displayBlock('section', $context, $blocks);
        // line 98
        echo "\t\t\t<div class=\"projects-container\">
\t\t\t\t";
        // line 100
        echo "\t\t\t\t\t
\t\t\t\t";
        // line 101
        $this->displayBlock('content_current', $context, $blocks);
        // line 103
        echo "\t\t\t</div> ";
        // line 104
        echo "\t        ";
        $this->displayBlock('body_scripts', $context, $blocks);
        // line 117
        echo "\t        
\t        <script>";
        // line 118
        $this->displayBlock('load_scripts', $context, $blocks);
        echo "</script>
\t\t</body>
\t</html>";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "\t\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />
\t\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t\t\t<meta http-equiv='cache-control' content='no-cache' />
\t\t\t\t<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
\t\t\t\t<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />
\t\t\t\t<meta name=\"title\" content=\"\">
\t\t\t\t<meta name=\"identifier-url\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\" />
\t\t\t\t<meta name=\"keywords\" content=\"\" />
\t\t\t\t<meta name=\"author\" content=\"\" />
\t\t\t\t<meta name=\"language\" content=\"ES\" />
\t\t\t\t<meta name=\"copyright\" content=\"© ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["_anio"]) ? $context["_anio"] : null), "html", null, true);
        echo " \" />
\t\t\t\t<meta name=\"robots\" content=\"index, follow\">
\t\t\t\t<meta name=\"googlebot\" content=\"robots.txt\">
\t\t\t\t<meta itemprop=\"image\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/logo/\">
\t\t\t\t<meta itemprop=\"name\" content=\"\"/>
\t\t\t\t<meta itemprop=\"description\" content=\"\"/>
\t\t\t\t<meta itemprop=\"image\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/logo/\"/>
\t\t\t\t<meta property=\"business:contact_data:website\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\"/>
\t\t\t\t";
        // line 28
        $this->displayBlock('facebook_tag', $context, $blocks);
        // line 37
        echo "\t\t\t";
    }

    // line 28
    public function block_facebook_tag($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t\t\t<!-- sample fb meta -->
\t\t\t\t\t<meta property=\"og:title\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["tag_name_default"]) ? $context["tag_name_default"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t<meta property=\"og:type\" content=\"website\" />
\t\t\t\t\t<meta property=\"og:image:type\" content=\" ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["tag_content_type"]) ? $context["tag_content_type"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t<meta property=\"og:image\" content=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["tag_image_default"]) ? $context["tag_image_default"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t<meta property=\"og:description\" content=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["tag_description"]) ? $context["tag_description"] : null), "html", null, true);
        echo "\"/>
\t\t\t\t\t<meta property=\"og:site_name\" content=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["tag_site_name"]) ? $context["tag_site_name"] : null), "html", null, true);
        echo "\" />
\t\t\t\t";
    }

    // line 39
    public function block_title($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t\t";
    }

    // line 42
    public function block_links($context, array $blocks = array())
    {
        // line 43
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/styles.css\">
\t\t\t\t";
        // line 48
        echo "\t\t\t";
    }

    // line 52
    public function block_head_scripts($context, array $blocks = array())
    {
        // line 53
        echo "                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
                <![endif]-->
                <script>
\t\t\t\t    var nav = navigator.appName;

\t\t\t\t    if(nav == \"Microsoft Internet Explorer\"){
\t\t\t\t    \t// Detectamos si nos visitan desde IE
\t\t\t\t\t    if(nav == \"Microsoft Internet Explorer\"){
\t\t\t\t\t        // Convertimos en minusculas la cadena que devuelve userAgent
\t\t\t\t\t        var ie = navigator.userAgent.toLowerCase();
\t\t\t\t\t        // Extraemos de la cadena la version de IE
\t\t\t\t\t        var version = parseInt(ie.split('msie')[1]);

\t\t\t\t\t        // Dependiendo de la version mostramos un resultado
\t\t\t\t\t        switch(version){
\t\t\t\t\t            case 6:
\t\t\t\t\t                alert(\"Estas usando IE 6, es obsoleto. \\n Para una visualización optima del sitio, te recomendamos utilizar \\n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 \");
\t\t\t\t\t                break;
\t\t\t\t\t            case 7:
\t\t\t\t\t                alert(\"Estas usando IE 7, es obsoleto \\n Para una visualización optima del sitio, te recomendamos utilizar \\n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 \");
\t\t\t\t\t                break;
\t\t\t\t\t            case 8:
\t\t\t\t\t                alert(\"Estas usando IE 8, es obsoleto \\n Para una visualización optima del sitio, te recomendamos utilizar \\n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 \");
\t\t\t\t\t                break;
\t\t\t\t\t            /*case 9:
\t\t\t\t\t            \talert(\"Para una visualización optima del sitio, te recomendamos utilizar \\n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v10 y v11 \");
\t\t\t\t\t                console.log(\"Estas usando IE 9, mas o menos compatible\");
\t\t\t\t\t                break;*/
\t\t\t\t\t            default:
\t\t\t\t\t                console.log(\"Usas una version compatible\");
\t\t\t\t\t                break;
\t\t\t\t\t        }
\t\t\t\t\t    }
\t\t\t\t    }
\t\t\t\t</script>
            ";
    }

    // line 96
    public function block_section($context, array $blocks = array())
    {
        // line 97
        echo "\t\t\t";
    }

    // line 101
    public function block_content_current($context, array $blocks = array())
    {
        // line 102
        echo "\t\t\t\t";
    }

    // line 104
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 105
        echo "\t            ";
        // line 106
        echo "\t            <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "lib/min/core.lib.min.js\"></script>
\t            ";
        // line 108
        echo "\t            ";
        // line 112
        echo "\t            <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/main.js\"></script>
\t\t\t\t<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/method.js\"></script>
\t\t\t\t<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/model.js\"></script>
\t\t\t\t<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/objects.js\"></script>
\t            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/required.js\"></script>
\t        ";
    }

    // line 118
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "super.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 118,  272 => 116,  268 => 115,  264 => 114,  260 => 113,  255 => 112,  253 => 108,  248 => 106,  246 => 105,  243 => 104,  239 => 102,  236 => 101,  232 => 97,  229 => 96,  186 => 53,  183 => 52,  179 => 48,  174 => 43,  171 => 42,  167 => 40,  164 => 39,  158 => 35,  154 => 34,  150 => 33,  146 => 32,  141 => 30,  138 => 29,  135 => 28,  131 => 37,  129 => 28,  125 => 27,  121 => 26,  115 => 23,  109 => 20,  102 => 16,  94 => 10,  91 => 9,  84 => 118,  81 => 117,  78 => 104,  76 => 103,  74 => 101,  71 => 100,  68 => 98,  66 => 96,  62 => 94,  56 => 93,  54 => 52,  49 => 49,  47 => 42,  44 => 41,  42 => 39,  39 => 38,  37 => 9,  28 => 2,);
    }
}
/* {#{% spaceless %} #}*/
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html lang="es-MX" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html lang="es-MX" class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html lang="es-MX" class="no-js lt-ie10 lt-ie9"> <![endif]-->*/
/* <!--[if IE 9]>         <html lang="es-MX" class="no-js lt-ie10"> <![endif]-->*/
/* 	<html class="no-js" lang="es">*/
/* 		<head>*/
/* 			{% block head %}*/
/* 				<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />*/
/* 				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/* 				<meta http-equiv='cache-control' content='no-cache' />*/
/* 				<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>*/
/* 				<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />*/
/* 				<meta name="title" content="">*/
/* 				<meta name="identifier-url" content="{{ _host }}" />*/
/* 				<meta name="keywords" content="" />*/
/* 				<meta name="author" content="" />*/
/* 				<meta name="language" content="ES" />*/
/* 				<meta name="copyright" content="© {{ _anio }} " />*/
/* 				<meta name="robots" content="index, follow">*/
/* 				<meta name="googlebot" content="robots.txt">*/
/* 				<meta itemprop="image" content="{{ _host }}img/logo/">*/
/* 				<meta itemprop="name" content=""/>*/
/* 				<meta itemprop="description" content=""/>*/
/* 				<meta itemprop="image" content="{{ _host }}img/logo/"/>*/
/* 				<meta property="business:contact_data:website" content="{{ _host }}"/>*/
/* 				{% block facebook_tag %}*/
/* 					<!-- sample fb meta -->*/
/* 					<meta property="og:title" content="{{ tag_name_default }}" />*/
/* 					<meta property="og:type" content="website" />*/
/* 					<meta property="og:image:type" content=" {{ tag_content_type }}" />*/
/* 					<meta property="og:image" content="{{ tag_image_default }}" />*/
/* 					<meta property="og:description" content="{{ tag_description }}"/>*/
/* 					<meta property="og:site_name" content="{{ tag_site_name }}" />*/
/* 				{% endblock %}*/
/* 			{% endblock %}*/
/* 			<title>*/
/* 				{% block title %}*/
/* 				{% endblock %}*/
/* 			</title>*/
/* 			{% block links %}*/
/*                 <link rel="stylesheet" href="{{ _host }}css/styles.css">*/
/* 				{#*/
/*                 <link rel="stylesheet" href="{{ _host }}css/styles.min.css">*/
/* 				<link rel="shortcut icon" href="{{ _host }}img/ico/favicon.ico">*/
/*                 #}*/
/* 			{% endblock %}*/
/* 			<!--[if lt IE 9]>*/
/* 				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/* 			<![endif]-->*/
/* 			{% block head_scripts %}*/
/*                 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*                 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*                 <!--[if lt IE 9]>*/
/*                     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*                     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*                 <![endif]-->*/
/*                 <script>*/
/* 				    var nav = navigator.appName;*/
/* */
/* 				    if(nav == "Microsoft Internet Explorer"){*/
/* 				    	// Detectamos si nos visitan desde IE*/
/* 					    if(nav == "Microsoft Internet Explorer"){*/
/* 					        // Convertimos en minusculas la cadena que devuelve userAgent*/
/* 					        var ie = navigator.userAgent.toLowerCase();*/
/* 					        // Extraemos de la cadena la version de IE*/
/* 					        var version = parseInt(ie.split('msie')[1]);*/
/* */
/* 					        // Dependiendo de la version mostramos un resultado*/
/* 					        switch(version){*/
/* 					            case 6:*/
/* 					                alert("Estas usando IE 6, es obsoleto. \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");*/
/* 					                break;*/
/* 					            case 7:*/
/* 					                alert("Estas usando IE 7, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");*/
/* 					                break;*/
/* 					            case 8:*/
/* 					                alert("Estas usando IE 8, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");*/
/* 					                break;*/
/* 					            /*case 9:*/
/* 					            	alert("Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v10 y v11 ");*/
/* 					                console.log("Estas usando IE 9, mas o menos compatible");*/
/* 					                break;*//* */
/* 					            default:*/
/* 					                console.log("Usas una version compatible");*/
/* 					                break;*/
/* 					        }*/
/* 					    }*/
/* 				    }*/
/* 				</script>*/
/*             {% endblock %}*/
/*             <script src="{{ _host }}lib/assets/modernizr{{ _pro }}.js"></script> {# Modernizr #}*/
/* 		</head>*/
/* 		<body id="index">*/
/* 			{% block section %}*/
/* 			{% endblock %}*/
/* 			<div class="projects-container">*/
/* 				{#{% block projects_container %}*/
/* 				{% endblock %}#}					*/
/* 				{% block content_current %}*/
/* 				{% endblock %}*/
/* 			</div> {# .project-container #}*/
/* 	        {% block body_scripts %}*/
/* 	            {# CORE LIBS #}*/
/* 	            <script src="{{ _host }}lib/min/core.lib.min.js"></script>*/
/* 	            {# GOOGLE API #}*/
/* 	            {#*/
/* 	            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCqo-F2Tn MAABZvfV5yTQLlWvUCJlJViU&amp;sensor=false"></script>*/
/* 	            <script src="{{ _host }}js/min/core.min.js"></script>*/
/* 	            #}*/
/* 	            <script src="{{ _host }}js/main.js"></script>*/
/* 				<script src="{{ _host }}js/method.js"></script>*/
/* 				<script src="{{ _host }}js/model.js"></script>*/
/* 				<script src="{{ _host }}js/objects.js"></script>*/
/* 	            <script src="{{ _host }}js/required.js"></script>*/
/* 	        {% endblock %}	        */
/* 	        <script>{% block load_scripts %}{% endblock %}</script>*/
/* 		</body>*/
/* 	</html>*/
