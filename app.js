


function myAjax() {
      $.ajax({
           type: "POST",
           url: 'accion.php',
           data:{action:'call_this'},
           success:function(html) {
             include_once("accion.php");
           }

      });
 }

function addImageAjax(){
	for (var i = 0; i < months.length; i++) {
		var result = document.createElement('div');

			result.type = "button";
			result.innerHTML= '<input id="'+i+'" style="width:120px;" type="button" value="'+months[i]+'" onclick="crear(id);">';
			result.style.width="200px";

			document.getElementById('contTables').appendChild(result);
	}
}
