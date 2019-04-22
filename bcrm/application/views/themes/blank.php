<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php foreach ($css as $file) {echo "<link rel=\"stylesheet\" href=\"{$file}\" type=\"text/css\" />\n";}?>
<style type="text/css">
<?php
$styling = $this->load->get_inline_styling();
echo $styling['infile'];
?>
</style>
<title>TopsMarket Thailand</title>
</head>
<body>

<?php echo $output ?>

<?php foreach ($js as $file) {echo "<script type=\"text/javascript\" src=\"{$file}\"></script>\n";}?>
<script type="text/javascript">
<?php
$script = $this->load->get_inline_scripting();
echo $script['infile'];
?>
</script>
</body>
</html>