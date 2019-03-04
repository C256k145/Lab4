var total = 0;
var numItems = 0;

function checker() {
  let email = document.getElementById('email');
  let passWord = document.getElementById('password');
  let shipping = document.querySelectorAll('input[type="radio"]:checked');
   if(email.value.length < 1 || passWord.value.length < 1 || shipping.length < 1) {
    window.alert('Please provide valid input for email, password and shipping');
    return false;
  }
  return true;
}
function addA() {
  let numA = document.getElementById("numA");
  total += ((numA.value)*2000);
  numItems = (Number(numA.value)) + numItems;
  document.getElementById("totalCost").innerHTML = "Total: $" + total;
  document.getElementById("numItems").innerHTML = "Items: " + numItems;
  document.getElementById("numA").value = numA.value;
}
function addB() {
  let numB = document.getElementById("numB");
  total += ((numB.value)*1000);
  numItems = (Number(numB.value)) + numItems;
  document.getElementById("totalCost").innerHTML = "Total: $" + total;
  document.getElementById("numItems").innerHTML = "Items: " + numItems;
  document.getElementById("numB").value = numB.value;
}
function addC() {
  let numC = document.getElementById("numC");
  total += ((numC.value)*500);
  numItems = (Number(numC.value)) + numItems;
  document.getElementById("totalCost").innerHTML = "Total: $" + total;
  document.getElementById("numItems").innerHTML = "Items: " + numItems;
  document.getElementById("numC").value = numC.value;
}
function renew() {
  total =0;
  numItems =0;
  numA = 0;
  numB = 0;
  numC = 0;
  document.getElementById("numA").value = numA;
  document.getElementById("numB").value = numB;
  document.getElementById("numC").value = numC;
  document.getElementById("totalCost").innerHTML = "Total: $" + total;
  document.getElementById("numItems").innerHTML = "Items: " + numItems;
}
