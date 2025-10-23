<?php     /* Eksempel 2 */
/*
/*    Programmet mottar fra et HTML-skjema et svar p� sp�rsm�let "Hva er 3 ganger 3 ?"
/*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
/*    Meldingen skrives ut p� samme side som HTML-skjemaet er
*/
  if (isset($_POST ["fortsett"])) 
    {
      $svar=$_POST ["svar"];
	
      if ($svar == 9)  
        {
          print("Riktig. 3 ganger 3 er 9 ");
        }
      else 
        {
          print("Feil. 3 ganger 3 er ikke  $svar. 3 ganger 3 er 9 ");
        }
    }
?>