<?php
 if(!isset($informations))
{
$informations = Array(/*Erreur*/ true, 'Erreur', 'Une erreur interne est survenue...', '', ROOTPATH.'/', 0)
;
}
 if($informations[0] === true) $type = 'erreur';
else $type = 'information';
?>
<title><?php echo $informations[1]; ?> : <?php echo $titre; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="language" content="fr" />
<meta http-equiv="Refresh" content="<?php echo $informations[5]; ?>;url=<?php echo $informations[4]; ?>">
<center>
	<div id="<?php echo $type; ?>">
		<?php echo $informations[2]; ?> 
		<br>
	</div>
</center>
<?php
unset($informations);
?>
<?php include('../includes/footer.php');?>