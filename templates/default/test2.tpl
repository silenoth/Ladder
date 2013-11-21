{% embed header %}
{% block titulo %}
{% for noticia in ls.news %}
<title>{{noticia.titulo}}</title>
{% endfor %}
{% endblock %}
{% endembed %}

<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="#">Ladder Script</a>
        <p class="navbar-text">Bienvenido invitad@</p>
        <ul class="nav navbar-nav navbar-right">
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
            
            <li><a href="register.php">Registrarse</a></li>
        </ul>
    </div>
</nav>

<div class="container">

        <!-- corrousel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
                <img src="http://g3ar.co.za/wp-content/uploads/2013/09/Hearthstone-feature.jpg" />
              <div class="carousel-caption">
                <h3>Hola</h3>
                <p>Este es un saludillo test</p>
              </div>
            </div>
            
             <div class="item">
             <img src="http://www.e4shasko.com/wp-content/uploads/2013/10/Hearthstoneantaurus-600x300.jpg" />
              <div class="carousel-caption">
                <h3>Hola 2</h3>
                <p>Este es un saludillo test 2</p>
              </div>
            </div>
            
             <div class="item">
             <img src="http://www.e4shasko.com/wp-content/uploads/2013/10/hsp-600x300.png" />
              <div class="carousel-caption">
                <h3>Hola 3</h3>
                <p>Este es un saludillo test 3</p>
              </div>
            </div>
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
        <!------------------------------>
    <div class="row">
        <div class="col-md-9 col-md-push-3">
        {% for noticia in ls.news %}
            <h1>{{noticia.titulo}}</h1><br />
            {{noticia.preview}}<br />
            {{noticia.imagen}}<br />
            {{noticia.contenido}}<br />
            {{noticia.autor}}<br />
            {{noticia.fecha}}
        {% endfor %}
        </div>
        <div class="col-md-3 col-md-pull-9">
        
        </div>
    </div>
</div>

{% include footer %}