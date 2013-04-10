<?php

/* header.html.twig */
class __TwigTemplate_9eca936b744e3872ef6923b5f52600c8 extends Twig_Template
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
        echo "<div class=\"navbar\">
    <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"index.html\"><span>BackOffice</span></a>

            <!-- start: Header Menu -->
            ";
        // line 12
        $this->env->loadTemplate("menu-header.html.twig")->display($context);
        echo "           
            <!-- end: Header Menu -->

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  246 => 77,  242 => 76,  238 => 75,  234 => 74,  230 => 73,  226 => 72,  222 => 71,  218 => 70,  214 => 69,  210 => 68,  206 => 67,  202 => 66,  198 => 65,  194 => 64,  190 => 63,  186 => 62,  182 => 61,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  162 => 56,  158 => 55,  154 => 54,  150 => 53,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  129 => 48,  126 => 47,  121 => 44,  114 => 22,  110 => 21,  106 => 20,  101 => 19,  98 => 18,  92 => 7,  85 => 79,  79 => 45,  77 => 44,  69 => 39,  55 => 31,  47 => 25,  45 => 18,  31 => 7,  23 => 1,  90 => 27,  83 => 47,  81 => 41,  74 => 36,  72 => 35,  61 => 27,  48 => 16,  36 => 6,  32 => 12,  62 => 35,  54 => 13,  49 => 11,  46 => 10,  40 => 8,  38 => 7,  35 => 5,  29 => 3,);
    }
}
