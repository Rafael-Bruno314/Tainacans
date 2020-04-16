function Confirma(){
	var conf = confirm("Deseja realmente cadastrar?");
	if(conf){
		document.getElementById("cadastrar").name = "cad_dps_da_ganbiarra";
		document.getElementById("cadastrar").id = "cad_dps_da_ganbiarra";
			//document.getElementById('theForm').reset();
			
	}
}

function TD(opcao){
	
	if(opcao == "Sim"){
		document.getElementById("quais_tecnologia_digital").style.display = "block"
		document.getElementById("como_tecnologia_digital").style.display = "block"
	}else{
		document.getElementById("quais_tecnologia_digital").style.display = "none"
		document.getElementById("como_tecnologia_digital").style.display = "none"
	}
}