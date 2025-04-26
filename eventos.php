<html>
	<head>
		<title>Eventos</title>	
	</head>
	<body>
		<!Tecla pressionada>
		<input type="text" name="texto" onKeyDown="alert('Uma tecla foi acionada!')">
		<!Tecla liberada>
		<input type="text" value="" name="texto" onKeyDown="this.value=this.value.touppercase();">
		<!mouse clicado>
		<a href="http://www.tcu.gov.br" onClick="return confirm('Quer abrir o site?')">Site do TCU<a/><br>
		<input type="button" value="Site do TCU" onClick="document.location='http://www.tcu.gov.br';">
		<input type="button" value="Testando" onDblclick="alert('Clique duplo')"><br>
		<a href="https://www.google.com/" onMouseMove="return confirm('Mouse movimentado: quer abrir o site?')">Site do Google<a/><br>
		<a href="http://www.tcu.gov.br" onMouseDown="return confirm('Mouse pressionado: quer abrir o site?')">Site do TCU<a/><br>
		<a href="http://www.tcu.gov.br" onMouseUp="return confirm('Mouse solto: quer abrir o site?')">Site do TCU<a/><br>
		<a href="http://www.din.uem.br/sica" onMouseOver="alert('Mouse entrou')">Sica<a/><br>
	</body>	
</html>

