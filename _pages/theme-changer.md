---
title: Theme Changer
layout: base
---
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/fastpages-styles.css">
    <link rel="stylesheet" href="../assets/css/dark-mode1.css">
</head>
<button id="dark">Dark Mode</button>
<script>
    const themeToggle = document.querySelector('#dark');
    const html = document.querySelector('html');
    themeToggle.addEventListener('click', () => {
    html.classList.toggle('dark-mode1');
    });
</script>
</html>