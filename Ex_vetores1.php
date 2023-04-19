<?php

        $media = 0;
        $dadosi = 0;
        $dados = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 
        11, 12, 13, 14, 15, 16, 17, 18, 19 ,20);

        $dados[0] = "Luis";
        $dados[1] = 10;
        $dados[2] = "Pedro";
        $dados[3] = 9;
        $dados[4] = "Miguel";
        $dados[5] = 8;
        $dados[6] = "Vitor";
        $dados[7] = 7;
        $dados[8] = "Gabriel";
        $dados[9] = 6;
        $dados[10] = "Murilo";
        $dados[11] = 5;
        $dados[12] = "Fernado";
        $dados[13] = 10;
        $dados[14] = "Henrique";
        $dados[15] = 9;
        $dados[16] = "Junior";
        $dados[17] = 8;
        $dados[18] = "Leonardo";
        $dados[19] = 7;

        $media = ($dados[1] + $dados[3] + $dados[5] + $dados[7] + $dados[9] + $dados[11] + $dados[13] + $dados[15] + $dados[17] + $dados[19])/10;

        echo "A media dos 10 alunos é: $media";

        
        }