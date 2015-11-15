<?php

$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");

$itunesURL = "https://itunes.apple.com/us/app/you-app";

//The URLs schema of the iOS app
$installedPaidAppURL = "paidApp://?";
$installedFreeAppURL = "freeApp://?";

if($iPhone || $iPod){
    
  echo '

        <script type="text/javascript"> 
        
               var startTime = new Date().getTime();
               var timeOut = 3000;               
               
               setTimeout(function() {
            
            var endTime = new Date().getTime();
            
            if(endTime - startTime>=timeOut){
                    window.close();                    
            }
            else
                   window.location = "'.$itunesURL.'";                    
                }, 1000);             
                   
        </script>
        
    <iframe src="'.$installedFreeAppURL.'" style=display:none;></iframe>
   <iframe src="'.$installedPaidAppURL.'" style=display:none;></iframe>


';  
}
else if($iPad){
    
    echo '
            <script type="text/javascript"> 
        
               var startTime = new Date().getTime();
               var timeOut = 3000;               
               
               setTimeout(function() {
            
            var endTime = new Date().getTime();
            
            if(endTime - startTime>=timeOut){
                    window.close();                    
            }
            else
                   window.location = "'.$itunesURL.'";                    
                }, 1000);             
                   
        </script>

        <iframe src="'.$installedFreeAppURL.'" style=display:none;></iframe>
        <iframe src="'.$installedPaidAppURL.'" style=display:none;></iframe>
       
        ';
    
}
else{  //Any other platform
    
    Echo "Please open from iOS Device";            
    
    
}



?>