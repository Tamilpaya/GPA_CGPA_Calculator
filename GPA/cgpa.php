<!DOCTYPE html>
<html>
<head>
  <title>SEM 1</title>
</head>
<body>
    <h1 style="text-align: center; color: green; cursor: default;">...Your CGPA...</h1>
    <hr><hr><br>

<?php
       //sem 1
       $a = $_GET["BS8161"];
       $b = $_GET["CY8151"];
       $c = $_GET["GE8151"];
       $d = $_GET["GE8152"];
       $e = $_GET["GE8161"];
       $f = $_GET["HS8151"];
       $g = $_GET["MA8151"];
       $h = $_GET["PH8151"];
      //sem 2
       $a1 = $_GET["HS8251"];
       $b1 = $_GET["MA8251"];
       $c1 = $_GET["PH8252"];
       $d1 = $_GET["BE8255"];
       $e1 = $_GET["IT8201"];
       $f1 = $_GET["CS8251"];
       $g1 = $_GET["GE8261"];
       $h1 = $_GET["CS8261"];
       $i1 = $_GET["IT8211"];
      //sem 3
       $a2 = $_GET["MA8351"];
       $b2 = $_GET["CS8351"];
       $c2 = $_GET["CS8391"];
       $d2 = $_GET["CS8392"];
       $e2 = $_GET["EC8394"];
       $f2 = $_GET["CS8381"];
       $g2 = $_GET["CS8383"];
       $h2 = $_GET["CS8382"];
       $i2 = $_GET["HS8381"];
      //sem 4
       $a3 = $_GET["MA8391"];
       $b3 = $_GET["CS8491"];
       $c3 = $_GET["CS8492"];
       $d3 = $_GET["CS8451"];
       $e3 = $_GET["CS8493"];
       $f3 = $_GET["GE8291"];
       $g3 = $_GET["CS8481"];
       $h3 = $_GET["CS8461"];
       $i3 = $_GET["HS8461"];
      //sem 5
       $a4 = $_GET["MA8551"];
       $b4 = $_GET["CS8591"];
       $c4 = $_GET["EC8691"];
       $d4 = $_GET["IT8501"];
       $e4 = $_GET["CS8494"];
       $f4 = $_GET["n1"];
       $g4 = $_GET["EC8681"];
       $h4 = $_GET["CS8581"];
       $i4 = $_GET["IT8511"];
      //sem 6
       $a5 = $_GET["IT8601"];
       $b5 = $_GET["CS8592"];
       $c5 = $_GET["IT8602"];
       $d5 = $_GET["CS8091"];
       $e5 = $_GET["CS8092"];
       $f5 = $_GET["n2"];
       $g5 = $_GET["CS8662"];
       $h5 = $_GET["CS8582"];
       $i5 = $_GET["IT8611"];
       $j5 = $_GET["HS8581"];
      //sem 7
       $a6 = $_GET["MG8591"];
       $b6 = $_GET["CS8792"];
       $c6 = $_GET["CS8791"];
       $d6 = $_GET["n3"];
       $e6 = $_GET["n4"];
       $f6 = $_GET["n5"];
       $g6 = $_GET["IT8711"];
       $h6 = $_GET["IT8761"];
      //sem 8
       $a7 = $_GET["n6"];
       $b7 = $_GET["n7"];
       $c7 = $_GET["IT8811"];

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
      		}elseif ($grd=='ra' or $grd=='sa' or $grd=='w' or $grd=='RA' or $grd=='SA' or $grd=='W' or empty($grd)) {
                $grd = 0;
      		}
      		return $grd;

      	}
      }
      ?>
      <div style="text-align: center;">
           
      </div>
      <?php
      $seme = $_GET["seme"];
      
            if($seme==1){
                  echo "You have to calculate GPA";
            }elseif ($seme==2) {
                  //sem 1
      $sem1a = new assign;
      $n1 = $sem1a->gpv($a);
      $n11 = 2;

      $sem1b = new assign;
      $n2 = $sem1b->gpv($b);
      $n22 = 3;

      $sem1c = new assign;
      $n3 = $sem1c->gpv($c);
      $n33 = 3;

      $sem1d = new assign;
      $n4 = $sem1d->gpv($d);
      $n44 = 4;

      $sem1e = new assign;
      $n5 = $sem1e->gpv($e);
      $n55 = 2;

      $sem1f = new assign;
      $n6 = $sem1f->gpv($f);
      $n66 = 4;

      $sem1g = new assign;
      $n7 = $sem1g->gpv($g);
      $n77 = 4;

      $sem1h = new assign;
      $n8 = $sem1h->gpv($h);
      $n88 = 3;

      //sem 2
      $sem2a = new assign;
      $o1 = $sem2a->gpv($a1);
      $o11 = 4;

      $sem2b = new assign;
      $o2 = $sem2b->gpv($b1);
      $o22 = 4;

      $sem2c = new assign;
      $o3 = $sem2c->gpv($c1);
      $o33 = 3;

      $sem2d = new assign;
      $o4 = $sem2d->gpv($d1);
      $o44 = 3;

      $sem2e = new assign;
      $o5 = $sem2e->gpv($e1);
      $o55 = 3;

      $sem2f = new assign;
      $o6 = $sem2f->gpv($f1);
      $o66 = 3;

      $sem2g = new assign;
      $o7 = $sem2g->gpv($g1);
      $o77 = 2;

      $sem2h = new assign;
      $o8 = $sem2h->gpv($h1);
      $o88 = 2;

      $sem2i = new assign;
      $o9 = $sem2i->gpv($i1);
      $o99 = 1;

       $neum = ($n1*$n11)+($n2*$n22)+($n3*$n33)+($n4*$n44)+($n5*$n55)+($n6*$n66)+($n7*$n77)+($n8*$n88)+($o1*$o11)+($o2*$o22)+($o3*$o33)+($o4*$o44)+($o5*$o55)+($o6*$o66)+($o7*$o77)+($o8*$o88)+($o9*$o99);

       $result = $neum/50;
            }elseif ($seme==3) {
                   //sem 1
      $sem1a = new assign;
      $n1 = $sem1a->gpv($a);
      $n11 = 2;

      $sem1b = new assign;
      $n2 = $sem1b->gpv($b);
      $n22 = 3;

      $sem1c = new assign;
      $n3 = $sem1c->gpv($c);
      $n33 = 3;

      $sem1d = new assign;
      $n4 = $sem1d->gpv($d);
      $n44 = 4;

      $sem1e = new assign;
      $n5 = $sem1e->gpv($e);
      $n55 = 2;

      $sem1f = new assign;
      $n6 = $sem1f->gpv($f);
      $n66 = 4;

      $sem1g = new assign;
      $n7 = $sem1g->gpv($g);
      $n77 = 4;

      $sem1h = new assign;
      $n8 = $sem1h->gpv($h);
      $n88 = 3;

      //sem 2
      $sem2a = new assign;
      $o1 = $sem2a->gpv($a1);
      $o11 = 4;

      $sem2b = new assign;
      $o2 = $sem2b->gpv($b1);
      $o22 = 4;

      $sem2c = new assign;
      $o3 = $sem2c->gpv($c1);
      $o33 = 3;

      $sem2d = new assign;
      $o4 = $sem2d->gpv($d1);
      $o44 = 3;

      $sem2e = new assign;
      $o5 = $sem2e->gpv($e1);
      $o55 = 3;

      $sem2f = new assign;
      $o6 = $sem2f->gpv($f1);
      $o66 = 3;

      $sem2g = new assign;
      $o7 = $sem2g->gpv($g1);
      $o77 = 2;

      $sem2h = new assign;
      $o8 = $sem2h->gpv($h1);
      $o88 = 2;

      $sem2i = new assign;
      $o9 = $sem2i->gpv($i1);
      $o99 = 1;

      //sem 3
      $sem3a = new assign;
      $p1 = $sem3a->gpv($a2);
      $p11 = 4;

      $sem3b = new assign;
      $p2 = $sem3b->gpv($b2);
      $p22 = 4;

      $sem3c = new assign;
      $p3 = $sem3c->gpv($c2);
      $p33 = 3;

      $sem3d = new assign;
      $p4 = $sem3d->gpv($d2);
      $p44 = 3;

      $sem3e = new assign;
      $p5 = $sem3e->gpv($e2);
      $p55 = 3;

      $sem3f = new assign;
      $p6 = $sem3f->gpv($f2);
      $p66 = 2;

      $sem3g = new assign;
      $p7 = $sem3g->gpv($g2);
      $p77 = 2;

      $sem3h = new assign;
      $p8 = $sem3h->gpv($h2);
      $p88 = 2;

      $sem3i = new assign;
      $p9 = $sem3i->gpv($i2);
      $p99 = 1;

       $neum = ($n1*$n11)+($n2*$n22)+($n3*$n33)+($n4*$n44)+($n5*$n55)+($n6*$n66)+($n7*$n77)+($n8*$n88)+($o1*$o11)+($o2*$o22)+($o3*$o33)+($o4*$o44)+($o5*$o55)+($o6*$o66)+($o7*$o77)+($o8*$o88)+($o9*$o99)+($p1*$p11)+($p2*$p22)+($p3*$p33)+($p4*$p44)+($p5*$p55)+($p6*$p66)+($p7*$p77)+($p8*$p88)+($p9*$p99);

       $result = $neum/74;
            }elseif ($seme==4) {
                   //sem 1
      $sem1a = new assign;
      $n1 = $sem1a->gpv($a);
      $n11 = 2;

      $sem1b = new assign;
      $n2 = $sem1b->gpv($b);
      $n22 = 3;

      $sem1c = new assign;
      $n3 = $sem1c->gpv($c);
      $n33 = 3;

      $sem1d = new assign;
      $n4 = $sem1d->gpv($d);
      $n44 = 4;

      $sem1e = new assign;
      $n5 = $sem1e->gpv($e);
      $n55 = 2;

      $sem1f = new assign;
      $n6 = $sem1f->gpv($f);
      $n66 = 4;

      $sem1g = new assign;
      $n7 = $sem1g->gpv($g);
      $n77 = 4;

      $sem1h = new assign;
      $n8 = $sem1h->gpv($h);
      $n88 = 3;

      //sem 2
      $sem2a = new assign;
      $o1 = $sem2a->gpv($a1);
      $o11 = 4;

      $sem2b = new assign;
      $o2 = $sem2b->gpv($b1);
      $o22 = 4;

      $sem2c = new assign;
      $o3 = $sem2c->gpv($c1);
      $o33 = 3;

      $sem2d = new assign;
      $o4 = $sem2d->gpv($d1);
      $o44 = 3;

      $sem2e = new assign;
      $o5 = $sem2e->gpv($e1);
      $o55 = 3;

      $sem2f = new assign;
      $o6 = $sem2f->gpv($f1);
      $o66 = 3;

      $sem2g = new assign;
      $o7 = $sem2g->gpv($g1);
      $o77 = 2;

      $sem2h = new assign;
      $o8 = $sem2h->gpv($h1);
      $o88 = 2;

      $sem2i = new assign;
      $o9 = $sem2i->gpv($i1);
      $o99 = 1;

      //sem 3
      $sem3a = new assign;
      $p1 = $sem3a->gpv($a2);
      $p11 = 4;

      $sem3b = new assign;
      $p2 = $sem3b->gpv($b2);
      $p22 = 4;

      $sem3c = new assign;
      $p3 = $sem3c->gpv($c2);
      $p33 = 3;

      $sem3d = new assign;
      $p4 = $sem3d->gpv($d2);
      $p44 = 3;

      $sem3e = new assign;
      $p5 = $sem3e->gpv($e2);
      $p55 = 3;

      $sem3f = new assign;
      $p6 = $sem3f->gpv($f2);
      $p66 = 2;

      $sem3g = new assign;
      $p7 = $sem3g->gpv($g2);
      $p77 = 2;

      $sem3h = new assign;
      $p8 = $sem3h->gpv($h2);
      $p88 = 2;

      $sem3i = new assign;
      $p9 = $sem3i->gpv($i2);
      $p99 = 1;

      //sem 4
      $sem4a = new assign;
      $q1 = $sem4a->gpv($a3);
      $q11 = 4;

      $sem4b = new assign;
      $q2 = $sem4b->gpv($b3);
      $q22 = 4;

      $sem4c = new assign;
      $q3 = $sem4c->gpv($c3);
      $q33 = 3;

      $sem4d = new assign;
      $q4 = $sem4d->gpv($d3);
      $q44 = 3;

      $sem4e = new assign;
      $q5 = $sem4e->gpv($e3);
      $q55 = 3;

      $sem4f = new assign;
      $q6 = $sem4f->gpv($f3);
      $q66 = 2;

      $sem4g = new assign;
      $q7 = $sem4g->gpv($g3);
      $q77 = 2;

      $sem4h = new assign;
      $q8 = $sem4h->gpv($h3);
      $q88 = 2;

      $sem4i = new assign;
      $q9 = $sem4i->gpv($i3);
      $q99 = 1;

       $neum = ($n1*$n11)+($n2*$n22)+($n3*$n33)+($n4*$n44)+($n5*$n55)+($n6*$n66)+($n7*$n77)+($n8*$n88)+($o1*$o11)+($o2*$o22)+($o3*$o33)+($o4*$o44)+($o5*$o55)+($o6*$o66)+($o7*$o77)+($o8*$o88)+($o9*$o99)+($p1*$p11)+($p2*$p22)+($p3*$p33)+($p4*$p44)+($p5*$p55)+($p6*$p66)+($p7*$p77)+($p8*$p88)+($p9*$p99)+($q1*$q11)+($q2*$q22)+($q3*$q33)+($q4*$q44)+($q5*$q55)+($q6*$q66)+($q7*$q77)+($q8*$q88)+($q9*$q99);

       $result = $neum/98;
            }elseif ($seme==5) {
                   //sem 1
      $sem1a = new assign;
      $n1 = $sem1a->gpv($a);
      $n11 = 2;

      $sem1b = new assign;
      $n2 = $sem1b->gpv($b);
      $n22 = 3;

      $sem1c = new assign;
      $n3 = $sem1c->gpv($c);
      $n33 = 3;

      $sem1d = new assign;
      $n4 = $sem1d->gpv($d);
      $n44 = 4;

      $sem1e = new assign;
      $n5 = $sem1e->gpv($e);
      $n55 = 2;

      $sem1f = new assign;
      $n6 = $sem1f->gpv($f);
      $n66 = 4;

      $sem1g = new assign;
      $n7 = $sem1g->gpv($g);
      $n77 = 4;

      $sem1h = new assign;
      $n8 = $sem1h->gpv($h);
      $n88 = 3;

      //sem 2
      $sem2a = new assign;
      $o1 = $sem2a->gpv($a1);
      $o11 = 4;

      $sem2b = new assign;
      $o2 = $sem2b->gpv($b1);
      $o22 = 4;

      $sem2c = new assign;
      $o3 = $sem2c->gpv($c1);
      $o33 = 3;

      $sem2d = new assign;
      $o4 = $sem2d->gpv($d1);
      $o44 = 3;

      $sem2e = new assign;
      $o5 = $sem2e->gpv($e1);
      $o55 = 3;

      $sem2f = new assign;
      $o6 = $sem2f->gpv($f1);
      $o66 = 3;

      $sem2g = new assign;
      $o7 = $sem2g->gpv($g1);
      $o77 = 2;

      $sem2h = new assign;
      $o8 = $sem2h->gpv($h1);
      $o88 = 2;

      $sem2i = new assign;
      $o9 = $sem2i->gpv($i1);
      $o99 = 1;

      //sem 3
      $sem3a = new assign;
      $p1 = $sem3a->gpv($a2);
      $p11 = 4;

      $sem3b = new assign;
      $p2 = $sem3b->gpv($b2);
      $p22 = 4;

      $sem3c = new assign;
      $p3 = $sem3c->gpv($c2);
      $p33 = 3;

      $sem3d = new assign;
      $p4 = $sem3d->gpv($d2);
      $p44 = 3;

      $sem3e = new assign;
      $p5 = $sem3e->gpv($e2);
      $p55 = 3;

      $sem3f = new assign;
      $p6 = $sem3f->gpv($f2);
      $p66 = 2;

      $sem3g = new assign;
      $p7 = $sem3g->gpv($g2);
      $p77 = 2;

      $sem3h = new assign;
      $p8 = $sem3h->gpv($h2);
      $p88 = 2;

      $sem3i = new assign;
      $p9 = $sem3i->gpv($i2);
      $p99 = 1;

      //sem 4
      $sem4a = new assign;
      $q1 = $sem4a->gpv($a3);
      $q11 = 4;

      $sem4b = new assign;
      $q2 = $sem4b->gpv($b3);
      $q22 = 4;

      $sem4c = new assign;
      $q3 = $sem4c->gpv($c3);
      $q33 = 3;

      $sem4d = new assign;
      $q4 = $sem4d->gpv($d3);
      $q44 = 3;

      $sem4e = new assign;
      $q5 = $sem4e->gpv($e3);
      $q55 = 3;

      $sem4f = new assign;
      $q6 = $sem4f->gpv($f3);
      $q66 = 2;

      $sem4g = new assign;
      $q7 = $sem4g->gpv($g3);
      $q77 = 2;

      $sem4h = new assign;
      $q8 = $sem4h->gpv($h3);
      $q88 = 2;

      $sem4i = new assign;
      $q9 = $sem4i->gpv($i3);
      $q99 = 1;

      //sem 5
      $sem5a = new assign;
      $r1 = $sem5a->gpv($a4);
      $r11 = 4;

      $sem5b = new assign;
      $r2 = $sem5b->gpv($b4);
      $r22 = 3;

      $sem5c = new assign;
      $r3 = $sem5c->gpv($c4);
      $r33 = 3;

      $sem5d = new assign;
      $r4 = $sem5d->gpv($d4);
      $r44 = 3;

      $sem5e = new assign;
      $r5 = $sem5e->gpv($e4);
      $r55 = 3;

      $sem5f = new assign;
      $r6 = $sem5f->gpv($f4);
      $r66 = 3;

      $sem5g = new assign;
      $r7 = $sem5g->gpv($g4);
      $r77 = 2;

      $sem5h = new assign;
      $r8 = $sem5h->gpv($h4);
      $r88 = 2;

      $sem5i = new assign;
      $r9 = $sem5i->gpv($i4);
      $r99 = 2;

       $neum = ($n1*$n11)+($n2*$n22)+($n3*$n33)+($n4*$n44)+($n5*$n55)+($n6*$n66)+($n7*$n77)+($n8*$n88)+($o1*$o11)+($o2*$o22)+($o3*$o33)+($o4*$o44)+($o5*$o55)+($o6*$o66)+($o7*$o77)+($o8*$o88)+($o9*$o99)+($p1*$p11)+($p2*$p22)+($p3*$p33)+($p4*$p44)+($p5*$p55)+($p6*$p66)+($p7*$p77)+($p8*$p88)+($p9*$p99)+($q1*$q11)+($q2*$q22)+($q3*$q33)+($q4*$q44)+($q5*$q55)+($q6*$q66)+($q7*$q77)+($q8*$q88)+($q9*$q99)+($r1*$r11)+($r2*$r22)+($r3*$r33)+($r4*$r44)+($r5*$r55)+($r6*$r66)+($r7*$r77)+($r8*$r88)+($r9*$r99);

        $result = $neum/123;
            }elseif ($seme==6) {
                  //sem 1
      $sem1a = new assign;
      $n1 = $sem1a->gpv($a);
      $n11 = 2;

      $sem1b = new assign;
      $n2 = $sem1b->gpv($b);
      $n22 = 3;

      $sem1c = new assign;
      $n3 = $sem1c->gpv($c);
      $n33 = 3;

      $sem1d = new assign;
      $n4 = $sem1d->gpv($d);
      $n44 = 4;

      $sem1e = new assign;
      $n5 = $sem1e->gpv($e);
      $n55 = 2;

      $sem1f = new assign;
      $n6 = $sem1f->gpv($f);
      $n66 = 4;

      $sem1g = new assign;
      $n7 = $sem1g->gpv($g);
      $n77 = 4;

      $sem1h = new assign;
      $n8 = $sem1h->gpv($h);
      $n88 = 3;

      //sem 2
      $sem2a = new assign;
      $o1 = $sem2a->gpv($a1);
      $o11 = 4;

      $sem2b = new assign;
      $o2 = $sem2b->gpv($b1);
      $o22 = 4;

      $sem2c = new assign;
      $o3 = $sem2c->gpv($c1);
      $o33 = 3;

      $sem2d = new assign;
      $o4 = $sem2d->gpv($d1);
      $o44 = 3;

      $sem2e = new assign;
      $o5 = $sem2e->gpv($e1);
      $o55 = 3;

      $sem2f = new assign;
      $o6 = $sem2f->gpv($f1);
      $o66 = 3;

      $sem2g = new assign;
      $o7 = $sem2g->gpv($g1);
      $o77 = 2;

      $sem2h = new assign;
      $o8 = $sem2h->gpv($h1);
      $o88 = 2;

      $sem2i = new assign;
      $o9 = $sem2i->gpv($i1);
      $o99 = 1;

      //sem 3
      $sem3a = new assign;
      $p1 = $sem3a->gpv($a2);
      $p11 = 4;

      $sem3b = new assign;
      $p2 = $sem3b->gpv($b2);
      $p22 = 4;

      $sem3c = new assign;
      $p3 = $sem3c->gpv($c2);
      $p33 = 3;

      $sem3d = new assign;
      $p4 = $sem3d->gpv($d2);
      $p44 = 3;

      $sem3e = new assign;
      $p5 = $sem3e->gpv($e2);
      $p55 = 3;

      $sem3f = new assign;
      $p6 = $sem3f->gpv($f2);
      $p66 = 2;

      $sem3g = new assign;
      $p7 = $sem3g->gpv($g2);
      $p77 = 2;

      $sem3h = new assign;
      $p8 = $sem3h->gpv($h2);
      $p88 = 2;

      $sem3i = new assign;
      $p9 = $sem3i->gpv($i2);
      $p99 = 1;

      //sem 4
      $sem4a = new assign;
      $q1 = $sem4a->gpv($a3);
      $q11 = 4;

      $sem4b = new assign;
      $q2 = $sem4b->gpv($b3);
      $q22 = 4;

      $sem4c = new assign;
      $q3 = $sem4c->gpv($c3);
      $q33 = 3;

      $sem4d = new assign;
      $q4 = $sem4d->gpv($d3);
      $q44 = 3;

      $sem4e = new assign;
      $q5 = $sem4e->gpv($e3);
      $q55 = 3;

      $sem4f = new assign;
      $q6 = $sem4f->gpv($f3);
      $q66 = 2;

      $sem4g = new assign;
      $q7 = $sem4g->gpv($g3);
      $q77 = 2;

      $sem4h = new assign;
      $q8 = $sem4h->gpv($h3);
      $q88 = 2;

      $sem4i = new assign;
      $q9 = $sem4i->gpv($i3);
      $q99 = 1;

      //sem 5
      $sem5a = new assign;
      $r1 = $sem5a->gpv($a4);
      $r11 = 4;

      $sem5b = new assign;
      $r2 = $sem5b->gpv($b4);
      $r22 = 3;

      $sem5c = new assign;
      $r3 = $sem5c->gpv($c4);
      $r33 = 3;

      $sem5d = new assign;
      $r4 = $sem5d->gpv($d4);
      $r44 = 3;

      $sem5e = new assign;
      $r5 = $sem5e->gpv($e4);
      $r55 = 3;

      $sem5f = new assign;
      $r6 = $sem5f->gpv($f4);
      $r66 = 3;

      $sem5g = new assign;
      $r7 = $sem5g->gpv($g4);
      $r77 = 2;

      $sem5h = new assign;
      $r8 = $sem5h->gpv($h4);
      $r88 = 2;

      $sem5i = new assign;
      $r9 = $sem5i->gpv($i4);
      $r99 = 2;

      //sem 6
      $sem6a = new assign;
      $s1 = $sem6a->gpv($a5);
      $s11 = 3;

      $sem6b = new assign;
      $s2 = $sem6b->gpv($b5);
      $s22 = 3;

      $sem6c = new assign;
      $s3 = $sem6c->gpv($c5);
      $s33 = 3;

      $sem6d = new assign;
      $s4 = $sem6d->gpv($d5);
      $s44 = 3;

      $sem6e = new assign;
      $s5 = $sem6e->gpv($e5);
      $s55 = 3;

      $sem6f = new assign;
      $s6 = $sem6f->gpv($f5);
      $s66 = 3;

      $sem6g = new assign;
      $s7 = $sem6g->gpv($g5);
      $s77 = 2;

      $sem6h = new assign;
      $s8 = $sem6h->gpv($h5);
      $s88 = 2;

      $sem6i = new assign;
      $s9 = $sem6i->gpv($i5);
      $s99 = 1;

      $sem60 = new assign;
      $s0 = $sem60->gpv($j5);
      $s00 = 1;

       $neum = ($n1*$n11)+($n2*$n22)+($n3*$n33)+($n4*$n44)+($n5*$n55)+($n6*$n66)+($n7*$n77)+($n8*$n88)+($o1*$o11)+($o2*$o22)+($o3*$o33)+($o4*$o44)+($o5*$o55)+($o6*$o66)+($o7*$o77)+($o8*$o88)+($o9*$o99)+($p1*$p11)+($p2*$p22)+($p3*$p33)+($p4*$p44)+($p5*$p55)+($p6*$p66)+($p7*$p77)+($p8*$p88)+($p9*$p99)+($q1*$q11)+($q2*$q22)+($q3*$q33)+($q4*$q44)+($q5*$q55)+($q6*$q66)+($q7*$q77)+($q8*$q88)+($q9*$q99)+($r1*$r11)+($r2*$r22)+($r3*$r33)+($r4*$r44)+($r5*$r55)+($r6*$r66)+($r7*$r77)+($r8*$r88)+($r9*$r99)+($s1*$s11)+($s2*$s22)+($s3*$s33)+($s4*$s44)+($s5*$s55)+($s6*$s66)+($s7*$s77)+($s8*$s88)+($s9*$s99)+($s0*$s00);

        $result = $neum/147;
            }elseif ($seme==7) {
                 //sem 1
      $sem1a = new assign;
      $n1 = $sem1a->gpv($a);
      $n11 = 2;

      $sem1b = new assign;
      $n2 = $sem1b->gpv($b);
      $n22 = 3;

      $sem1c = new assign;
      $n3 = $sem1c->gpv($c);
      $n33 = 3;

      $sem1d = new assign;
      $n4 = $sem1d->gpv($d);
      $n44 = 4;

      $sem1e = new assign;
      $n5 = $sem1e->gpv($e);
      $n55 = 2;

      $sem1f = new assign;
      $n6 = $sem1f->gpv($f);
      $n66 = 4;

      $sem1g = new assign;
      $n7 = $sem1g->gpv($g);
      $n77 = 4;

      $sem1h = new assign;
      $n8 = $sem1h->gpv($h);
      $n88 = 3;

      //sem 2
      $sem2a = new assign;
      $o1 = $sem2a->gpv($a1);
      $o11 = 4;

      $sem2b = new assign;
      $o2 = $sem2b->gpv($b1);
      $o22 = 4;

      $sem2c = new assign;
      $o3 = $sem2c->gpv($c1);
      $o33 = 3;

      $sem2d = new assign;
      $o4 = $sem2d->gpv($d1);
      $o44 = 3;

      $sem2e = new assign;
      $o5 = $sem2e->gpv($e1);
      $o55 = 3;

      $sem2f = new assign;
      $o6 = $sem2f->gpv($f1);
      $o66 = 3;

      $sem2g = new assign;
      $o7 = $sem2g->gpv($g1);
      $o77 = 2;

      $sem2h = new assign;
      $o8 = $sem2h->gpv($h1);
      $o88 = 2;

      $sem2i = new assign;
      $o9 = $sem2i->gpv($i1);
      $o99 = 1;

      //sem 3
      $sem3a = new assign;
      $p1 = $sem3a->gpv($a2);
      $p11 = 4;

      $sem3b = new assign;
      $p2 = $sem3b->gpv($b2);
      $p22 = 4;

      $sem3c = new assign;
      $p3 = $sem3c->gpv($c2);
      $p33 = 3;

      $sem3d = new assign;
      $p4 = $sem3d->gpv($d2);
      $p44 = 3;

      $sem3e = new assign;
      $p5 = $sem3e->gpv($e2);
      $p55 = 3;

      $sem3f = new assign;
      $p6 = $sem3f->gpv($f2);
      $p66 = 2;

      $sem3g = new assign;
      $p7 = $sem3g->gpv($g2);
      $p77 = 2;

      $sem3h = new assign;
      $p8 = $sem3h->gpv($h2);
      $p88 = 2;

      $sem3i = new assign;
      $p9 = $sem3i->gpv($i2);
      $p99 = 1;

      //sem 4
      $sem4a = new assign;
      $q1 = $sem4a->gpv($a3);
      $q11 = 4;

      $sem4b = new assign;
      $q2 = $sem4b->gpv($b3);
      $q22 = 4;

      $sem4c = new assign;
      $q3 = $sem4c->gpv($c3);
      $q33 = 3;

      $sem4d = new assign;
      $q4 = $sem4d->gpv($d3);
      $q44 = 3;

      $sem4e = new assign;
      $q5 = $sem4e->gpv($e3);
      $q55 = 3;

      $sem4f = new assign;
      $q6 = $sem4f->gpv($f3);
      $q66 = 2;

      $sem4g = new assign;
      $q7 = $sem4g->gpv($g3);
      $q77 = 2;

      $sem4h = new assign;
      $q8 = $sem4h->gpv($h3);
      $q88 = 2;

      $sem4i = new assign;
      $q9 = $sem4i->gpv($i3);
      $q99 = 1;

      //sem 5
      $sem5a = new assign;
      $r1 = $sem5a->gpv($a4);
      $r11 = 4;

      $sem5b = new assign;
      $r2 = $sem5b->gpv($b4);
      $r22 = 3;

      $sem5c = new assign;
      $r3 = $sem5c->gpv($c4);
      $r33 = 3;

      $sem5d = new assign;
      $r4 = $sem5d->gpv($d4);
      $r44 = 3;

      $sem5e = new assign;
      $r5 = $sem5e->gpv($e4);
      $r55 = 3;

      $sem5f = new assign;
      $r6 = $sem5f->gpv($f4);
      $r66 = 3;

      $sem5g = new assign;
      $r7 = $sem5g->gpv($g4);
      $r77 = 2;

      $sem5h = new assign;
      $r8 = $sem5h->gpv($h4);
      $r88 = 2;

      $sem5i = new assign;
      $r9 = $sem5i->gpv($i4);
      $r99 = 2;

      //sem 6
      $sem6a = new assign;
      $s1 = $sem6a->gpv($a5);
      $s11 = 3;

      $sem6b = new assign;
      $s2 = $sem6b->gpv($b5);
      $s22 = 3;

      $sem6c = new assign;
      $s3 = $sem6c->gpv($c5);
      $s33 = 3;

      $sem6d = new assign;
      $s4 = $sem6d->gpv($d5);
      $s44 = 3;

      $sem6e = new assign;
      $s5 = $sem6e->gpv($e5);
      $s55 = 3;

      $sem6f = new assign;
      $s6 = $sem6f->gpv($f5);
      $s66 = 3;

      $sem6g = new assign;
      $s7 = $sem6g->gpv($g5);
      $s77 = 2;

      $sem6h = new assign;
      $s8 = $sem6h->gpv($h5);
      $s88 = 2;

      $sem6i = new assign;
      $s9 = $sem6i->gpv($i5);
      $s99 = 1;

      $sem60 = new assign;
      $s0 = $sem60->gpv($j5);
      $s00 = 1;

      //sem 7
      $sem7b = new assign;
      $t1 = $sem7b->gpv($a6);
      $t11 = 3;

      $sem7c = new assign;
      $t2 = $sem7c->gpv($b6);
      $t22 = 3;

      $sem7d = new assign;
      $t3 = $sem7d->gpv($c6);
      $t33 = 3;

      $sem7e = new assign;
      $t4 = $sem7e->gpv($d6);
      $t44 = 3;

      $sem7f = new assign;
      $t5 = $sem7f->gpv($e6);
      $t55 = 3;

      $sem7g = new assign;
      $t6 = $sem7g->gpv($f6);
      $t66 = 3;

      $sem7h = new assign;
      $t7 = $sem7h->gpv($g6);
      $t77 = 2;

      $sem7i = new assign;
      $t8 = $sem7i->gpv($h6);
      $t88 = 2;

         $neum = ($n1*$n11)+($n2*$n22)+($n3*$n33)+($n4*$n44)+($n5*$n55)+($n6*$n66)+($n7*$n77)+($n8*$n88)+($o1*$o11)+($o2*$o22)+($o3*$o33)+($o4*$o44)+($o5*$o55)+($o6*$o66)+($o7*$o77)+($o8*$o88)+($o9*$o99)+($p1*$p11)+($p2*$p22)+($p3*$p33)+($p4*$p44)+($p5*$p55)+($p6*$p66)+($p7*$p77)+($p8*$p88)+($p9*$p99)+($q1*$q11)+($q2*$q22)+($q3*$q33)+($q4*$q44)+($q5*$q55)+($q6*$q66)+($q7*$q77)+($q8*$q88)+($q9*$q99)+($r1*$r11)+($r2*$r22)+($r3*$r33)+($r4*$r44)+($r5*$r55)+($r6*$r66)+($r7*$r77)+($r8*$r88)+($r9*$r99)+($s1*$s11)+($s2*$s22)+($s3*$s33)+($s4*$s44)+($s5*$s55)+($s6*$s66)+($s7*$s77)+($s8*$s88)+($s9*$s99)+($s0*$s00)+($t1*$t11)+($t2*$t22)+($t3*$t33)+($t4*$t44)+($t5*$t55)+($t6*$t66)+($t7*$t77);

         $result = $neum/169;
            }elseif ($seme==8) {
                   //sem 1
      $sem1a = new assign;
      $n1 = $sem1a->gpv($a);
      $n11 = 2;

      $sem1b = new assign;
      $n2 = $sem1b->gpv($b);
      $n22 = 3;

      $sem1c = new assign;
      $n3 = $sem1c->gpv($c);
      $n33 = 3;

      $sem1d = new assign;
      $n4 = $sem1d->gpv($d);
      $n44 = 4;

      $sem1e = new assign;
      $n5 = $sem1e->gpv($e);
      $n55 = 2;

      $sem1f = new assign;
      $n6 = $sem1f->gpv($f);
      $n66 = 4;

      $sem1g = new assign;
      $n7 = $sem1g->gpv($g);
      $n77 = 4;

      $sem1h = new assign;
      $n8 = $sem1h->gpv($h);
      $n88 = 3;

      //sem 2
      $sem2a = new assign;
      $o1 = $sem2a->gpv($a1);
      $o11 = 4;

      $sem2b = new assign;
      $o2 = $sem2b->gpv($b1);
      $o22 = 4;

      $sem2c = new assign;
      $o3 = $sem2c->gpv($c1);
      $o33 = 3;

      $sem2d = new assign;
      $o4 = $sem2d->gpv($d1);
      $o44 = 3;

      $sem2e = new assign;
      $o5 = $sem2e->gpv($e1);
      $o55 = 3;

      $sem2f = new assign;
      $o6 = $sem2f->gpv($f1);
      $o66 = 3;

      $sem2g = new assign;
      $o7 = $sem2g->gpv($g1);
      $o77 = 2;

      $sem2h = new assign;
      $o8 = $sem2h->gpv($h1);
      $o88 = 2;

      $sem2i = new assign;
      $o9 = $sem2i->gpv($i1);
      $o99 = 1;

      //sem 3
      $sem3a = new assign;
      $p1 = $sem3a->gpv($a2);
      $p11 = 4;

      $sem3b = new assign;
      $p2 = $sem3b->gpv($b2);
      $p22 = 4;

      $sem3c = new assign;
      $p3 = $sem3c->gpv($c2);
      $p33 = 3;

      $sem3d = new assign;
      $p4 = $sem3d->gpv($d2);
      $p44 = 3;

      $sem3e = new assign;
      $p5 = $sem3e->gpv($e2);
      $p55 = 3;

      $sem3f = new assign;
      $p6 = $sem3f->gpv($f2);
      $p66 = 2;

      $sem3g = new assign;
      $p7 = $sem3g->gpv($g2);
      $p77 = 2;

      $sem3h = new assign;
      $p8 = $sem3h->gpv($h2);
      $p88 = 2;

      $sem3i = new assign;
      $p9 = $sem3i->gpv($i2);
      $p99 = 1;

      //sem 4
      $sem4a = new assign;
      $q1 = $sem4a->gpv($a3);
      $q11 = 4;

      $sem4b = new assign;
      $q2 = $sem4b->gpv($b3);
      $q22 = 4;

      $sem4c = new assign;
      $q3 = $sem4c->gpv($c3);
      $q33 = 3;

      $sem4d = new assign;
      $q4 = $sem4d->gpv($d3);
      $q44 = 3;

      $sem4e = new assign;
      $q5 = $sem4e->gpv($e3);
      $q55 = 3;

      $sem4f = new assign;
      $q6 = $sem4f->gpv($f3);
      $q66 = 2;

      $sem4g = new assign;
      $q7 = $sem4g->gpv($g3);
      $q77 = 2;

      $sem4h = new assign;
      $q8 = $sem4h->gpv($h3);
      $q88 = 2;

      $sem4i = new assign;
      $q9 = $sem4i->gpv($i3);
      $q99 = 1;

      //sem 5
      $sem5a = new assign;
      $r1 = $sem5a->gpv($a4);
      $r11 = 4;

      $sem5b = new assign;
      $r2 = $sem5b->gpv($b4);
      $r22 = 3;

      $sem5c = new assign;
      $r3 = $sem5c->gpv($c4);
      $r33 = 3;

      $sem5d = new assign;
      $r4 = $sem5d->gpv($d4);
      $r44 = 3;

      $sem5e = new assign;
      $r5 = $sem5e->gpv($e4);
      $r55 = 3;

      $sem5f = new assign;
      $r6 = $sem5f->gpv($f4);
      $r66 = 3;

      $sem5g = new assign;
      $r7 = $sem5g->gpv($g4);
      $r77 = 2;

      $sem5h = new assign;
      $r8 = $sem5h->gpv($h4);
      $r88 = 2;

      $sem5i = new assign;
      $r9 = $sem5i->gpv($i4);
      $r99 = 2;

      //sem 6
      $sem6a = new assign;
      $s1 = $sem6a->gpv($a5);
      $s11 = 3;

      $sem6b = new assign;
      $s2 = $sem6b->gpv($b5);
      $s22 = 3;

      $sem6c = new assign;
      $s3 = $sem6c->gpv($c5);
      $s33 = 3;

      $sem6d = new assign;
      $s4 = $sem6d->gpv($d5);
      $s44 = 3;

      $sem6e = new assign;
      $s5 = $sem6e->gpv($e5);
      $s55 = 3;

      $sem6f = new assign;
      $s6 = $sem6f->gpv($f5);
      $s66 = 3;

      $sem6g = new assign;
      $s7 = $sem6g->gpv($g5);
      $s77 = 2;

      $sem6h = new assign;
      $s8 = $sem6h->gpv($h5);
      $s88 = 2;

      $sem6i = new assign;
      $s9 = $sem6i->gpv($i5);
      $s99 = 1;

      $sem60 = new assign;
      $s0 = $sem60->gpv($j5);
      $s00 = 1;

      //sem 7
      $sem7b = new assign;
      $t1 = $sem7b->gpv($a6);
      $t11 = 3;

      $sem7c = new assign;
      $t2 = $sem7c->gpv($b6);
      $t22 = 3;

      $sem7d = new assign;
      $t3 = $sem7d->gpv($c6);
      $t33 = 3;

      $sem7e = new assign;
      $t4 = $sem7e->gpv($d6);
      $t44 = 3;

      $sem7f = new assign;
      $t5 = $sem7f->gpv($e6);
      $t55 = 3;

      $sem7g = new assign;
      $t6 = $sem7g->gpv($f6);
      $t66 = 3;

      $sem7h = new assign;
      $t7 = $sem7h->gpv($g6);
      $t77 = 2;

      $sem7i = new assign;
      $t8 = $sem7i->gpv($h6);
      $t88 = 2;

      //sem 8
      $sem8a = new assign;
      $u1 = $sem8a->gpv($a7);
      $u11 = 3;

      $sem8b = new assign;
      $u2 = $sem8b->gpv($b7);
      $u22 = 3;

      $sem8c = new assign;
      $u3 = $sem8c->gpv($c7);
      $u33 = 10;

      $neum = ($n1*$n11)+($n2*$n22)+($n3*$n33)+($n4*$n44)+($n5*$n55)+($n6*$n66)+($n7*$n77)+($n8*$n88)+($o1*$o11)+($o2*$o22)+($o3*$o33)+($o4*$o44)+($o5*$o55)+($o6*$o66)+($o7*$o77)+($o8*$o88)+($o9*$o99)+($p1*$p11)+($p2*$p22)+($p3*$p33)+($p4*$p44)+($p5*$p55)+($p6*$p66)+($p7*$p77)+($p8*$p88)+($p9*$p99)+($q1*$q11)+($q2*$q22)+($q3*$q33)+($q4*$q44)+($q5*$q55)+($q6*$q66)+($q7*$q77)+($q8*$q88)+($q9*$q99)+($r1*$r11)+($r2*$r22)+($r3*$r33)+($r4*$r44)+($r5*$r55)+($r6*$r66)+($r7*$r77)+($r8*$r88)+($r9*$r99)+($s1*$s11)+($s2*$s22)+($s3*$s33)+($s4*$s44)+($s5*$s55)+($s6*$s66)+($s7*$s77)+($s8*$s88)+($s9*$s99)+($s0*$s00)+($t1*$t11)+($t2*$t22)+($t3*$t33)+($t4*$t44)+($t5*$t55)+($t6*$t66)+($t7*$t77)+($t8*$t88)+($u1*$u11)+($u2*$u22)+($u3*$u33);

      $result = $neum/185; 
            }
      
     ?>
      
      <div style="text-align: center; cursor: default">
      <h3>
      You secured <?php echo $result; ?> percentage
      </h3>
      </div>
      <br><hr><hr>
      <h2 style="text-align: center; color: red; cursor: default;">Thank You</h2>
      <hr><hr>

</body>
</html>