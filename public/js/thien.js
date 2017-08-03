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