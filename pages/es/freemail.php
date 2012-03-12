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

      <h2>Freemail</h2>
      
      <p>
	Freemail es un sistema de email para Freenet. Te permite enviar
	emails anónimos a otros usuarios de Freenet mediante tu cliente de email
	estándar. Comúnmente no viene junto con el instalador de Freenet, y tiene
	que descargarse por separado. También puedes probar el complemento de  Freemail 
	seleccionándolo de la lista en la página de los complementos en tu nodo 
	Freenet. Aunque cuidado, el complemento todavía está en una fase temprana de
	desarrollo, y los usuarios deberán ser proactivos mirando archivos de logs
	y reportando problemas si los encontraran.
      </p>

      <p>
	Puedes descargar la última versión pre-compilada
	de <a class="maybeSwitchProtocol" href="https://downloads.freenetproject.org/alpha/plugins/Freemail/">https://downloads.freenetproject.org/alpha/plugins/Freemail/</a>
      </p>complemento
      
      <h3>Configuración de la cuenta sencilla</h3>
      
      <p>
	La forma fácil de configurar una cuenta Freemail es visitar el complemento 
	Freemail, luego de haberlo descargado, mediante la página de <b>Complementos</b>.
	La interfaz web te preguntará por un nombre IMAP, una clave IMAP,
	y un dirección breve Freemail para asociarlo con la cuenta.
	Cuando la cuenta esté creada, te enviará por email el nombre seguro que ha 
	generado para ti.
      </p>
      
      <p>
	La dirección-Freemail corta elegida debe ser única y resultará
	una dirección que se verá como:
      </p>
      
      <ul>
	<li>&lt;un-nombre&gt;@&lt;dirección-Freemail-breve&gt;.freemail</li>
      </ul>
      
      <p>
	El &lt;un-nombre&gt; antes de la @ será ignorado.  Está ahí
	solamente porque los usuarios de email  y los agentes de transporte quieren ver una @ en
	la dirección. Si, nosotros <em>sabemos</em> que es un truco horrible.
      </p>
      
      <p>
	Una vez que has instalado el complemento Freemail para tu proxy Freenet, 
	iniciar o reiniciar el demonio iniciará el servicio de correo
	por ti automáticamente.
      </p>

      <p>
	Si por alguna razón no puedes hacer funcionar la interfaz web, hemos
	incluido instrucciones para configuración manual mas abajo en esta página.
      </p>

      <h3>Configuración del cliente de email</h3>

      <p>
	Ahora que tienes el proxy Freemail corriendo, significa que puedes
	enviar y recibir emails mediante Freenet. Para esto recomendamos que
	ajustes tu cliente de email favorito para usar los puertos especiales privados de 
	 Freenet:
      </p>

      <ul>
	<li><span style="font-weight:bold;">Emails entrantes </span>- Protocolo: <span style="font-weight:bold;">IMAP</span>, Servidor: <span style="font-weight:bold;">localhost</span>, Puerto: <span style="font-weight:bold;">3143</span></li>
	<li><span style="font-weight:bold;">Emails salientes </span>- Protocolo: <span style="font-weight:bold;">SMTP</span>, Servidor: <span style="font-weight:bold;">localhost</span>, Puerto: <span style="font-weight:bold;">3025</span></li>
      </ul>
      
      <p>
	Tu complemento Freemail debe estar ejecutándose mientras lees y
	envías freemails. Deja tu nodo corriendo, con el complemento Freemail 
	habilitado, así te aseguras de ello. Para propósitos de depuración, es posible
	enviar y recibir Freemail con solamente el jar Freenet corriendo.
      </p>
      
      <h3>Recuperando emails de Freemail con fetchmail</h3>
      
      <p>
	Puedes hacer fácilmente que  <a href="http://fetchmail.berlios.de/">fetchmail</a> recupere tus email
	de  freenet con una entrada como ésta:
      </p>

      <pre>
	poll freenet via localhost with proto imap port 3143
	el usuario LOCALNAME aquí es IMAPNAME allá con clave PASSWORD</pre>

      <p>
	Esto hará que los emails de Freemail sean capturados automáticamente y combinados con
	con tu casilla de email normal, entonces cualquiera de tus clientes de email los podrá ver.
	Por supuesto, Necesitas cambiar IMAPNAME y PASSWORD para que coincidan 
	con el par de autenticación proporcionado cuando creaste la cuenta Freemail, y LOCALNAME
	al login local donde quieres recibir los emails.
      </p>
      
      <p>
	Una variante de esta receta funcionará si tienes tu nodo 
	freenet. corriendo en otra máquina. Sólo cambia "localhost" a la
	dirección DNS del otro host.
      </p>

      <h3>Thunderbird</h3>
      
      <p>Si usas Thunderbird como cliente de email:</p>

      <ol>
	<li> En el menú Herramientas, selecciona Configuración de las cuentas.</li>
	<li> Click en el botón Agregar nueva cuenta.</li>
	<li>Selecciona Cuenta de Email y click Siguiente.</li>
	<li>
	  Escribe el nombre y la direccion larga Freemail  
	  proporcionada, o la dirección corta, si has creado una. Verifica
	  esto cuidadosamente ya que una dirección incorrecta significa que no solamente
	  la gente no será capaz de responderte sino que tus mensajes
	  aparecerán como 'Spoofed'. Una vez concluído, click Siguiente.
	</li>
	<li>
	  Configura el tipo de servidor entrante como IMAP y el nombre del servidor como
	  localhost. Luego click Siguiente.
	</li>
	<li>
	  Para el Nombre de Usuario, usa el nombre de la cuenta que elegiste
	  antes ('john' en este ejemplo), el cual puede no ser el mismo
	  que tu dirección de email. Click Siguiente.
	</li>
	<li>Escribe un Nombre de Cuenta arbitrario y click en Siguiente y luego Finalizar.</li>
	<li>
	Ahora debemos cambiar el número de puerto IMAP por defecto:
	  En el panel de la izquierda click en Configuración del Servidor de la
	  nueva cuenta. Cambia el puerto genérico 143 a 3143. 
	</li>
      </ol>
      
      <p>Ahora deberías ser capaz de leer los freemails entrantes. Para enviar emails:</p>
      
      <ol>
	<li>
	  En el menu Herramientas, selecciona Configuración de las cuentas.
	</li>
	<li>
	  En el panel de la izquierda, desliza hacia abajo y haz click en la
	opción Servidor de salida (SMTP).
	</li>
	
	<li>
	  Probablemente ya tienes al menos un servidor SMTP configurado 
	previamente para tus emails normales. Así que click en el botón Agregar...
	para crear uno especialmente para freemails.
	</li>
	<li>
	  Bajo Descripción pon lo que quieras - Freemail sería
	una buena elección. Configura Nombre del Servidor a localhost y cambia el Puerto
	a 3025. Asegúrate que 'Usar nombre y clave' esta marcado y pon
	tu nombre de cuenta original como Nombre de Usuario ('john' en nuestro
	ejemplo). Usar conexión segura' debería configurarse en No (no te
	preocupes, es sólo la conexión local la que no está cifrada). 
	Click OK.
	</li>
	<li>
	  el punto final es configurar tu nueva cuenta Freemail para usar
	este servidor saliente en lugar del predeterminado. Entonces en el
	panel izquierdo encuentra y haz click en la línea superior de la nueva cuenta
	de email entrante que acabas de agregar. En nuestro ejemplo debería ser algo
	como me@jsmith.freemail. Debería haber un selector combo
	llamado Servidor Saliente (SMTP). Ajusta esto a la nueva configuración que
	agregamos: algo como Freemail - localhost. Luego click OK.
	</li>
      </ol>

      <p>
	Felicitaciones - ya estás configurado para enviar y recibir email sobre
	Freenet!
      </p>

      <h3>Configuración manual</h3>
      
      <p>
	Para ajustar una configuración para Freemail a mano, ejecuta los siguientes
	comandos:
      </p>

      <pre>
	java -jar Freemail.jar --newaccount &lt;usuario&gt;
	java -jar Freemail.jar --passwd &lt;usuario&gt; &lt;clave&gt;
	java -jar Freemail.jar --shortaddress &lt;usuario&gt; &lt;dirección-Freemail-corta&gt;
	java -jar Freemail.jar</pre>

      <p>
	Cambia los valores entre &lt;corchetes&gt; a los valores
	apropiados.
      </p>

      <p>
	Después de ejecutar el último comando tienes un proxy Freemail
	corriendo, escuchando en localhost al puerto 3143 IMAP por mensajes entrantes,
	y el puerto SMTP 3025 para emails salientes. Conectate usando tu
	cliente de email favorito.
      </p>
      
      <p>Si no lo has conseguido, aquí hay una receta más larga y detallada:</p>

      <h3>Configuración de la cuenta</h3>
      
      <p>
	Cambia al directorio donde se encuentra el archivo Freemail.jar. En la
	línea de comandos, escribe:
      </p>

      <pre>
	java -jar Freemail.jar</pre>

      <p>
	Si estás corriendo Freemail por primera vez, te preguntará
	si quieres crear una cuenta:
      </p>

      <pre>
	Starting Freemail for the first time.
	You will probably want to add an account by running Freemail with arguments --newaccount &lt;username&gt;</pre>

      <p>
	Así que hagamos lo que dice. El usuario que has creado aquí es para
	identificarte en el servicio Freemail y sólo será visto por ti,no es
	parte de tu dirección freemail:
      </p>

      <pre>
	java -jar Freemail.jar --newaccount john</pre>

      <p>
	Esto genera tu dirección Freemail la cual es un número aleatorio largo
	como <span style="font-weight:bold;">un-nombre@DS3FG3R...SF6FHJ8YUK.freemail</span>. Generar
	el par criptográfico es un proceso de computación intensivo y podría 
	tomar algunos minutos en una máquina lenta.
      </p>
      
      <pre>
	Generating mailsite keys...
	Mailsite keys generated.
	Your Freemail address is: anything@DS3FG3R...SF6FHJ8YUK.freemail
	Generating cryptographic keypair (this could take a few minutes)...
	Account creation completed.
	Account created for john. You may now set a password with --passwd &lt;password&gt;</pre>

      <p>
	El paso siguiente es crear una clave para tu cuenta. La sintaxis
	para crear una clave se muestra debajo:
      </p>
      
      <pre>
	java -jar Freemail.jar --passwd &lt;usuario&gt; &lt;clave&gt;</pre>

      <p>
	Para crear la
	clave <span style="font-weight:bold;">secreto</span> para
	el usuario <span style="font-weight:bold;">john</span>, escribe:
      </p>

      <pre>
	java -jar Freemail.jar --passwd john secreto</pre>

      <p>
	Ahora tenemos una cuenta, una clave para esa cuenta y una 
	dirección-Freemail-larga algo larga. el problema es que no muchas personas en el 
	mundo serían capaces de recordar esa dirección. La solución para
	este problema es crear una dirección corta que apunte a la 
	larga:
      </p>

      <p>Para hacer esto, ejecuta el comando principal nuevamente:</p>

      <pre>
	java -jar Freemail.jar</pre>

      <p>y el software te preguntará si quieres crear una dirección Freemail corta:</p>
      
      <pre>
	Secure Freemail address: anything@DS3FG3R...SF6FHJ8YUK.freemail
	You don't have a short Freemail address. You could get one by running Freemail
	with the --shortaddress option, followed by your account name and the name
	you'd like. For example, 'java -jar freemail.jar --shortaddress bob bob' will give
	you the address 'anything@bob.freemail'. Try to pick something unique!
	trying slotinsert to freenet:SSK@sdfgsdfg...ertretert/mailsite-1/mailpage</pre>

      <p>La sintaxis para crear una direccion Freemail corta es:</p>
      
      <pre>
	java -jar Freemail.jar --shortaddress &lt;usuario&gt; &lt;dirección-Freemail-corta&gt;</pre>

      <p> Para crear un alias conocido
      como <span style="font-weight:bold;">jsmith</span> para el
      usuario <span style="font-weight:bold;">john</span>, escribe: 
      </p>
      
      <pre>
	java -jar Freemail.jar --shortaddress john jsmith</pre>

      <p>Si este alias está libre, Lo verás en tu dirección de Freemail:</p>
      
      <pre>
	Secure Freemail address: anything@DS3FG3R...SF6FHJ8YUK.freemail
	Short Freemail address (*probably* secure): anything@jsmith.freemail</pre>

      <p>
	Hasta ahora has creado una cuenta Freemail, una dirección corta y
	larga y configurado una clave para la cuenta. Ahora, todo lo que necesitas hacer
	es iniciar el proxy Freemail, para escuchar conexiones entrantes IMAP y SMTP.
	El proxy Freemail correrá mientras uses Freemail, o sino
	los emails que envíes no podrán ser despachados. Para iniciar el servidor, corre
	el comando: 
      </p>

      <pre>
	java -jar Freemail.jar</pre>

      <h3>Consejos para resolver problemas</h3>
      
      <p>
	Si tratas de ejecutar el Freemail jar y obtienes mensajes parecidos a lo 
	siguiente:
      </p>

      <pre>
	24/12/2008 11:20:52 ERROR(freemail.smtp.SMTPListener): Error in SMTP server - Address already in use
	24/12/2008 11:20:52 ERROR(freemail.imap.IMAPListener): Error in IMAP server - Address already in use</pre>

      <p>
	...probablemente significa que descargaste el complemento Freemail mediante la interface
	 Web y tu nodo aún está corriendo. En una máquina GNU/Linux puedes
	verificar si los puertos privados SMTP e IMAP actualmente están en uso
	con <code>netstat -tln</code>; los números de puertos que estas buscando en
	la lista son 3143 (Freenet IMAP) y 3025 (Freenet SMTP).
      </p>

      <p>
	si obtienes esos mensajes y esos puertos <em>no</em> están en uso,
	intenta bajar y reiniciar el nodo.  Si los problemas persisten
	luego de esto, has encontrado un bug y deberias comunicarlo a los desarrolladores
	de Freenet.
      </p>

      <p>
	Si los puertos están de hecho en uso, verifica la <b>Lista de Complementos</b> en
	tus <b>Complementos</b>. Si Freemail está en la lista, entonces podrias o bien 
	deshabilitarlo y seguir el procedimiento manual (ejecutando java -jar
	Freemail.jar) o configurar tu cuenta Freemail mediante la interface
	Web.
      </p>
