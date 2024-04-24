function generateFibonacci() {
    var numberInput = parseInt(document.getElementById("numberInput").value);
    var fibonacciSeries = [];

    if (numberInput <= 0) {
        alert("Please enter a positive number greater than 0.");
        return;
    }

    for (var i = 0; i < numberInput; i++) {
        if (i === 0) {
            fibonacciSeries.push(0);
        } else if (i === 1) {
            fibonacciSeries.push(1);
        } else {
            var nextFibonacci = fibonacciSeries[i - 1] + fibonacciSeries[i - 2];
            fibonacciSeries.push(nextFibonacci);
        }
    }

    displayFibonacci(fibonacciSeries);
}

function displayFibonacci(series) {
    var output = "<p>Fibonacci Series:</p>";
    output += "<p>" + series.join(", ") + "</p>";
    document.getElementById("fibonacciSeries").innerHTML = output;
}

