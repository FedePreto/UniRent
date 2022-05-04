function show_answer(element){
    if(document.getElementById("ris"+element.id[3]).style.display=="block"){
        document.getElementById("ris"+element.id[3]).style.display="none";
    }else{
        document.getElementById("ris"+element.id[3]).style.display="block";
    }

}