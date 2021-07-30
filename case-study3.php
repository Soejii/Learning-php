<?php

class PDAM
{
    public $id,$nama,$penggunaan;
    public function __construct($id,$nama,$penggunaan)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->penggunaan = $penggunaan;
    }

   public function getBiaya() 
   {
   if ($penggunaan <=10) {
       tarif = 10000;
   } elseif ($penggunaan > 10 && $penggunaan <20 ) {
       tarif = $penggunaan * 30000;
   } elseif ($penggunaan > 20 && $penggunaan 30 ) {
       tarif = $penggunaan * 4000;
   } elseif ($penggunaan > 30 ) {
       tarif = $penggunaan * 5000;
   } 

   }

   ali = new Pelanggan("1","Ali", 90);
   echo nl2br("\n Tagihan ".$galuh->nama." sebesar ".$galuh->getBiaya());

  
       
   
    




}






?>