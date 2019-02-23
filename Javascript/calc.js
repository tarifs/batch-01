var additionBtn = document.getElementById('add');
additionBtn.onclick = function () {
    var firstNumberValue = Number(document.getElementById('firstNumber'
    ).value);
    var secoundNumberValue = Number(document.getElementById('secoundNumber').value);
    var result = firstNumberValue+secoundNumberValue;
    document.getElementById('result').value = result;
}
var additionBtn = document.getElementById('sub');
additionBtn.onclick = function () {
    var firstNumberValue = Number(document.getElementById('firstNumber'
    ).value);
    var secoundNumberValue = Number(document.getElementById('secoundNumber').value);
    var result = firstNumberValue-secoundNumberValue;
    document.getElementById('result').value = result;
}
var additionBtn = document.getElementById('mul');
additionBtn.onclick = function () {
    var firstNumberValue = Number(document.getElementById('firstNumber'
    ).value);
    var secoundNumberValue = Number(document.getElementById('secoundNumber').value);
    var result = firstNumberValue*secoundNumberValue;
    document.getElementById('result').value = result;
}
var additionBtn = document.getElementById('div');
additionBtn.onclick = function () {
    var firstNumberValue = Number(document.getElementById('firstNumber'
    ).value);
    var secoundNumberValue = Number(document.getElementById('secoundNumber').value);
    var result = firstNumberValue/secoundNumberValue;
    document.getElementById('result').value = result;
}
var additionBtn = document.getElementById('mod');
additionBtn.onclick = function () {
    var firstNumberValue = Number(document.getElementById('firstNumber'
    ).value);
    var secoundNumberValue = Number(document.getElementById('secoundNumber').value);
    var result = firstNumberValue%secoundNumberValue;
    document.getElementById('result').value = result;
}