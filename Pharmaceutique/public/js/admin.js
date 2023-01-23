document.getElementById("addNew").addEventListener("click",() =>{
	var html = '<div class="row justify-content-between text-left">';
			html += '<div class="form-group col-12 flex-column d-flex">';
				html += '<label class="form-control-label px-3">';
					html += 'Name<span class="text-danger"> *</span>';
				html += '</label>';
				html += '<input  required type="text" name="Name[]"';
					html += 'placeholder="Enter Name Of Product" onblur="validate(1)">';
			html += '</div>';
		html += '</div>';
		html += '<div class="row justify-content-between text-left">';
			html += '<div class="form-group col-sm-6 flex-column d-flex">';
				html += '<label class="form-control-label px-3">';
					html += 'Prix<span class="text-danger"> *</span>';
				html += '</label>';
				html += '<input   required type="number" name="Prix[]"';
					html += 'placeholder="Enter Prix Of Product" onblur="validate(2)">';
			html += '</div>';
			html += '<div class="form-group col-sm-6 flex-column d-flex">';
				html += '<label class="form-control-label px-3">';
					html += 'Quantity<span class="text-danger"> *</span>';
				html += '</label>';
				html += '<input required type="number" name="Quantity[]"';
					html += 'placeholder="Enter Quantity Of Product" onblur="validate(3)">';
			html += '</div>';
		html += '</div>';
		html += '<div class="row justify-content-between text-left">';
        html += '<div class="form-group col-12 flex-column d-flex">';
        html += '<label class="form-control-label px-3">';
            html += 'category<span class="text-danger"> *</span>';
        html += '</label>';
        html += '<select class="form-control" name="category[]"  required="">'
        html += '      <option value="0">Pill</option>'
        html += '      <option value="1">Head</option>'
        html += '      <option value="2">Stoma</option>'
        html += '</select>'
    html += '</div>';
		html += '</div>';
		html += '<div class="row justify-content-between text-center">';
			html += '<div class="form-group col-12 flex-column d-flex">';
				html += '<input type="file" name = "Image[]" class="add_image_product">'; 
			html += '</div>';
		html += '</div>';
    var form  = document.createElement('div');
    form.innerHTML = html;

    document.getElementById("addProductAdd").append(form);
});
