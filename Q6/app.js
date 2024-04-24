const result = document.getElementById("result");
const buttons = document.querySelectorAll(".btn");
let currentValue = "";

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    const value = button.dataset.value;

    switch (value) {
      case "sqrt":
        currentValue = Math.sqrt(parseFloat(currentValue)).toString();
        break;
      case "**":
        let base = parseFloat(prompt("Enter base:"));
        let exponent = parseFloat(prompt("Enter exponent:"));
        currentValue = Math.pow(base, exponent).toString();
        break;
      case "backspace":
        currentValue = currentValue.slice(0, -1);
        break;
      case "=":
        currentValue = eval(currentValue).toString();
        break;
      default:
        currentValue += value;
    }

    result.value = currentValue;
  });
});
