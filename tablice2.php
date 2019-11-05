Podaj liczbę członków rodziny:
<form method="post">
    <input type='number' name='number_of_members' /><br>
    <input type='submit' value="Prześlij" />
</form>
<?php
    if(!empty($_POST['number_of_members'])){
        $num_of_memb = $_POST['number_of_members'];
        if($num_of_memb >= 1 && $num_of_memb <= 70){
            echo "<form method='post'>";
            for ($i = 0; $i < $num_of_memb; $i++){
                $j = $i + 1;
                echo <<< FORMULARZ
                    $j.<br>
                    <input type='text' placeholder="imie" name="name$i" /><br>
                    <input type='text' placeholder="nazwisko" name="surname$i" /><br>
                    <input type='number' placeholder="wiek" name="surname$i" /><br>
                FORMULARZ;
            }
            echo '<br><input type="submit" value="Wyślij" />
            </form>';
            $suma_wieku = 0;
            $najstarsza = 0;
            $najmlodsza = 140;
            $Tablica = array();
            for ($i = 0; $i < $num_of_memb; $i++){
                $wiek = $_POST["name$i"];
                if(!empty($wiek)){
                    $Tablica[$i] = $wiek;
                    $suma_wieku += $wiek;
                    if($wiek > $najstarsza){
                        $najstarsza = $wiek;
                    }
                    if($wiek < $najmlodsza){
                        $najmlodsza = $wiek;
                    }
                }
            }
            $srednia = $suma_wieku / $num_of_memb;
            echo "Najmłodsza: $najmlodsza<br>
            Najstarsza: $najstarsza<br>
            Średnia: $srednia";
        }
    }
    
?>
