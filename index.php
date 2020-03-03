$hexa = '#ff0000';
$r = hexdec(substr($hexa,1,2)); // Se for sem o #, mude para 0, 2
$g = hexdec(substr($hexa,3,2)); // Se for sem o #, mude para 3, 2
$b = hexdec(substr($hexa,5,2)); // Se for sem o #, mude para 5, 2
$luminosidade = ( $r * 299 + $g * 587 + $b * 114) / 1000;

$cor_texto = ($luminosidade > 128) ? "#444" : "#fff";

echo '<body style="background-color: ' . $hexa . '">';
echo '<h1 style="color: ' . $cor_texto . '">Cor</h1>';
echo '</body>';

exit;
