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
    {# INICIO ULTIMAS 3 PUBLICACIONES #}
    <div class="row" style="margin-top: 30px; margin-bottom:30px;">
    {% set i = 1 %}
    {% for prev in ls.preview %}
        
          <div class="col-sm-6 col-md-4" id="preview{{i}}" data-toggle="tooltip" data-placement="bottom" title="Continuar leyendo {{prev.titulo|slice(0,25)}}..." style="word-break: break-word;">
            <div class="thumbnail">
              <img src="http://bnetcmsus-a.akamaihd.net/cms/connect_thumbnail/H7IHFYV5NZZ31370886281987.jpg" alt="..." />
              <div class="caption">
                <div style="overflow:hidden;max-height:50px;min-height:50px">
                    <h4>{{ prev.titulo }}</h4>
                </div>
                <div style="overflow:hidden;max-height:40px;">
                    <p>{{ prev.preview }}</p>
                </div>
                <script>$('#preview{{i}}').tooltip('hide')</script>
            <div class="row">
                <div class="col-lg-9">
                {{prev.fecha}}
                </div>
            </div>
              </div>
            </div>
          </div>

        {% set i = i + 1 %}
    {% endfor %}
    </div>
    {# **FIN ULTIMAS 3 PUBLICACIONES*** #}
    <div class="row">
        <div class="col-md-8"><h3 style="margin-bottom:0;">Artículos recientes</h3></div>
    </div>
    <div class="row">
        {# INICIO AGREGANDO NOTICIAS #}
        {% for noticia in ls.news %}
        <div class="panel-body" style="word-break: break-word;padding-top:0;">
            <a href="news.php?id={{noticia.id}}" style="color:inherit; text-decoration:none;">
                <div class="col-lg-4" style="padding-left:0;">
                    <img src="http://bnetcmsus-a.akamaihd.net/cms/connect_thumbnail/H7IHFYV5NZZ31370886281987.jpg" alt="..." class="img-thumbnail" style="margin-top:20px" />  
                </div>
            </a>  
            <div class="col-lg-8">
                <a href="news.php?id={{noticia.id}}" style="color:inherit; text-decoration:none;">
                    <h3 style="padding-top:0;">{{noticia.titulo}}</h3>
                    <p style="padding-top:0;">{{noticia.preview|slice(0,300)}}<br />
                       {{noticia.imagen}}<br />
                       </p>
                </a>
                <div class="row">
                    <div class="col-lg-8">{{noticia.fecha}}</div>
                </div>
            </div>   
        </div>
        {% endfor %}
        {# FIN AGREGANDO NOTICIAS #}
    </div>
    {% include footer %}
</div>
</body>
</html>