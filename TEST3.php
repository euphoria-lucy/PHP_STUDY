<?php
// 1. 1부터 10까지의 합 구하기
$sum = 0;

for ($i = 1; $i < 11; $i++) {
  $sum += $i;
}

echo $sum;

echo "</br>";

// 2. 1부터 100까지의 짝수의 합 구하기
$sum = 0;

for ($i = 1; $i <= 100; $i++) {
  if ($i % 2 == 0) {
    $sum += $i;
  }
}

echo $sum;

echo "</br>";

// 3. $num = 5일 때 짝수인지 홀수인지 구분하기

$num = 5;

if ($num % 2 == 0) {
  echo "짝수입니다";
} else {
  echo "홀수입니다";
}

echo "</br>";

// 4. 1부터 100사이의 3의 배수 출력하기

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0) {
    echo $i;
    echo " ";
  }
}

echo "</br>";

// 5. 2단부터 5단까지 출력하기

for ($i = 2; $i <= 5; $i++) {
  for ($j = 1; $j <10; $j++) {
    echo $i * $j;
    echo " ";
    echo "</br>";
  }
  echo "</br>";
}

echo "</br>";

// 6. 3,4를 가지고 삼각형의 넓이 구하기
echo 3*4/2;
?>