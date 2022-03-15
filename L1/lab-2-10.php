<HTML>
<BODY>
    <TABLE border=1>
        <?php
		echo '<title>Таблица умножения</title>';
        for ($i = 0; $i < 10; $i++) {
            echo '<tr>';
            for ($j = 1; $j < 11; $j++) {
                echo '<td align=center style="color:' . ($j % 2 ? 'black' : 'red') . '">' . ($i * 10 + $j) . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </TABLE>

</BODY>

</HTML>