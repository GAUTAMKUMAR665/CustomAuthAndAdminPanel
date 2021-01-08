<?php

namespace App\Traits;

use Illuminate\Support\Facades\Mail;

use Exception;

trait SendMail{

    protected function sendMail()
    {
 
        
    }


    protected function sendSms($phone,$message)
    {
          try{
              $url="https://api.msg91.com/api/sendhttp.php?mobiles=$phone&authkey=298624AWJzQa0Z8n5da2dd16&route=4&sender=TRFVFT&message=$message&country=91";

              if(file_get_contents($url))
              {
                  return true;
              }

          }catch(Execption $e)
          {
              return false;
          }
    }
}



?>