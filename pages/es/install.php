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
	  <a href="https://wiki.freenetproject.org">Wiki</a>
	</p>
      </div>

      <h2>Instalar Freenet</h2> 
      <p>
	Instalar Freenet no debería ser tan difícil como podrías haber
	escuchado. Hay dos formas de instalar Freenet:
      </p>

      <ul>
	<li>Instalador gráfico</li>
	<li>Instalador sin monitor</li>
	<li>Habilitar un duplicado de una instalación Freenet</li>
      </ul>

      <p>Si quieres instalar software Freenet en un ordenador
      carente de una GUI, mira
      las instrucciones <a href="download.html#unix">Instalación sin monitor</a>.
      Si has duplicado una instalación Freenet funcionando
      en otra máquina sin instalarla expresamente,
      mira <a href="download.html#mirrored">Instalación
      duplicada</a>. De otro modo, continúa leyendo.
      </p>

      <h4>Instalador gráfico</h4>
      
      <p><b>Lo siguiente está desactualizado para sistemas Windows</b>, para Windows deberías
      usar <a href="https://downloads.freenetproject.org/latest/FreenetInstaller.exe">el instalador Windows</a> como se describe en <a href="download.html">la página de descargas</a>.
      También puedes obtener el instalador Windows  de <a href="https://downloads.freenetproject.org/latest/FreenetInstaller.exe">aquí</a> o 
      <a href="https://downloads.freenetproject.org/alpha/installer/FreenetInstaller-FREENETVERSION.exe">aquí</a>.</p>
      
      <p>Para la instalación gráfica deberás tener:</p>
      <ul>
	<li>Una Java Runtime Environment funcionando</li>
	<li>Una copia descargada del <a href="FREENET_INSTALLER_REDIRECT_URL">new_installer_offline.jar</a>
	(si no funciona prueba <a href="https://downloads.freenetproject.org/latest/new_installer_offline.jar">aquí</a>)</li>
	<li>Una interfaz gráfica de usuario funcionando (GUI)</li>
      </ul>
      
      <p>
	Deberías guardar el archivo new_installer.jar en algun lugar donde
	puedas hallarlo nuevamente. Tu directorio-home sería un
	buen lugar. El próximo paso requiere que sepas dónde has almacenado el 
	archivo (la ruta al mismo), así que es importante que hagas 
	este paso cuidadosamente.
      </p>

      <p>
	Para iniciar la instalación, abre una ventana de línea de comandos/
	interfaz/terminal/shell. Cambia
	la <span style="font-weight:bold;">/ruta/hacia</span> por la
	ruta real (por ejemplo:
	/home/username/download/new_installer.jar) al
	archivo new_installer.jar  y escribe:
      </p>
      
      <pre>
	$ java -jar /ruta/hacia/new_installer_offline.jar</pre>
      
      <p>
	La primer ventana que verás es la siguiente, la cual te permite
	seleccionar tu lenguaje preferido para el programa de 
	instalación.
      </p>

      <img src="image/install/1-langselect.png"/>

      <p>
	Lo siguiente se muestra en una caja de diálogo, alguna información sobre la versión
	de Freenet y sus autores. Simplemente
	haz click en <span style="font-weight:bold;"> Siguiente</span> para seguir.
      </p>

      <img src="image/install/2-about.png"/>
      
      <p>
	El paso siguiente es elegir el directorio en el cual instalar 
	Freenet. La ubicación por defecto en sistemas operativos GNU/Linux
	es <span style="font-weight:bold;">/home/username/Freenet</span>
	como se muestra debajo. Cámbialo a algo más apropiado o déjalo
	&quot;como
	está&quot;. Has click en <span style="font-weight:bold;">Siguiente</span>
	cuando termines.
      </p>

      <img src="image/install/4-Install_directory.png"/>

      <p>
	Selecciona los paquetes que quieres instalar con tu software 
	Freenet. Ya que virtualmente no necesita espacio en disco extra, se
	recomienda que dejes todos los paquetes seleccionados y
	presiones <span style="font-weight:bold;">Siguiente</span>.
      </p>

      <img src="image/install/5-select_packages.png"/>

      <p>
	En la pantalla siguiente, los paquetes son instalados, y una barra de 
	progreso se va desplazando. Cuando concluya,
	presiona <span style="font-weight:bold;">Siguiente</span> para ir
	al próximo paso.
      </p>

      <img src="image/install/6-Install_packages.png"/>

      <p>
	Luego de esto, el software Freenet está instalado y/o
	actualizado, los complementos están habilitados y el entorno está
	inicializado. Cuando esté listo,
	presiona <span style="font-weight:bold;">Siguiente</span> para avanzar.
      </p>

      <img src="image/install/7-install_progress.png"/>

      <p>
	Para algunos entornos gráficos, se pueden crear atajos en el menú.
	Este no es el caso para todas las plataformas en las que
	Freenet puede correr. Sin embargo, deberían crearse atajos en el 
	escritorio en todos las plataformas soportadas. Cambia el grupo de la aplicación
	acorde tus necesidades y
	presiona <span style="font-weight:bold;">Siguiente</span> cuando termines.
      </p>

      <img src="image/install/8-create_shortcuts.png"/>

      <p>
	Luego de esto, la instalación está
	terminada. Haz click en <span style="font-weight:bold;">Listo</span> para cerrar
	la ventana.
      </p>

      <img src="image/install/9-Install_finished.png"/>

      <p>
	Si todo ha ido bien, una ventana de navegador debería haberse abierto en 
	segundo plano. Te hará un manojo de preguntas para configurar Freenet,
	y luego deberías poder usarla.
	  </p>
	
	  <p>
	Te preguntará por el nivel de seguridad de la red - "protección contra desconocidos atacándote
	por internet". Si eliges BAJO o NORMAL, Freenet debería "simplemente funcionar",
	conectando en unos pocos minutos. Si eliges ALTO o MAXIMO, Freenet necesitará que
	agregues Amigos antes que puedas usarla. Estas deben ser personas que conozcas personalmente.
	Agregar gente que no conozcas no mejorará la seguridad.
      </p>
