<?php
	$tipo= $_GET["tipo"];
	try {
		if($tipo == 1){
			hipotenusa();
		}elseif ($tipo == 2 ){
			areaC();
		}elseif ($tipo == 3){
			areaT();
		}elseif ($tipo == 4){
			areaQ();
		}elseif ($tipo ==5){
			simetria();
		}elseif ($tipo ==6){
			mediaamostral();
		}elseif ($tipo ==7){
			progressaoaritimetica();
		}elseif($tipo == 8){
			fibonacci();
		}
	} catch (Exception $e) {
		echo "Erro: ".$e->getMessage();
	}
	function hipotenusa()
	{
		?>
		<ol>
			<li>Fazer os valores exponenciais: ca<sup>2</sup> e co<sup>2</sup>;</li>
			<li>Somar os resultados obtidos ca<sup>2</sup> + co<sup>2</sup>;</li>
			<li>O resultado obtido do passo dois fazer a raiz quadrada e ter o resultado final.</li>
		</ol>
		<?php
	}
	function areaC()
	{
		?>
		<ol>
			<li>Primeiro fazer a exponenciação r<sup>2</sup>;</li>
			<li>Pegar o resultado do passo 1 e multiplicar por π; (Resultado Final)</li>
		</ol>
		<?php
	}
	function areaT()
	{
		
		?>
		<ol>
			<li>Primeiro fazer a multiplicação Base pela altura;</li>
			<li>Com o resultado do passo 1 dividi-lo por 2; (Resultado Final)</li>
		</ol>
		<?php
		
	}
	function areaQ()
	{
		
		?>
		<ol>
			<li>Primeiro fazer a multiplicação Base pela altura; (Resultado Final)</li>
		</ol>
		<?php
	}
	function simetria()
	{
		
		?>
		<p>Primeiro fazer o delta b<sup>2</sup>-(4*a*c)</p>
		<ol>
			<li>Primeiro passo fazer a exponenciação b<sup>2</sup>;</li>
			<li>Segundo passo fazer o que há entre parenteses (multiplicação) 4*a*c;</li>
			<li>Terceiro passo resultado passo 1 - resultado passo 2; (Resultado Final)</li>
		</ol>
		<p>Segundo fazer o X':</p>
		<ol>
			<li>Primeiro passo fazer a raiz quadrada de delta;</li>
			<li>Segundo passo somar o valor de -b + o resultado do primeiro passo;</li>
			<li>Terceiro passo fazer o que há nos parateses (2*a);</li>
			<li>Quarto passo fazer a divisão do passo 2 com o passo 3;</li>
		</ol>
		<p>Segundo fazer o X'':</p>
		<ol>
			<li>Primeiro passo fazer a raiz quadrada de delta;</li>
			<li>Segundo passo subtrair o valor de -b - o resultado do primeiro passo;</li>
			<li>Terceiro passo fazer o que há nos parateses (2*a);</li>
			<li>Quarto passo fazer a divisão do passo 2 com o passo 3;</li>
		</ol>
		<?php
	}
	function mediaamostral()
	{
		?>
		<ol>
			<li>Soma de todos os termos</li>
			<li>Resultado do passo um, dividido pelo número de termos somados</li>
		</ol>
		<?php
	}
	function progressaoaritimetica()
	{
		?>
		<ol>
		<li>Primeiro resolvemos o que está entre parenteses: (A1+An)</li>
		<li>Segundo resolvemos a multiplicação: resultado do parenteses vezes (N)</li>
		<li>Terceiro resolvemos a divisão: resultado da multiplicação dividido por (2)</li>
		</ol>
		
		<?php
	}
	function forcadenewton()
	{
		?>
		<ol>
		<li>Multiplique a massa pela aceleração.</li>
		</ol>
		<?php
	}
	function fibonacci(){
		?>
		<p>primeiro você deverar ter o valor de "n"</p>
		<ol>
			<li>primeiro subtrair "Fn" por "-1"</li>
			<li>segundo subtrair "Fn" por "-2" </li>
			<li>terceiro somar (fn-1 + Fn-2)a os resultados e vai dar o numero do "n"</li>
			<li>qunado você nao possui os numeros anteriores para somalos e possivel utilizar essa formula (1/1+√5/2)-(1/1-√5/2);</li>
		</ol>
		<p>determinando o valor de "n"</p>
		<ol>
			<li>primero substitua o "n" por pelo um numero da função</li>
			<li>segundo resolva os calculos que estão no parenteses</li>
			<li>tereiro faça a divisão que eata fora do parentese</li>
		</ol>
		<?php
	}
?>