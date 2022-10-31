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

                    ## Introdução a Programação Orientada a objectos POO(OOP)
                    /* 
                        Uma classe é um molde/forma/Modelo a partir do qual criamos objectos.
                        Teoricamente:
                        Class Humano
                            >Cabelo
                            >Genero
                            >Peso
                            >Caminhar

                        Homem ->Humano
                            >Cabelo - castanho //Propriedades ou caracteristicas
                            >Genero - masculino //Propriedades ou caracteristicas
                            >Peso - 75 //Propriedades ou caracteristicas
                            >caminhar() //métodos ou funções que o modelo/objecto realiza

                        Mulher ->Humano
                            >Cabelo - Claro //Propriedades ou caracteristicas
                            >Genero - femenino //Propriedades ou caracteristicas
                            >Peso - 63 //Propriedades ou caracteristicas
                            >caminhar() //métodos ou funções que o modelo/objecto realiza/faz
                            >cantar() - pode ter métodos adicionais //métodos ou funções que o modelo/objecto realiza/faz
                        Instância- Criação de um objecto a partir de uma classe
                        Constructor- Metodo de é automaticamente executado apos a instanciação de um objecto
                        Uma boa prátia é criar o  menor número de propriedades de uma classe como publicas.
                        Colocar uma propriedade como pública é expor em demasia essa propriedade.
                        
                        Para definir correctamente este tipo de situações, podemos usar métodos para defenir e ir buscar
                        os valores das propriedades privadas. Estes métodos permitir garantir que a integridade das propriedades
                        seja mantida.
                    */
                    
                    #Classes
                    class Humano{
                        #Acess Modifiers/Leves
                            ##Public- os membros públicos das propriedades e métodos de uma classe, estão sempre acessíveis. 
                            ##Protected- Um elemento protected pode ser alcançado dentro da classe e dentro de uma qualquer classe que seja uma extensão de outra classe.
                            ##Private- Só pode ser visível dentro da própia classe. Não é visivel nos objecto instanciados nem noutras classes herdadas.

                        #public $nome = 'Adão';
                       # public $apelido= 'Barros';
                        private $nome;
                        private $apelido;
                        //public $idade;
                        #Construct
                        function __construct($n, $a){
                            $this->nome=$n;
                            $this->apelido=$a;
                        }
                        public function nomeCompleto(){
                            return $this->nome . ' '. $this->apelido;
                        }

                    }

                    class Humano1{
                        public $nome ;
                        public $apelido;
                        #Promoção de propriedades em PHP8 PROPERTY PROMOTION NO PHP
                        #Construct PHP7
                        function __construct($n, $a){
                            $this->nome=$n;
                            $this->apelido=$a;
                        }

                    }

                    class Humano2{
                        # PHP8
                        #Construct
                        #Setter-> definir um valor 
                        # Getter- buscar um valor

                        private $idade=0;


                        function __construct(public $nome, public $apelido){
                            $this->nome =$nome;
                            $this->apelido =$apelido;
                        }
                        //SETTER
                        public function setIdade($valor){
                            if (is_numeric($valor)) {
                                $this->idade=$valor;
                            }
                            
                        }
                        //GETTER
                        public function GetIdade(){
                            return $this->idade;
                        }
                        public function falar(){

                        }
                        private function andar(){
                            //Método acessivel dentro da classe
                        }
                        
                        public function movimento(){
                            $this->andar();
                        }
                        //Static ou class Members- apenas existentes uma vez na classe
                        static $idad;
                        static function movendo(){

                        }


                    }


                    class JogadorFutebol{

                    }
                    class FiguraGeometrica{
                        public $largura, $altura;
                        public $x, $y;
                        function novaArea($a, $b){
                            return $a*$b;
                        }
                    }
                    echo '<br>';
                    #Classes anónimas
                    $b= new class{
                        function teste(){
                            echo 'Teste - classe anónima';
                        }
                    };

                    echo '<br>';
                    #Instanciar um objecto
                    $homem = new Humano('Adão', 'Porto');
                    $mulher= new Humano('Ana', 'Ribeiro');

                    echo $homem->nomeCompleto();
                    echo '<br>';
                    echo $mulher->nomeCompleto();
                    echo '<br>';
                    $homem= new Humano1('vitor', 'simões');
                    //$homem->nome="Vitor";
                    //$homem->apelido="Simões";

                    $mulher= new Humano2('Ana', 'lucia');
                    $mulher->movimento();
                    echo '<br>';
                    echo $homem->nome . ' '. $homem->apelido;
                    echo '<br>';
                    echo $mulher->nome . ' '. $mulher->apelido;
                    echo '<br>';
                    $b->teste();
                    echo '<br>';

                    #Heranças | INHERITANCE
                     ##Mecanismo através do qual podemos criar classes que herdam propriedades e métodos de outra classe.
                        # A classe inicial da qual as outras vão ser criadas, é designada por classe base
                        # Todas as classes que herdaram propriedades e métodos são designadas classes derivadas
                    class Animal{
                        public $especie;
                        public $peso;
                        function tipoEspecie(){
                            return "Este animal  é da espécie {$this->especie}";

                        }
                        function mover(){
                            echo 'Mover a partir da classe base';
                        }
                    }
                    $animal= new Animal();
                    $animal->especie='Mamíferos';
                    echo $animal->tipoEspecie();
                    echo '<br>';
                    #Herança
                    class Mamifero extends Animal{
                        public $quantidade_pernas;
                        public $tem_pelo;
                        function temQuantasPernas(){
                            return "O Animal da espécie  {$this->especie} tem  {$this->quantidade_pernas} pernas";
                        }
                    }

                    $mamifero= new Mamifero();
                    $mamifero->especie='Cavalo';
                    $mamifero->quantidade_pernas=4;
                    echo $mamifero->temQuantasPernas();
                    echo '<br>';
                    //Tipo_Bicicleta= ['Montanha', 'Corrida', 'competiçãao']
                    //Tipo_extrutura= ['Liga leve', 'Alumínio', 'Ferro', 'Cobre']
                    class Veiculo{
                        public $marca;
                        public $ano;
                        public $tipo_de_locomocao;
                        #FINAL
                        final function mover(){
                            echo "Velocidade máxima";
                        }

                    }

                    class Automovel extends Veiculo{
                        public $potencia;
                        public $autonomia;
                        public $num_portas;
                    }


                    class Bicicleta extends Veiculo{
                        public $tipo_bicicleta;
                        public $tipo_estrutura;
                        /*function mover(){
                            echo "Velocidade Mínima";
                        }*/
                    }


                    echo '<br>';
                    #Overriding
                        ## O mecanismo de overriding permite a uma classe derivada ter métodos reescritos especificamente  para essa classe
                    class Peixe extends Animal{
                        #OVERRIDING
                        function mover(){
                            echo 'Mover a partir da classe peixe.';
                        }
                    }

                    $animal1= new Animal();
                    $animal1->mover();
                    echo '<br>';
                    $mamifero1= new Mamifero();
                    $mamifero1->mover();
                    echo '<br>';
                    $peixe= new Peixe();
                    $peixe->mover();
                    echo '<br>';
                    class Retangulo{
                        public $largura, $altura;
                        function __construct($l, $a)
                        {
                            $this->largura= $l;
                            $this->altura=$a;
                        }
                        function calcularArea(){
                            return $this->largura*$this->altura;
                        }
                    }

                    class Quadrado extends Retangulo{
                        function __construct($l)
                        {
                            $this->largura=$l;
                            $this->altura=$l;
                        }

                    }

                    $ret= new Retangulo(10,20);
                    $quad= new Quadrado(10);
                    echo "O resultado do Rectangulo é {$ret->calcularArea()}";
                    echo '<br>';
                    echo $quad->calcularArea();
                    echo '<br>';
                    # chamando um construtor de class usando o Parent
                    class Quadrado1 extends Retangulo{
                        function __construct($l)
                        {
                            parent::__construct($l,$l);
                        }
                    }
                    $quad1=new Quadrado1(4);
                    echo $quad1->calcularArea();
                    echo '<br>';
                    // Outra forma 
                    class Quadrado2 extends Retangulo{
                        function __construct($l)
                        {
                            Retangulo::__construct($l,$l);
                        }
                    }
                    $quad2=new Quadrado2(6);
                    echo $quad2->calcularArea();
                    echo '<br>';

                    #FINAL
                     ##Impede que uma classe derivada possa fazer override de métodos.


                    echo '<br>';
                    #Trabalhando com Getters E Setters
                        ##Getters && Setters

                    $eu= new Humano2('albo', 'Delrei');
                    $eu->setIdade(45);
                    echo $eu->GetIdade();
                    echo '<br>';
                    class Tempo{
                        private $segundos;
                        ##SETTERS
                        function setSegundos($valor){
                            if(!is_numeric($valor) || $valor<0){
                                $this->segundos=0;
                            }
                            else{
                                $this->segundos=$valor;
                            }
                        }
                        ##GETTERS
                        public function getSegundos(){
                            return $this->segundos;
                        }


                        function setMinutos($valor){
                            if($valor==0){
                                $this->segundos=0;
                            }else {
                                $this->segundos=$valor*60;
                            }
                            
                        }
                        


                        public function getMinutos(){
                            return $this->segundos/60;
                        }

                    }    

                    echo '<br>';
                    $tempo= new Tempo();
                    $tempo->setSegundos(115);
                    echo $tempo->getSegundos();
                    echo '<br>';
                    echo $tempo->getMinutos() .' Minutos';
                    echo '<br>';
                    $tempo->setMinutos(5);
                    echo 'os 5 minutos equivalem a '. $tempo->getSegundos().' Segundos';
                    echo '<br>';
                    //Static ou class Members- apenas existentes uma vez na classe
                    class operacao{
                        static $valor1;
                        static $valor2;
                        static function adic(){
                            return self::$valor1+self::$valor2;
                        }
                    }

                    operacao::$valor1=13;
                    operacao::$valor2=33;
                    echo operacao::adic();


                    echo '<br>';
                    class operacoesfundamentais{
                        //retorna um número sorteado entre $min e $max
                        static function numeroAleatorio($min, $max){
                            return rand($min, $max);
                        }
                        static function calcularForma($a, $b){
                            //(a x 2)+(a x b)
                            return ($a*2)+($b*$a);
                        }
                        static function criarNome(){
                            $nomed=['Antonia', 'Emanuel', 'Sab', 'Naiara', 'Etna', 'Nara'];
                            $apeld=['silva', 'almeida', 'santos', 'rodrigues', 'oliveira', 'costa'];
                            return $nomed[rand(0, count($nomed)-1)]. ' '.$apeld[rand(0,count($apeld)-1)];
                        }
                    }
                    echo operacoesfundamentais::numeroAleatorio(0,1000);
                    echo '<br>';
                    echo operacoesfundamentais::calcularForma(12,44);
                    echo '<br>';
                    echo operacoesfundamentais::criarNome();
                    echo '<br>';

                    # CONSTANTS, DEFINE, DEFINED

                    ## Para verificar se uma constante já existe
                    if(!defined('APP_NAME')){
                        define('APP_NAME', 'Minha Aplicação');
                    } 
                    echo APP_NAME;
                    echo '<br>';
                    #outra forma 
                    defined('CONSTANTE') or define('CONSTANTE', 'VALOR');

                    #CONSTANTES EM UM ARRAY
                    const NAME= ['joao', 'Ana', 'carlos'];
                    echo '<br>';
                    echo NAME[0];
                    echo '<br>';
                    define('NAMES', ['bk', 'pk', 'l7', 'xama']);
                    echo NAMES[2];
                    echo '<br>';
                    # CONSTANTES MÁGICAS
                        ## As constantes mágicas são 8 e são designadas assim por que o seu valor 
                        ## varia automaticamente dependendo onde estão  a ser usadas.
                    //echo __LINE__ .'<br>'; #indica a linha do script;
                    //echo __FILE__ .'<br>'; #indica o caminho completo do script;
                    //echo __DIR__ .'<br>'; #indica a PASTA ONDE O script ESTÁ ALOJADO;


                    echo '<br>';
                    #CLASSES ABSTRATAS
                    /*
                        Uma classe abstrata é constituida por uma implementação parcial a partir das quais outras classes podem crescer.
                        
                        Quando uma classe é declarada como abstracta, isso significa que ela tem métodos incopletos que, obrigatoriamente 
                        têm que ser implementados nas classes que a herdam.

                        As classes Abstractas não podem ser instanciadas. Servem apenas para poderem ser herdadas por outras classes.

                        Uma classe Abstrata(CA) permite a implementação parcial de métodos e a definição de um modelo de implementação
                        de outros métodos. Isto permite em modelos de POO, juntamente com outro mecanismo, designado por interfaces, a estruturação de codigo
                        que segue os melhores padrões de escrita. É uma materia fundamentalmente destinada para quem constroi códigos para ser implementado por 
                        Outros programadores.
            

                    */

                    abstract class Forma
                    {
                        public $largura= 100;
                        public $altura= 200;
                        abstract public function area();
                        function Altura(){
                            return $this->altura;
                        }  
                    }

                    class Rectangu extends Forma{
                        public function area()
                        {
                            return $this->largura*$this->altura;
                        }
                    }

                    $r= new Rectangu();
                    echo $r->area();
                    echo '<br>';
                    echo $r->Altura();
                    echo '<br>';
                    #TRAITS 
                    /*
                        São grupos de métodos que podem ser inseridos dentro de classes.
                        foram adicionados a linguagem php para aumentar a reutilização de códigos.
                     */
        
                    
                     trait MinhasHabilidade{
                        public function falar($mensagem){
                            echo "Eu digo: $mensagem";
                        }

                        function saltar($metross){
                            echo "EU salto $metross metros.";
                        }
                     }

                     class Ser{
                        use MinhasHabilidade;
                     }

                     $sou= new Ser();
                     echo $sou->falar('Boa noite');
                     echo '<br>';
                     echo $sou->saltar(1);
                    echo '<br>';



                    












                ?>
                <h2 style="color: <?= $opcao==1 ? 'RED' : 'YELLOWGIT' ?>">
                  ESTE TEXTO TEM COR DEFINIDA PELO PHP 
                </h2>
            </h1>
        </h3>


</body>
</html>