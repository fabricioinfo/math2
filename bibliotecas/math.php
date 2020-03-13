<?php
	$tipo= $_GET["tipo"];
	$a = $_GET["a"];
	$b = $_GET["b"];
	$c = $_GET["c"];
	try {
		if($tipo == 1){
			hipotenusa($a,$b);
		}elseif ($tipo == 2 ){
			areaC($a);
		}elseif ($tipo == 3){
			areaT($a,$b);
		}elseif ($tipo == 4){
			areaQ($a,$b);
		}elseif ($tipo ==5){
			simetria($a,$b,$c);
		}elseif ($tipo ==6){
			mediaamostral($a);
		}elseif ($tipo ==7){
			progressaoaritimetica($a,$b,$c);
		}elseif($tipo == 8){
			fibonacci($a);
		}
		
	} catch (Exception $e) {
		echo "Erro: ".$e->getMessage();
	}
	function hipotenusa($catetoO, $catetoA)
	{
		$catetoA = str_replace(".", "", $catetoA);
		$catetoO = str_replace(".", "", $catetoO);

		$catetoA = str_replace(",", ".", $catetoA);
		$catetoO = str_replace(",", ".", $catetoO);
		if((!is_numeric($catetoA) || !is_numeric($catetoO))){
			throw new Exception("Um dos valores possivelmente não é um número correto");
		}elseif ($catetoO<=0 || $catetoA<=0) {
			throw new Exception("Um dos valores são zero ou menores que zero");
		}
		$passo1ca=$catetoA*$catetoA;
		$passo1co=$catetoO*$catetoO;
		$passo2= $passo1ca+$passo1co;
		$hipotenusa = sqrt($passo2);
		$hipotenusa = round($hipotenusa,3);
		$hipotenusa = str_replace(".", ",", $hipotenusa);
		
		echo "<ol>";
		echo "<li>Fazer os valores exponenciais: {$catetoA}<sup>2</sup> ={$passo1ca} e {$catetoO}<sup>2</sup> ={$passo1co};</li>";
		echo "<li>Somar os resultados obtidos {$passo1ca} + {$passo1co} = {$passo2};</li>";
		echo "<li>resultado final raiz quadrada de {$passo2} = {$hipotenusa}.</li>";
		echo "</ol>";
	}
	function areaC($raio)
	{
		$raio = str_replace(".", "", $raio);

		$raio = str_replace(",", ".", $raio);
		if((!is_numeric($raio))){
			throw new Exception("Um dos valores possivelmente não é um número correto");
		}elseif ($raio<=0) {
			throw new Exception("Um dos valores são zero ou menores que zero");
		}
		$passo1= pow($raio,2);
		$areaC = round(pi(),6)* $passo1;
		$areaC = round($areaC,3);
		$areaC = str_replace(".", ",", $areaC);
		echo "<p> π = ".round(pi(),6)."</p>";
		echo "<ol>";
		echo "<li>Primeiro fazer a exponenciação {$raio}<sup>2</sup> = {$passo1};</li>";
		echo "<li> π*{$passo1} = $areaC; (Resultado Final)</li>";
		echo "</ol>";
	}
	function areaT($base,$altura)
	{
		$base = str_replace(".", "", $base);
		$altura = str_replace(".", "", $altura);

		$base = str_replace(",", ".", $base);
		$altura = str_replace(",", ".", $altura);
		if((!is_numeric($base) || !is_numeric($altura))){
			throw new Exception("Um dos valores possivelmente não é um número correto");
		}elseif ($base<=0 || $altura<=0) {
			throw new Exception("Um dos valores são zero ou menores que zero");
		}
		$passo1= ($base*$altura);
		$areaT = $passo1/2;
		$areaT = round($areaT,3);
		$areaT = str_replace(".", ",", $areaT);
		echo "<ol>";
			echo "<li>Primeiro fazer a multiplicação $base * $altura = $passo1;</li>";
			echo "<li>$passo1 / 2 = $areaT; (Resultado Final)</li>";
		echo "</ol>";
	}
	function areaQ($base,$altura)
	{
		$base = str_replace(".", "", $base);
		$altura = str_replace(".", "", $altura);

		$base = str_replace(",", ".", $base);
		$altura = str_replace(",", ".", $altura);
		if((!is_numeric($base) || !is_numeric($altura))){
			throw new Exception("Um dos valores possivelmente não é um número correto");
		}elseif ($base<=0 || $altura<=0) {
			throw new Exception("Um dos valores são zero ou menores que zero");
		}
		$areaQ = ($base*$altura);
		$areaQ = round($areaQ,3);
		$areaQ = str_replace(".", ",", $areaQ);
		echo "<ol>";
			echo "<li>Primeiro fazer a multiplicação $base * $altura = $areaQ; (Resultado Final)</li>";
		echo "</ol>";
	}
	function simetria($a,$b,$c)
	{
		$a = str_replace(".", "", $a);
		$b = str_replace(".", "", $b);
		$c = str_replace(".", "", $c);

		$a = str_replace(",", ".", $a);
		$b = str_replace(",", ".", $b);
		$c = str_replace(",", ".", $c);
		if((!is_numeric($a) || !is_numeric($b) || !is_numeric($c))){
			throw new Exception("Um dos valores possivelmente não é um número correto");
		}elseif ((pow($b, 2)-(4*$a*$c))<=0) {
			throw new Exception("Mude os valores de a ou c ou b, pois o delta é b<sup>2</sup> - (4*a*c) e está dentro da raiz quadrada, se o delta for zero, teriamos raiz quadrada de zero (que na matemática não existe).");
		}elseif($a==0){
			throw new Exception("Se o a for zero vai haver uma divisão por zero, mas na matemática divisão por zero não existe. Coloque outro valor para a.");
			
		}
		$bhaskara1 = (-$b + sqrt(pow($b, 2)-(4*$a*$c)))/(2*$a);
		$bhaskara2 = (-$b - sqrt(pow($b, 2)-(4*$a*$c)))/(2*$a);

		$bhaskara1 = round($bhaskara1,3);
		$bhaskara1 = str_replace(".", ",", $bhaskara1);

		$bhaskara2 = round($bhaskara2,3);
		$bhaskara2 = str_replace(".", ",", $bhaskara2);
		echo "<p>Equação do segundo grau: $a*x<sup>2</sup>";
		if($b>=0){
			echo "+$b*x";
		}else{
			echo "$b*x";
		}
		if($c>=0){
			echo "+$c=0</p>";
		}else{
			echo "$c=0</p>";
		}
		echo "<p>Primeiro fazer o delta $b <sup>2</sup> - (4* $a* $c)</p>";
		echo "<ol>";
			echo "<li>$b <sup>2</sup> = ".pow($b, 2).";</li>";
			echo "<li>4*$a*$c = ".(4*$a*$c).";</li>";
			echo "<li>".pow($b, 2)." - ".(4*$a*$c)."= ".(pow($b, 2)-(4*$a*$c))."; (Resultado Final)</li>";
		echo "</ol>";
		echo "<p>Segundo fazer o X1:</p>";
		echo "<ol>";
			echo "<li>raiz quadrada de ".(pow($b, 2)-(4*$a*$c))." = ".sqrt(pow($b, 2)-(4*$a*$c)).";</li>";
			echo "<li>-$b + ".sqrt(pow($b, 2)-(4*$a*$c))."= ".(-$b + sqrt(pow($b, 2)-(4*$a*$c))).";</li>";
			echo "<li>(2*$a)= ".(2*$a).";</li>";
			echo "<li>".(-$b + sqrt(pow($b, 2)-(4*$a*$c)))."/".(2*$a)." = ".$bhaskara1.";</li>";
		echo "</ol>";
		echo "<p>Segundo fazer o X2:</p>";
		echo "<ol>";
			echo "<li>raiz quadrada de ".(pow($b, 2)-(4*$a*$c))." = ".sqrt(pow($b, 2)-(4*$a*$c)).";</li>";
			echo "<li>-$b - ".sqrt(pow($b, 2)-(4*$a*$c))."= ".(-$b - sqrt(pow($b, 2)-(4*$a*$c))).";</li>";
			echo "<li>(2*$a)= ".(2*$a).";</li>";
			echo "<li>".(-$b - sqrt(pow($b, 2)-(4*$a*$c)))."/".(2*$a)." = ".$bhaskara2.";</li>";
		echo "</ol>";
	}
	function mediaamostral($termos){
		$termos= explode(";", $termos);
		$n = sizeof($termos);
		for($i=0;$i<$n;$i++){
	    	$termos[$i]=trim($termos[$i]);
		}
		$somatoria=array_sum($termos);
		$media=$somatoria/$n;
		echo "<ol>";
			echo "<li>somar todos os termos: $somatoria;</li>";
			echo "<li>$somatoria/$n = $media</li>";
		echo "</ol>";
	}
	function progressaoaritimetica($a,$b,$c)
	{
		$A1 = str_replace(".", "", $a);
		$An = str_replace(".", "", $b);
		$N = str_replace(".", "", $c);

		$A1 = str_replace(",", ".", $a);
		$An = str_replace(",", ".", $b);
		$N = str_replace(",", ".", $c);
		if((!is_numeric($A1) || !is_numeric($An) || !is_numeric($N))){
			throw new Exception("Um dos valores possivelmente não é um número correto");
		}
		$passo1 = ($A1+$An);
		$passo2 = ($passo1*$N);
		$passo3 = ($passo2/2);
		echo "<ol>";
		echo "<li>$A1 + $An = $passo1</li>";
		echo "<li>$passo1 * $N = $passo2</li>";
		echo "<li>$passo2/2 = $passo3";
	}
	function fibonacci($n){
		$a = str_replace(".", "", $a);

		$a = str_replace(",", ".", $a);
		
		$fibonacci = pow((1+sqrt(5))/2,$n)-pow((1-sqrt(5))/2,$n)/sqrt(5);
		round($n,1);
		echo "<p>A formula do leonardo pissanoi permite você descobrir o resultado de 'n' com a seguinte fomula</p>";
		echo "<p>A formula so utiliza numeros inteiros</p>";
		echo "<p>Resultado do seu calculo é ".$fibonacci.", agora tente fazer no papel e confira o resultado.</p>";
	}
?>