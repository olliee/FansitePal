<?php

/* home/index.php */
class __TwigTemplate_49d65c0e6fde0a8f48b0f69abfcf9b001111ee7a9cc68ddb836018e43442c900 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Simple MVC</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["ASSET_ROOT"]) ? $context["ASSET_ROOT"] : null), "html", null, true);
        echo "/css/global.css\">
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"content\">
            <header class=\"main\">
                <h1>Welcome to the home/index view</h1>
            </header>

            <p>Below is the result of the parameters passed into the URL. You can pass in the controller and model name too. Try it...</p>

            <code>/home/index/[name]/[mood]</code>

            <p>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " is ";
        echo twig_escape_filter($this->env, (isset($context["mood"]) ? $context["mood"] : null), "html", null, true);
        echo "</p><br>
            <p>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " is ";
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : null), "html", null, true);
        echo " years old</p>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 22,  44 => 21,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>Simple MVC</title>*/
/*         <link rel="stylesheet" href="{{ ASSET_ROOT }}/css/global.css">*/
/*         <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/*     <body>*/
/*         <div class="content">*/
/*             <header class="main">*/
/*                 <h1>Welcome to the home/index view</h1>*/
/*             </header>*/
/* */
/*             <p>Below is the result of the parameters passed into the URL. You can pass in the controller and model name too. Try it...</p>*/
/* */
/*             <code>/home/index/[name]/[mood]</code>*/
/* */
/*             <p>{{ name }} is {{ mood }}</p><br>*/
/*             <p>{{ name }} is {{ age }} years old</p>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
