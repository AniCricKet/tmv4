<?php
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'default';
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/fastpages-styles.css" id="default-theme-link" <?php if ($theme == 'default') echo 'disabled'; ?>>
    <link rel="stylesheet" href="../assets/css/dark-mode1.css" id="dark-theme-link" <?php if ($theme == 'dark') echo 'disabled'; ?>>
    <link rel="stylesheet" href="../assets/css/other-style.css" id="mort-theme-link" <?php if ($theme == 'mort') echo 'disabled'; ?>>
</head>
<body>
    <button id="default-theme-toggle">Default Theme</button>
    <button id="dark-theme-toggle">Dark Theme</button>
    <button id="mort-theme-toggle">Mort Theme</button>
    <script>
        const defaultToggleButton = document.querySelector('#default-theme-toggle');
        const darkToggleButton = document.querySelector('#dark-theme-toggle');
        const mortToggleButton = document.querySelector('#mort-theme-toggle');
        const defaultThemeLink = document.querySelector('#default-theme-link');
        const darkThemeLink = document.querySelector('#dark-theme-link');
        const mortThemeLink = document.querySelector('#mort-theme-link');

        function setTheme(theme) {
            document.cookie = 'theme=' + theme + ';path=/';
            defaultThemeLink.disabled = (theme != 'default');
            darkThemeLink.disabled = (theme != 'dark');
            mortThemeLink.disabled = (theme != 'mort');
        }

        defaultToggleButton.addEventListener('click', () => {
            setTheme('default');
        });
        darkToggleButton.addEventListener('click', () => {
            setTheme('dark');
        });
        mortToggleButton.addEventListener('click', () => {
            setTheme('mort');
        });
    </script>
</body>
</html>
