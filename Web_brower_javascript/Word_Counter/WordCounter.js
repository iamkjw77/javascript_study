var entireText = document.getElementsByTagName('body')[0].innerText;
var splitText = entireText.split(' ');
var countedWord = {};
for(i=0;i<splitText.length;i++){
  var word = splitText[i].toLowerCase();
  if(countedWord[word] == undefined){
    countedWord[word] = 1;
  }else{
    countedWord[word] += 1;
  }
}

var countedWordArr = new Array();

for(name in countedWord){
  countedWordArr.push([name,countedWord[name]]);
}

countedWordArr.sort(function(a,b){
  return b[1]-a[1];
});

var str = '';

for(var i=0;i<countedWordArr.length;i++){
  str += (countedWordArr[i][0]+':'+countedWordArr[i][1]) + "\n";
}

alert(str);
