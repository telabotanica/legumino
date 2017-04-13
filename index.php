<?php
// ceci est la page d'accueil
require_once('./scripts/PF.php');
require './scripts/MesFonctions.php';

// nbr d'inscrits et nbr d'observations
mysql_select_db($database_PF, $PF);
$query_Inscrits = "SELECT count(*) from contributeurs"; 
$Inscrits = mysql_query($query_Inscrits, $PF) or die(mysql_error());
$row_Inscrits = mysql_fetch_assoc($Inscrits);
$totalRows_Inscrits = mysql_num_rows($Inscrits);

mysql_select_db($database_PF, $PF);
$query_Contribs = "SELECT count(*) from contributions"; 
$Contribs = mysql_query($query_Contribs, $PF) or die(mysql_error());
$row_Contribs = mysql_fetch_assoc($Contribs);
$totalRows_Contribs = mysql_num_rows($Contribs);

entete();
?>

<table width="750" align="center">
   <tr>
   <td height="100" colspan="3" align="center"><font color="#33662B" face="Arial, Helvetica, sans-serif"><b>Bienvenue sur le site de cartographie des Leguminosae (Fabaceae) en France</b></font></td>
   </tr>

	<tr>
		<td width="50"></td>
		<td width="700" style='text-align:justify;'><p><img src="./images/fleche.jpg">&nbsp; 
        <font color="#33662B" face="Arial, Helvetica, sans-serif" size="-1"> <b><u><em>DESCRIPTION</em></u></b><br>
        <br>
        Ce projet de cartographie s&#8217;inscrit dans le cadre de la Monographie 
        des Legumineuses de France, en cours de r&eacute;daction par Pierre COULOT 
        et Philippe RABAUTE. Un des objectifs de cette monographie est de pr&eacute;senter 
        une cartographie &agrave; jour des esp&egrave;ces de la flore fran&ccedil;aise 
        &agrave; maille d&eacute;partementale, en scindant bien les donn&eacute;es 
        anciennes et r&eacute;centes (il est donc imp&eacute;ratif de mentionner 
        la date de l'observation). Nous esp&eacute;rons que les botanistes de 
        terrain pourront y noter leurs observations r&eacute;centes, voire des 
        donn&eacute;es anciennes, dans la mesure o&ugrave; elles seront d&ucirc;ment 
        dat&eacute;es et r&eacute;pertori&eacute;es, avec les r&eacute;f&eacute;rences 
        correspondantes (part d&#8217;herbier, donn&eacute;e bibliographique, 
        nom de l'observateur ou du r&eacute;colteur). N&#8217;h&eacute;sitez pas 
        &agrave; saisir des donn&eacute;es concernant des esp&egrave;ces communes 
        au plan national; ce sont g&eacute;n&eacute;ralement celles dont les 
        cartographies sont les plus difficiles &agrave; &eacute;tablir. Nous remercions 
        par avance tr&egrave;s sinc&egrave;rement tous les contributeurs. </font></p>
      <p><font color="#33662B" face="Arial, Helvetica, sans-serif" size="-1"> 
        <br>
        <br>
        <img src="./images/fleche.jpg">&nbsp;<b><u><em>COMMENT CONTRIBUER</em></u> 
        ?</b><br>
        <br>
        </font> <font color="#33662B" face="Arial, Helvetica, sans-serif" size="-1">Après 
        inscription sur ce site, vous pouvez ajouter vos observations, par commune, 
        directement dans la base de données. Pour cela rendez-vous dans la rubrique 
        "Ajouter".</font><font color="#33662B" face="Arial, Helvetica, sans-serif" size="-1"> 
        </font></p>
      <p><font color="#33662B" face="Arial, Helvetica, sans-serif" size="-1">
	  
	  </font></p>
      <p><font color="#33662B" size="-1" face="Arial, Helvetica, sans-serif">
	  Nous comptons sur vous.
	  <br><br>
	  <?
	  if ($row_Inscrits['count(*)'] <= 1) { $contributeurs = "contributeur" ; } else { $contributeurs = "contributeurs" ; }
	  if ($row_Contribs['count(*)'] <= 1) { $observations = "observation" ; } else { $observations = "observations" ; }
	  ?>
	  <em><? echo "Actuellement dans la base : ".$row_Inscrits['count(*)']." ".$contributeurs.", ".$row_Contribs['count(*)']." ".$observations ; ?></em>
	  </font></p>
      <p>&nbsp;</p>
      <br>
		
		
		<noscript>
		<p align="center"><font color="#33662B" face="Arial, Helvetica, sans-serif" size="-1">Le Javascript est nécessaire pour utiliser ce site web:<br></font>
		<b><font color="#CC0000" face="Arial, Helvetica, sans-serif" size="+1">
		Javascript n'est pas en fonctionnement sur votre logiciel de navigation.<br>Vous devez l'activer pour utiliser ce site web!
		</font></b><br>
		</p>
		</noscript>

		
		</td>
	</tr>
</table>
<br>
<?
mysql_free_result($Inscrits);
mysql_free_result($Contribs);
pied();
?>



