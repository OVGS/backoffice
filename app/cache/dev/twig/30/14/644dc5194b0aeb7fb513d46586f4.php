<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_3014644dc5194b0aeb7fb513d46586f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => $this->getContext($context, "name"))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  127 => 28,  102 => 17,  76 => 17,  53 => 11,  242 => 76,  238 => 75,  234 => 74,  230 => 73,  226 => 72,  222 => 71,  218 => 70,  210 => 68,  206 => 67,  202 => 66,  198 => 65,  194 => 64,  190 => 63,  186 => 62,  178 => 60,  174 => 59,  170 => 58,  150 => 53,  146 => 52,  134 => 49,  129 => 48,  110 => 22,  77 => 44,  23 => 1,  90 => 32,  81 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  155 => 58,  135 => 47,  126 => 47,  114 => 22,  84 => 29,  70 => 20,  67 => 15,  61 => 12,  94 => 34,  89 => 20,  85 => 79,  75 => 23,  68 => 14,  56 => 11,  87 => 20,  21 => 2,  26 => 11,  93 => 28,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 57,  163 => 70,  158 => 55,  156 => 66,  151 => 63,  142 => 51,  138 => 50,  136 => 56,  121 => 44,  117 => 19,  105 => 18,  91 => 31,  62 => 23,  49 => 10,  24 => 3,  25 => 3,  19 => 1,  79 => 45,  72 => 35,  69 => 39,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 77,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 19,  98 => 18,  96 => 31,  83 => 47,  74 => 36,  66 => 15,  55 => 31,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 61,  176 => 64,  173 => 74,  168 => 72,  164 => 59,  162 => 56,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 20,  103 => 37,  99 => 30,  95 => 34,  92 => 7,  86 => 28,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 13,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 3,);
    }
}
