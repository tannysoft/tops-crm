<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<?php foreach ($css as $file) {echo "<link rel=\"stylesheet\" href=\"{$file}\" type=\"text/css\" />\n";}?>
<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
<style type="text/css">
<?php
$styling = $this->load->get_inline_styling();
echo $styling['infile'];
?>
</style>
<title>LINE Tops Thailand</title>
</head>
<body>

<?php echo $output ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=UA-104800123-10"></script>
<script type="text/javascript">
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-104800123-10');
</script>
<?php foreach ($js as $file) {echo "<script type=\"text/javascript\" src=\"{$file}\"></script>\n";}?>
<script type="text/javascript">
<?php
$script = $this->load->get_inline_scripting();
echo $script['infile'];
?>
</script>
</body>
</html>