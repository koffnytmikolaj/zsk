#include <iostream>
#include <ctime>
#include <cstdlib>
#include <cstdio>
#include <cmath>
#include <iomanip>
#include <fstream>

using namespace std;

void delete_table(double *T, int t_size)                                                        //usuwa wybrana tablice
{
    for(int i = 0; i < t_size; i++)
    {
        T[i] = 0;
    }
}

int count_file_size(string name)                                                                //liczy ilosc liczb w pliku
{
    fstream data;
    int table_size = 0;
    data.open(name.c_str(), ios :: in);
    if(data.good())
    {
        int x;
        while(!data.eof())
        {
            data >> x;
            table_size++;
        }
    }
    data.close();
    return table_size;
}

int create_file (string name)                                                                   //tworzy nowy plik z danymi
{
    int table_size;
    cout << "Podaj ilosc liczb" << endl;
    do
    {
        cin >> table_size;
    }
    while(table_size <= 3);
    char type_of_inserting;
    cout << "Czy chcesz wpisac liczby recznie, czy automatycznie? (R/A)" << endl;
    do
    {
        cin >> type_of_inserting;                                                               //wybieramy czy chcemy wypisaæ liczby rêcznie czy je losowaæ
    }
    while(type_of_inserting != 'R' && type_of_inserting != 'A');
    fstream data;
    data.open(name.c_str(), ios :: out);
    double number;
    if(type_of_inserting == 'R')                                                                //gdy wypisujemy recznie
    {
        cout << "Podaj wartosci:" << endl;
        for(int i = 0; i < table_size; i++)
        {
            cin >> number;
            data << number;
            if(i != table_size - 1)
            {
                data << endl;
            }
        }
    }
    else                                                                                        //gdy losujemy
    {
        srand(time(NULL));
        for(int i = 0; i <table_size; i++)
        {
            number = rand() % 990 + 10;
            data << number;
            if(i != table_size - 1)
            {
                data << endl;
            }
        }
    }
    data.close();
    return table_size;
}

void insert_table_content (double *t, string name)                                              //zapisujemy dane do tablicy
{
    fstream data;
    data.open(name.c_str(), ios :: in);
    int i = 0;
    while(!data.eof())
    {
        data >> t[i];
        i++;
    }
    data.close();
}

int babel_sorting (double *table, int t_size)                                                   //sortowanie b¹belkowe
{
    bool sorted;
    int steps = 0;
    do
    {
        sorted = true;
        for (int i = t_size - 1; i > 0; i--)
        {
            if(table[i] < table[i - 1])
            {
                swap(table[i], table[i - 1]);
                sorted = false;
            }
            steps++;
        }
    }while(sorted == false);
    return steps;
}

int sort_by_insertion (double *table, int table_s)                                              //sortowanie przez wstawianie
{
    int steps = 0;
    for(int i = 1; i < table_s; i++)
    {
        for(int j = i; j > 0; j--)
        {
            if(table[j] < table[j - 1])
            {
                swap(table[j], table[j - 1]);
            }
            else
            {
                j = 0;
            }
            steps++;
        }
    }
    return steps;
}

int heap_sort (double *table, int t_size)                                                       //sortowanie przez kopcowanie
{
    double *T = new double[t_size];
    for(int i = 0; i < t_size; i++)
    {
        T[i] = table[i];
    }
    int steps = 0;
    int j, half_j;
    bool repeat = true;
    for(int i = 1; i < t_size; i++)                                                             //tworzenie kopca
    {
        repeat = true;
        j = i;
        half_j = j / 2;
        while(repeat == true)
        {
            if(j % 2 != 0)
            {
                if(T[j] > T[half_j])
                {
                    swap(T[j], T[half_j]);
                    j = half_j;
                    half_j /= 2;
                }
                else
                {
                    repeat = false;
                }
                if(j == 0)
                {
                    repeat = false;
                }
            }
            else
            {
                if(T[j] > T[half_j - 1])
                {
                    swap(T[j], T[half_j - 1]);
                    j = half_j - 1;
                    half_j = j / 2;
                }
                else
                {
                    repeat = false;
                }
                if(j == 0)
                {
                    repeat = false;
                }
            }
            steps++;
        }
    }
    int size_number = t_size - 1;
    for(int i = t_size - 1; i >= 0; i--)                                                        //sortowanie kopca
    {
        table[i] = T[0];
        T[0] = T[i];
        T[i] = 0;
        repeat = true;
        j = 0;
        while(repeat == true)
        {
            if((j * 2 + 2) < i)
            {
                if(T[j * 2 + 1] >= T[j * 2 + 2] && T[j] < T[j * 2 + 1])
                {
                    swap(T[j], T[j * 2 + 1]);
                    j = j * 2 + 1;
                }
                else if(T[j] < T[j * 2 + 2])
                {
                    swap(T[j], T[j * 2 + 2]);
                    j = j * 2 + 2;
                }
                else
                {
                    repeat = false;
                }
            }
            else
            {
                if((j * 2 + 1) < i)
                {
                    if(T[j] < T[j * 2 + 1])
                    {
                        swap(T[j], T[j * 2 + 1]);
                        j = j * 2 + 1;
                    }
                    else
                        repeat = false;
                }
                else
                {
                    repeat = false;
                }
            }
            steps++;
        }
    }
    delete_table(T, t_size);
    return steps;
}

char select_type_of_draw ()                                                                     //wybieranie rodzaju sortowania
{
    char type_of_draw;
    cout << "Wybierz rodzaj sortowania (Podaj odpowiednia liczbe):" <<
    endl << "Sortowanie babelkowe (1)" <<
    endl << "Sortowanie przez wstawianie (2)" <<
    endl << "Sortowanie przez kopcowanie (3)" << endl;
    do
    {
        cin >> type_of_draw;
        if(type_of_draw != '1' && type_of_draw != '2' && type_of_draw != '3')
            cout << "Bledne dane!" << endl;
    }
    while(type_of_draw != '1' && type_of_draw != '2' && type_of_draw != '3');
    return type_of_draw;
}

void return_table (double *table, int t_size, string name, char s_type)                         //tworzenie pliku wynik.txt
{
    fstream score;
    score.open(name.c_str(), ios :: out);
    score << "Sortowanie ";
    switch(s_type)
    {
        case '1':
            score << "babelkowe";
            break;
        case '2':
            score << "przez wstawianie";
            break;
        case '3':
            score << "przez kopcowanie";
            break;
    }
    score << endl << endl;
    for(int i = 0; i < t_size; i++)                                                             //wypisanie uporz¹dkowanych liczb
    {
        score << endl << fixed << setprecision(2) << table[i];
    }
}

void return_remainder(string loop, clock_t time, int steps, char type)                          //tworzenie  pliku petle.txt
{
    fstream loops;
    loops.open(loop.c_str(), ios :: out);
    loops << "Dla sortowania ";
    switch(type)
    {
        case '1':
            loops << "babelkowego";
            break;
        case '2':
            loops << "przez wstawianie";
            break;
        case '3':
            loops << "przez kopcowanie";
            break;
    }
    loops << endl << "Liczba krokow: " << steps <<
    endl << "Czas sortowania: " << time << " ms";
    loops.close();
}

int main()
{
    string data_name = "dane.txt";                                                              //nazwa pliku z danymi
    int table_size = count_file_size(data_name);                                                //zwraca iloœæ liczb w tabeli = wielkoœæ naszej tablicy
    if(table_size == 0)                                                                         //gdy plik jest pusty lub nie istnieje
    {
        cout << "Plik jest pusty lub nie istnieje! Chcesz stworzyc nowy? (T/N)" << endl;        //pyta czy stworzyæ plik czy zakoñczyæ program
        char new_file;
        do
        {
            cin >> new_file;
        }
        while(new_file != 'T' && new_file != 'N');
        switch(new_file)
        {
            case 'T':
                table_size = create_file(data_name);                                            //tworzenie owego pliku z danymi
                break;
            case 'N':
                return false;
        }
    }
    double *Table = new double[table_size];                                                     //tworzenie tablicy
    insert_table_content(Table, data_name);                                                     //zape³nianie tablicy danymi
    int number_of_steps;
    char sort_type = select_type_of_draw();                                                     //wybieranie typu sortowania
    clock_t sort_start = clock();
    switch(sort_type)                                                                           //uruchomienie odpowiedniego algorytmu sortowania
    {                                                                                           //i zwrócenie liczby kroków
        case '1':
            number_of_steps = babel_sorting (Table, table_size);
            break;
        case '2':
            number_of_steps = sort_by_insertion (Table, table_size);
            break;
        case '3':
            number_of_steps = heap_sort (Table, table_size);
            break;
    }
    clock_t sort_end = clock() - sort_start;                                                    //obliczenie czasu dzia³ania algorytmu sortowania
    string score_name = "wynik.txt", loop_name = "petle.txt";
    return_table(Table, table_size, score_name, sort_type);                                     //tworzy plik wynik.txt
    delete_table(Table, table_size);
    return_remainder(loop_name, sort_end, number_of_steps, sort_type);                          //tworzy plik petle.txt
    return true;
}
