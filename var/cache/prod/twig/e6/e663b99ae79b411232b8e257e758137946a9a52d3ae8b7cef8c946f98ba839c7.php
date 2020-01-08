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

/* category/posts.html.twig */
class __TwigTemplate_6b369837fa0041a85d320df9feb18dbc8ae68d33dbfc6b8696e2f17612f48425 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "category/posts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Post index";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Post index (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "getTotalItemCount", [], "any", false, false, false, 6), "html", null, true);
        echo ")</h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "approved", [], "any", false, false, false, 8) == 1)) {
                // line 9
                echo "            <div class=\"post--child\">
                <div class=\"post__userbox\">
                    <img class=\"post__avatar\" src=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 11), "avatar", [], "any", false, false, false, 11), "html", null, true);
                echo "\">
                    <a class=\"post__username\">";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 12), "html", null, true);
                echo "</a>
                </div>
                <div class=\"post__content\">
                    <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\">
                        ";
                // line 16
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 16), 0, 100), "html", null, true);
                if ( !(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 16), 0, 100) === twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 16))) {
                    echo "...";
                }
                // line 17
                echo "                    </a>
                </div>
            </div>
        ";
            } else {
                // line 21
                echo "            ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 22
                    echo "                <div class=\"post--child post--unapproved\">
                    <div class=\"post__userbox\">
                        <img class=\"post__avatar\" src=\"";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 24), "avatar", [], "any", false, false, false, 24), "html", null, true);
                    echo "\">
                        <a class=\"post__username\">";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 25), "html", null, true);
                    echo " (unapproved post)</a><br />
                        &nbsp;<a class=\"approvelink\" href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                    echo "\">edit</a>
                    </div>
                    <div class=\"post__content\">
                        <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                    echo "\">
                            ";
                    // line 30
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 30), 0, 100), "html", null, true);
                    if ( !(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 30), 0, 100) === twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 30))) {
                        echo "...";
                    }
                    // line 31
                    echo "                        </a>
                    </div>
                </div>
            ";
                }
                // line 35
                echo "        ";
            }
            // line 36
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "        <p class=\"norepliesfound\">No posts here... yet.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["posts"] ?? null));
        echo "
    ";
        // line 40
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VERIFIED") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 41
            echo "        <p class=\"replies\">Make a new post in this category:</p>
        ";
            // line 42
            echo twig_include($this->env, $context, "post/_form.html.twig");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "category/posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  158 => 41,  156 => 40,  151 => 39,  144 => 37,  139 => 36,  136 => 35,  130 => 31,  125 => 30,  121 => 29,  115 => 26,  111 => 25,  107 => 24,  103 => 22,  100 => 21,  94 => 17,  89 => 16,  85 => 15,  79 => 12,  75 => 11,  71 => 9,  68 => 8,  63 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "category/posts.html.twig", "C:\\xampp\\htdocs\\kolibri-prod\\templates\\category\\posts.html.twig");
    }
}
