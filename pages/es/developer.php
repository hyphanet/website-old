      <h1>Desarrollador</h1>
      
      <h3>Código fuente</h3>
      
      <p>
	Estamos usando <a href="http://git-scm.com/">git</a> como 
	nuestro sistema administrador de código fuente, ubicado 
	en <a href="https://github.com/">github</a>. Tenemos varios
	repositorios git diferentes para el sitio, freenet en si misma (fred),
	complementos oficiales , los dos instaladores, librerías y así siguiendo; 
	puedes ver la lista en  <a href="https://github.com/freenet/">nuestra página en github</a>.
	
      </p>

      <p>
	Recomendamos muy especialmente que uses el cliente de linea de comandos git oficial,
	o el port para Windows. Si quieres usar la integración git con Eclipse git puedes ver 
	el tutorial <a href="http://wiki.eclipse.org/EGit/User_Guide">aquí</a>.
      </p>
      
      <p>Puedes obtener el último código fuente de git usando la siguiente línea de comandos:</p>
      <pre>
	git clone git://github.com/freenet/fred.git</pre>

      <p>Una vez que hayas clonado el repositorio, para recuperar los últimos cambios:</p>
      <pre>
	git pull origin</pre>

      <p>
    Mas información de como usar git abajo, en esta página
      </p>

      <p>
	Git es un sistema de control de revisiones, esto significa
	entre otras cosas:
      </p>
      <ul>
	<li>Cada uno tiene una copia completa del repositorio, incluyendo el historial.</li>
	<li>Ramificar y combinar es fácil.</li>
	<li>Trabajar offline (ej. en un tren) es fácil.</li>
	<li>Es mucho menos vulnerable a una falla o compromiso de un servidor central.</li>
	<li>Contribuciones anónimas a Freenet son mucho mas fáciles.</li>
	<li>En general, un flujo de trabajo mas seguro.</li>
      </ul>
      
    <p>Inicialmente usamos git de manera similar a SVN: Cada desarrollador tiene permisos
    de publicar en el repositorio, y nosotros otorgábamos permisos de escritura bastante liberalmente. Sin embargo,
    probablemente este no es el mejor modelo: Muchos otros proyectos que usan Git emplean un
    modelo mas (o menos, dependiendo de como lo veas) centralizado donde tu 
    divides el repositorio (esto es realmente fácil en github), haces tus cambios, los escribes
    en tu repositorio, y luego nos preguntas para validarlos; luego un desarrollador central revisa los
    cambios y o bien los escribe en el repositorio central o solicita algunos cambios.
    La ventaja es que hay menos revisiones en el historial, mejor código en general, las cosas
    pueden retirarse mas fácilmente  cuando tratamos de liberar un lanzamiento, y el modelo de
    seguridad es más simple. Tratamos de moderar este modelo actualmente. Encontrarás
    que es más fácil de dividir [Fork] -staging y luego solicitar una validación [Pull Request] (github hace ambas cosas 
    muy fácil), antes que solicitar permisos de escritura en -staging.</p>
    
    <p>Cada parte de Freenet actualmente tiene dos repositorios: -official y -staging (ej.
    fred-official y fred-staging). Este es un remanente de nuestro uso de git similar a  
    SVN: El repositorio -official ha sido revisado y lanzado al menos como un pre-build,
    y solamente desarrolladores centrales pueden publicar en el - ellos deben revisar el código que están publicando antes 
    de validar, y usualmente firmaran un tag para el  build o pre-build luego de ello. El repositorio 
    -staging casi cualquiera puede escribirlo. Nuevos desarrolladores deberán dividir [Fork] en github
    y luego solicitar validación [Pull Request].</p>
      
      <p>
    De cualquier forma, por favor mantennos informados de los que estas haciendo con Freenet! Crea una 
    cuenta github, y luego contáctanos mediante
	la <a href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl">lista de 
	desarrolladores</a> o en <a href="https://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a>
	en el canal <a href="irc://irc.freenode.net/%23freenet">#freenet</a>
	en irc.freenode.net. Observa que deberías usar una direccion 
	(funcionando) real de email cuando valides; proveeremos
	colaboradores con redirect @freenetproject.org si es necesario.**
      </p>

      <h3>Instrucciones de compilación</h3>
      
      <p>Para compilar el código fuente necesitas <a href="http://ant.apache.org/">Apache ANT</a>.</p>
      
      <h3>Compilación completa</h3>
      
      <p>
	Compilar Fred (el demonio de referencia Freenet) con ant requerirá en 
	freenet-ext.jar dependencias de terceras partes del website. Para compilar
	freenet-ext.jar por ti mismo necesitas obtener el módulo contribuciones, compilarlo, y ponerlo en
	lib/freenet-ext.jar antes de compilar el proyecto principal. Observa también que el 
	módulo contribuciones contiene un número de librerías nativas usadas para mejorar el  
	desempeño; quizás quieras también recompilar estas.
      </p>
      <p>
	Complementos, instaladores, etc generalmente pueden compilarse con ant, pero algunas 
	librerías podrían estar escritas en otros lenguajes y tener sus propios procedimientos 
	de compilación.
      </p>

      <h3>Secuencia de trabajo básica con git</h3>
      <p>Para recuperar todos los campos del repositorio:</p>
      
      <pre>
	git pull origin</pre>

      <p>
	O si quieres revisar los cambios antes de combinarlos en tu  
	repositorio local:
      </p>

      <pre>
	git fetch origin
	git log -p -M --ignore-space-change master..origin/master</pre>

      <p>
	Si estas feliz con los cambios, entonces combina tus cambios locales
	con los cambios remotos:
      </p>

      <pre>
	git rebase origin/master</pre>
      <p>O Combina los cambios remotos en tu repositorio local:</p>
      <pre>
	git merge origin/master</pre>
      <p>Esto último tendrá como resultado una historia no-lineal, así que deberías usar rebase
	a menos que tus cambios locales sean muy grandes.</p>
      <p>Para validar tus cambios locales en tu repositorio local:</p>

      <pre>
	git commit -a</pre>
      <p>O:</p>
      <pre>
	git commit [ nombres-de-archivos que deseas validar ]</pre>
      <p>Para publicar tus cambios (asumiendo que has clonado el árbol -staging ):</p>
      <pre>
	git push origin</pre>
      <p>Para ver cambios recientes:</p>
      <pre>
	git log -p -M --ignore-space-change</pre>
      <p>Para deshacer una o más validaciones locales, asumiendo que no has publicado tus cambios 
	ni has combinado cambios remotos (esto simplemente volverá tu 
	repositorio local a una versión previa, recomenzando desde 
	allí):</p>
      <pre>
	git reset [ última revisión buena ]</pre>

      <p>O si has validado tus cambios, necesitas revertirlos:</p>
      <pre>
	git revert [ revisión a descartar ]</pre>
      <p>
	Más documentación sobre git puede encontrarse <a href="http://git-scm.com/documentation">aquí</a>
	o <a href="http://www.kernel.org/pub/software/scm/git/docs/">aquí</a>.
      </p>
      <p>
	Si no te gusta una validación, o piensas que podría mejorarse, generalmente deberás escribir a  
	<a href="lists.html">la lista de correo</a> de desarrolladores. Deberías copiar al autor de 
	la validación, pero a menos que sea un tema trivial deberías escribir a devl
	siempre.
      </p>
    <p>Por favor evita validaciones gigantescas. Todas las validaciones son revisadas manualmente
    para verificar la seguridad y evitar errores, y es mucho más fácil si
    sigues algunas reglas básicas:</p>
    <ul>
    <li>Mantén los cambios cosméticos separados de los cambios funcionales. En 
    particular, mejoras en la indentación y corchetes, si bien son  
    generalmente aceptables,  <b>no deberían</b> mezclarse con cambios  
    funcionales.</li>
    <li>No rompas el código: Cuando publiques tus cambios, fred debería compilar. Idealmente
    cada validación individual deberia compilar.</li>
    <li>Pequeñas validaciones: "git commit" es puramente una operación local, entonces
    no hay razón para combinar un manojo de cambios sin relación en una sola validación. 
    Obviamente usa tu propio criterio.</li>
    <li>Asuntos grandes o controversiales deberían ir en una rama, preferible antes que simplemente
    publicarlos. Podríamos estar en proceso de liberar una nueva 
    compilación, y si publicas cosas grandes es mejor ponerlas en una rama
    mientras se desarrolla la compilación.</li>
    </ul>

    <h3>El sitio web</h3>
    <p>Para editar el sitio web, verifica el repositorio website-staging, edita los archivos (en pages/en/),
    valida y publica como arriba. Luego recuerdale a Toad publicarlo si no lo ha hecho en un tiempo razonable.
    Alternativamente, divide [fork] el módulo website en github, y luego solicita una publicacion [pull request]. Esto en realidad
    da resultado mas rápidamente!</p>
    <p>El sitio web está basado en php pero es compilado y desarrollado en HTML estático. Puedes simular esto
    para ver exactamente como se verán tus cambios ejecutando el script make-pages.sh (necesitarás 
    php5-cgi). Esto genera los HTML estáticos en output/.</p>
    <p>Estamos tratando de mover la mayoría de la documentación a <a href="https://wiki.freenetproject.org">la 
    wiki</a>, la cual debería ser mucho más fácil de editar.</p>
    
