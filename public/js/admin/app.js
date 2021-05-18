$(document).ready(function(){

	var $modal = $('#modal'),
	image = document.getElementById('sample_image'),
	cropper;

	let imgdata = document.getElementById('uploaded_image'),
	paletteReady = false,
	list = document.getElementById('colors'),
	idimg = document.getElementById('inmGombre');
	//evento al cargar una imagen
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
	//modal para editar la imagen agregada
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
			imgdata.onload = function(){
		    if (!paletteReady)
		    getColor(document.getElementById('sample_image'));
		  	}
			};
		});
	});
	//funcion que toma el color de la imagen recortada
	function getColor(img) {
        paletteReady = true;
        //Variable de función
        var vibrant = new Vibrant(img),
            swatches = vibrant.swatches(),
            listFragment = new DocumentFragment();
        
        for ( var swatch in swatches ) {
            if (swatches.hasOwnProperty(swatch) && swatches[swatch]) { 
                //console.log(swatch, swatches[swatch].getHex());
                var inp = document.createElement('input');
                inp.value = swatches[swatch].getHex();
                console.log(swatches[swatch].getPopulation());
                inp.setAttribute("name", swatch);
                inp.setAttribute("class", 'col form-control m-1');
                inp.style.color = swatches[swatch].getHex();
                inp.style.backgroundColor = swatches[swatch].getHex();
                listFragment.appendChild(inp);
            }
        }
        //Limpiando DOM
        cleanObj(list);
        list.appendChild(listFragment);
        if (paletteReady == true)
            paletteReady = false
    }
	//eliminar objeto.
    function cleanObj(obj){
        if ( obj.hasChildNodes() ){
            while ( obj.childNodes.length >= 1 ){
            obj.removeChild( obj.firstChild );
            }
            return true;
        }
    }
	});