<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_d307079e8bc142200d747eeb2f0f5cdc997380ef0c78b2ebc45b457ad2d861ee extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            * {
                font-family: 'Exo 2', 'Century Gothic', 'Arial', sans-serif;
            }

            html, body {
                margin: 0;
                background-color: #202020;
            }

            nav {
                width: 100%;
                display: flex;
                justify-content: space-evenly;

                margin-top: 10px;
            }

            nav a {
                text-decoration: none;
                color: #ffffff;
            }

            h1, a, p {
                color: #ffffff;
            }

            .content {
                margin-top: 50px;
                display:flex;
                flex-direction: column;
                align-items: center;
            }

            .post {

                width: 500px;

                margin-bottom: 15px;
                padding-left: 40px;
                padding: 5px;
                padding-bottom: 15px;

                border-radius: 10px;
                background-color: #606060;

                color: white;
            }

            .post--parent{

                width: 500px;

                margin-bottom: 15px;
                padding-left: 20px;
                padding: 5px;
                padding-bottom: 15px;

                border-radius: 10px;
                background-color: #303030;

                color: white;
            }

            .post--child {

                width: 500px;

                margin-bottom: 15px;
                padding-left: 60px;
                padding: 5px;
                padding-bottom: 15px;

                border-radius: 10px;
                background-color: #303030;

                color: white;
            }

            .post--unapproved {
                background-color: #b0413e;
            }

            .post__userbox {
                display: flex;
                align-items: center;
            }

            .post__avatar {
                width: 50px;
                height: 50px;

                border-radius: 50%;
            }

            .post__username {
                font-weight: bold;
                margin-left: 10px;
            }

            .post__content {
                margin-left: 60px;
            }

            .post__content--category {
                display:flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .post__content--category a {
                text-decoration: none;
                color: white;
                font-size: 20pt;
            }

            .post__content a {
                text-decoration: none;
                color: white;
                margin: 0;
            }
            .post__content--category small {
                margin: 0;
            }

            label {
                color: #FFFFFF;
            }

            #comment {
                display: flex;
            }

            #comment_content {
                width: 500px;
                border: none;
                border-radius: 10px;
                padding: 5px;
                resize: none;
            }

            .btn {
                border: none;
                background: none;
                cursor: pointer;
                color: #ffffff;
                font-size: 15pt;
            }

            .replies {
                color: #ffffff;
                font-size: 15pt;
            }

            .norepliesfound {
                color: #ffffff;
            }

            .post__content .approvelink {
                text-decoration: underline;
            }

            .pagination {
                margin-bottom: 20px;
            }

            .current {
                color: #ffffff;
            }

            .table {
                color: #ffffff;
            }
        </style>
    </head>
    <body>
        <nav>
            <a href=\"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">Categories</a>
            ";
        // line 185
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 186
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Users</a>
                <a href=\"";
            // line 187
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index");
            echo "\">Posts</a>
                <a href=\"";
            // line 188
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_unapproved");
            echo "\">Unapproved Users</a>
                <a href=\"";
            // line 189
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_unapproved");
            echo "\">Unapproved Posts</a>
            ";
        }
        // line 191
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 191)) {
            // line 192
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 192), "id", [], "any", false, false, false, 192)]), "html", null, true);
            echo "\">Edit profile</a>
                <a href=\"";
            // line 193
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Log out</a>
            ";
        } else {
            // line 195
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Log in</a>
                <a href=\"";
            // line 196
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">Register</a>
            ";
        }
        // line 198
        echo "        </nav>
        <div class=\"content\">
            ";
        // line 200
        $this->displayBlock('body', $context, $blocks);
        // line 201
        echo "        </div>
        ";
        // line 202
        $this->displayBlock('javascripts', $context, $blocks);
        // line 203
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 200
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 202
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  305 => 202,  299 => 200,  292 => 5,  286 => 203,  284 => 202,  281 => 201,  279 => 200,  275 => 198,  270 => 196,  265 => 195,  260 => 193,  255 => 192,  252 => 191,  247 => 189,  243 => 188,  239 => 187,  234 => 186,  232 => 185,  228 => 184,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\htdocs\\kolibri-prod\\templates\\base.html.twig");
    }
}
