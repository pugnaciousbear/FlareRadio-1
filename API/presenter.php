<?php
   $output = file_get_contents("http://flarefm.cu.cc:8000/status.xsl");
   $temp_array = array();
   $search_for = "<td\s[^>]*class=\"streamdata\">(.*)<\/td>";
    $search_td = array('<td class="streamdata">','</td>');
   if(preg_match_all("/$search_for/siU",$output,$matches)) 
   {
      foreach($matches[0] as $match) 
      {
         $to_push = str_replace($search_td,'',$match);
            $to_push = trim($to_push);
            array_push($temp_array,$to_push);
      }
   }
   if($temp_array > 11)
   {
       echo ($temp_array[10]);
   }
   else
   {
       echo ('AutoDJ');
   }
?>
