
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
