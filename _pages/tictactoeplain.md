---
title: Tic-Tac-Toe
layout: default
description: 
---
<html>
<head>
  <title>Tic Tac Toe</title>
  <style>
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .board {
      display: flex;
      flex-wrap: wrap;
      width: 300px;
      height: 300px;
      border: 1px solid black;
    }
    .cell {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100px;
      height: 100px;
      font-size: 48px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="board" id="board">
      <div class="cell" onclick="makeMove(0)"></div>
      <div class="cell" onclick="makeMove(1)"></div>
      <div class="cell" onclick="makeMove(2)"></div>
      <div class="cell" onclick="makeMove(3)"></div>
      <div class="cell" onclick="makeMove(4)"></div>
      <div class="cell" onclick="makeMove(5)"></div>
      <div class="cell" onclick="makeMove(6)"></div>
      <div class="cell" onclick="makeMove(7)"></div>
      <div class="cell" onclick="makeMove(8)"></div>
    </div>
    <button onclick="resetGame()">Restart</button>
  </div>
  <script>
    let currentPlayer = "X";
    const board = ["", "", "", "", "", "", "", "", ""];

    function makeMove(index) {
      if (board[index] === "") {
        board[index] = currentPlayer;
        document.getElementById("board").children[index].innerText = currentPlayer;
        document.getElementById("board").children[index].style.cursor = "default";
        checkWinner();
        currentPlayer = (currentPlayer === "X") ? "O" : "X";
      }
    }

    function checkWinner() {
      const winningCombinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // rows
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // columns
        [0, 4, 8], [2, 4, 6] // diagonals
      ];

      for (let combination of winningCombinations) {
        const [a, b, c] = combination;
        if (board[a] !== "" && board[a] === board[b] && board[a] === board[c]) {
          alert(`Player ${board[a]} wins!`);
          resetGame();
          return;
        }
      }

      if (board.every(cell => cell !== "")) {
        alert("It's a draw!");
        resetGame();
        return;
      }
    }

    function resetGame() {
      currentPlayer = "X";
      board.fill("");
      const cells = document.getElementsByClassName("cell");
      for (let cell of cells) {
        cell.innerText = "";
        cell.style.cursor = "pointer";
      }
    }
  </script>
</body>
</html>
