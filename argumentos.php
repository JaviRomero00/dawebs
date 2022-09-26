<?php
echo "Hola\nPepe\n";
echo 'Hola\nPepe\n';

#Sintaxis heredoc:
echo <<<EOT
TODO ESTSO ES UNA CADENA tiene salto de linea \n esto es otra linea


continua la cadena

EOT;

#sintaxis nowdoc:

echo <<<'EOT'
AUANQUE SE RESPETA LOS SALTOS DE LINEA QUE DAMOS
LE PASA COMO A LAS COMILLAS SIMPLES EL CARACTER \n de salto de linea no va
es decir es como el anterior pero con la peculiaridades de las comillas simples
EOT;
