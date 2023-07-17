<h1>Task 1</h1>
 <?php
session_start();

$transport = isset($_SESSION['transport']) ? $_SESSION['transport'] : array(
    "автомобиль",
    "самолет",
    "паром",
    "метро"
);

if ($_POST['submit'] && $_POST['favoriteTransport']!=''){

    $favoriteTransport = $_POST['favoriteTransport'];
    $favoriteTransport = explode(',', $favoriteTransport);
    $transport = array_merge($transport, $favoriteTransport);
    echo "<ul>";
    foreach ($transport as $type){
        echo "<li>$type</li>";
    }
    echo "</ul>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['favoriteTransport']) && !empty($_POST['favoriteTransport'])) {
        $favoriteTransport = explode(',', $_POST['favoriteTransport']);
        $transport = array_merge($transport, $favoriteTransport);
        $_SESSION['transport'] = $transport;
    }
}

echo  "<p>Путешествовать можно по городу, стране или миру.
Вот список некоторых распространенных видов транспорта:</p>";
if (!($_POST['submit'] && $_POST['favoriteTransport']!='')){
    echo "<ul>";
    foreach ($transport as $type){
        echo "<li>$type</li>";
    }
    echo "</ul>";
}
?>

<form method="post" action="index.php">
<label>Ваш любимый способ Путешествовать<input type='text' value='' name = 'favoriteTransport' size='40'></label>
<input type="submit" name = "submit" value='Перейти'></form>



<!-- форма для добавления новых транспортных средств -->
<form method="post">
    <label>Добавить еще:</label>
    <input type="text" name="favoriteTransport"/>
    <button type="submit">Добавить</button>
</form>

<h1>Task 2</h1>
<?php
$users = array(
    'user1' => array(
        'name' => 'Ivan',
        'age' => 23
    ),
    'user2' => array(
        'name' => 'Vasya',
        'age' => 50
    )
);

echo '<ul>';
foreach ($users as $user => $data) {
    echo '<li>' . $user . '<ul>';
    foreach ($data as $key => $value) {
        echo '<li>' . $key . ': ' . $value . '</li>';
    }
    echo '</ul></li>';
}
echo '</ul>';
?>

<h1>Task 3</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем значения R, G и B из текстовых полей формы.
    $r = isset($_POST['r']) ? (int)$_POST['r'] : 0;
    $g = isset($_POST['g']) ? (int)$_POST['g'] : 0;
    $b = isset($_POST['b']) ? (int)$_POST['b'] : 0;

    // Создаем цвет на основе R, G и B.
    $color = "rgb($r, $g, $b)";

    // Задаем стили для тега span.
    $span_style = "background-color: $color; color: white; padding: 10px;";
}

?>

<form method="post">
    <label>Значение R:</label>
    <input type="text" name="r" value="<?php echo isset($_POST['r']) ? htmlspecialchars($_POST['r']) : ''; ?>"/>
    <br/>
    <label>Значение G:</label>
    <input type="text" name="g" value="<?php echo isset($_POST['g']) ? htmlspecialchars($_POST['g']) : ''; ?>"/>
    <br/>
    <label>Значение B:</label>
    <input type="text" name="b" value="<?php echo isset($_POST['b']) ? htmlspecialchars($_POST['b']) : ''; ?>"/>
    <br/>
    <button type="submit">Accept</button>
</form>

<?php if (!empty($span_style)) { ?>
    <span style="<?php echo $span_style; ?>">Текст с заданным цветом фона и текста</span>
<?php } ?>
