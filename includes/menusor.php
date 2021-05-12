<?php foreach ($oldalak as $url => $oldal) { ?>
	<?php if(! isset($_SESSION['login']) && $oldal['látom'][0] ||
			 isset($_SESSION['login']) && $oldal['látom'][1]) { ?>
		<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
			<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
			<?= $oldal['kiírni'] ?></a>
			</li>
	<?php } ?>
<?php } ?>