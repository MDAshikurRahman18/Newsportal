<?php
class ViewComments
{
    public static function commentsForm()
    {
        echo '<form action="insertcomment">
        <input type="hidden" name="id" value="' . $_GET['id'] . '">
        মন্তব্য: <input type="text" name="comment">
            <input type="submit" value="পাঠান"></form>';
    }

    public static function commentsByNews($arr)
    {
        if ($arr != null) {
            echo '<table id="ctable"><th> মন্তব্য</th><th>Kuupäev</th>';
            foreach ($arr as $value) {
                echo '<tr><td>' . $value['text'] . "</td><td>" . $value['date'] . "</td></tr>";
            }
            echo '</table>';
        }
    }

    public static function commentsCountWithAnchor($value)
    {
        if ($value['count'] > 0) {
            echo '<b><a href="#ctable"/>(' . $value['count'] . ') </a></b>';
        }
    }

    public static function commentsCount($value)
    {
        if ($value['count'] > 0) {
            echo '<b><font color="red">(' . $value['count'] . ') </font></b>';
        }
    }
}
