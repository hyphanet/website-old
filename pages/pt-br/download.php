      <h1>Baixar Freenet</h1>
      
      <h3>Nota importante para marinheiros de primeira viagem</h3>
      <p>
    Para melhor desempenho, Freenet será executado continuamente. Isso não deve
    interferir no uso de seu computador, já que ele necessita de aproximadamente de 
    200MB de RAM e 10% de um núcleo de CPU, além de algum acesso ao disco. É 
    altamente recomendável que você desligue o Freenet enquanto estiver jogando no computador 
    games etc. No Windows você pode fazer isso através do ícone na bandeja do sistema, 
    em outros sistemas utilize os links no menu do sistema ou da área de trabalho.
      </p>
      <p>
    Normalmente Freenet conecta-se automaticamente e "simplemente funciona",
    conectando automaticamente a outros nós (Desconhecidos). No entanto,
    se você conhecer várias pessoas que já estão usando Freenet, você pode
    ativar o modo de alta segurança e 
    <a rel="nofollow" href="http://127.0.0.1:8888/addfriend/">adicioná-los como amigos</a>, 
	então Freenet o conectará apenas a eles, tornando o seu uso quase que indetectável, 
	sendo ainda capaz de acessar o restante da internet
	através dos amigos de seus amigos etc. Isto pode ser um pouco lento, a menos que 
	você adicione 10+ amigos que ocasionalmente estejam online quando você estiver.
      </p>

      <div id="nojws">
	
	<h2>Instruções de instalação</h2>
	
	<p><a href="http://freesocial.draketo.de/">Guia passo a passo</a> para configurar Freenet e 
	varios aplicativos. Por favor, tente isso, especialmente se estiver instalando no Mac. Nós não nos responsabilizamos
	por aplicativos não-oficiais e de terceiros recomendados (inclusive FMS), mas muitos usuários e desenvolvedores Freenet fazem uso deles.</p> 
	
	<p>
	  Mostrar instruções para:
	  <a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">Windows
	    </a>, <a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">Mac
	    OSX</a>, <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">Linux
	    etc</a><br/>
	</p>
      </div>
      
      <div id="windows">
	
	<h3>Windows</h3>
	
	<p>
	  - Baixe e
	  execute <big><a href="https://freenetproject.org/jnlp/FreenetInstaller.exe">o
	      instalador</a></big> (<a href="https://downloads.freenetproject.org/latest/FreenetInstaller.exe">tente este, se o primeiro link estiver bloqueado</a>)<br/> 
	  <br/>
	  Ele automaticamente instalará Freenet e outros componentes
	  necessários para você. Quando terminar, seu navegador padrão abrirá
	  automaticamente a interface de usuário baseada na web do Freenet.<br/>
	  (Freenet <b style="text-decoration: underline;">NÃO contém spyware ou adware</b> ,
	  ele é um Software Livre! Seu código fonte está disponível publicamente para revisão) <br/> 
	  <br/>
	  Freenet requer Windows XP ou superior.<br/>
	</p>
	
      </div>

      <div id="macos">
	
	<h3>Mac OSX</h3>
	
	<p>
      <a href="/jnlp/freenet.jnlp">Instalar Freenet 0.7</a> usando Java Web Start.<br/>
      Isto requer que o Java esteja instalado e que o Java Web Start esteja ativado.
      Se isso não funcionar, tente <a rel="nofollow" href="http://www.java.com/">instalar o Java</a>,
      baixando <a href="FREENET_INSTALLER_REDIRECT_URL">o instalador</a> e abrindo-o.
      Ele pode demorar um pouco para abrir.
    </p>

    <p>
<b>Nota:</b> Dissidentes não são fornecidos com o Java Web Start ativado. Nós gostaríamos
de fazer uma <i>.dmg</i> para facilitar a instalação no OS X, mas não sabemos ainda como. Se
você é um desenvolvedor e gostaria de se juntar a nós, sua ajuda seria muito apreciada!
    </p>

      </div>
      
      <div id="unix">
	
	<h3>Linux e outros sistemas como Unix</h3>

	<p>
	  Tente o <a href="/jnlp/freenet.jnlp">instalador Java</a>.<br/>
	  Se ele não funcionar:
	</p>
	<p>
	  Você precisar ter o recente <b>Java Runtime Environment</b>
	  (JRE). Nós obtivemos melhores resultados com o Oracle's Java
	  Runtime Environment, que pode ser obtido através de 
	  seu <a rel="nofollow" href="https://pt.wikipedia.org/wiki/Sistema_gestor_de_pacotes">gerenciador
	    de pacotes</a> ou
	  de <a rel="nofollow" href="http://www.java.com/">http://www.java.com/</a>.<br/> 
	</p>
	<p>
      Java versão 1.6 ou superior é requerida, e 1.7 ou superior é fortemente
      recomendada. Você deve manter o Java atualizado para evitar problemas e para
      obter melhor desempenho.
    </p>

	<p>
	  Abra o terminal e execute:
	</p>
	
	<!-- please use "pre" as following (ie a newline after the
	openning pre, and no newline before the ending pre) -->

	<pre>
	  wget '<a href="FREENET_INSTALLER_REDIRECT_URL">FREENET_INSTALLER_REDIRECT_URL</a>' -O new_installer_offline.jar
	  java -jar new_installer_offline.jar</pre>
	
	<p>
	  Alternativamente,
	  baixando <a href="FREENET_INSTALLER_REDIRECT_URL">o
	    instalador</a>
	  (<a href="FREENET_INSTALLER_SIG_URL"> assinatura gpg
	  </a>) e em seguida clicar sobre o arquivo pode funcionar em alguns sistemas, mas se houver problemas, recomendamos as linhas
	  de comando. Se o wget não estiver instalado, ele pode ser instalado através do gerenciador de pacotes, tal como
	  sudo apt-get install wget no Debian ou Ubuntu.
	</p>
	
	<p>Se o link acima estiver bloqueado, você pode baixá-lo de nosso servidor <a href="https://downloads.freenetproject.org/latest/new_installer_offline.jar">aqui</a>.
	Mas, por favor, utilize o outro link, se puder.</p>

    <p>
<b>Nota:</b> Muitas distribuições Linux não são mais fornecidas com o Java Web Start ativado.
Nós gostaríamos de fazer pacotes de distribuição para uma instalação mais fácil, e tem
um  <a href="https://github.com/freenet/debian">Pacote Debian</a> em desenvolvimento (e não mantido), mas ele não
é estável nem oficial em outras distribuições.você é um desenvolvedor e gostaria de se juntar a nós, sua ajuda seria muito apreciada!
    </p>


	<small>Se isso não funcionar em um servidor sem periféricos,tente "java -jar new_installer_offline.jar -console", e
	siga as instruções para informando onde instalar Freenet etc.</small>
	
	<div id="mirrored">
	  
	  <h3>Instalação Espelhada</h3>
	  
	  <p>
	    Se você tem um diretório de instalação Freenet funcionando espelhado de uma máquina Unix para outra
	    (por exemplo, via rsync ou uníssono), habilitar a instalação espelhada não é difícil.
	    Nada na instalação de Freenet se preocupa com o endereço IP de seu hospedeiro; Freenet não rodaria, ou
	    falharia em máquinas que pegam endereços Ips de um pool DHCP
	  </p>

	  <p>
	    Tudo o que você realmente precisa fazr é informar ao sistema espelhado para que ele inicie o proxy Freenet para você
	    na inicialização. Faça <tt>crontab -l</tt> na máquina de orígem, localize a linha marcada "FREENET
	    AUTOSTART" e acrescente isso à sua crontab na máquina espelhada.
	  </p>
	  
	  <p>
	    No entanto: cada instalação tem uma chave única de identidade gerada no momento da instalação. Se você tentar
	    rodar duas instâncias com a mesma identidade <em>ao mesmo tempo</em>, ambos os demons do proxy ficarão confusos e cairão. Não faça isso!
	  </p>
	  
	</div>
	
    <h3>COMO</h3>  
	      
      	     <p>Você pode achar útil o<a href="http://freesocial.draketo.de/index.html">Freenet Social Networking Guide</a>.</p>

      </div>
      
      <script type="text/javascript">
					 // Try to detect if Sun Java 1.6.0 or higher is installed
					 //var Java = PluginDetect.isMinVersion('Java', '1,6,0');
					 
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
      
      <h3>Firewalls e roteadores</h3>
      
      <p>
	Freenet deveria funcionar bem na maioria dos roteadores, mas se você tiver problemas com um firewall ou roteador, clique <a href="faq.html#firewall"><b>aqui</b></a>
	para mais informações.
      </p>
      
      <h3>Então, ele tá funcionando, o que devo fazer?</h3>
      
      <p>
	Quando o instalador fecha, ele deve abrir uma janela do navegador apontando para o assistente da primeira vez. Aqui você  pode configurar as definições básicas e, em seguida começar a usar Freenet. Você pode acessar Freenet depois, através do menu na bandeja do sistema (botão inferior direito da tela), ou use o atalho do Freenet na área de trabalho e/ou no menu iniciar. Se isso não funcionar, abra 
	<a rel="nofollow" href="http://127.0.0.1:8888/" rel="nofollow">http://127.0.0.1:8888/</a> em seu navegador.
      
      <p>
	Para melhor segurança você deve usar um navegador separado para Freenet, 
	preferencialmente no modo de privacidade. No Windows, o menu da bandeja do sistema tentará usar o Chrome no modo incógnito, se possível. Internet Explorer não funciona bem com Freenet, Firefox e Opera são amplamente utilizados.
      </p>
      
      <p>
	Se você conhecer alguém rodando Freenet, você pode melhorar a segurança e 
	ajudar a construir uma rede robusta conectando-o a seu nó. Primeiramente, abra o  
	<a rel="nofollow" href="http://127.0.0.1:8888/addfriend/">Adicionar amigo</a>. Você e seu
	amigo devem baixar a "referência de seus nós". Envie o arquivo para a outra pessoa, e adicione o nó dela usando o formulário na parte inferior da página. Quando ambos estiverem adicionados, o nó de seu amigo aparecerá na página de amigos, provavelmente como "CONECTADO" ou "OCUPADO". Você pode dar um nome para seu nó na página de configuração para que seja mais fácil identificá-lo. Adicione apenas nós de pessoas que você <b>realmente conheça</b>, seja online ou offline, adicionar pessoas totalmente estranhas prejudica o desempenho e não melhora em nada a segurança (eles podem ser os caras maus!).
      </p>
      
      <h3>Estou conectado, o que eu faço?</h3>
      
      <p>
    Freenet contém websites anônimos ("freesites"), compartilhamento de arquivos, pesquisa, e muito mais, entretanto, você pode usar aplicativos de terceiros para conversar, compartilhar arquivos, ajudá-lo a publicar freesites etc.
      </p>
    
    <p>O <a href="http://freesocial.draketo.de/">Freenet Social Networking Guide</a> explica como configurar as principais ferramentas de terceiros, incluindo email, fóruns e blogs (Sone, é meio que um twitter).</p>
      
      <h3>Não funciona, e agora?</h3>
      
      <p>
	Se você tem problemas instalando ou rodando Freenet, por favor, contate-nos na
	<a href="mailto:support@freenetproject.org">lista de suporte</a> 
	(<a href="lists.html">inscreva-se aqui</a>), ou junte-se a nós no IRC no canal
	#freenet no irc.freenode.net (tente <a rel="nofollow" href="https://webchat.freenode.net/?randomnick=1&channels=freenet">aqui</a>).
      </p>
      
      <h3>Requisitos de Hardware</h3>
      <p>
    Geralmente um processador de 1GHz e 1GB de RAM deveria ser suficiente. Freenet rodará em sistemas menores,
     mas ele usa pelo menos 128MB de RAM, então a menos que o sistema não faça outra coisa ele se arrastará
    com menos que 512MB. No entanto, o processador é o menor dos problemas, tem pessoas que rodam ele em Pentium 2 
   de 400MHz ou ATOM, muito embora baixar arquivos e navegar sejam lentos.</p>
    
      <p>
	Freenet usará parte de seu disco rígido para armazenar dados, você pode configurar isso para qualquer tamanho
	de 100MB em diante, mas, recomendamos pelo menos 1GB. Freenet também usa espaço em disco para seus downlodas.
	Freenet usa aproximadamente 256MB mais 400kB para cada 2GB de armazenamento.
      </p>
      
      <p>
      Em Windows de 64-bit, instalaremos uma Java Virtual de 32-bit por causa de limitações do <a rel="nofollow" href="http://wrapper.tanukisoftware.org/doc/english/download.jsp">Java Service Wrapper</a>.
      </p>
      
      <h3>Atualizando</h3>
      
      <p>
	Freenet fornece um mecanismo de atualização-sobre-freenet: Ele vai manter-se atualizando automaticamente a partir de outro nó
	Freenet, e isso funcionará normalmente, mesmo que não seja capaz de rotear até eles por serem muito novos. Isto é anônimo e seguro, e nós recomendamos às pessoas  que façam uso disso. No entanto, se alguma coisa estiver severamente danificada, você pode atualizar seu nó manualmente a partir de nossos servidores:</p>
      
      <ul>
	<li>Usuários de Windows podem atualizar para a última versão estável do Freenet a partir do menu da bandeja do sistema, ou 
	  executando "update.cmd" no diretório Freenet.</li>
	<li>Usuários de Mac e Linux podem atualizar executando o script update.sh shell no diretório Freenet.</li>
      </ul>
      
      <p>
	<small>
	  <b>Código Fonte:</b>
	  Veja <a href="developer.html">a página do desenvolvedor</a> 
	  para acessar o git, ou baixe o mais recente arquivo tar estável<a href="FREENET_SOURCE_URL">aqui</a> (<a href="FREENET_SOURCE_SIG_URL">assinatura</a>).
	</small>
      </p>
