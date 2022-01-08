// JavaScript Document
document.addEventListener('DOMContentLoaded', function(){
			document.querySelector('#line').onclick = function () {
                document.querySelector('#duong').style.display = 'none';
				document.querySelector('#cot').style.display = 'block';
            };
 
            document.querySelector('#bar').onclick = function () {
                document.querySelector('#duong').style.display = 'block';
				document.querySelector('#cot').style.display = 'none';
            };
});