<?php

/**
 * PearsonSignificance
 * Calculates the Significance for Pearson Correlation Coefficient.
 *
 * @author ROMAN GRANOVSKYI, AUSSIEDEV CONSULTING
 * @email romziki@gmail.com
 * @copyright Copyright (c) 2009
 * @version 1
 * @license : GNU General Public License (GPL)
 * @access public
 */

/**
 * *====
 *
 * EXAMPLE OF USAGE
 * $s  =new PearsonSignificance();
 * $b  =$s->Sign( 59, 0.251 );
 */

class PearsonSignificance {
    var $pi, $pj2, $pj4, $pi2, $e, $exx, $dgr;

    public function PearsonSignificance()
    {
        $this->pi=pi();
        $this->pj2=	$this->pi/2;
        $this->pj4=	$this->pi/4;
        $this->pi2=2*	$this->pi;
        $this->e = exp(1);
        $this->exx = 1.10517091807564;
        $this->dgr=180/	$this->pi;
         }

    function buzz( $t, $n )
    {
        $t=abs($t);
        $rt=$t/sqrt($n);
        $fk=atan($rt);
         if ( $n == 1 ) {
            return 1 - $fk / $this->pj2;
        }
        $ek=sin($fk);$dk=cos($fk);
         if ( ( $n % 2 ) == 1 ) {
            return 1 - ( $fk + $ek * $dk * $this->zip( $dk * $dk, 2, $n-3, -1 ) ) / $this->pj2;
        } else {
            return 1 - $ek * $this->zip( $dk * $dk, 1, $n-3, -1 );
        }
    }

    function zip( $q, $i, $j, $b )
    {
        $zz=1;
        $z=$zz;
        $k=$i;
         while ( $k <= $j ) {
            $zz=$zz*$q*$k/($k-$b);
            $z=$z+$zz;
            $k=$k+2;

        }
        return $z;
    }

    function Sign( $n, $r )
    {
        $dF=$n-2;
        $t_denom =sqrt( (1-($r*$r))/($n-2));
        $t=$r/$t_denom;
        $a=$this->buzz($t,$dF);
        $a=round($a,4);
        $a=sprintf("%0.3f",$a);

        return $a;
    }
} ;

