<?php
// Генерация случайных чисел и сохранение их в переменные
$randomNumbers = [
    'num1' => rand(1, 100),
    'num2' => rand(1, 100),
    'month' => rand(1, 12),
    'year' => rand(1900, 2100),
    'session_id' => rand(0, 1),
    'x' => rand(0, 1920),
    'y' => rand(0, 1080),
    'colors' => ['red', 'green', 'blue', 'yellow', 'purple']
];

$color = $randomNumbers['colors'][array_rand($randomNumbers['colors'])]; // случайный цвет
?>

<!-- Завдання 1 -->
<p>Завдання 1: Перше число: <?php echo $randomNumbers['num1']; ?>, Друге число: <?php echo $randomNumbers['num2']; ?></p>
<p>
    <?php
    if ($randomNumbers['num2'] != 0 && $randomNumbers['num1'] % $randomNumbers['num2'] == 0) {
        echo "{$randomNumbers['num1']} є кратним {$randomNumbers['num2']}";
    } else {
        echo "{$randomNumbers['num1']} не є кратним {$randomNumbers['num2']}";
    }
    ?>
</p>

<!-- Завдання 2 -->
<p>Завдання 2: Перше число: <?php echo $randomNumbers['num1']; ?>, Друге число: <?php echo $randomNumbers['num2']; ?></p>
<p>
    <?php
    $larger = max($randomNumbers['num1'], $randomNumbers['num2']);
    echo "Квадрат більшого числа: " . ($larger ** 2);
    ?>
</p>

<!-- Завдання 3 -->
<p>Завдання 3: Номер місяця: <?php echo $randomNumbers['month']; ?></p>
<p>
    <?php
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $randomNumbers['month'], date("Y"));
    echo "Кількість днів у місяці: $daysInMonth";
    ?>
</p>

<!-- Завдання 4 -->
<p>Завдання 4: Рік: <?php echo $randomNumbers['year']; ?></p>
<p>
    <?php
    if (($randomNumbers['year'] % 4 == 0 && $randomNumbers['year'] % 100 != 0) || $randomNumbers['year'] % 400 == 0) {
        echo "{$randomNumbers['year']} є високосним роком";
    } else {
        echo "{$randomNumbers['year']} не є високосним роком";
    }
    ?>
</p>

<!-- Завдання 5 -->
<p>Завдання 5: Перше число: <?php echo $randomNumbers['num1']; ?>, Друге число: <?php echo $randomNumbers['num2']; ?></p>
<p>
    <?php
    if ($randomNumbers['num1'] % 3 == 0 && $randomNumbers['num2'] % 3 == 0) {
        echo "Сума чисел: " . ($randomNumbers['num1'] + $randomNumbers['num2']);
    } elseif ($randomNumbers['num2'] != 0) {
        echo "Результат ділення: " . ($randomNumbers['num1'] / $randomNumbers['num2']);
    } else {
        echo "Некоректний ввід, ділення на нуль неможливе";
    }
    ?>
</p>

<!-- Завдання 6 -->
<p>Завдання 6: session_id: <?php echo $randomNumbers['session_id']; ?></p>
<p>
    <?php
    if ($randomNumbers['session_id'] == 0) {
        echo "Будь ласка, увійдіть. <form>Логін: <input type='text' name='login'> Пароль: <input type='password' name='password'></form>";
    } elseif ($randomNumbers['session_id'] == 1) {
        echo "Ви зареєстровані, увійдіть.";
    }
    ?>
</p>

<!-- Завдання 7 -->
<p>Завдання 7: Координати: (<?php echo $randomNumbers['x']; ?>, <?php echo $randomNumbers['y']; ?>), Колір: <?php echo $color; ?></p>
<p>
    <?php
    $screenWidth = 1920;  // ширина екрану
    $screenHeight = 1080; // висота екрану

    if ($randomNumbers['x'] >= 0 && $randomNumbers['x'] <= $screenWidth && $randomNumbers['y'] >= 0 && $randomNumbers['y'] <= $screenHeight) {
        echo "<div style='position: absolute; left: {$randomNumbers['x']}px; top: {$randomNumbers['y']}px; width: 100px; height: 100px; background-color: {$color};'></div>";
    } else {
        echo "Координати виходять за межі екрану";
    }
    ?>
</p>
