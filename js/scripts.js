console.log('javascirpt is loading');


function login(){
  	console.log('hello man')
    var list = document.getElementById('navy')
    if(list.className == 'navigation'){
        list.className = list.className + ' toggle'
    } else {
    	list.className =  'navigation'
    }
    console.log('list' + list.className)
  }
  
var menu = document.getElementById("hamburger-menu");

menu.addEventListener("click", login)


