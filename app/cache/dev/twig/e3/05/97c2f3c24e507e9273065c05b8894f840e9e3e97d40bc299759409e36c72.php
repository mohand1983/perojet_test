<?php

/* SdzBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_e30597c2f3c24e507e9273065c05b8894f840e9e3e97d40bc299759409e36c72 extends Twig_Template
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
        echo "<form id=\"ajouterTache\" class=\"form-horizontal\">

\t<div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"nomTache\">Nom tache</label>
\t\t<div class=\"controls\">
\t\t\t<input type=\"text\" id=\"nomTache\" name=\"nomTache\" placeholder=\"nom de la taches ....\">
\t\t</div>
    </div>
    <div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"descripTache\">Description tache</label>
\t\t<div class=\"controls\">
\t\t\t<input type=\"text\" id=\"descripTache\" name=\"descripTache\" placeholder=\"Description ....\">
\t\t</div>
    </div>
\t<div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"idPrestation\">Id prestation</label>
\t\t<div class=\"controls\">
\t\t\t<select id=\"idPrestation\" name=\"idPrestation\" placeholder=\"id prestation ...\">
\t\t\t\t<option>id prestation</option>
\t\t\t\t<?php \t
\t\t\t\t\t\$query_cmd =\"SELECT * FROM prestation\";
\t\t\t\t\t\$reponse = (\$bdd->query(\$query_cmd));
\t\t\t\t\twhile(\$donnees \t= \$reponse->fetch())
\t\t\t\t\t{
\t\t\t\t\t\t\$idPrestation=\$donnees['id'];
\t\t\t\t\t\techo \"<option value=\".\$idPrestation.\">\".\$idPrestation.\"</option>\";
\t\t\t\t\t}\t
\t\t\t\t?>
\t\t\t</select>
\t\t</div>
    </div>\t
    <div class=\"control-group\">
\t\t<div class=\"controls\">
\t\t\t<button id=\"ajouterTache_enrg\"type=\"submit\" class=\"btn\">Ajouter</button>
\t\t</div>
    </div>
</form>\t

<script src=\"js/script.js\"></script>


";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:formulaire.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
