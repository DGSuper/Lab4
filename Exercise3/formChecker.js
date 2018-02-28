function load() {
  //add event listeners
  var checkboxes = document.getElementsByClassName("artPicks");
  for(var i = 1; i < 7; i++) {
    let temp = "a"+checkboxes[i-1].id;
    if(checkboxes[i-1].checked) {
      document.getElementById(temp).classList.remove("invisible");
      document.getElementById(temp).required = true;
    }
    else {
      document.getElementById(temp).classList.add("invisible");
      document.getElementById(temp).value = "0";
      document.getElementById(temp).required = false;
    }

    checkboxes[i-1].addEventListener("click", function() {
      let temp = "a"+this.id;
      if(this.checked) {
        document.getElementById(temp).classList.remove("invisible");
        document.getElementById(temp).required = true;
      }
      else {
        document.getElementById(temp).classList.add("invisible");
        document.getElementById(temp).value = "0";
        document.getElementById(temp).required = false;
      }
    });
  }
}

function hideAmount() {
  var amount = document.getElementsByTagName("input");
  for(var i = 0; i < amount.length; i++) {
    if(amount[i].type == "number") {
      amount[i].classList.add("invisible");
      amount[i].value = "0";
    }
  }
}

function checkUser() {
  var inputs = userInputs();
  var checkEnP = checkEmailAndPassword(inputs);
  var empty = amountCheck(inputs);
  var shipCheck = true;
  var inp = document.getElementsByTagName("input")
  if((inp[14].checked == inp[15].checked) && (inp[16].checked == false)) {
    alert("Please choose a shipping method.");
    shipCheck = false;
  }
  if(checkEnP && empty && shipCheck) return true;
  else return false;
}
function userInputs() {
  var temp = document.getElementsByTagName("input");
  var userI = [];
  for(var i = 0; i < temp.length; i++) {
    if(!temp[i].classList.contains("invisible")){
      userI.push(temp[i]);
    }
  }
  return userI;
}

function checkEmailAndPassword(inputs) {
  if(inputs[0].value == "") {
    alert("Email is not valid.");
    return false;
  }
  else if(inputs[1].value.length < 8) {
    alert("Password is too short.");
    return false;
  }
  else if(!checkE(inputs[0].value)){
    alert("Email needs to be in this format: \"blah@blah.blah\".");
    return false;
  }
  else return true;
}
//This is what I found that worked with my program "https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript"
function checkE(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function amountCheck(inputs) {
  let myQuants = getAmounts(inputs);
  if(myQuants.length == 0) {
    alert("the amounts are empty, please get something.");
    return false;
  }
  return true;
}

function getAmounts(inputs) {
  let amount = [];
  for(var i = 0; i < inputs.length; i++) {
    if(inputs[i].type == "number") amount.push(inputs[i]);
  }
  return amount;
}
