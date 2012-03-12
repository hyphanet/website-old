      <h1>Descargar Freenet</h1>
      <h3>Nota importante para usuarios por primera vez.</h3>
      <p>
    Para un mejor desempeño, Freenet debería ejecutarse sin interrupción. No debería
    interferir con el normal uso de tu ordenador, ya que requiere alrededor de 
    200MB de RAM y 10% de un núcleo CPU, más algunos accesos a disco.  
    Recomendamos que detengas Freenet mientras corres juegos en el  
    ordenador etc. En Windows puedes hacer esto desde el ícono en la bandeja de sistema, 
    o en otros sistemas usar los botones en el menú o el escritorio.
      </p>
      <p>
    Normalmente Freenet conectará automáticamente y "simplemente funcionará",
    conectando automáticamente con otros Nodos (Desconocidos). Sin embargo,
    si conoces algunas personas que ya estén usando Freenet, puedes
    habilitar el modo alta_seguridad y 
    <a href="http://127.0.0.1:8888/addfriend/">agregarlos como Amigos</a>, 
	entonces Freenet solamente conectará con ellos, haciendo tu uso de Freenet 
	prácticamente indetectable, y aún serás capaz de acceder al resto de las
	redes mediante amigos de amigos etc. Esto será lento a menos 
	que agregues 10+ amigos que estén en línea mientras tú lo estas..
      </p>

      <div id="nojws">
	
	<h2>Instrucciones de instalación</h2>
	<p>
	  Ver instrucciones para:
	  <a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">Windows
	    </a>, <a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">Mac
	    OSX</a>, <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">GNU/Linux
	    etc</a><br/>
	</p>
      </div>
      
      <div id="windows">
	
	<h3>Windows</h3>
	
	<p>
	  - Descargar y 
	  ejecutar <big><a class='maybeSwitchProtocol' href="https://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">el 
	      instalador</a> (8MB)</big><br/> 
	  <br/>
	  Instalará automáticamente Freenet y otros componentes
	  requeridos. Cuando termine, tu navegador por defecto 
	  automáticamente se abrirá en la interfase basada en web de Freenet's<br/>
	  (Freenet NO contiene <b style="text-decoration: underline;">spyware o adware</b> ,
	  es Software Libre! El código fuente está disponible al público
	  para su revisión) <br/> 
	  <br/>
	  Freenet requiere Windows XP o posterior.<br/>
	</p>
	
      </div>

      <div id="macos">
	
	<h3>Mac OSX</h3>
	
	<p>
	  <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">Instalar Freenet 0.7</a> usando JavaWebStart.<br/>
	  Si esto no funciona, prueba <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">las instrucciones para GNU/Linux</a>.
	</p>
	
      </div>
      
      <div id="unix">
	
	<h3>GNU/Linux y otros sistemas tipo-Unix</h3>

	<p>
	  Prueba el  <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">instalador JavaWebStart</a>.<br/>
	  Si no funciona, por favor intenta con las instrucciones siguientes.
	</p>	
	<p>
	  Necesitas tener un <b>Java Runtime Environment</b>
	  (JRE) actualizado. Hemos obtenido mejores resultados con el Java
	  Runtime Environment de Sun el cual puedes obtener mediante 
	  tu <a href="http://en.wikipedia.org/wiki/Package_manager">Administrador de paquetes</a> o
	  de <a href="http://www.java.com/">http://www.java.com/</a>.<br/> 
	</p>
	<p>
	  Necesitas Java versión 1.6. Deberías mantenerla actualizada para
	  evitar problemas y mejor desempeño. Además, necesitas
	  wget para que los comandos siguientes funcionen (en Ubuntu, haz
	  "apt-get install wget" en una consola).
	</p>

	<p>
	  Abre una terminal y escribe:
	</p>
	
	<!-- please use "pre" as following (ie a newline after the
	openning pre, and no newline before the ending pre) -->

	<pre>
	  wget <a class='maybeSwitchProtocol' href="https://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar">https://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar</a> -O new_installer_offline.jar
	  java -jar new_installer_offline.jar</pre>
	
	<p>
	  Alternativamente,
	  descarga <a class='maybeSwitchProtocol' href="https://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar">el 
	    instalador</a>
	  (<a class='maybeSwitchProtocol' href="https://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar.sig">firma gpg
	    </a>) y luego haciendo click en el archivo funcionará en la mayoría de los sistemas, pero si hay problemas recomendamos las
	  líneas de comando más arriba.
	</p>
	
	<p><b>Servidores sin monitor:</b> El instalador estándar requiere GUI (ej. Gnome, KDE, X windows etc). Nosotros recomendamos que uses el instalador estándar. 
	En un servidor con sólo consola (por ejemplo un servidor virtual GNU/Linux), deberás instalar las librerías del cliente X y usar ssh -X para ejecutar el instalador GUI remotamente. 
	También es posible usar el instalador sin monitor. Está desactualizado y no lo recomendamos. Deberás instalar el último Java de Sun, y asegurarte que este en la ruta
	y sea el JVM por defecto (prueba update-java-alternatives en ubuntu), y luego instalar wget  o curl, luego descargar
	<a class='maybeSwitchProtocol' href="https://downloads.freenetproject.org/alpha/installer/freenet07.tar.gz">este archivo</a>, descomprimirlo y ejecutar "./run.sh start". 
	Luego abrir <a href="http://127.0.0.1:8888/">un navegador</a>. También querrás cambiar el límite de memoria en wrapper.conf. Ver <a href="faq.html#fproxy-lan">aquí</a> 
	cómo abrir tu nodo a otras computadores en tu misma red.</p>

	<div id="mirrored">
	  
	  <h3>Instalación duplicada</h3>
	  
	  <p>
	    Si tienes un directorio de instalación de Freenet funcionando que hayas duplicado 
	    de una máquina Unix a otra (ej. vía rsync o
	    unison), habilitar la instalación duplicada no es
	    difícil.  Nada en una instalación Freenet tiene cuidado de
	    la dirección IP de su host; no puede, o Freenet fallaría
	    en máquinas que obtengan su dirección IP mediante DHCP.
	  </p>

	  <p>
	    Todo lo que necesitas hacer en realidad es decirle al sistema que haz 
	    duplicado que debe iniciar el demonio proxy de Freenet
	    cuando arranque.  Haz <tt>crontab -l</tt> en la
	    máquina de origen, encuentra la línea etiquetada "FREENET
	    AUTOSTART" y agrégala al crontab en la máquina
	    duplicada.
	  </p>
	  
	  <p>
	    Sin embargo: cada instalación tiene una única clave identificatoria
	    generada en el momento de la instalación. Si tratas de ejecutar dos
	    instancias con la misma identidad <em>al mismo tiempo</em>, 
	    ambos demonios se confundirán y se enojarán.
	    No hagas eso...!
	  </p>
	  
	</div>
	
    <h3>Cómo</h3>  
	      
      	     <p>Encontrarás el <a href="http://www.minihowto.org/freenet_howto/freenet a very short minihowto.html">mini-cómo</a> muy útil (debería ser de interés para los usuarios de Windowstambién).</p>

      </div>
      
      <script type="text/javascript">
					 // Try to detect if Sun Java 1.5.0 or higher is installed
					 //var Java = PluginDetect.isMinVersion('Java', '1,5,0');
					 
					 // Os detection
					 var OSName="";
					 if (navigator.appVersion.indexOf("Win")!=-1)
					 OSName="windows";
					 else if (navigator.appVersion.indexOf("Mac")!=-1)
					 OSName="macos";
					 else if (navigator.appVersion.indexOf("X11")!=-1)
					 OSName="unix";
					 else if (navigator.appVersion.indexOf("Linux")!=-1)
					 OSName="unix";
					 
					 hideDiv("windows");
					 hideDiv("macos");
					 hideDiv("unix");
					 if (OSName != "") {
					   showDiv(OSName);
					 } else {
					   showDiv("windows");
					   showDiv("macos");
					   showDiv("unix");
					 }
      </script>
      
      <h3>Cortafuegos y enrutadores</h3>
      
      <p>
	Freenet debería funcionar bien con la mayoría de los enrutadores, pero si estás teniendo problemas
	y tienes un  cortafuegos o enrutador, haz click <a href="faq.html#firewall"><b>aquí</b></a>
	para más información.
      </p>
      
      <h3>Está funcionando, qué hago?</h3>
      
      <p>
	Cuando se cierra el instalador, debería abrirse una ventana de navegador apuntando al
	asistente de primera vez. Allí puedes configurar cosas básicas, y luego
	comenzar a usar Freenet. Puedes acceder a Freenet más tarde via la bandeja de sistema
	(abajo a la derecha en la pantalla), o usar el atajo Abrir Freenet en el escritorio 
	y/o menú de inicio. Si no funciona, abre 
	<a href="http://127.0.0.1:8888/">http://127.0.0.1:8888/</a> en tu navegador web.
      
      <p>
	Para más seguridad deberías usar un navegador aparte para Freenet, 
	preferiblemente en modo privacidad. En Windows, la bandeja de sistema tratará
	de usar Chrome en modo incógnito si es posible. Internet Explorer no
	funciona bien con Freenet, Firefox y Opera son ampliamente usados.
      </p>
      
      <p>
	Si conoces a algunas personas corriendo Freenet, puedes mejorar tu seguiridad y  
	ayudar a construir una red robusta conectándote a sus nodos. Primero, abre la  
	<a href="http://127.0.0.1:8888/addfriend/">página Agregar un amigo</a>. Tú y tu 
	amigo deberán cada uno descargar sus "referencias de nodo". Envía el archivo
	a la otra persona, y agrega su referencia de nodo usando el formulario al pie 
	de la página.Cuando ambos estén agregados, el nodo de tu amigo debería mostrarse en la página 
	Amigos, probablemente como "CONECTADO" u "OCUPADO". Puedes proporcionar un nombre a tu nodo
	en la página de configuración para hacer más fácil ver de quien es. Sólo agrega nodos de gente
	<b>que actualmente conozcas</b>, estén online u offline, porque agregar puros desconocidos
	altera el desempeño y no mejora la seguridad  (ellos podrían ser los malos!).
      </p>
      
      <h3>Entonces estoy conectado, que hago?</h3>
      
      <p>
    Freenet en si mismo incluye sitios web anonimos ("freesites"), intercambio de archivos, búsqueda, y 
    más, pero también puedes usar <a href="http://wiki.freenetproject.org/FreenetZeroPointSevenApps">aplicaciones 
	 de terceras partes</a> para chatear, compartir archivos, ayudarte a subir "freesites", etc.
      </p>
      
      <h3>No funciona, ahora qué?</h3>
      
      <p>
	Si tienes problemas instalando o corriendo Freenet, por favor contacta con nosotros en
	<a href="mailto:support@freenetproject.org">la lista de soporte</a> 
	(<a href="lists.html">subscribe aquí</a>), o únete al IRC en el 
	canal #freenet en irc.freenode.net (intenta <a href="http://webchat.freenode.net/?randomnick=1&channels=freenet">aquí</a>).
      </p>
      
      <h3>Requerimientos de Hardware</h3>
      <p>
    Generalmente un procesador de 1GHz y 1GB de RAM debería estar bien. Freenet correrá en sistemas más
    pequeños, pero usa al menos 128MB de RAM, asi que a menos que el sistema
    no haga otra cosa se arrastrará con menos de 512MB. Sin embargo, el  
    procesador es menos problemático, se sabe de gente que ha ejecutado en un 400MHz Pentium 2's o
    ATOM's, aunque las descargas y la navegacion serán lentas.</p>
    
      <p>
	Freenet usará una porción de tu disco rígido para almacenar datos, 
	puedes configurar esto para cualquier tamaño desde 100MB en adelante, pero
	recomendamos al menos 1GB. Freenet usa espacio en disco para
	tus descargas. El uso de memoria de Freenet es aproximadamente
	192MB plus 1MB para cada 2GB de datos almacenados.
      </p>
      
      <p>
      En Windows 64-bit , instalaremos una Java Virtual Machine de 32-bit  a causa 
      de limitaciones en el <a href="http://wrapper.tanukisoftware.org/doc/english/download.jsp">Java Service Wrapper</a>.
      Este no se auto actualizará a si mismo necesariamente, quizas necesites <a href="http://www.java.com/en/download/manual.jsp">actualizarlo ocacionalmente</a>.
      </p>
      
      <h3>Actualizando</h3>
      
      <p>
	Freenet provee un mecanismo de actualización-sobre-freenet:
	este se mantendrá a si mismos actualizado mediante
	otros nodos Freenet, y normalmente funcionará aún si es
	incapaz de rutear hacia ellos debido a que son muy nuevos. Esto es
	anónimo y seguro, y le recomendamos a la gente que lo use.
	Sin embargo, si algo está severamente roto, puedes actualizar
	tu nodo manualmente desde nuestros servidores:</p>
      
      <ul>
	<li>Usuarios de Windows pueden actualizar a la última edicion estable deFreenet
	desde el menú en la bandeja de sistema, o ejecutando "update.cmd" en el directorio Freenet.</li>
	
	<li>Usuarios de Mac and GNU/Linux pueden actualizar ejecutando el 
	  script update.sh en el directorio Freenet.</li>
      </ul>
      
      <p>
	<small>
	  <b>Código fuente:</b>
	  Visita <a href="developer.html">la página de desarrolladores</a> 
	  para acceder a git o descargar la última versión estable
	  <a class='maybeSwitchProtocol' href="https://freenet.googlecode.com/files/freenet-FREENETTAG-source.tar.bz2">aquí</a> 
	  (<a href="https://freenet.googlecode.com/files/freenet-FREENETTAG-source.tar.bz2.sig">firma</a>).
	</small>
      </p>
