<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Biblioteca_Web_App_0"></a>Biblioteca Web App</h1>
<p class="has-line-data" data-line-start="2" data-line-end="3">Esta es una aplicación web de biblioteca desarrollada por zusldev utilizando PHP y MySQL. La aplicación utiliza Bootstrap para estilizar y Composer para el manejo de dependencias.</p>
<h2 class="code-line" data-line-start=4 data-line-end=5 ><a id="Funcionalidades_4"></a>Funcionalidades</h2>
<p class="has-line-data" data-line-start="5" data-line-end="6">Por el momento, la aplicación permite:</p>
<ul>
<li class="has-line-data" data-line-start="7" data-line-end="8">Ver la lista de libros en la biblioteca</li>
<li class="has-line-data" data-line-start="8" data-line-end="10">Agregar un nuevo libro a la biblioteca</li>
</ul>
<h2 class="code-line" data-line-start=10 data-line-end=11 ><a id="Requisitos_10"></a>Requisitos</h2>
<p class="has-line-data" data-line-start="11" data-line-end="12">Los siguientes requisitos son necesarios para utilizar la aplicación:</p>
<ul>
<li class="has-line-data" data-line-start="13" data-line-end="14">PHP 7.4 o superior</li>
<li class="has-line-data" data-line-start="14" data-line-end="15">Extensiones de PHP: intl, mbstring, json, mysqlnd, libcurl</li>
<li class="has-line-data" data-line-start="15" data-line-end="17">MySQL</li>
</ul>
<h2 class="code-line" data-line-start=17 data-line-end=18 ><a id="Instalacin_17"></a>Instalación</h2>
<p class="has-line-data" data-line-start="18" data-line-end="19">Para instalar la aplicación, sigue los siguientes pasos:</p>
<ol>
<li class="has-line-data" data-line-start="20" data-line-end="21">Clona el repositorio de GitHub:</li>
</ol>
<pre><code class="has-line-data" data-line-start="24" data-line-end="26" class="language-bash">git <span class="hljs-built_in">clone</span> https://github.com/zusldev/biblioteca-web-app.git
</code></pre>
<ol start="2">
<li class="has-line-data" data-line-start="26" data-line-end="27">Crea una base de datos MySQL para la aplicación y actualiza el archivo .env con los detalles de conexión:</li>
</ol>
<pre><code class="has-line-data" data-line-start="28" data-line-end="33" class="language-php">database.<span class="hljs-keyword">default</span>.hostname = localhost
database.<span class="hljs-keyword">default</span>.database = nombre_de_la_base_de_datos
database.<span class="hljs-keyword">default</span>.username = nombre_de_usuario
database.<span class="hljs-keyword">default</span>.password = contraseña
</code></pre>
<ol start="4">
<li class="has-line-data" data-line-start="33" data-line-end="34">Instala las dependencias utilizando Composer:</li>
</ol>
<pre><code class="has-line-data" data-line-start="35" data-line-end="37">composer install
</code></pre>
<ol start="5">
<li class="has-line-data" data-line-start="37" data-line-end="39">Ejecuta las migraciones para crear las tablas de la base de datos:</li>
</ol>
<pre><code class="has-line-data" data-line-start="40" data-line-end="42" class="language-php">php spark migrate
</code></pre>
<ol start="6">
<li class="has-line-data" data-line-start="42" data-line-end="43">Ejecuta el servidor de desarrollo:</li>
</ol>
<pre><code class="has-line-data" data-line-start="44" data-line-end="46" class="language-php">php spark serve
</code></pre>
<p class="has-line-data" data-line-start="46" data-line-end="47">La aplicación estará disponible en <a href="http://localhost:8080">http://localhost:8080</a>.</p>
<h2 class="code-line" data-line-start=48 data-line-end=49 ><a id="Autor_48"></a>Autor</h2>
<p class="has-line-data" data-line-start="49" data-line-end="50">zusldev</p>
