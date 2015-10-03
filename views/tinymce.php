<script type="text/javascript" src="./OtherAsset/tinymce/tinymce.min.js"></script>
<script type="text/javascript">


$(document).ready(function(){
	tinymce.init({
	    selector: "textarea",
	    plugins: [
	        "advlist autolink lists link charmap print preview anchor",
	        "searchreplace visualblocks",
	        "insertdatetime table contextmenu paste"
	    ],
	    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link "
	});
	
});


</script>

<section class="container">
	<form method="post" action="somepage">
	    <textarea name="content" style="width:100%"></textarea>
	    <br>
	    <button type="submit" name="post">Post</button>
	</form>
</section>
