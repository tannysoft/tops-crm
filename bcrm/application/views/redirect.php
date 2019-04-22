<?php $this->load->js('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js') ?>
<?php $this->load->js('https://d.line-scdn.net/liff/1.0/sdk.js') ?>
<?php $this->load->start_inline_scripting() ?>
<script type="text/javascript">
$(function(e){
	console.log('API => liff/session');
	var endpoint = '<?php echo site_url('liff/session') ?>';
	liff.init(function(data){
		liff.getProfile().then(function(profile){
			console.log('data =>', data);
			console.log('profile =>', profile);
			data.profile = profile;
			console.log('data + profile =>', data);
			// create session in php
			$.post(endpoint, data, function(respond){
				console.log(respond);
				window.location = '<?php echo $this->session->flashdata('redirect') ?>';
			});
		});
	});

	// liff data demo
	// data = {
	// 	language: 'en-US',
	// 	context: {
	// 		viewType: 'full',
	// 		userId: 'Uff9b98601f26f617f0d7da144e3a6c74',
	// 		utouId: 'UU773edc713a467fd8f7a3f358fecc12c0620f2fc0c810611d3e0f3098678f6ed8ff1923936762158a41b436d28aa7d82fe252ef5f3477dde3111be4958e00cef0',
	// 		roomId: null,
	// 		groupId: null,
	// 	},
	// 	profile: {
	// 		userId: 'Uff9b98601f26f617f0d7da144e3a6c74',
	// 		displayName: 'PP',
	// 		statusMessage: 'This is PP',
	// 		pictureUrl: ''
	// 	}
	// };
	// // create session in php
	// $.post(endpoint, data, function(respond){
	// 	console.log(respond);
	// 	window.location = '<?php echo $this->session->flashdata('redirect') ?>';
	// });
});
</script>
<?php $this->load->end_inline_scripting() ?>
