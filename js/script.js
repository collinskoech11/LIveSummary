window.addEventListener('scroll', function(){
    var tophead = document.querySelector('.header-container');
    tophead.classList.toggle('fixed', window.scrollY >= 100);
});
document.getElementById("navigate").addEventListener('click',
function(){
    var thenav = document.querySelector(".side-nav");
    thenav.classList.toggle('appear')
})

document.getElementById("closer").addEventListener('click',
function(){
    var thenav = document.querySelector(".side-nav");
    thenav.classList.remove('appear')
            
})
document.getElementById("activate").addEventListener('click',
function(){
    var thenavo = document.querySelector(".side-navo");
    thenavo.classList.toggle('display')
})

document.getElementById("closero").addEventListener('click',
function(){
    var thenavo = document.querySelector(".side-navo");
    thenavo.classList.remove('display')
            
})
var i =0, text;
text = " and events they need to shape the next generation of Career development."
function typing(){
          
    if(i<text.length){
        document.getElementById('text').innerHTML += text.charAt(i);
        i++;
        setTimeout(typing,200); 
    }
             }
typing();
console.log('hello')