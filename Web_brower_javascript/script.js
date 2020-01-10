window.onload = function(){ //onload를 사용하지 않으면 html 순서상 script태그가 위에 있기 때문에 js파일이 적용 X
  var hw = document.getElementById('hw');
  hw.addEventListener('click',function(){
    alert('Hello World!');
  });
}
