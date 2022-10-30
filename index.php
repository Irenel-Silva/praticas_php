<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        echo "Hello world<br>\n";
        echo  "Date is: ".date('j-m-y, h:i:s <br>');
        ?>
        <?php
            echo " <br>\n Já esta";
        ?>
        <?php
            echo "<br>\n Caminhando bem";
        ?>
         <?php
           /* $valor= 10;
            echo $valor;
            echo '<br>';
            echo 3467 / 7;
            echo '<br>';
            echo 3462%7;
            echo '<br>';
            $x= 4**2;
            echo $x;
            echo '<br>';
            echo $a=100;
            echo '<br>';
            echo $b=250;
            echo '<br>';
            $c= $a+$b;
            echo ++$c;
            echo '<br>';
            $nome= 'Lopo';
            $apelido= 'Silva';
            echo $nome_completo= $nome .' '.$apelido;
            echo '<br>';
            $email= 'agua@gmail.com';
            $texto= <<<LABEL
            Ola, sr. $nome_completo. Serve a presente mensagem para informarquese encntra inscrito no curso.
            Enviamos  o regulamento para o seu e-mail $email
            Obrigado pela sua simpatia.
            LABEL;
            echo $texto;*/
            echo '<br>';
            echo 'Lopo da Silva\n\rTeste';
            echo '<br>';
            echo "Lopo da Silva\n\rTeste";
            $nome= 'Barros';
            $apelido= 'sílva';
            


            

        ?>
        <h3>O Meu nome é: 
            <h1>
                <?= /*"$nome $apelido";'\n';
                    $nome .' '. $apelido;*/"\n"
                    ?>
                <?php echo $nome .' ' . $apelido; ?>
                <br>
                <?= /*"O meu nome completo tem " . $nome_completo= strlen("$nome $apelido") . ' caracteres '*/ "\n" ?>
                <?= "O meu nome completo tem " . $nome_completo= mb_strlen("$nome $apelido") . ' caracteres ' ?>
                <br>
                <?= "O meu nome é " . strtoupper($nome) . " O meu apelido é " . strtoupper($apelido) ?>
                <br>
                <?= "O meu nome é " . mb_strtoupper($nome) . " O meu apelido é " . mb_strtoupper($apelido) ?>
                <br>
                <?php
                    //Array Multidimensionais
                    $dados=[
                            [10,20,30,40],
                            [100,200,300,400],
                            [1000,2000,3000,4000]

                    ];
                    $cidades= [
                                'Portugal'=>['Lisboa', 'Porto','Coimbra'],
                                'Brasil'=>['Brasília', 'São Paulo', 'Rio de Janeiro'],
                                'Espanha'=>['Madrid', 'Barcelona', 'Sevilha'],
                                'Angola'=>['Luanda','Benguela','Huambo']


                    ];
                    
                    echo $dados[0][3] . "<br>\n\r";
                    echo $cidades['Portugal'][1] . "<br>\n\r";
                    echo $dados[2][2] . "<br>\n\r";
                    echo $cidades['Angola'][0] ."<br>\n\r";

                    // Usando If ...Elseif ...Else

                    $nota=8;
                    if($nota<=2){
                        echo 'Nota baixa' .'<br>';
                    }elseif($nota<=4){
                        echo 'Nota Insuficiente' .'<br>';
                    }elseif($nota<=6){
                        echo 'Nota positiva' .'<br>';
                    }elseif($nota<=8){
                        echo 'Nota  muito positiva' .'<br>';
                    }else{
                        echo 'Nota Excelente! ' .'<br>';
                    }
                  //Switch case
                  $val= 5;
                  switch ($nome) {
                    case 'lopo':
                        echo 'Segundo nome' . '<br>';
                        break;
                    case 'Irinel':
                        echo 'Primeiro nome' . '<br>';
                        break;
                    default:
                        echo 'O nome não Existe' . '<br>';
                        break;
                  }  

                // operador ternário
                $opcao=0;
                $identificacao=$opcao==1 ? 'Alex' : 'Paulo';
                $opcao ==1 ? $identificacao= 'Alex' : $identificacao='Paulo';
                echo $opcao == 1 ? 'SIM' : 'NAO';


                // Condicional Match php
                echo '<br>';
                echo match($opcao){
                    0 => 'O valor é 0',
                    1 => 'O valor é 1',
                    2 => 'O valor é 2',
                    default => 'Valor diferente de todos os outros'

                };
                echo '<br>';
                $sal= '1';
                echo match($sal){
                    1 => 'Inteiro',
                    '1' => 'String',
                    default =>  ' Não faz parte'

                };
                echo '<hr>';
                echo '<br>';

                //While em PHP
                $i=0;
                while($i<10) 
                    echo $i++ .'<br>';
                echo '<br>';
                $i=0;
                // do while php
                do{
                    echo $i++ .'<br>';
                }while($i<10);

                //ciclo for no php
                for ($i=0; $i <10 ; $i++) { 
                    echo $i .'<br>';
                }
                echo '<br>';
                for ($i=0, $y=10; $i < 10; $i++, $y--) { 
                    echo $y .'<br>';
                }
                echo '<br>';
                $nomes = ['Joao', 'Ana', 'Carlos'];
                for ($i=0; $i <sizeof($nomes) ; $i++) {                 
                     echo $nomes[$i] .'<br>';
                }
                echo '<br>';
                $nomes = ['Pedro', 'George', 'Andre'];
                for ($i=0; $i <count($nomes) ; $i++) {                 
                     echo $nomes[$i] .'<br>';
                }
                echo '<br>';

                // ciclo foreach
                $nomes = ['Malaria', 'Palusdismo', 'Tifoide'];
                foreach($nomes as $no){
                    echo $no . '<br>';
                }
                echo '<br>';
                $capitais = [
                    'Angola'=> 'Luanda',
                    'Cabo verde'=> 'Praia',
                    'Guine Bissau'=> 'Bissau',
                    'Mocambique'=> 'Maputo',
                    'Sao Tome e Principe'=> 'Sao Tome'
                ];

                foreach($capitais as $key => $value) {
                    echo "Para o País $key a capital é $value" . '<br>' ;
                }
                echo '<br>';

                // Usando o  Break, continue e goto
                    //BREAK
                for ($i=0; $i < 5; $i++) { 
                    echo $i. '<br>';
                    if($i==2)
                        break; // Interrompe o ciclo 
                }


                echo '<br>';
                $nomes = ['Malaria', 'Palusdismo', 'Tifoide'];
                foreach($nomes as $no){
                    echo $no . '<br>';
                    if($no=='Malaria'){break;}
                }
                echo '<br>';

                //CONTINUE

                for ($i=0; $i <3 ; $i++) { 
                    if($i==1)
                        continue;// Itera(incrementa) o valor sem imprimir o seu correspondente antes da iteração
                    echo $i .'<br>';
                }
                echo '<br>';

                $nomes = ['Malaria', 'Palusdismo', 'Tifoide'];
                foreach($nomes as $no){
                    if($no=='Malaria'){continue;}
                    echo $no . '<br>';
                }
                echo '<br>';

                #GOTO

                for ($i=0; $i <3 ; $i++) { 
                    if($i==1)
                        goto teste; #SALTA PARA UM LABEL CORRESPONDENTE AO GOTO
                    echo $i .'<br>';
                }
                echo 'Fim do loop ';
                teste:
                    echo 'Para aqui';
                echo '<br>';
                #Usando funções em PHP

                echo 'Inicio do uso das funções';
                echo '<br>';
                executar();

                function executar(){
                    echo 'A função foi executada';
                }
                echo'<br>';
                #Funções com passagem de parâmetros
                adicionar(10,20);
                function adicionar($a, $b){
                    echo "$a + $b = " . $a + $b;
                    echo'<br>';
                    echo "$a + $b=" . ($a+$b); # Modelo padrão de uso
                }
                echo'<br>';
                $nomeclatura=['Alan', 'Fred', 'Elvis'];
                foreach($nomeclatura as $no)
                    saudacao($no);

                
                function saudacao($dado){
                    echo "Bom dia, $dado. <br>";
                }
                echo'<br>';
                #Funções com parâmetros opcionais
                    #definição da função
                function multiplicar($a, $b=3){
                    echo $a*$b;
                }

                #Chamada da função
                multiplicar(8);
                echo'<br>';
                multiplicar(10,15);
                echo'<br>';

                # Novo Funcionalidade Named Arguments
                function soma($a, $b=5, $c=20){
                    echo $a+$b+$c;
                }

                soma(100, 10, 300);
                echo'<br>';
                soma(c:1000, a:0);
                echo'<br>';
                soma(500, c:1200);
                echo'<br>';

                #Adicionais
                function outraFuncao($a){
                    $x= func_get_arg(0);
                    $y= func_get_arg(1);
                    $z= func_get_arg(2);
                    echo "$x - $y -$z";
                    echo '<br>';

                    echo func_num_args(); # Avalia quantos argumentos foram passados para função.

                }

                outraFuncao(10,20,30);
                echo '<br>';


                # Variadic Parâmetro
                function minha_funcao(...$argumentos){
                    foreach($argumentos as $arg)
                        echo "$arg<br>";
                }
                minha_funcao(10,20,30,40,50,60,70,80,90,100);
                echo '<br>';

                # Return de uma Função em php

                function calculo($a,$b){
                    return $a+$b;
                }
                echo calculo(13,54);
                echo '<br>';
                $nome= 'Abar';
                if(avaliar_nome($nome))
                    echo "O nome está correcto<br>";
                else
                    echo "Não é o nome<br>";
                
                function avaliar_nome($no){
                    if($no=='Aba')
                        return true;
                    else
                        return false;
                }

                echo '<br>';
                function andar(){

                }
                function cantar(){
                    return;
                }

                if(andar()===null)
                    echo "Não possue nenhum valor<br>";
                
                if(cantar()===null)
                    echo "Não possue nenhum valor<br>";
                
                echo '<br>';

                #Escopo de uma variável
                    #variável global e local
                $k= 23;
                function funcao(){
                    global $k;
                    $k=40;
                } 

                echo"<p>$k</p>";
                echo '<br>';

                $t= 150;
                function funcao2(){
                    $GLOBALS['t']=300;  
                } 
                funcao2();
                echo"<p>$t</p>";
                echo '<br>';

                #Funções anónimas

                $a= function(){
                    echo "<p>Olá</p><br>";
                };
                echo $a();

                echo '<br>';

                $digo=function($mensagem){
                    echo "<p> Eu falo: $mensagem</p><br>";
                };

               echo  $digo("Sábado fatidico");

                echo '<br>';

                $andar= function($metros){
                    return "Andei $metros metros";
                };
                echo $andar(100);

                echo '<br>';

                $w= function(){
                    return "<p>Função A</p><br>";
                };

                function juncao($j){
                    echo $j;
                }
                juncao($w());
                echo '<br>';

                # Closures e Arrow functions

                $x=14;
                $y=25;
                $m_closure= function($z) use($x,$y){
                    echo "$z - $x -$y";
                    $y +=100; # A instrução não vai alterar o valor de $y
                };
                $m_closure(10);
                echo '<br>';
                echo "<p>$y</p>";# o valor do y não foi alterado na closure
                echo '<br>';

                $m_funcao=fn($z)=> "$x-$y-$z";
                echo $m_funcao(10);
                echo '<br>';

                #Generators em php 'Função Adicional'
                    #função que permite gerar séries de valores
                    # os valores são devolvidos por uma instrunção yield e ela guarda o estado da função

                    function buscar_valor(){
                        for($i=0; $i<4; $i++)
                            yield $i;
                    }


                    foreach(buscar_valor() as $num)
                        echo "$num<br>";

                        echo '<br>';

                    function buscar_nome(){
                        yield 'Antonia';
                        yield 'Irinel';
                        yield from ['Emanuel', 'naiara', 'Maria'];
                        yield 'Vilnara';
                        yield 'Maria Helena';

                    }

                    foreach(buscar_nome() as $no){
                        echo "$no<br>";
                    }

                    echo '<br>';

                    
















                ?>
                <h2 style="color: <?= $opcao==1 ? 'RED' : 'YELLOWGIT' ?>">
                  ESTE TEXTO TEM COR DEFINIDA PELO PHP 
                </h2>
            </h1>
        </h3>


</body>
</html>