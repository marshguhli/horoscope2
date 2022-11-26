# horoscope2
Horoscope with spinning wheel

Osobnostní Horoskop

Použité jazyky/kódy -
- HTML
- CSS
- JavaScript
- PHP

  Tato práce má za úkol načíst náhodné údaje osobnosti horoskopu po zadání požadovaného data.
Po zadání datumu v tabulce si php převede dané datum na řetězec čísel a zároveň z datumu odstraní pomlky, aby nám php 
mohlo načíst data ze switche a zvolit znamení k určitému číslu (datu).
Poté si php sáhne na json data, kde nám hledá náhodný text/string k danému znamení, které si načetlo php v předchozí fázi.
Je zde i funkce, která nám omezuje celý php proces a vyčkává na volbu data, protože kdyby jsme ji zde neměli, tak by nám hlavní funkce 
vybírala text a znamení k ,,dnešnímu'' datumu.

  Co se týče javascriptové funkce, tak ta je zaměřena výhradně jen na animaci png souboru, na kterém je znázorněno každé znamení.
Png soubor se nám otáčí po celou dobu a zastaví se až na znamení, které se vybere po navolení datumu.
  S výsledem jsem spokojená, dokud nejde o zakomponování javascriptu do php, velice dobře si uvědomuji, že to je v podstatě ,,myš maš'', ale tomu se pravděpodobně
 nevyhnu, protože jsem stále na začátku s programováním, ale doufám, že se to bude už jen lepšit.
  
 Ještě jednou se chci vrátit k javascriptové funkci. Když se png točí na začátku, před jakoukoliv volbou datumu, tak i když je dosaženo
 požadovaného výsledku, tak nám console ukazuje v podstatě chyby. Takže s php jsem v podstatě spokojena s výsledky, ale u javascriptu opravdu hodně zaostávám.
 

Co se týče javascriptu a php, tak si stále pletu mnoho aspektů dohromady.
Na této práci jsem dělala dlouho a bez pomoci bych tuto práci nezvládla.

Zimlová

