<?php

/* SdzBlogBundle:Blog:index.html.twig */
class __TwigTemplate_0b3ff1fbba15c8d82a440f8e8d3e84521e12748b5a6ca4c6c187bae744238173 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec le Site du Zéro !</title>
  </head>
  <body>
    <h1>Hello World !</h1>
    <p>
    <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "</h2>
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "prenom"), "html", null, true);
        echo "</h2>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  29 => 10,  19 => 2,);
    }
}
