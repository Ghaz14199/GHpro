var countDownDate = new Date("Dec 20, 2023 15:37:25").getTime();
var count=  document.querySelector("#countdown")  ;
var x = setInterval(function() {
  var now = new Date().getTime();

 
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  count.innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    count.innerHTML = "you are late";
  }
}, 1000);

 const win= document.querySelector("#win");
 const loder= document.querySelector(".loder-con");
 const cards= document.querySelector("#cards");
 var myModal = new bootstrap.Modal(document.getElementById('modal'), {
  keyboard: false})
win.addEventListener('click',function(){
  loder.computedStyleMap.display='block';
 // setTimeout(function(){
   // myModal.show();
  //},4000);
});

