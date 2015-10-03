<script type="text/javascript" src="./OtherAssets/tinymce/tinymce.min.js"></script>



<section class="container">
	<p>Are you ready to blog? Fill out the form below and click 'Post' to save your entry.
	</p>
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
	<input type="text" name="subject" placeholder="Subject" autocomplete="on" required/>
	<br>
	<br>
	<textarea rows="4" cols="50" name="text" ></textarea>
	<br>
	<br>
	Select Image File(First image is Compulsory. Only "jpeg","jpg","jif","jfif","jfi", "gif", "png" Type Image Uploaded. Image Size Should Be Less Than 1000KB.
	):
	<div id="filediv"><input name="file[]" type="file" id="file"/></div>
	<br>
	<br>
	<input type="button" id="add_more" class="upload" value="Add More Files"/>
        <br>
	<br>

	
	<button type="submit" name="post">Post</button>
	</form>
</section>

<script type="text/javascript">
var abc = 0;      // Declaring and defining global increment variable.
$(document).ready(function() {
		tinymce.init({
		    selector: "textarea",
		    plugins: [
		        "advlist autolink lists link charmap print preview anchor",
		        "searchreplace visualblocks",
		        "insertdatetime table contextmenu paste"
		    ],
		    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link "
		});
 		//  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
 		$('#add_more').click(function() {
 			$(this).before($("<div/>", {
 				id: 'filediv'
 			})
 			.fadeIn('slow').append($("<input/>", {
 				name: 'file[]',
 				type: 'file',
 				id: 'file'
 			}), $("<br/><br/>")));
 		});
 		// Following function will executes on change event of file input to select different file.
 		$('body').on('change', '#file', function() {
 		 if (this.files && this.files[0]) {
 			abc += 1; // Incrementing global variable by 1.
 			var z = abc - 1;
 			var x = $(this).parent().find('#previewimg' + z).remove();
 			$(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
 			var reader = new FileReader();
 			reader.onload = imageIsLoaded;
 			reader.readAsDataURL(this.files[0]);
			$(this).hide();
 			$("#abcd" + abc).append($("<img/>", {
 				id: 'img',
 				src: 'x.png',
 				alt: 'delete'
 			}).click(function() {
 				$(this).parent().parent().remove();
		    }));
         }
 	   });
      // To Preview Image
      function imageIsLoaded(e) {
          $('#previewimg' + abc).attr('src', e.target.result);
      };
     $('#upload').click(function(e) {
         var name = $(":file").val();
         if (!name) {
         alert("First Image Must Be Selected");
         e.preventDefault();
         }
     });
 });
</script>