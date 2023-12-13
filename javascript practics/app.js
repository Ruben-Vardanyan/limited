const board = document.querySelector("[board]");
const letters_board = document.querySelector(".letters");
const numbers_board = document.querySelector(".numbers");


const output = document.querySelector("[output")

const field_matrix = [];

const letters = ["A", "B", "C", "D", "E", "F", "G", "H"];
const numbers = [8, 7, 6, 5, 4, 3, 2, 1];

const coordinates = Array.from(letters, letter => Array.from(numbers, number => letter + number));
const transposedCoordinates = coordinates[0].map((_, colIndex) => coordinates.map(row => row[colIndex]));



for(let i = 0; i < 8; i++){
    const field = document.createElement("div");
    field.textContent = numbers[i]
    field.classList.add("number");
    numbers_board.appendChild(field);
}

for(let i = 0; i < 8; i++){
    const field = document.createElement("div");
    field.textContent = letters[i]
    field.classList.add("letter");
    letters_board.appendChild(field);
}



for (let i = 0; i < 8; i++) {
  const row = [];
  for (let j = 0; j < 8; j++) {
    const field = document.createElement("div");
    field.classList.add("field");
    field.setAttribute("i", i);
    field.setAttribute("j", j);
    field.setAttribute("coordinate", transposedCoordinates[i][j])
    if ((i + j) % 2 === 0) {
      field.classList.add("white");
    } else {
      field.classList.add("black");
    }
    board.appendChild(field);
    row.push(field);
  }
  field_matrix.push(row);
}



board.addEventListener("click", (event) => {
  const clickedField = event.target;
  if (clickedField.classList.contains("field")) {
    const x = Number(clickedField.getAttribute("i"));
    const y = Number(clickedField.getAttribute("j"));
    restart();
    output.textContent = clickedField.getAttribute("coordinate")
    draw(x, y);
  }
});

const draw = (x, y) => {
    // row and column
    for (let i = 0; i < 8; i++) {
      field_matrix[i][y].classList.add("row-col");
      field_matrix[x][i].classList.add("row-col");
    }
  
    // diagonals
    for (let i = x, j = y; i < 8 && j < 8; i++, j++) {
        field_matrix[i][j].classList.add("diagonal");
    }
    for (let i = x, j = y; i >= 0 && j >= 0; i--, j--) {
        field_matrix[i][j].classList.add("diagonal");
    }
    for (let i = x, j = y; i < 8 && j >= 0; i++, j--) {
        field_matrix[i][j].classList.add("diagonal");
    }
    for (let i = x, j = y; i >= 0 && j < 8; i--, j++) {
        field_matrix[i][j].classList.add("diagonal");
    } 

    field_matrix[x][y].classList.add("captured");
}
  
const restart = () => {
  field_matrix.forEach((row) => {
    output.textContent  = ""
    row.forEach((field) => {
      field.classList.remove("row-col");
      field.classList.remove("diagonal");
      field.classList.remove("captured");
    });
  });
};




