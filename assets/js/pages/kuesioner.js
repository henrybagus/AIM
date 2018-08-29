function addAllInputs(divName, inputType, temp){
	var counterText = 0;
	var counterRadioButton = 0;
	var counterCheckBox = 0;
	var counterTextArea = 0;	
    var newdiv = document.createElement('div');
	var idx = $("#idx").val();
	
     switch(inputType) {
		 case '01':
                 if(temp == 'true'){
				   		newdiv.setAttribute('class','pilihLain');
						newdiv.innerHTML = " <br> "+" &nbsp;"+" &nbsp;"+" &nbsp;"+" &nbsp;<input type='radio' class='radioPilih' name='myRadioButtons[]' id='radioLainBaru'> "+" &nbsp; <input type='text' id='myInput997' name='myInputs[998]' label='Jawaban Lainnya' placeholder='Jawaban Lainnya' aria-text='Jawaban Lainnya'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode); cek();'><i class='fa fa-times'></i></button> "+" &nbsp;";
						$("#pilihan_lain1").hide();
			   }
			   else{
				   	if(document.getElementById('radioLainBaru') != null){
						$('.pilihLain').before($('.pilih1'));
						newdiv.setAttribute('class','pilih');
						$('.pilih').prependTo($('#dynamicInput'));
						newdiv.innerHTML = " <br><input type='radio' class='radioPilih' name='myRadioButtons[]'>"+" &nbsp; <input type='text' oninvalid='InvalidMsg(this);' name='myInputs[]' id='radioArrayText[]' class='inputRadio[]' oninput='InvalidMsg(this);' required='required'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
						$('.pilihLain').before($('.pilih'));
					}
					else{
						newdiv.setAttribute('class', 'pilih1');
						newdiv.innerHTML = " <br><input type='radio' class='radioPilih' name='myRadioButtons[]'>"+" &nbsp; <input type='text' oninvalid='InvalidMsg(this);' name='myInputs[]' id='radioArrayText[]' class='inputRadio[]' oninput='InvalidMsg(this);' required='required'> "+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
					}
			   }
               counterRadioButton++;
			  break;
			   
          case '02':
              newdiv.innerHTML = " <br><input type='text' name='myInputs[]'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
               counterText++;
               break;          
          case '03':
               if(temp == 'true'){
				   newdiv.setAttribute('class', 'pilihLain');
					newdiv.innerHTML = " <br> "+" &nbsp;"+" &nbsp;"+" &nbsp;"+" &nbsp;<input type='checkbox' name='myCheckBoxes[]' id='checkLainbaru'>"+" &nbsp; <input type='text' id='myInput997' name='myInputs[998]' label='Jawaban Lainnya' placeholder='Jawaban Lainnya' aria-text='Jawaban Lainnya''>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode); cek();'><i class='fa fa-times'></i></button>"+" &nbsp;";
					$("#pilihan_lain1").hide();
			   }
			   else{
				   	if(document.getElementById('checkLainbaru') != null){
						$('.pilihLain').before($('.pilih1'));
						newdiv.setAttribute('class','pilih');
						$('.pilih').prependTo($('#dynamicInput'));
			   		newdiv.innerHTML = " <br><input type='checkbox' name='myCheckBoxes[]'>"+" &nbsp; <input type='text'  oninvalid='InvalidMsg(this);'  name='myInputs[]' oninput='InvalidMsg(this);' required='required'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
					}
					else{
						newdiv.setAttribute('class', 'pilih1');
						newdiv.innerHTML = " <br><input type='checkbox' name='myCheckBoxes[]'>"+" &nbsp; <input type='text' oninvalid='InvalidMsg(this);' name='myInputs[]' oninput='InvalidMsg(this);' required='required'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
					}
			   }
               counterCheckBox++;
               break;
          case '04':
	       	   newdiv.innerHTML = " <br><textarea name='myTextAreas[]'>type here...</textarea>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
               counterTextArea++;
               break;
		  case '05':
               counterText++;
               break;
          }
     document.getElementById(divName).appendChild(newdiv);
}


function editAllInputs(divName, inputType, temp){
	var counterText = 0;
	var counterRadioButton = 0;
	var counterCheckBox = 0;
	var counterTextArea = 0;
	var t= $("#tipe_soal").val();
	inputType = t;
	
     var newdiv = document.createElement('div');
	 var idxEdit = $("#idxEdit").val();
	
     switch(inputType) {
		 case '01':
			 if(temp == 'true')
			   {
					newdiv.setAttribute('class','pilihLain');
					newdiv.innerHTML = " <br> "+" &nbsp;"+" &nbsp;"+" &nbsp;"+" &nbsp;<input type='radio' class='radioPilih' name='myRadioButtons[]' id='radioLain'>"+" &nbsp; <input type='text' id='myInput997' name='myInputs[999]' label='Jawaban Lainnya' placeholder='Jawaban Lainnya' aria-text='Jawaban Lainnya'> "+" &nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode); cek();'><i class='fa fa-times'></i></button> "+" &nbsp;";
					$("#pilihan_lain").hide();
			   }
			   else		//pilih
			   {
					if(document.getElementById('radioLain') != null)
					{
						$('.pilihLain').before($('.pilih1'));
						newdiv.setAttribute('class','pilih');
						$('.pilih').prependTo($('#dynamicInput1'));
						newdiv.innerHTML = "<br><input type='radio' class='radioPilih name='myRadioButtons[]' id='contoh'>"+" &nbsp; <input type='text' oninvalid='InvalidMsg(this);' name='myInputs[]' id='naek' oninput='InvalidMsg(this);' required='required'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
						$('.pilihLain').before($('.pilih'));
					}
					else
					{
						newdiv.setAttribute('class','pilih1');
						newdiv.innerHTML = "<br><input type='radio' class='radioPilih name='myRadioButtons[]' id='contoh'>"+" &nbsp; <input type='text' oninvalid='InvalidMsg(this);' name='myInputs[]' id='naek' oninput='InvalidMsg(this);' required='required'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;	
					}
			   } 
		   counterRadioButton++;
		   break;
			   
          case '02':
               //newdiv.innerHTML = "Entry " + (counterText + 1) + " <br><input type='text' name='myInputs[]'>";
			   newdiv.innerHTML = " <br><input type='text' name='myInputs[]'>";
               counterText++;
               break;          
          case '03':
               if(temp == 'true')
			   {
				   newdiv.setAttribute('class','pilihLain');
				   newdiv.innerHTML = " <br> "+" &nbsp;"+" &nbsp;"+" &nbsp;"+" &nbsp;<input type='checkbox' name='myCheckBoxes[]' id='checkLain'>"+" &nbsp; <input type='text' id='myInput997' name='myInputs[999]' label='Jawaban Lainnya' placeholder='Jawaban Lainnya' aria-text='Jawaban Lainnya'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode); cek();'><i class='fa fa-times'></i></button>"+" &nbsp;";
					$("#pilihan_lain").hide();
			   }else{
					if(document.getElementById('checkLain') != null){
						$('.pilihLain').before($('.pilih1'));
						newdiv.setAttribute('class','pilih');
						$('.pilih').prependTo($('#dynamicInput1'));
				newdiv.innerHTML = " <br><input type='checkbox' name='myCheckBoxes[]'>"+" &nbsp; <input type='text' oninvalid='InvalidMsg(this);' name='myInputs[]' oninput='InvalidMsg(this);' required='required'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
						$('.pilihLain').before($('.pilih'));			
					}else{
						newdiv.setAttribute('class','pilih1');
						newdiv.innerHTML = " <br><input type='checkbox' name='myCheckBoxes[]'>"+" &nbsp; <input type='text' oninvalid='InvalidMsg(this);' name='myInputs[]' oninput='InvalidMsg(this);' required='required'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
					}
				   
			   }
               counterCheckBox++;
               break;
          case '04':
	       	   newdiv.innerHTML = " <br><textarea name='myTextAreas[]'>type here...</textarea>";
               counterTextArea++;
               break;
		  case '05':
               counterText++;
               break;
          }
     document.getElementById(divName).appendChild(newdiv);
}

function check_select(value){
	$("#dynamicInput").empty();
	if(value== "02" || value=="04"){
		$("#pilihan1").hide();
		$("#pilihan_lain1").hide();
	}else{
		$("#pilihan1").show();
		$("#pilihan_lain1").show();
	}
}

function edit_check_select(value){
	$("#dynamicInput1").empty();
	$("#rec_pilihan").empty();
	$("#rec_pilihan_lainnya").empty();
	
	if(value== "02" || value=="04"){
		$("#pilihan").hide();
		$("#pilihan_lain").hide();
	}else{
		$("#pilihan").show();
		$("#pilihan_lain").show();
	}	
}

$("#rec_pilihan").click(function(){
	
	var res = String.fromCharCode(023);
	var jumpil = 0;	
	var soal_tipe = $("#edit_tipe").val();
	var pil_pil = $("#option").val();
	var potpil = pil_pil.split(res);
	var jumpil = potpil.length;
	var flag = $("#flag").val();
	var y =$('#rec_pilihan').children('div').size();
	var x =$('#rec_pilihan_lainnya').children('div').size();
	var i = 0;
	var qwer =  $("#id_dt").val();
	var unikY = $("#unikY_"+qwer).val();
	var bebas = parseInt(unikY);
	//alert(unikY);
	
	if(soal_tipe== "02" || soal_tipe=="04"){
		$("#pilihan").hide();
		$("#pilihan_lain").hide();
	}
	
	if(jumpil != "0" ){
		if(soal_tipe == "01"){
			//alert(y+" bebas : "+bebas);
			$("#pilihan").show();
			if(y == 0 && bebas == 0){
				var inpss = bebas + 1;
				
				for (i = 0; i < jumpil; i++) {				
					if(potpil[i] != "")
					{
						if(y  != jumpil){
							
							var newdiv = document.createElement('div');
							newdiv.innerHTML = " <br><input type='radio' name='myRadioButtons[]'>"+" &nbsp; <input type='text' name='myInputs[]' value= '"+potpil[i]+"' required='required'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
							document.getElementById("rec_pilihan").appendChild(newdiv);	
						}else{
							document.getElementById("rec_pilihan").appendChild(newdiv);	
						
						} //nutup if(y!=jumpil)
					} //if potpil
				}//nutup for 
				if(flag == 0){
					$('#rec_pilihan_lainnya').children('div').hide();
					$("#pilihan_lain").show();
				}else{
					$('#rec_pilihan_lainnya').children('div').show();
				}	//nutup if flag
			}else{
			} //nutup if y==0
		}else if(soal_tipe == "03"){
			$("#pilihan").show();
			if(y == 0){
				for (i = 0; i < jumpil; i++) {		
				if(potpil[i] != ""){		
					if(y  != jumpil){
						var newdiv = document.createElement('div');
						newdiv.innerHTML = " <br><input type='checkbox' name='myRadioButtons[]'>"+" &nbsp; <input type='text' required='required' name='myInputs[]' value= '"+potpil[i]+"'>"+"&nbsp; <button type='button' class='btn btn-xs btn-danger' onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><i class='fa fa-times'></i></button>" ;
						document.getElementById("rec_pilihan").appendChild(newdiv);	
					}else{						
						document.getElementById("rec_pilihan").appendChild(newdiv);	
					
					} //nutup if(y!=jumpil)
				} //nutup for 
				}//nutup if potpil
				if(flag == 0){
					$('#rec_pilihan_lainnya').children('div').hide();
					$("#pilihan_lain").show();
					
				}else{
					$('#rec_pilihan_lainnya').children('div').show();
				}	//nutup if flag					
			}else{
			} //nutup if y==0			
		} 
	}
});	


$("#rec_pilihan_lainnya").click(function(){
	$("#rec_pilihan_lainnya").empty()
	var soal_tipe = $("#edit_tipe").val();
	var flag = $("#flag").val();
	var tempFlag = $("#flag").val();
	var y =$('#rec_pilihan_lainnya').children('div').size();
	var i = 0;
	
		if(soal_tipe == "01"){
			if(y == 0){
				if(flag == 1){
					var newdiv = document.createElement('div');
					newdiv.setAttribute('class','pilihLainRec');
					//$('.pilihLainRec').prependTo($('#rec_pilihan_lainnya'));
					newdiv.innerHTML = " <br> "+" &nbsp;"+" &nbsp;"+" &nbsp;"+" &nbsp;<input type='radio' name='myRadioButtons[]'>"+" &nbsp; <input type='text' id='myInput997' name='myInputs[999]' label='Jawaban mereka' placeholder='Jawaban mereka' aria-text='Jawaban mereka'> "+" &nbsp; <button type='button' class='btn btn-xs btn-danger' value='0' onclick='this.parentNode.parentNode.removeChild(this.parentNode); cek(this.value);'><i class='fa fa-times'></i></button>" ;
						document.getElementById("rec_pilihan_lainnya").appendChild(newdiv);
						$("#pilihan_lain").hide();
				}else{
					$("#pilihan_lain").show();
				}	//nutup if flag
			}
		}else if(soal_tipe == "03"){
			if(y == 0){
				if(flag == 1){
					var newdiv = document.createElement('div');
					newdiv.setAttribute('class','pilihLainRec');
					newdiv.innerHTML = " <br> "+" &nbsp;"+" &nbsp;"+" &nbsp;"+" &nbsp;<input type='checkbox' name='myRadioButtons[]'>"+" &nbsp; <input type='text' id='myInput997' name='myInputs[999]' label='Jawaban mereka' placeholder='Jawaban mereka' aria-text='Jawaban mereka'> "+" &nbsp; <button type='button' class='btn btn-xs btn-danger' value='0' onclick='this.parentNode.parentNode.removeChild(this.parentNode); cek(this.value);'><i class='fa fa-times'></i></button>" ;
						document.getElementById("rec_pilihan_lainnya").appendChild(newdiv);
						$("#pilihan_lain").hide();
				}else{
					$("#pilihan_lain").show();
				}	//nutup if flag							
			}
		} 	//nutup if else
});	

function change_div(){
	$('.pilihLain').before($('.pilih'));	
	//$('#dynamicInput1').after($('#rec_pilihan_lainnya'));
}

function cek(value){
	var tttt = $("#flag").val(value);
	$("#pilihan_lain").show();
	$("#pilihan_lain1").show();
}

function InvalidMsg(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity("Anda harus mengisi field ini.");
    }else if(textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    }else {
        textbox.setCustomValidity('');
    }
    return true;
}

//	---edit kuesioner geser pertanyaan---

//	--------- admin assign ----------
function assign_pilihSemua(){
	var tempStat = $('#statusPil').val();
	if(tempStat == "false"){
		$('.namaOrg').val('TRUE');
		$('.namaOrg').prop('checked', true);
		$('#statusPil').val('true');
	}else if(tempStat == "true"){
		$('.namaOrg').val('FALSE');
		$('.namaOrg').prop('checked', false);
		$('#statusPil').val('false');
	}
}

// ================== CONTENT_KUESIONER bag jawab pertanyaaan ==================

function cekRadio(id){
	var no = id.split("_");
	var radio = no[1];
	$("#radioLain_"+radio).val("");
	
}

function cekTulisRadio(id){
	var no = id.split("_");
	var radio = no[1];
	document.getElementById("radioButtonLain_"+radio).checked =true;
}

function cekLainRadio(id){
	var no = id.split("_");
	var teks = no[1];	
	document.getElementById("radioLain_"+teks).select();
	
}

function cek_jawabRadio(id){
	//alert("Radio");
	var no = id.split("_");
	var radio = no[1];			//no pertanyaan
	var pil = no[2];			//no radio
	var soalDt = 0;
	if(document.getElementById("myRadio_"+radio+"_"+pil) || document.getElementById("radioButtonLain_"+radio).checked) {
		soalDt = document.getElementById("soalInfoDt_"+radio).value="1";
	}else{
		soalDt = document.getElementById("soalInfoDt_"+radio).value="0";
	}
	
	var mandatori = $("#idManda").val();
	var isiMandatori = $("#isiManda").val();
	var tp = $("#tipe").val();
	if(mandatori != ""){
		var noManda = mandatori.split("_");
		var isi = isiMandatori.split("_");
		var tipe = tp.split("_");
		for(var m=0; m<noManda.length; m++){
			if(tipe[m] == 01 && noManda[m] == radio){
				if(isi[m] == 0 && soalDt == 1){
					document.getElementById("butBatal_"+noManda[m]).style.visibility = "visible";
					//$("#butBatal_"+noManda[m]).show();
				}else{
					//$("#butBatal_"+noManda[m]).hide();
					document.getElementById("butBatal_"+noManda[m]).style.visibility = "hidden";
				}
			}
		}
	}
}

function uncek_jawabRadio(id){
	var no = id.split("_");
	var radio = no[1];
	var flag = $("#flagLain_"+radio).val();
	//document.getElementById("myRadio_"+radio).checked = false;
	if(flag == 1){
		if(document.getElementById("radioButtonLain_"+radio).checked){
			var lain = document.getElementsByClassName("myRadioClassLain_"+radio);
			for(var j=0; j<lain.length; j++){ 
				lain[j].checked = false;
			}
		}else{
			var temp = document.getElementsByClassName("myRadioClass_"+radio);
			for(var i=0; i<temp.length; i++){ 
				temp[i].checked = false;
			}
		}
	}else{
		var temp = document.getElementsByClassName("myRadioClass_"+radio);
		for(var i=0; i<temp.length; i++){ 
			temp[i].checked = false;
		}
	}
	document.getElementById("butBatal_"+radio).style.visibility = "hidden";
}

function cekTulisCheck(id){
	var no = id.split("_");
	var box = no[1];
	var x =  999;
	document.getElementById("myCheck_"+box+"_"+x).checked =true;
}

function cekLainCheck(id){
	var no = id.split("_");
	var teks = no[1];
	var x =  999;
	$( '#myCheck_'+teks+'_'+x ).prop( "checked");
	
	if($( '#myCheck_'+teks+'_'+x ).prop( "checked") != true){
		$("#checkLain_"+teks).val("");
	}
}

function cek_jawabCheck(id){
	var no = id.split("_");
	var qweerrrrrr = no[1];
	var pil = no[2];
	var x = 999;
	if(document.getElementById("myCheck_"+qweerrrrrr+"_"+pil) || document.getElementById("myCheck_"+qweerrrrrr+"_"+x).checked) {
		var qweerrrrrr = no[1].replace("[","");
		var qweerrrrrr = qweerrrrrr.replace("]","");
		var tyyy = $("#cekVal_"+qweerrrrrr).val();
		$("#cekVal_"+qweerrrrrr).val("1");
	}else{
		$("#cekVal_"+qweerrrrrr).val("0");
	}
}

function cekAll(){
	if(document.getElementById("checkbox1").checked == false){
		alert("Silakan ceklis jika Anda sudah menyelesaikan kuesioner ini");
		return false;
	}
	
	var hasilPilManda = $("#hslPilMan").val();
	var arr = hasilPilManda.split("||");
	for(var x=0;x<arr.length;x++){
		var pilihan = arr[x].split("_");
		var id = pilihan[0];
		var manda = pilihan[1];
		var tipe = pilihan[2];
		var flagLain = pilihan[3];
		if(manda == 1){
			if(tipe == 01){
				var soalRad = $("#soalInfoDt_"+id).val();
				if(soalRad == 1){					
					if(flagLain == 1){
						var myRadio = $('.myRadioClassLain_'+id);
						var checkedValue = myRadio.filter(':checked').val();
						if(checkedValue == 'on'){
							if($("#radioLain_"+id).val() == ""){
								alert("Harap mengisi 'Jawaban Anda' yang sudah dipilih");
								return false;
							}
						}
					}
				}else{
					alert("Anda belum menjawab semua pertanyaan");
					return false;
				}
			}
			if(tipe == 02){
				if(document.getElementById("myInputs_["+id+"][]").value == ""){
					alert("Anda belum menjawab semua pertanyaan");
					return false;
				}
			}
			if(tipe == 03){
				var idCekLain = 999;
				var soalCek = $("#cekVal_"+id).val();
				if(soalCek != 1){	
					alert("Anda belum menjawab semua pertanyaan");
					return false;
				}else{
					if($( '#myCheck_'+id+'_'+idCekLain).prop( "checked")){
						if($("#checkLain_"+id).val() == ""){
							alert("Harap mengisi 'Jawaban Anda' yang sudah dipilih");
							return false;
						}
					}//if ceklain
				}
			}
			if(tipe == 04){
				if(document.getElementById("myParagraph_"+id+"").value == ""){
					alert("Anda belum menjawab semua pertanyaan");
					return false;
				}
			}
		}
	}
}

/*
$( document ).ready(function() {
	var user = $("#user").val();
	if(user == 1){
		//user jawab
		var mandatori = $("#idManda").val();
		var isiMandatori = $("#isiManda").val();
		var tp = $("#tipe").val();
		if(mandatori != ""){
			var noManda = mandatori.split("_");
			var isi = isiMandatori.split("_");
			var tipe = tp.split("_");
			for(var m=0; m<noManda.length; m++){
				if(tipe[m] == 01){
					if(isi[m] == 1){
						$("#butBatal_"+noManda[m]).hide();
					}else{
						$("#butBatal_"+noManda[m]).hide();
					}
				}
			}//tutup for
		}//tutup if mandatori
	}else{
		//admin
	}
	
});

*/