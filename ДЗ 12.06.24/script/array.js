//1

var numbers = [1, 0, 0, 0, 1, 0, 1, 1, 0];

for (var i = 0; i < numbers.length; i++) {
    if (numbers[i] === 0){
        numbers[i] = 1;
    } else {
        numbers[i] = 0;
    }
}

console.log(numbers);

//2

/*var numbers = [1, 2, 3, 4, 5, 6, 9, 8, 7];

function largerfive(num) {
for (var i = 0; i < num.length; i++) {
        if (num[i] >= 5){
            console.log(num[i]);
        }
    }
}

largerfive(numbers);*/

//3

/*var numbers = [1, 5, 3, 2, 11, 4, 5, 2, 4, 8, 9, 1];

for (var i = 0; i < numbers.length; i++) {
    if (numbers[i] <= 6) {
        numbers[i] *= 2;
    }
}

console.log(numbers);*/