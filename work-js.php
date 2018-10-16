<?php
/**
*Template name: Works JS
*/
?>

<?php get_header(); ?>

<body class="calc">
    <div class="container">
        <table>
            <tr>
                <td colspan="4" class="no-border">
                    <div class="screen">
                        <div id="second"></div>
                        <div id="mark"></div>
                        <div id="first"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="number" onclick="number('7')">7</td>
                <td class="number" onclick="number('8')">8</td>
                <td class="number" onclick="number('9')">9</td>
                <td class="function" onclick="clearAll()">C</td>
            </tr>
            <tr>
                <td onclick="number('4')">4</td>
                <td onclick="number('5')">5</td>
                <td onclick="number('6')">6</td>
                <td class="function" onclick="sign('/')">/</td>
            </tr>
            <tr>
                <td onclick="number('1')">1</td>
                <td onclick="number('2')">2</td>
                <td onclick="number('3')">3</td>
                <td class="function" onclick="sign('x')">x</td>
            </tr>
            <tr>
                <td onclick="number('0')">0</td>
                <td class="function" onclick="sign('+')">+</td>
                <td class="function" onclick="sign('-')">-</td>
                <td class="result" onclick="result()">=</td>
            </tr>
        </table>
    </div>
</body>

</html>