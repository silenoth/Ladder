<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  ...
</nav>
{% embed header %}
{% block titulo %}
{% for noticia in ls.news %}
<title>{{noticia.titulo}}</title>
{% endfor %}
{% endblock %}
{% endembed %}
{{ls.url}}
{% for noticia in ls.news %}
    {{noticia.titulo}}<br />
    {{noticia.preview}}<br />
    {{noticia.imagen}}<br />
    {{noticia.contenido}}<br />
    {{noticia.autor}}<br />
    {{noticia.fecha}}
{% endfor %}
{% include footer %}