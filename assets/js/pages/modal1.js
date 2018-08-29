$('#exampleModal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var id = button.data('idgroup') // Extract info from data-* attributes
	var nama = button.data('namagroup') // Extract info from data-* attributes
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-title').text('Ubah Grup')
	modal.find('.modal-body input').val(id)
	modal.find('.modal-body #nama-group').val(nama)
	//modal.find('.modal-body input').val(nama)
})

$('#addPNIC').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-title').text('Tambah PNIC')
})		
	
$('#addModal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-title').text('Tambah Grup')
})	

$('#addLink').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-title').text('Tambah Link')
})	

$('#editLink').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var id = button.data('idlink') // Extract info from data-* attributes
	var nama = button.data('namalink')
	var url = button.data('urllink')
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-title').text('Ubah Link')
	modal.find('.modal-body #id-link-hide').val(id)
	modal.find('.modal-body #nama-link').val(nama)
	modal.find('.modal-body #url-link').val(url)
})

$('#add_question').on('show.bs.modal', function (event) {
	
	var button = $(event.relatedTarget) // Button that triggered the modal
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	
	var judul_bag  =button.data('judul_bag')
	var id_bag = button.data('id_bagian')
	var id_mt = button.data('id_question_mt')
	
	modal.find('.modal-title').text('Tambah Pertanyaan : '+judul_bag)
	var mandatori1 = button.data('mandator1')
	if(mandatori1 == 1){
		document.getElementById("ceklis_mandatori1").checked = true;
	}else{
		document.getElementById("ceklis_mandatori1").checked = false;
	}
	
	modal.find('.modal-body #mandatori1').val(mandatori1)
	modal.find('.modal-body #id_bagianAddTny').val(id_bag)
	modal.find('.modal-body #id_mt').val(id_mt)
	modal.find('.modal-body #judul_bag').val(judul_bag)
	
	//window.location.href="view/admin/edit_kuesioner.php?cobaId=id_bag";
})


$('#edit_question').on('show.bs.modal', function (event) {	
	var button = $(event.relatedTarget) // Button that triggered the modal
	var id = button.data('id_question') // Extract info from data-* attributes 
	var idmt = button.data('id_question_mt') 
	var tipesoal = button.data('tipe_soal')
	var soal = button.data('judul')
	var pil = button.data('opsional')
	var flag = button.data('flag')	
	var mandatori = button.data('mandator')
	var id_bag = button.data('id_bagian')
	var judul_bag  =button.data('judul_bag')
	
	if(mandatori == 1){
		document.getElementById("ceklis_mandatori").checked = true;
	}else{
		document.getElementById("ceklis_mandatori").checked = false;
	}
	
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-title').text('Ubah Pertanyaan : '+judul_bag)
	modal.find('.modal-body #id_dt').val(id)
	modal.find('.modal-body #id_mt').val(idmt)
	modal.find('.modal-body #tipe_soal').val(tipesoal)
	modal.find('.modal-body #edit_tipe').val(tipesoal)
	modal.find('.modal-body #judul_soal').val(soal)
	modal.find('.modal-body #option').val(pil)
	modal.find('.modal-body #flag').val(flag)
	modal.find('.modal-body #mandatori').val(mandatori)
	modal.find('.modal-body #id_bagianAddTny').val(id_bag)
	//modal.find('.modal-body #temp_flag').val(flag)
	
	var myNode = document.getElementById("rec_pilihan")
	while (myNode.firstChild) {
    myNode.removeChild(myNode.firstChild)
	}
	$("#dynamicInput1").empty()
	$("#rec_pilihan").click()
	$("#rec_pilihan_lainnya").click()
	
})

$('#add_bagian').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var modal = $(this)
	modal.find('.modal-title').text('Tambah Bagian')
})

$('#edit_bagian').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var id_mt = button.data('id_question_mt')
	var id_bag = button.data('id_bagian')
	var jud_bag = button.data('judul_bag')
	
	var modal = $(this)
	modal.find('.modal-title').text('Edit Bagian')
	modal.find('.modal-body #id_mt').val(id_mt)
	modal.find('.modal-body #id_bag_kat').val(id_bag)
	modal.find('.modal-body #judul_bag').val(jud_bag)
	
})




