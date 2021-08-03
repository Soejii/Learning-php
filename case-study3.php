<?php

class PDAM
{
    public $id,$nama,$penggunaan;
    public function __construct($id,$nama,$penggunaan)
    {
        $this->id = $id;
        $this->nama = $nama;
        if ($penggunaan <10) {
            $this->penggunaan = 10;
        }
        else {
            $this->penggunaan = $penggunaan;
        }
        $this->penggunaan = $penggunaan;
    }

   public function getBiaya() 
   {
   if ($this->penggunaan <=10) {
       $tarif = 10000;
   } elseif ($this->penggunaan > 10 && $this->penggunaan <20 ) {
       $tarif = 3000;
   } elseif ($this->penggunaan > 20 && $this->penggunaan <30 ) {
       $tarif = 4000;
   } elseif ($this->penggunaan > 30 ) {
       $tarif = 5000;
   } 


   $hasil = $this->penggunaan * $tarif + 10000;
}
  

   
   $pelanggan = [
    new PDAM (1,'Ali',24),
    new PDAM (2,'Umar',11),
    new PDAM (3,'Akbar',51),
    new PDAM (4,'Ambar',45),
    new PDAM (5,'Jack',12)
   ];

   for ($i=0; $i < count($pelanggan) ; $i++) { 
    echo nl2br("Pelanggan: ".$pelanggan[$i]->nama ." Biaya: ".$pelanggan[$i]->getBiaya()."\n");
 
?>