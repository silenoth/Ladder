{% include header %}
{% for noticia in ls.news %}
    {{noticia.titulo}}<br />
    {{noticia.preview}}
{% endfor %}
{% include footer %}