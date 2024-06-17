//1 Задание

var n = 3;

var matrix = [
    [n, n, n],
    [n, n, n], 
    [n, n, n]
];

for (var i = 0; i < n; i++) {
    matrix[i][i] = 1
    matrix[i][n - 1 - i] = 1;
}

console.log(matrix)

//3 Задание

//  var matrix = [
//      [1, 2, 3],
//      [4, 5, 6], 
//      [7, 8, 9]
//  ];

//  console.log(matrix[0][0],matrix[1][1],matrix[2][2],matrix[0][2],matrix[1][1],matrix[2][0])