<div id="debug">
<?php echo t('<b>Generated in:</b> %.3f (second|seconds)','Benchmark',$data['time']); ?><br/>
<?php echo t('<b>Memory consumption:</b> %s','Benchmark',$data['memory']); ?>
<?event('debug')?>
</div>