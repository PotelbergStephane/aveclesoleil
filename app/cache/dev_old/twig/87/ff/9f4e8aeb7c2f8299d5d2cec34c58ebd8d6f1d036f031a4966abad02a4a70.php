<?php

/* JSVGeneralBundle:Rubriques:menu.html.twig */
class __TwigTemplate_87ff9f4e8aeb7c2f8299d5d2cec34c58ebd8d6f1d036f031a4966abad02a4a70 extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menus"]) {
            // line 3
            echo "
        <li><a href=\"#\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")), "nomFR"), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "JSVGeneralBundle:Rubriques:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
