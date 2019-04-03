
/**
 ** 2019.04.02 오승준 
**/
function check_all(f)
{
    var chk = document.getElementsByName("chk[]");

    for (i=0; i<chk.length; i++){
        chk[i].checked = f.chkall.checked;
    }
}


function show_hide(el){
	var $this = $(el);

	if($this.is(":hidden")){
		$this.slideDown();
	} else {
		$this.slideUp();
	}
}