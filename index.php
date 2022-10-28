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
            $nome= 'lopo';
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
                    echo $cidades['Angola'][0] ."\n\r";
                    
                ?>

            </h1>
        </h3>


</body>
</html>