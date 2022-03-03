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

/* cart/index.html.twig */
class __TwigTemplate_6ec25156f6f4ed1cec9cf8f80d1710aae55a4c13709cc6fce174bbbd88cf79e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panier
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t<link href=\"css/cart.css\" rel=\"stylesheet\"/>
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\"><link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        $context["total"] = 0;
        // line 11
        echo "\t<div
\t\tclass=\"container padding-bottom-3x mb-1\">
\t\t<!-- Shopping Cart-->
\t\t<div class=\"table-responsive shopping-cart\">
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Product Name</th>
\t\t\t\t\t\t<th class=\"text-center\">Quantity</th>
\t\t\t\t\t\t<th class=\"text-center\">Subtotal</th>
\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-outline-danger\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_my_cart");
        echo "\">Clear Cart</a>
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t\t<a class=\"product-thumb\" href=\"#\"><img src=\"images";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "car", [], "any", false, false, false, 31), "image", [], "any", false, false, false, 31)), "html", null, true);
            echo "\" alt=\"Product\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t<div class=\"count-input\">
\t\t\t\t\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
            // line 39
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 39, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "car", [], "any", false, false, false, 39), "prix", [], "any", false, false, false, 39)));
            // line 40
            echo "\t\t\t\t\t\t\t<td class=\"text-center text-lg text-medium\">";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 40) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "car", [], "any", false, false, false, 40), "prix", [], "any", false, false, false, 40)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t<a class=\"remove-from-cart\" href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Remove item\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"shopping-cart-footer\">
\t\t\t<div class=\"column text-lg\">Total:
\t\t\t\t<span class=\"text-medium\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t€</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"shopping-cart-footer\">
\t\t\t<div class=\"column\">
\t\t\t\t<a class=\"btn btn-outline-secondary\" href=\"#\">
\t\t\t\t\t<i class=\"icon-arrow-left\"></i>&nbsp;Back to Shopping</a>
\t\t\t</div>
\t\t\t<div class=\"column\">
\t\t\t\t<a class=\"btn btn-primary\" href=\"#\" data-toast=\"\" data-toast-type=\"success\" data-toast-position=\"topRight\" data-toast-icon=\"icon-circle-check\" data-toast-title=\"Your cart\" data-toast-message=\"is updated successfully!\">Update Cart</a>
\t\t\t\t<a class=\"btn btn-success\" href=\"#\">Checkout</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 54,  177 => 49,  161 => 40,  159 => 39,  153 => 36,  145 => 31,  140 => 28,  136 => 27,  128 => 22,  115 => 11,  112 => 10,  102 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier
{% endblock %}
{% block stylesheets %}
\t<link href=\"css/cart.css\" rel=\"stylesheet\"/>
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\"><link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
{% endblock %}
{% block body %}
\t{% set total = 0 %}
\t<div
\t\tclass=\"container padding-bottom-3x mb-1\">
\t\t<!-- Shopping Cart-->
\t\t<div class=\"table-responsive shopping-cart\">
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Product Name</th>
\t\t\t\t\t\t<th class=\"text-center\">Quantity</th>
\t\t\t\t\t\t<th class=\"text-center\">Subtotal</th>
\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-outline-danger\" href=\"{{ path('remove_my_cart')}}\">Clear Cart</a>
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for item in panier %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t\t<a class=\"product-thumb\" href=\"#\"><img src=\"images{{ asset(item.car.image)}}\" alt=\"Product\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t<div class=\"count-input\">
\t\t\t\t\t\t\t\t\t{{item.quantity}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% set total = total + item.quantity * item.car.prix %}
\t\t\t\t\t\t\t<td class=\"text-center text-lg text-medium\">{{item.quantity * item.car.prix}}
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t<a class=\"remove-from-cart\" href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Remove item\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"shopping-cart-footer\">
\t\t\t<div class=\"column text-lg\">Total:
\t\t\t\t<span class=\"text-medium\">{{total}}
\t\t\t\t\t€</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"shopping-cart-footer\">
\t\t\t<div class=\"column\">
\t\t\t\t<a class=\"btn btn-outline-secondary\" href=\"#\">
\t\t\t\t\t<i class=\"icon-arrow-left\"></i>&nbsp;Back to Shopping</a>
\t\t\t</div>
\t\t\t<div class=\"column\">
\t\t\t\t<a class=\"btn btn-primary\" href=\"#\" data-toast=\"\" data-toast-type=\"success\" data-toast-position=\"topRight\" data-toast-icon=\"icon-circle-check\" data-toast-title=\"Your cart\" data-toast-message=\"is updated successfully!\">Update Cart</a>
\t\t\t\t<a class=\"btn btn-success\" href=\"#\">Checkout</a>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "cart/index.html.twig", "/home/catrais/Bureau/projet_symfony/symfony_projet/templates/cart/index.html.twig");
    }
}
