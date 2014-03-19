<?php

/* SdzBlogBundle:Default:index.html.twig */
class __TwigTemplate_cd2d964471bf11736c89718afe190764a832bf8b084af7f130eb6a8142be48a2 extends Twig_Template
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
        echo "<html>
  <body>
    Hello ";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  19 => 2,);
    }
}
