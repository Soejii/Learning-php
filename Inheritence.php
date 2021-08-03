<?php
/** inheritance -> proses pewarisan atribut dan method dari superclass ke sub class */
class Lingkaran{
    /** atribut */
    public $r;

    /** method */
    public function __construct($r)
    {
        $this->r = $r;
    }
    public function getLuas(){
        return $this->r * $this->r * 3.14;
    }

    public function getKeliling()
    {
        return $this->r * 2 * 3.14;
    }
}

class Kerucut extends Lingkaran
{ public $tinggi;

  public function __construct($r, $t, $s)
  {
      parent::__construct($r);
      $this->tinggi = $t;
      $this->pelukis + $s;
  }  

  public function getLuas()
  {

    return parent::getLuas() + 3.14 * $this->r * $this->tinggi * $this->pelukis;

  }
  
  public function getVolume()
  {
      return parent::getLuas() * $this->tinggi;
  }
}
    $topiultah = new Kerucut(21, 21, 10);
    echo nl2br("Luas Kerucut: ".$topiultah->getLuas()."\n");
    echo nl2br("Volume Kerucut: ".$topiultah->getVolume())






















?>



