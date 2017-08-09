function confirmDelete(){
	var cat_name = <?php echo $value->cat_name; ?>;
	var cfdel = confirm(cat_name);
	if (cfdel == true) {
		alert('có');
	}
	else {
		alert('không');
	}
}

function file_change(f){
	alert('ok');
    var reader = new FileReader();
    reader.onload = function (e) {
        var img = document.getElementById("img");
        img.src = e.target.result;
        img.style.display = "inline";
    };
    reader.readAsDataURL(f.files[0]);
}
