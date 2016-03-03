<html>
<body>

<table>
<?php
for($i = 0; $i <= 100; $i++):
?>
	<tr>
		<?php
		for($x = 0; $x <= 100; $x++):
		?>		
		<td>
			<?= ($i * $x) ? $i * $x : '  '; ?>
		</td>
		<?php
		endfor;
		 ?>
	</tr>

<?php
endfor;
?>
</table>
</body>
</html>