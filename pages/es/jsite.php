      <h1>Documentación</h1>
      <div id="navigation">
	<p> Ir :
	  <a href="install.html">Instalar</a>
	  <a href="connect.html">Conectar</a>
	  <a href="content.html">Contenidos</a>
	  <a href="understand.html">Comprendiendo</a>
	  <a href="freemail.html">Freemail</a>
	  <a href="frost.html">Frost</a>
	  <a href="jsite.html">jSite</a>
	  <a href="thaw.html">Thaw</a>
	  <a href="http://wiki.freenetproject.org">Wiki</a>
	</p>
      </div>

      <h2>jSite</h2>
      <p>
	jSite es una aplicación gráfica que puedes usar 
	para crear, insertar y administrar tus propios 
	sitios Freenet. Fue escrita en Java por Bombe. 
      </p>
      <p>
	Puedes <a href="https://downloads.freenetproject.org/alpha/jSite/jSite.jar">descargar jSite aquí</a>
      </p>
      <h3>Iniciando jSite</h3>
      <p>
	Para iniciar jSite, escribe lo siguiente en una terminal:
      </p>
      <pre>
	java -jar jSite.jar</pre>
      <p>
	La primer ventana que ves es esta:
      </p>
      <img src="image/jsite/select-project.png" width="100%"/>
      <p>
	En el panel de la izquierda, algunos proyectos creados pueden
	ser seleccionados para actualización, borrado o duplicado. Ya que
	este es el primer inicio, tales proyectos no existen.
      </p>
      <h3>Creando un Freesite</h3>
      <p>
	Para crear un nuevo Freesite, haz click en el botón
	<span style="font-weight: bold;">Agregar proyecto</span>. 
	Luego necesitas llenar los detalles del proyecto.
	Bajo la sección información del Proyecto:
      </p>
      <ul>
	<li><span style="font-weight: bold;">Nombre</span> 
	  - es sólo un nombre para que identifiques el  
	  proyecto, puede servir cualquiera. Puede contener espacios.</li>
	<li><span style="font-weight: bold;">Descripción</span> 
	  - nuevamente, sólo una descripción
	  breve del proyecto para tu conveniencia.</li>
	<li><span style="font-weight: bold;">Ruta Local</span> 
	  - el directorio donde almacenarás 
	  todas las páginas del Freesite que estás creando. 
	  Ingresa la ruta completa. Puedes hacer click en el botón Browse 
	  para seleccionar un directorio gráficamente o simplemente escríbelo.</li>
      </ul>
      <p>
	Bajo la sección Dirección, hay algunas entradas generadas 
	automáticamente, y el nombre del sitio, 
	como se muestra en la barra de direcciones del navegador:
      </p>
      <ul>
	<li><span style="font-weight: bold;">Request URI</span> 
	  - se llena automáticamente y 
	  y debería ser una cadena de caracteres larga que parecen aleatorios</li>
	<li><span style="font-weight: bold;">Insert URI</span> 
	  - se llena automáticamente y 
	  se ve similar a Request URI. </li>
	<li><span style="font-weight: bold;">Ruta</span> 
	  - Necesitas ingresar una sola palabra aquí sin 
	  espacios. Aparecerá al final de la dirección de 
	  tu sitio. No puedes dejarla en blanco.</li>
      </ul>
      <p>
	Debajo hay un ejemplo de cómo se vería:
      </p>
      <img src="image/jsite/project-details.png" width="100%"/>
      <p>Cuando todo se haya completado correctamente, debes
	presionar <span style="font-weight: bold;">Siguiente</span>.
      </p>
      <p>
	El paso siguiente es agregar archivos a tu sitio Freenet 
	(o Freesite). Esto se hace en la caja de diálogo llamada 
	<span style="font-weight: bold;">Archivos de Proyecto</span>. 
	Ya que no tenemos archivos en el directorio actual, aún,
	el diálogo esta vacío.</p>
      <img src="image/jsite/project-files.png" />
      <p>
	Para agregar archivos, pongamos algunos archivos en el directorio local
	que especificamos antes, <span style="font-weight: bold;">
	  /home/test</span>, y presionamos <span style="font-weight: bold;">
	  Re-scan</span>. luego, presto, aparecen los archivos.
      </p>
      <img src="image/jsite/default-file.png" />
      <p>
	Luego resaltamos uno de estos archivos que será 
	la página por defecto (ej. index.html sería una buena 
	elección) y marcamos el checkbox <span style="font-weight: bold;">
	  Default file</span>. Debería reconocer el  
	MIME type como text/html, así que deja todo como está 
	y haz click en el botón <span style="font-weight: bold;">
	  Insert now</span>.
      </p>
      <p>
	Si todo fue bien, una ventana como la siguiente debería
	aparecer.Puede tardar un buen rato insertar el Freesite,
	varios minutos de hecho.
      </p>
      <img src="image/jsite/project-insert.png" width="100%"/>
      <p>
	Cuando todo esté terminado, verás un mensaje emergente que
	te dice que el sitio ha sido insertado exitosamente.
	Puedes copiar la URI en el portapapeles haciendo click en el botón
	<span style="font-weight: bold;">Copiar URI al Portapapeles</span>.
      </p>
      <p>
	Luego puedes usar FProxy para navegar tu recientemente creado
	Freesite. Sólo pega la URI después del 
      </p>

      <p>
	<a href="http://localhost:8888/">http://localhost:8888/</a>
      </p>
      <p>
	en la barra de direcciones del navegador,como esto (recortado para
	la pantalla):
      </p>
      <pre>
	http://localhost:8888/freenet:USK@cJNO6G0[..]joM,AQACAAE/watergate2/1/</pre>
      <p>
	Si funciona, felicitaciones, has creado tu primer Freesite!
      </p>
