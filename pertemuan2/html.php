

<?php 

/*
*Operator
 Operator adalah simbol-simbol yang digunakan untuk melakukan operasi terhadap suatu nilai variable.

*Operator Aritmatika
 Operator aritmatika merupakan operator untuk melakukan aritmatika.
 Perpangkatan(**)
*/

$a = 5;
$b = 2;

// Penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

// Pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

// Perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

// Pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

// Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

// Pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";

/*
* Operatar penugasan
 Operator penugasan adalah operator untuk memberikan tugas kepada variable. Biasanya digunakan untuk mengisi nilai.

    1. Pengisian nilai (=)
    2. Pengisian nilai (+=)
    3. Pengisian dan perkalian (*=)
    4. Pengisian dan pengurangan (-=)
    5. Pengisian dan perpangkaran (**=)
    6. Pengisian dan pembagian (/=) 
    7. Pengisian dan sisa bagi (%=)
    8. Pengisian dan penggabung (string) (.=) 
*/

$a = 20;
// Ini operator aritmatika
$a = $a + 20;
echo $a;
echo "<br>";

// Ini operator penugasan
$a += 30;

echo $a;
echo "<hr>";

/*
* Operator Increment & Decrement
 Operator increment dan decrement merupakan operator yang digunakan untuk mnambah 1+ (tambah satu) dan mengurangi -1 (kurangi dengan satu).
 Operator increment menggunakan simbol ++, sedangkan decrement menggunakan --.
*/
$goal = 4;
//* Increment
// $goal++;
// $goal++;
// $goal++;
//* Penugasan
$goal += 3;
echo $goal;
echo "<br>";

$value = 20;
//* Increment
// $value--;
// $value--;
// $value--;
// $value--;
//* Decrement
$value -= 4;
echo $value;
echo "<hr>";

/*
*Operator Relasi/Perbandingan
 Operasi relasi adalah operasi untuk membandingkan dua buah nilai.

 Hasil operasi dari operator relasi akan menghasilkan nilai dengan tipe data boolean, yaitu true (benar) dan false (salah).

    1. Lebih besar (>)
    2. Lebih kecil (<)
    3. Sama dengan (==) atau (===)
    4. Tidak sama dengan (!=) dan (!==)
    5. Lebih besar sama dengan (>=)
    6. Lebih kecil sama dengan (<=)
*/
$a = 6;
$b = 2;

//menggunakan operator lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";

//menggunakan operator nilai relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";

//menggunakan sama dengan(==) atau (===)
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";

//menggunakan operator relasi tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";

//menggunakan operasi relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

//menggunakan operasi relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";

//* Latihan Operasi Relasi
$nilai1 = 17;
$nilai2 = 20;
$nilai3 = "20";
$nilai4 = 20;

//Operator Perbandingan
//nilai 1 dan 2
$nilai = $nilai1 <  $nilai2;
echo " $nilai1 <  $nilai2:  $nilai";
echo "<br>";

$nilai = $nilai1 >  $nilai2;
echo " $nilai1 >  $nilai2:  $nilai";
echo "<br>";

$nilai = $nilai1 ==  $nilai2;
echo " $nilai1 ==  $nilai2:  $nilai";
echo "<br>";

$nilai = $nilai1 !=  $nilai2;
echo " $nilai1 != $nilai2:  $nilai";
echo "<hr>";

//nilai 3 dan 4
$nilai = $nilai3 ==  $nilai4;
echo " $nilai3 == $nilai4:  $nilai";
echo "<br>";

$nilai = $nilai3 ===  $nilai4;
echo " $nilai3 === $nilai4:  $nilai";
echo "<br>";

$nilai = $nilai3 !=  $nilai4;
echo " $nilai3 != $nilai4:  $nilai";
echo "<br>";

$nilai = $nilai3 !==  $nilai4;
echo " $nilai3 !== $nilai4:  $nilai";
echo "<hr>";

/* 
*Operator Logika
    Operator logika adalah operator untuk melakukan operasi logika seperti AND, OR, NOT.
        1. Logika AND (&&)
        2. Logika OR (||)
        3. Logika NOT (!)
*/

$first = true;
$second = false;

$third = $first && $second;
echo $third;
echo "<hr>";

$third = $first || $second;
echo $third;
echo "<hr>";

$third = !$first; 
echo $third;
echo "<hr>";

/*
*Operator Ternary
Operator ternary adalah operator untuk membuat sebuah kondisi. Simbol yang digunakan adalah ?(jika benar) dan !(jika salah)
*/

$suka = true;

//menggunakan operator ternary
$jawab = $suka ? "iya":"tidak";

//menampilkan jawaban
echo $jawab;
echo "<hr>";

//* Latihan ternary
$belajar = true;

if ($belajar == true) {
    $result = "Semangat";
} else {
    $result = "Lemes";
}

echo $result;
echo "<hr>";

//* Latihan ternary
// 1. membuat ktp
$age = 23;

$jawab = $age >= 17 ? "buat ktp" : "belum cukup umur";
echo $jawab;
echo "<hr>";

// 2. if else dan  ternary
$umur = 45;
if ($umur >= 25) {
    $ket = "dewasa";
} else if ($umur >= 12) {
    $ket = "remaja";
} else if ($umur >= 5) {
    $ket = "anak2";
} else {
    $ket = "balita";
}

echo $ket;

echo "<hr>";

$ket = ($umur >= 25) ? "dewasa": (($umur >= 12) ? "remaja" : (($umur >= 5) ? "anak2":"balita"));

echo $ket;
echo "<hr>";

// soal no 3
$nilai = 85;

$grade = ($nilai > 90) ? "grade a" : (($nilai > 80) ? "grade b" : (($nilai > 70) ? "grade c":"grade d"));
echo $grade;
echo "<hr>";

// soal no 4
$dpk = 70;
$mtk = 87;
$agama = 80;
$mean = ($dpk + $mtk + $agama) / 3;

$ket = ($mean >= 90) ? "sangat bagus" : (($mean >= 85) ? "bagus" : (($mean >= 80) ? "sangat baik": (($mean >= 70) ? "baik":"kurang")));

echo $ket;
echo "<hr>";

// soal no 5
$x = 60;
$y = 30;

$jawab = ($x == $y) ? "sama": (($x > $y) ? "lebih besar x": (($x < $y) ? "lebih besar y":""));

echo $jawab;
?>