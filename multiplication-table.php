<?php
    $table = '';
    if ($_POST) {
        $table .= '<table border="1">';
        for ($i = 1; $i <= $_POST['rows']; $i++) {
            $table .= '<tr>';
            for ($j = 1; $j <= $_POST['column']; $j++) {
				$p = $i * $j;
                $table .= '<td width="50">' .$p.'</td>';
            }
            $table .= '</tr>';
        }
        $table .= '</table>';
    }
?>
    <form action="" method="post">
        <table border="0" width="200">
            <tr>
                <td width="80"><label>Column</label></td>
                <td width="120"><input type="text" name="column" ></td>
            </tr>
            <tr>
                <td><label>Rows</label></td>
                <td><input type="text" name="rows"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Create Table"></td>
            </tr>
        </table>    
    </form>
    <br />
    <br />
<?php
    echo $table;
?>