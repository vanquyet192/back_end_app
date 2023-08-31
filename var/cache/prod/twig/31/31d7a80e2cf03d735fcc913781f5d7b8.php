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

/* @ApiPlatform/GraphQlPlayground/index.html.twig */
class __TwigTemplate_25b63df8c7810d0105cc269bc1ba3b0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'title' => [$this, 'block_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'body_stylesheets' => [$this, 'block_body_stylesheets'],
            'logo' => [$this, 'block_logo'],
            'loading' => [$this, 'block_loading'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head_metas', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 22
        echo "</head>

<body>
";
        // line 25
        $this->displayBlock('body_stylesheets', $context, $blocks);
        // line 28
        echo "
<div id=\"loading-wrapper\">
    ";
        // line 30
        $this->displayBlock('logo', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('loading', $context, $blocks);
        // line 66
        echo "</div>

<div id=\"graphql-playground\" />

";
        // line 70
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 73
        echo "</body>
</html>
";
    }

    // line 4
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui\">
    ";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        <title>";
        if (($context["title"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " - ";
        }
        echo "API Platform</title>
    ";
    }

    // line 13
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/graphql-playground/index.css", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\">
    ";
    }

    // line 17
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/graphql-playground/middleware.js", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\"></script>
        ";
        // line 20
        echo "        <script id=\"graphql-playground-data\" type=\"application/json\">";
        echo json_encode(($context["graphql_playground_data"] ?? null), 65);
        echo "</script>
    ";
    }

    // line 25
    public function block_body_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/graphql-playground-style.css", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\">
";
    }

    // line 30
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "        <svg class=\"logo\" viewBox=\"0 0 128 128\">
        <title>GraphQL Playground Logo</title>
        <defs>
            <linearGradient id=\"linearGradient-1\" x1=\"4.86%\" x2=\"96.21%\" y1=\"0%\" y2=\"99.66%\">
                <stop stop-color=\"#E00082\" stop-opacity=\".8\" offset=\"0%\"></stop>
                <stop stop-color=\"#E00082\" offset=\"100%\"></stop>
            </linearGradient>
        </defs>
        <g>
            <rect id=\"Gradient\" width=\"127.96\" height=\"127.96\" y=\"1\" fill=\"url(#linearGradient-1)\" rx=\"4\"></rect>
            <path id=\"Border\" fill=\"#E00082\" fill-rule=\"nonzero\" d=\"M4.7 2.84c-1.58 0-2.86 1.28-2.86 2.85v116.57c0 1.57 1.28 2.84 2.85 2.84h116.57c1.57 0 2.84-1.26 2.84-2.83V5.67c0-1.55-1.26-2.83-2.83-2.83H4.67zM4.7 0h116.58c3.14 0 5.68 2.55 5.68 5.7v116.58c0 3.14-2.54 5.68-5.68 5.68H4.68c-3.13 0-5.68-2.54-5.68-5.68V5.68C-1 2.56 1.55 0 4.7 0z\"></path>
            <path class=\"bglIGM transform-translate-100x100\" x=\"64\" y=\"28\" fill=\"#fff\" d=\"M64 36c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8\"></path>
            <path class=\"ksxRII transform-translate-100x100\" x=\"95.98500061035156\" y=\"46.510000228881836\" fill=\"#fff\" d=\"M89.04 50.52c-2.2-3.84-.9-8.73 2.94-10.96 3.83-2.2 8.72-.9 10.95 2.94 2.2 3.84.9 8.73-2.94 10.96-3.85 2.2-8.76.9-10.97-2.94\"></path>
            <path class=\"cWrBmb transform-translate-100x100\" x=\"95.97162628173828\" y=\"83.4900016784668\" fill=\"#fff\" d=\"M102.9 87.5c-2.2 3.84-7.1 5.15-10.94 2.94-3.84-2.2-5.14-7.12-2.94-10.96 2.2-3.84 7.12-5.15 10.95-2.94 3.86 2.23 5.16 7.12 2.94 10.96\"></path>
            <path class=\"Wnusb transform-translate-100x100\" x=\"64\" y=\"101.97999572753906\" fill=\"#fff\" d=\"M64 110c-4.43 0-8-3.6-8-8.02 0-4.44 3.57-8.02 8-8.02s8 3.58 8 8.02c0 4.4-3.57 8.02-8 8.02\" ></path>
            <path class=\"bfPqf transform-translate-100x100\" x=\"32.03982162475586\" y=\"83.4900016784668\" fill=\"#fff\" d=\"M25.1 87.5c-2.2-3.84-.9-8.73 2.93-10.96 3.83-2.2 8.72-.9 10.95 2.94 2.2 3.84.9 8.73-2.94 10.96-3.85 2.2-8.74.9-10.95-2.94\"></path>
            <path class=\"edRCTN transform-translate-100x100\" x=\"32.033552169799805\" y=\"46.510000228881836\" fill=\"#fff\" d=\"M38.96 50.52c-2.2 3.84-7.12 5.15-10.95 2.94-3.82-2.2-5.12-7.12-2.92-10.96 2.2-3.84 7.12-5.15 10.95-2.94 3.83 2.23 5.14 7.12 2.94 10.96\"></path>
            <path class=\"iEGVWn\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M63.55 27.5l32.9 19-32.9-19z\"></path>
            <path class=\"bsocdx\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M96 46v38-38z\"></path>
            <path class=\"jAZXmP\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M96.45 84.5l-32.9 19 32.9-19z\"></path>
            <path class=\"hSeArx\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M64.45 103.5l-32.9-19 32.9 19z\"></path>
            <path class=\"bVgqGk\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M32 84V46v38z\"></path>
            <path class=\"hEFqBt\" stroke=\"#fff\" stroke-width=\"4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M31.55 46.5l32.9-19-32.9 19z\"></path>
            <path class=\"dzEKCM\" id=\"Triangle-Bottom\" stroke=\"#fff\" stroke-width=\"4\" d=\"M30 84h70\" stroke-linecap=\"round\"></path>
            <path class=\"DYnPx\" id=\"Triangle-Left\" stroke=\"#fff\" stroke-width=\"4\" d=\"M65 26L30 87\" stroke-linecap=\"round\"></path>
            <path class=\"hjPEAQ\" id=\"Triangle-Right\" stroke=\"#fff\" stroke-width=\"4\" d=\"M98 87L63 26\" stroke-linecap=\"round\"></path>
        </g>
    </svg>
    ";
    }

    // line 61
    public function block_loading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    <div class=\"text\">Loading
        <span class=\"dGfHfc\">API Platform GraphQL Playground</span>
    </div>
    ";
    }

    // line 70
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/init-graphql-playground.js", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ApiPlatform/GraphQlPlayground/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  212 => 71,  208 => 70,  201 => 62,  197 => 61,  165 => 31,  161 => 30,  154 => 26,  150 => 25,  143 => 20,  138 => 18,  134 => 17,  127 => 14,  123 => 13,  113 => 10,  109 => 9,  103 => 5,  99 => 4,  93 => 73,  91 => 70,  85 => 66,  83 => 61,  80 => 60,  78 => 30,  74 => 28,  72 => 25,  67 => 22,  65 => 17,  62 => 16,  60 => 13,  57 => 12,  55 => 9,  52 => 8,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ApiPlatform/GraphQlPlayground/index.html.twig", "/Users/daoquyet/backend_android/vendor/api-platform/core/src/Symfony/Bundle/Resources/views/GraphQlPlayground/index.html.twig");
    }
}
