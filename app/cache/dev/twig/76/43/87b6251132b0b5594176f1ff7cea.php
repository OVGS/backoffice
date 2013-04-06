<?php

/* ::layout.html.twig */
class __TwigTemplate_764387b6251132b0b5594176f1ff7cea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<!-- start: Header -->
";
        // line 6
        $this->env->loadTemplate("header.html.twig")->display($context);
        // line 7
        echo "<!-- start: Header -->

<div class=\"container-fluid\">
    
    <!--fluid-row-->
    <div class=\"row-fluid\">

        <!-- Start: Main Menu -->
        ";
        // line 16
        echo "        <!-- End: Main Menu -->

        <noscript>
        <div class=\"alert alert-block span11\">
            <h4 class=\"alert-heading\">Warning!</h4>
            <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
        </div>
        </noscript>

        <!-- Start: Main content -->
        <div id=\"content\">
            ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        echo "           
        </div>
        <!-- End: Main content -->
        
    </div>
    <!--/fluid-row-->
    
    <!-- Start: Modal -->
    ";
        // line 35
        $this->env->loadTemplate("modal.html.twig")->display($context);
        // line 36
        echo "    <!-- End: Modal -->
    
    <div class=\"clearfix\"></div>
    
    <!-- Start: Footer -->
    ";
        // line 41
        $this->env->loadTemplate("footer.html.twig")->display($context);
        // line 42
        echo "    <!-- End: Footer -->
    
</div>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        echo "  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  83 => 42,  81 => 41,  74 => 36,  72 => 35,  61 => 27,  48 => 16,  38 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
