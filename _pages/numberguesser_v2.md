---
title: Number Guesser v2
layout: default
description: 
---

<html>
<head>
  <title>Guess the Number</title>
  <style>
    // Define font variables
    $font-family: Arial, sans-serif;
    $header-font-size: 3rem;
    $body-font-size: 1.2rem;
    
    // Define color variables
    $primary-color: #007bff;
    $secondary-color: #6c757d;
    $success-color: #28a745;
    $danger-color: #dc3545;
    $warning-color: #ffc107;
    
    // Define border radius variable
    $border-radius: 4px;
    
    // Apply font styles to body and heading
    body {
      font-family: $font-family;
      font-size: $body-font-size;
    }
    h1 {
      font-size: $header-font-size;
      color: $primary-color;
    }
    
    // Style the input and button
    input[type="text"], button {
      font-family: $font-family;
      font-size: $body-font-size;
      padding: 8px;
      border-radius: $border-radius;
      border: 1px solid $secondary-color;
    }
    input[type="text"] {
      width: 50%;
    }
    button {
      background-color: $primary-color;
      color: #fff;
      border-color: $primary-color;
      cursor: pointer;
      transition: background-color 0.2s ease;
      &:hover {
        background-color: darken($primary-color, 10%);
      }
    }
    
    // Style the result text
    #result {
      margin-top: 16px;
      font-size: $body-font-size;
      color: $secondary-color;
    }
    #result.success {
      color: $success-color;
    }
    #result.failure {
      color: $danger-color;
    }
  </style>
</head>
<body>
  <h1>Guess the Number</h1>
  <p>Try to guess the number between 1 and 100.</p>
  <input type="text" id="guess" placeholder="Enter your guess">
  <button onclick="checkGuess()">Submit</button>
  <p id="result"></p>

  <script>
    // Generate a random number between 1 and 100
    const randomNumber = Math.floor(Math.random() * 100) + 1;
    let attempts = 0;

    function checkGuess() {
      // Get the user's guess
      const guess = parseInt(document.getElementById("guess").value);

      // Increase the number of attempts
      attempts++;

      // Check if the guess is correct
      if (guess === randomNumber) {
        document.getElementById("result").innerHTML = `Congratulations! You guessed the number in ${attempts} attempts.`;
        document.getElementById("result").classList.add("success");
      } else if (guess < randomNumber) {
        document.getElementById("result").innerHTML = "Too low. Guess again.";
        document.getElementById("result").classList.add("failure");
      } else {
        document.getElementById("result").innerHTML = "Too high. Guess again.";
        document.getElementById("result").classList.add("failure");
      }
    }
  </script>
</body>
</html>