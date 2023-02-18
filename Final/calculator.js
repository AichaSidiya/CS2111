window.onload = function(){
var multiplication = document.getElementById("multiply");
var devision = document.getElementById("devide");
var substraction = document.getElementById("substract");
var addition = document.getElementById("add");
var result;

multiplication.onclick = function()
{
        num1 = document.getElementById("firstNumber").value;
        num2 = document.getElementById("secondNumber").value;
        result = num1 * num2;
        if(!isNaN(result)){
            document.getElementById("result").innerHTML = "The result is " +result;
        }
        else{
            document.getElementById("result").innerHTML = "Wrong input!";
        }
}

devision.onclick = function()
{
        num1 = document.getElementById("firstNumber").value;
        num2 = document.getElementById("secondNumber").value;
        result = num1 / num2;
        if((!isNaN(result)) && (isFinite(result))){
            document.getElementById("result").innerHTML = "The result is " +result;
        }

        else{
            document.getElementById("result").innerHTML = "Wrong input!";
        }
}

}
