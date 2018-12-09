<?php
function cyrptageImp($s)
{
  $strc = chr(ord($s[0])+10).chr(ord($s[1])+2).chr(ord($s[2])+7).chr(ord($s[3])+12);
  return $strc;
}
function cyrptageP($s)
{
  $strc =  chr(ord($s[0])+11).chr(ord($s[1])+3).chr(ord($s[2])+6);
  return $strc;
}

$tab = file('input.txt');
for ($i=0; $i <count($tab) ; $i++) {
  // code...
  $str = $tab[$i];
  if (($i+1) % 2 == 0) {
    $str2 = "";
    // code...
    //ligne paire cyle de 3
    for ($j=0; $j < strlen($str)-2; $j = $j+3) {
      // code...
      if ($str[$j] != '')
      {
        $str2 .= $str[$j];
      }
      if ($str[$j+1] != '')
      {
        $str2 .= $str[$j+1];
      }
      if ($str[$j+2] != '')
      {
        $str2 .= $str[$j+2];
      }
      $strc = cyrptageP($str2);
    }

  }
  else {
    $str2 = "";
    // code...
    //ligne impaire cycle de 4
    for ($j=0; $j < strlen($str)-2; $j = $j+4) {
      // code...
      if ($str[$j] != '')
      {
        $str2 .= $str[$j];
      }
      if ($str[$j+1] != '')
      {
        $str2 .= $str[$j+1];
      }
      if ($str[$j+2] != '')
      {
        $str2 .= $str[$j+2];
      }
      if ($str[$j+3] != '')
      {
        $str2 .= $str[$j+3];
      }
      $strc = cyrptageImp($str2);
    }
  }
  echo $strc."<br>";
}
?>