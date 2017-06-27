var counter = 1;
var limit = 20;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Snippet " + (counter + 1) + " <br><textarea type='text' name='myInputs[]'></textarea>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
