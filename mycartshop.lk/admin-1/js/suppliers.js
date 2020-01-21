$(document).ready(function(){

var supplier_list;

function getSuppliers(){
		$.ajax({
			url : './admin-1/classes/Suppliers.php',
			method : 'POST',
			data : {GET_SUPPLIER:1},
			success : function(response){
				//console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var supplierHTML = '';

					supplierlist = resp.message.suppliers;

					if (supplierlist) {
						$.each(resp.message.suppliers, function(index, value){

							supplierHTML +=  '<tr>'+
								              '<td>'+''+'</td>'+
								              '<td>'+value.supplier_name+'</td>'+
								              '<td><img width="60" height="60" src="../mycartshop.lk/product_images />'+value.profile_image+'"></td>'+
								              '<td>'+value.email+'</td>'+
                                              '<td>'+value.phone_number+'</td>'+
                                              '<td>'+value.country+'</td>'+
								              '<td>'+value.address_1+'</td>'+
                                              '<td>'+value.address_2+'</td>'+
                                              '<td>'+value.age+'</td>'+
								              '<td><a class="btn btn-sm btn-info edit-supplier" style="color:#fff;"><span style="display:none;">'+JSON.stringify(value)+'</span><i class="fas fa-pencil-alt"></i></a>&nbsp;<a id="'+value.id+'" class="btn btn-sm btn-danger delete-supplier" style="color:#fff;"><i class="fas fa-trash-alt"></i></a></td>'+
								              '</tr>';

						});

						$("#supplier_list").html(supplierHTML);
					}

				}
			}

		});
	}

	getSuppliers();

	$(".add-Supplier").on("click", function(){

		$.ajax({

			url : './admin-1/classes/Suppliers.php',
			method : 'POST',
			data : new FormData($("#add-supplier-form")[0]),
			contentType : false,
			cache : false,
			processData : false,
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$("#add-supplier-form").trigger("reset");
					$("#add_supplier_modal").modal('hide');
					getSuppliers();
				}else if(resp.status == 303){
					alert(resp.message);
				}
			}

		});

	});


	$(document.body).on('click', '.edit-supplier', function(){

		console.log($(this).find('span').text());

		var supplier = $.parseJSON($.trim($(this).find('span').text()));

		console.log(supplier);

		$("input[name='e_supplier_name']").val(supplier.supplier_name);
		$("select[name='e_country']").val(supplier.country);
		$("input[name='e_email']").val(supplier.email);
        $("input[name='e_phone_number']").val(supplier.phone_number);
        $("input[name='e_address_1']").val(supplier.address_1);
        $("input[name='e_address_2']").val(supplier.address_2);
		$("input[name='e_age']").val(supplier.age);
		$("input[name='e_product_image']").siblings("img").attr("src", "..mycartshop.lk/product_images/"+supplier.profile_image);
		$("input[name='id']").val(supplier.id);
		$("#edit_supplier_modal").modal('show');

	});

	$(".submit-edit-supplier").on('click', function(){

		$.ajax({

			url : './admin-1/classes/Suppliers.php',
			method : 'POST',
			data : new FormData($("#edit-supplier-form")[0]),
			contentType : false,
			cache : false,
			processData : false,
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$("#edit-supplier-form").trigger("reset");
					$("#edit_supplier_modal").modal('hide');
					getSuppliers();
					alert(resp.message);
				}else if(resp.status == 303){
					alert(resp.message);
				}
			}

		});


	});

	$(document.body).on('click', '.delete-Supplier', function(){

		var id = $(this).attr('id');
		if (confirm("Are you sure to delete this supplier ?")) {
			$.ajax({

				url : './admin-1/classes/Suppliers.php',
				method : 'POST',
				data : {DELETE_SUPPLIER: 1, id:id},
				success : function(response){
					console.log(response);
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						getSuppliers();
					}else if (resp.status == 303) {
						alert(resp.message);
					}
				}

			});
		}else{
			alert('Cancelled');
		}
		

	});

});