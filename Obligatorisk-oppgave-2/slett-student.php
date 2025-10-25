<?php  /* slett-student */
/*
/*  Programmet lager et skjema for å velge en student som skal slettes  
/*  Programmet sletter den valgte studenten
*/
?> 

<script src="funksjoner.js"> </script>

<h3>Slett student</h3>

<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return bekreft()">
  Student 
  <select name="student" id="student">
    <option value="">Velg student</option>
    <?php include("dynamiske-funksjoner.php"); listeboksKlasse(); ?>
  </select>  <br/>
  <input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettKlasseKnapp"]))
    {
      $klassekode=$_POST ["klasse"];	  
	  
      if (!$klassekode)
        {
          print ("Det er ikke valgt noe klasse"); 

        }
      else
        {	  		 
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
	
          $sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode';";
          mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
            /* SQL-setning sendt til database-serveren */
		
          print ("F&oslash;lgende klasse er n&aring; slettet: $klassekode  <br />");
        }	
    }
?>