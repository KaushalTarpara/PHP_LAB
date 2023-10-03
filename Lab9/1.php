<?php
class Stack
{
    private $value = [];
    private $top = -1;

    public function push($item)
    {
        $this->value[++$this->top] = $item;
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new Exception("Stack is empty. Cannot pop.");
        }

        unset($this->value[$this->top--]);
    }

    public function display()
    {
        return array_values($this->value);
    }

    public function isEmpty()
    {
        return ($this->top == -1);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Stack Operations</title>
</head>
<body>
    <h2>Stack Operations</h2>

    <form method="post" action="#">
        <label for="value">Enter a value to push:</label>
        <input type="text" id="value" name="value">
        <input type="submit" value="Push">
    </form>

    <h3>Stack Elements:</h3>
    <table border="1">
        <tr>
            <th>Index</th>
            <th>Value</th>
        </tr>
        <?php
        session_start();
        if (!isset($_SESSION['stack'])) {
            $_SESSION['stack'] = new Stack();
        }

        if (isset($_POST['value'])) {
            $value = $_POST['value'];
            $_SESSION['stack']->push($value);
        }

        if (isset($_GET['pop'])) {
            try {
                $_SESSION['stack']->pop();
            } catch (Exception $e) {
                echo '<p>' . $e->getMessage() . '</p>';
            }
        }

        $stackElements = $_SESSION['stack']->display();
        foreach ($stackElements as $index => $element) {
            echo "<tr>";
            echo "<td>$index</td>";
            echo "<td>$element</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <p><a href="?pop=true">Pop</a></p>
</body>
</html>
