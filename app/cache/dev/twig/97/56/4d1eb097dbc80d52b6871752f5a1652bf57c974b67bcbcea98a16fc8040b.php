<?php

/* SdzBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_97564d1eb097dbc80d52b6871752f5a1652bf57c974b67bcbcea98a16fc8040b extends Twig_Template
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
    <h1>Lecture d'un article</h1>
    <p>
      ";
        // line 11
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </p>
    <p>
      Ici nous pourrons lire l'article ayant comme id : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "<br />
      Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
    </p>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 16,  43 => 14,  34 => 12,  29 => 11,  19 => 2,);
    }
}
