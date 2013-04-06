<?php

/* modal.html.twig */
class __TwigTemplate_ac660221c6ca7ba3dec510634113ec0e extends Twig_Template
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
        echo "<div class=\"modal hide fade\" id=\"myModal\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Settings</h3>
    </div>
    <div class=\"modal-body\">
        <p>Here settings can be configured...</p>
    </div>
    <div class=\"modal-footer\">
        <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
        <a href=\"#\" class=\"btn btn-primary\">Save changes</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
