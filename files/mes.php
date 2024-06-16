<h3>جميع الرسائل</h3>

<?php 


$cov = recover_cov($conn);

if($cov == true){
	foreach($cov as $covv){
		?>
		<div class="cov">
		<a href="index.php?page=profile&n_user=<?php echo $covv['n_user'];?>"><?php echo $covv['n_user'];?></a>
		<img src="avatar/<?php echo $covv['n_avatar']?>"/>
		<a href=""><p><?php echo $covv['sujet_cov']?></p></a>
		<p><?php echo date('d/m/Y',strtotime($covv['date_message']))?></p>
		</div>
		<?php 
		
	}
	
}

else{
	
	?>
	<div class="error"> لاتوجد رسائل</div>
	<?php 
}

?>