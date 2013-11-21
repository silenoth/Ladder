{% embed header %}
{% block titulo %}
<title>Inicio - Noticias</title>
{% endblock %}
{% endembed %}
{# INICIO NAVBAR USUARIOS #}
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container" style="max-width:800px;">
        <a class="navbar-brand" href="#">Ladder Script</a>
        <p class="navbar-text">Bienvenido invitad@</p>
        <ul class="nav navbar-nav navbar-right">
            {# INICIO LOGIN USUARIOS #}
            <li class="dropdown" id="menu1">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                    Iniciar sesión
                    <b class="caret"></b>
                </a>
             <div class="dropdown-menu">
                <form style="margin: 0px" accept-charset="UTF-8" action="/sessions" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=" /></div>
                    <fieldset class='textbox' style="padding:10px">
                        <input class="form-control input-sm" style="margin-bottom:10px" type="text" placeholder="Username" />
                        <input class="form-control input-sm" style="margin-bottom:10px" type="password" placeholder="Passsword" />
                        <input class="btn btn-primary btn-small btn-block" name="commit" type="submit" value="Conectar" />
                    </fieldset>
                </form>
             </div>
           </li>
           {# ***FIN LOGIN USUARIOS** #}
            <li><a href="register.php">Registrarse</a></li>
        </ul>
    </div>
</nav>
{# FIN NAVBAR USUARIOS #}
{# INICIO CONTENEDOR PRINCIPAL #}
<div class="container" style="max-width:800px;">
    {# INICIO SLIDER CAROUSEL #}
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            {# INICIO AGREGANDO ITEMS #}
            <div class="item active">
                <img src="http://g3ar.co.za/wp-content/uploads/2013/09/Hearthstone-feature.jpg" />
                <div class="carousel-caption">
                    <h3>Hola</h3>
                    <p>Este es un saludillo test</p>
              </div>
            </div>
            {# FIN AGREGANDO ITEMS #} 
        </div>
        <script>$('.carousel').carousel({
          interval: 5000
        })</script>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    {# ****FIN SLIDER COROUSEL**** #}
    <div class="row">
        <div class="col-lg-4">
        jhajh
        </div>
    </div>
    <div class="row">
        <div class="col-md-8"><h3>Artículos recientes</h3></div>
    </div>
    <div class="row">
        {# INICIO AGREGANDO NOTICIAS #}
        <div class="panel-body">
            <div class="col-lg-4">
                <img src="http://bnetcmsus-a.akamaihd.net/cms/connect_thumbnail/H7IHFYV5NZZ31370886281987.jpg" alt="..." class="img-thumbnail" style="margin-top:20px" />  
            </div>      
            <div class="col-lg-8">
            {% for noticia in ls.news %}
                <h3>{{noticia.titulo}}</h3>
                <p>{{noticia.preview}}<br />
                   {{noticia.imagen}}<br />
                   {{noticia.contenido}}<br />
                   {{noticia.autor}}<br />
                   {{noticia.fecha}}</p>
            {% endfor %}
            </div>        
        </div>
        {# FIN AGREGANDO NOTICIAS #}
    </div>
    {% include footer %}
</div>
</body>
</html>