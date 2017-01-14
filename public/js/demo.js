document.onload(console.log('i am alive'));
function del(name) {
	//alert(name);
	console.log(name);
	
	$.ajax({
		 type:'post',
       url:'demo/delete/'+name,
       processData: false,
       contentType: false,
       data:null,
       success:function(output){
        	//document.getElementById("resultLine").innerHTML=output;
         //window.head.href = '/demo/index';
         console.log(output);
         if(output){
         	window.location.href = '/demo/demo';
         }
         else{
         	alert(':( sorry not working try hard');
         }
         
        },
       error:function (output) {
               alert("notWorking");
        }

       });
}
