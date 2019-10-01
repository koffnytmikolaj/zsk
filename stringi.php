<?php
    $text = <<< XD
    Elo
    Wale wiadro
    XD;
    
    echo "Przed użyciem funkcji nl2br: <br> $text";
    echo "Po wywołaniu funkcji nl2br";
    echo nl2br($text);

    echo strtolower($text), '<br>'; //same male
    echo strtoupper($text), '<br>'; //same duze

    $text = 'anna AgnieSzKa tomasz';
    echo ucfirst($text), '<br>'; //pierwsza litera wielka
    echo ucwords($text), '<br>'; //w każdym wyrazie

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $kolumna = wordwrap($lorem, 40, '<br>'); //po 40 znakach pisze '<br>'
    echo $kolumna, '<hr>';

    //usuwanie białych znaków
    $name = 'Kasia';
    $name1 = '  Kasia ';

    ob_clean(); //czyści zawartość bufor

    echo 'Długość zmiennej $name: ', strlen($name), '<br>';
    echo 'Długość zmiennej $name1: ', strlen($name1), '<br>';

    echo strlen(ltrim($name1)), '<br>';
    echo strlen(rtrim($name1)), '<br>';
    echo strlen(trim($name1)), '<hr>';

    //przeszukiwanie ciągu znaków
    $address = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
    $search1 = strstr($address, 'tel');
    echo $search1, '<br>'; //tel. (61) 445-44-58

    $search2 = strstr($address, 'tel', true);
    echo $search2, '<br>'; //Poznań, ul. Fredry 13,

    $search3 = stristr($address, 'Tel');
    echo $search3, '<hr>'; //Poznań, ul. Fredry 13,

    $mail1 = strstr('zsk@gmail.com', '@');
    echo $mail1, '<br>';

    $mail2 = strstr('zsk@gmail.com', 64); //ascii
    echo $mail2, '<hr>';

    $ciag1 = 'a';
    $ciag2 = 'aa';
    echo strcmp($ciag1, $ciag2); //-1
    echo strcmp('zzz', 'zzz'); //0
    echo strcmp('zza', 'zzz'); //-1
    echo strcmp('zzz', 'zza'); //1
    echo strcmp('zzza', 'zzz'); //1
    echo '<hr>';

    $poz = strpos('abcdefg', 'cde');
    echo $poz; //2

    $poz = strpos('abcdefg', 'abc');
    echo $poz, '<hr>'; //0


    //zad1
    $text1 = 'abcdabcd';
    $text2 = 'ab';
    $czy_jest;
    if (strpos($text1, $text2) === false){ //specjalnie potrójny operator
        $czy_jest = "nie ma";
    }else
        $czy_jest = "jest";
    echo $czy_jest, '<br>';

    //przetwarzanie ciągów znaków
    $replace = str_replace('%name%', 'Janusz', 'Mam na imię %name%');
    echo $replace, '<br>';

    $surname = substr('Janusz Kowalski', 7, 5);
    echo $surname, '<br>'; //Kowal

    //zamiana polskich znaków
    $login = 'bączek';
    $censore = array('ą', 'ę', 'ś', 'ż', 'ź', 'ó', 'ć', 'ń', 'ł');
    $replace = array('a', 'e', 's', 'z', 'z', 'o', 'c', 'n', 'l');
    $new_login = str_replace($censore, $replace, $login);
    echo $new_login, '<br>';

    //zad. 2 cenzurowanie zdania podanego przez użytkownika, użytkownik podaje dane w formularzu
    echo <<< FORM
    <form method = "post">
        <input type = "text" name = "dane" placeholder = "Wpisz zdanie" />
        <input type = "submit" name = "" value = "Zatwierdź" />
    </form>
    FORM;

if (isset($_POST['dane'])){
    $data = $_POST['dane'];
    echo $data, '<br>';
    
    $niedozwolone = array('czarny', 'biały');
    $zamiana = ' ##### ';
    $poprawne = str_ireplace($niedozwolone, $zamiana, $data);
    echo "<h6> Błędne dane: $data </h6>";
    echo "<h6> $poprawne </h6>";
}    

?>
