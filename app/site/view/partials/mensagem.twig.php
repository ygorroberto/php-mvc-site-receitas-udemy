{%extends "partials/body.twig.php"%}

{%block title%}
{{title}} - My Receitas
{%endblock%}

{%block body%} 
<h1>{{title}}</h1>
<div>
    {{message}}

    <hr>

    <a href="{{BASE}}{{uri}}" class="btn btn-primary">Voltar</a>
</div>
{%endblock%}