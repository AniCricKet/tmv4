---
title: Theme Changer
layout: base
---
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/fastpages-styles.css">
    <link rel="stylesheet" href="../assets/css/dark-mode1.css" id="theme-link">
</head>
<body>
    <button id="theme-toggle">Toggle Theme</button>
    <script>
        const toggleButton = document.querySelector('#theme-toggle');
        const themeLink = document.querySelector('#theme-link');
        toggleButton.addEventListener('click', () => {
            if (themeLink.getAttribute('href') === '../assets/css/fastpages-styles.css') {
                themeLink.setAttribute('href', '../assets/css/dark-mode1.css');
            } else {
                themeLink.setAttribute('href', '../assets/css/fastpages-styles.css');
            }
        });
    </script>
</body>
</html>