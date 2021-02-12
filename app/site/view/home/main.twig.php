{%extends "partials/body.twig.php"%}

{%block title%}
My Receitas
{%endblock%}

{%block body%} 
<h1>MY RECEITAS</h1>

<hr>
{%for receitas in listaReceitas%}
<div class="row">
    {%for receita in receitas%}
    <div class="col-md-3">
        <div class="card border-info mb-3">
            <div class="card-header">{{receita.titulo}}</div>
            <div class="card-body">
                <h4 class="card-title"></h4>
                <p class="card-text">{{receita.linhaFina}}</p>
                <a href="{{BASE}}receita/ver/{{receita.slug}}">
                   <img src="{{receita.thumb}}" alt="{{receita.titulo}}" class="w-100 img-thumb">
                </a>
                <a href="{{BASE}}receita/ver/{{receita.slug}}" class="btn btn-primary w-100 mt-2">Acessar</a>
            </div>
        </div>
    </div>
    {%endfor%}
</div>
{%endfor%}

{%endblock%}