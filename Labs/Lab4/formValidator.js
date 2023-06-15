window.onload = function() {
  var myForm = document.getElementById("mainForm");
  var title = document.getElementById("title");
  var description = document.getElementById("description");
  var liscence = document.getElementById("liscence");
  var accept = document.getElementById("accept");

  title.addEventListener('keyup', function(){
    title.style.backgroundColor = "#FFFFFF";
  });

  description.addEventListener('keyup', function(){
    description.style.backgroundColor = "#FFFFFF";
  });

  title.addEventListener('keyup', function(){
    if(title.value == ""){
      title.style.backgroundColor = "#FF0000";
    }
  });

  description.addEventListener('keyup', function(){
    if(description.value == ""){
      description.style.backgroundColor = "#FF0000";
    }
  });

  liscence.addEventListener('click', function(){
    if (liscence.checked){
      accept.style.backgroundColor = "#EBF4FB";
    }
    else{
      accept.style.backgroundColor = "#FF0000";
    }
  });

  myForm.onsubmit = function(e){

    if (liscence.checked == false){
      accept.style.backgroundColor = "#FF0000";
      e.preventDefault();
    }

    var allRequired = document.querySelectorAll(".required");

    for(var i=0; i<=allRequired.length; i++){
      if(allRequired[i].value == "" || allRequired[i].value == null){
        allRequired[i].style.backgroundColor = "#FF0000";
        e.preventDefault();
      }
    }
  }

}
