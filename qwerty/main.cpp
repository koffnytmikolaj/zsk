#include <iostream>
#include <ctime>
#include <cstdlib>

using namespace std;

void table_content(int *table, int t_size)
{
    char filling_content;
    cout << "Wype³nianie standardowe czy losowe? (S/L)" << endl;
    bool correct = true;
    do
    {
        cin >> filling_content;
        switch(filling_content)
        {
            case 'S':
                cout << "Podaj wartosci:" << endl;
                for (int i = 0; i < t_size; i++)
                {
                    cin >> table[i];
                }
                break;
            case 'L':
                srand(time(NULL));
                for (int i = 0; i < t_size; i++)
                {
                    table[i] = rand();
                }
                break;
            default:
                correct = false;
                break;
        }
    }
    while(correct == false);
}

int babel_sorting (int *table, int t_size)
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
                steps++;
            }
        }
    }while(sorted == false);
    return steps;
}

int sort_by_insertion (int *table, int table_s)
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
}

int select_type_of_draw (int *Table, int table_size)
{
    int type_of_draw, steps;
    cout << "Wybierz rodzaj losowania (Podaj odpowiednia liczbe):" <<
    endl << "Losowanie babelkowe (1)" <<
    endl << "Losowanie przez wstawianie (2)" << endl;
    bool correct = true;
    do
    {
        cin >> type_of_draw;
        switch(type_of_draw)
        {
            case 1:
                steps = babel_sorting(Table, table_size);
                break;
            case 2:
                steps = sort_by_insertion(Table, table_size);
                break;
            default:
                cout << "Bledne dane!" << endl;
                correct = false;
                break;
        }
    }while(correct == false);
    return steps;
}

void show_table (int *table, int t_size)
{
    for(int i = 0; i < t_size; i++)
    {
        cout << table[i] << endl;
    }
}

int main()
{
    int table_size;
    cout << "Podaj wielkosc tablicy" << endl;
    cin >> table_size;
    int *Table = new int[table_size];
    table_content(Table, table_size);
    int number_of_steps;
    number_of_steps = select_type_of_draw(Table, table_size);
    show_table(Table, table_size);
    cout << number_of_steps;
    return 0;
}
