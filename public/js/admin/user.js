$(document).ready(function(){	

	var $modal = $('#modal'),
	image = document.getElementById('sample_image'),
	cropper;

	let imgdata = document.getElementById('uploaded_image'),
	paletteReady = false,
	list = document.getElementById('colors'),
	idimg = document.getElementById('inmGombre');

	$('#upload_image').change(function(event){
		var files = event.target.files;

		var done = function(url){
			image.src = url;
			$modal.modal('show');
		};

		if(files && files.length > 0)
		{
			reader = new FileReader();
			reader.onload = function()
			{
				done(reader.result);
			};
			reader.readAsDataURL(files[0]);
		}
	});

	$modal.on('shown.bs.modal', function() {
		cropper = new Cropper(image, {
			aspectRatio: NaN,
			viewMode: 3,
			preview:'.preview'
		});

	}).on('hidden.bs.modal', function(){
		cropper.destroy();
   		cropper = null;
	});
	$('#cancel').click(function(){
		cropper.destroy();
   		cropper = null;
		$modal.modal('hide');
	});
	$('#crop').click(function(){
		canvas = cropper.getCroppedCanvas({
			width:400,
			height:400
		});
		canvas.toBlob(function(blob){
			url = URL.createObjectURL(blob);
			var reader = new FileReader();
			reader.readAsDataURL(blob);
			reader.onloadend = function(){
			var data = reader.result;
			$modal.modal('hide');
			imgdata.src = data;
			idimg.value = data;
			};
		});
	});
	});