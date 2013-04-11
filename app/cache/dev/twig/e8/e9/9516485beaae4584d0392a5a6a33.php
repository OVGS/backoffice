<?php

/* OVGSSecuredBundle:Default:login.html.twig */
class __TwigTemplate_e8e99516485beaae4584d0392a5a6a33 extends Twig_Template
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

        <!-- start: Meta -->
        <meta charset=\"utf-8\">
        <title>ACME Dashboard - Perfect Bootstrap Admin Template</title>
        <meta name=\"description\" content=\"ACME Dashboard Bootstrap Admin Template.\">
        <meta name=\"author\" content=\"Łukasz Holeczek\">
        <meta name=\"keyword\" content=\"ACME, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id=\"bootstrap-style\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style-responsive\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                <link id=\"ie-style\" href=\"css/ie.css\" rel=\"stylesheet\">
        <![endif]-->

        <!--[if IE 9]>
                <link id=\"ie9style\" href=\"css/ie9.css\" rel=\"stylesheet\">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel=\"shortcut icon\" href=\"img/favicon.ico\">
        <!-- end: Favicon -->

        <style type=\"text/css\">
                body { background: url(";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/bg-login.jpg"), "html", null, true);
        echo ") !important; }
            </style>



        </head>

        <body>
            <div class=\"container-fluid\">
                <div class=\"row-fluid\">

                    <div class=\"row-fluid\">
                        <div class=\"login-box\">
                            <div class=\"icons\">
                                <!--a href=\"index.html\"><i class=\"halflings-icon home\"></i></a>
                                <a href=\"#\"><i class=\"halflings-icon cog\"></i></a-->
                            </div>
                            <h2>Ingresar en tu cuenta</h2>
                            <form class=\"form-horizontal\" action=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("secured_login_check"), "html", null, true);
        echo "\" method=\"post\">
                                <fieldset>

                                    <div class=\"input-prepend\" title=\"Username\">
                                        <span class=\"add-on\"><i class=\"halflings-icon user\"></i></span>
                                        <input class=\"input-large span10\" name=\"_username\" id=\"username\" type=\"text\" placeholder=\"type username\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
                                    </div>
                                    <div class=\"clearfix\"></div>

                                    <div class=\"input-prepend\" title=\"Password\">
                                        <span class=\"add-on\"><i class=\"halflings-icon lock\"></i></span>
                                        <input class=\"input-large span10\" name=\"_password\" id=\"password\" type=\"password\" placeholder=\"type password\"/>
                                    </div>
                                    <div class=\"clearfix\"></div>

                                    <label class=\"remember\" for=\"remember\"><input type=\"checkbox\" id=\"remember\" />Remember me</label>

                                    <div class=\"button-login\">\t
                                        <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                                    </div>
                                    <div class=\"clearfix\"></div>
                            </form>
                            <hr>
                            <!--h3>Forgot Password?</h3>
                            <p>
                                No problem, <a href=\"#\">click here</a> to get a new password.
                            </p-->
                            ";
        // line 87
        if ($this->getContext($context, "error")) {
            // line 88
            echo "                            <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 90
        echo "                        </div><!--/span-->
                    </div><!--/row-->

                </div><!--/fluid-row-->

            </div><!--/.fluid-container-->

            <!-- start: JavaScript-->

            <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/counter.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/retina.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
            <!-- end: JavaScript-->

        </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "OVGSSecuredBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 152,  282 => 150,  277 => 148,  272 => 146,  267 => 144,  262 => 142,  257 => 140,  252 => 138,  247 => 136,  242 => 134,  237 => 132,  232 => 130,  227 => 128,  222 => 126,  217 => 124,  212 => 122,  207 => 120,  203 => 119,  199 => 118,  195 => 117,  191 => 116,  186 => 114,  181 => 112,  176 => 110,  171 => 108,  166 => 106,  161 => 104,  156 => 102,  151 => 100,  147 => 99,  136 => 90,  130 => 88,  128 => 87,  103 => 65,  95 => 60,  74 => 42,  50 => 21,  46 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }
}
