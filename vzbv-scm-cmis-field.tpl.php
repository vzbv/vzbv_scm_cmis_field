<div>
	<?php print $link; ?>
	<?php if ($description): ?>
	<small><?php print $description; ?></small>
	<?php endif; ?>
	<div class="meta">
		<label><?php print $mtime['label']; ?>:&nbsp;
			<time datetime="<?php print $mtime['timestamp']; ?>?"><?php print $mtime['formatted']; ?></time>
		</label>
		<label><?php print $size['label']; ?>:&nbsp;
			<span class="file-size" data-bytesize='<?php print $size['bytes']; ?>'><?php print $size['formatted']; ?></span>
		</label>
	</div>
</div>