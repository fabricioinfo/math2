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
		echo "<p>O teorema de pitágoras trata de achar a altura (h, hipotenusa) de um triângulo retângulo, onde se usa os outros dois lados, Cateto Adjacente ao ângulo da hipotenusa (a) e Cateto Oposto ao ângulo da hipotenusa (b).</p>";
	}
	function areaC()
	{
		echo "<p>Para calcular a área de um circulo usamos  pi vezes o raio elevado ao quadrado (A = π*r²), o raio é a altura do meio do circulo até a sua extremidade primeiro calculamos os números elevado ao quadrado que no caso é o raio, depois multiplicamos o pi vezes o raio.</p>";
	}
	function areaT()
	{
		
		echo "<p>Quando queremos fazer o calculo de quanto um triângulo tem de área devemos usar o valor da base (b), que representa os a largura do triangulo, e a altura (a) dele.</p>";
		
	}
	function areaQ()
	{
		
		echo "<p>Existem dois tipos diferentes de polígonos, o quadrado que tem os quatro lados iguais e o retângulo que tem apenas dois lados iguais. Para calcular sua área usamos a medida da base multiplicada pela altura.</p>";
		
	}
	function simetria()
	{
		
		echo "<p>A fórmula de Bhaskara é um método resolutivo para equações do segundo grau cujo nome homenageia o grande matemático indiano que a demonstrou. Essa fórmula nada mais é do que um método para encontrar as raízes reais de uma equação do segundo grau fazendo uso apenas de seus coeficientes. Vale lembrar que coeficiente é o número que multiplica uma incógnita em uma equação.</p><p>Para resolvermos a fórmula de bhaskara primeiro devemos separar “a”, “b” e “c”, onde a é o número que acompanha o x<sup>2</sup>, b o valor que acompanha o x e c a constante da equação (que não acompanha x).</p>";
	}
	function mediaamostral()
	{
		echo "<p>A média Amostral é um conjunto de valores númericos, também conhecida como média e está presente no nosso cotidiano. </p>";
	}
	function progressaoaritimetica()
	{
		echo "<p>Progressão aritmética é um tipo de seqüência numérica que a partir do segundo elemento cada termo (elemento) é a soma do seu antecessor por uma constante. (5,7,9,11,13,15,17) essa seqüência é uma Progressão aritmética, pois os seus elementos são formados pela soma do seu antecessor com a constante 2</p>";
	}
	function forcadenewton()
	{
		"<p> A segunda Lei de Newton afirma que, a aceleração obtida por um corpo é diretamente proporcional á força resultante aplicada sobre um corpo também é inversamente proporcionala massa desse corpo. Nesse sentido entende-se que, para que um corpo possa sofrer mudanças de velocidade, é nescessário que as frças que atuam sobre ele não se anulem.</p>";
	}
	function fibonacci()
	{

		echo"<p>A formula de fibonnaci é uma sequencia de numeros,cada termo subsequente corresponde á soma dos dois anteriores.</p>";
	}
?>