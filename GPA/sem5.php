<!DOCTYPE html>
<html>
<head>
  <title>SEM 5</title>
</head>
<body>
    <h1 style="text-align: center; color: green; cursor: default;">...Your 5th sem GPA...</h1>
    <hr><hr><br> 

      <?php

       $a = $_GET["MA8551"];
       $b = $_GET["CS8591"];
       $c = $_GET["EC8691"];
       $d = $_GET["IT8501"];
       $e = $_GET["CS8494"];
       $f = $_GET["n1"];
       $g = $_GET["EC8681"];
       $h = $_GET["CS8581"];
       $i = $_GET["IT8511"];

      class assign {
        public $grd;

        function gpv($grd) {
          //Grade point assigning....
          if ($grd=='o' or $grd=='O'){
            $grd = 10;
          }elseif ($grd=='a+' or $grd=='A+') {
            $grd = 9;
          }elseif ($grd=='a' or $grd=='A') {
            $grd = 8;
          }elseif ($grd=='b+' or $grd=='B+') {
            $grd = 7;
          }elseif ($grd=='b' or $grd=='B') {
            $grd = 6;
          }elseif ($grd=='ra' or $grd=='sa' or $grd=='w' or $grd=='RA' or $grd=='SA' or $grd=='W') {
                $grd = 0;
          }
          return $grd;

        }
      }

      $a1 = new assign;
      $n1 = $a1->gpv($a);
      $n11 = 4;

      $a2 = new assign;
      $n2 = $a2->gpv($b);
      $n22 = 3;

      $a3 = new assign;
      $n3 = $a3->gpv($c);
      $n33 = 3;

      $a4 = new assign;
      $n4 = $a4->gpv($d);
      $n44 = 3;

      $a5 = new assign;
      $n5 = $a5->gpv($e);
      $n55 = 3;

      $a6 = new assign;
      $n6 = $a6->gpv($f);
      $n66 = 3;

      $a7 = new assign;
      $n7 = $a7->gpv($g);
      $n77 = 2;

      $a8 = new assign;
      $n8 = $a8->gpv($h);
      $n88 = 2;

      $a9 = new assign;
      $n9 = $a9->gpv($i);
      $n99 = 2;

      $neum = ($n1*$n11)+($n2*$n22)+($n3*$n33)+($n4*$n44)+($n5*$n55)+($n6*$n66)+($n7*$n77)+($n8*$n88)+($n9*$n99);
      $result = $neum/25; ?>

      <div style="text-align: center; cursor: default;">
      <h3>
      You secured <?php echo $result; ?> percentage
      </h3>
      </div>
      <br><hr><hr>
      <br>
      <h2 style="text-align: center; color: red; cursor: default;">Thank You</h2>
      <br><hr><hr>

</body>
</html>