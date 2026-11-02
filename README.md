# backend-Opdracht-arrays-zoeken
de backend opdracht Opdracht arrays zoeken (Opdracht Array Lineair zoeken (Linear Search) – O(n) en binary search O(log n))

hier onder komt hoe je het runt en de opdracht

hoe run je het:
1. download de code en zet hem ergens in je folders.
2. ga na waar je code staat
3. klik op de balk waar de locatie van je code staat.
4. verander wat er staat ma "cmd" (dit opent je comands)
5. run de code "php -S localhost:8000 (naam code bv. index.php)"
6. je ziet nu een link na een pagina
7. copy de link en paste hem in welke search engine je gebruikt
8. nu is je website zichtwaar

de opdracht:
Lineair zoeken in een gesorteerde array
Lineair zoeken is een simpele manier om een getal te vinden in een lijst (array). Het programma gaat stap voor stap door de lijst heen, van het eerste tot het laatste getal, totdat het het getal waar je naar zoekt (het target) tegenkomt.

De reden dat we het "lineair" noemen, is omdat het programma elk getal één voor één controleert, in een rechte lijn door de lijst heen. Dit betekent dat het best lang kan duren als de lijst groot is.

Hier is de pseudocode voor lineair zoeken:

function linearSearch(array, target):
    for each element in array:
        if element == target:
            return true
    return false

 

Hoe werkt het?
Je begint bij het eerste element van de lijst.
Je controleert of dit element gelijk is aan het getal dat je zoekt (target).
Als je het getal vindt, ben je klaar. Zo niet, ga je naar het volgende element.
Als je de hele lijst hebt doorlopen en het getal is niet gevonden, dan zit het niet in de lijst.
Wanneer gebruik je lineair zoeken?
Als de lijst klein is.
Als de lijst ongeordend is (niet gesorteerd), omdat binair zoeken dan niet werkt.
Nadelen van lineair zoeken:
Het is langzaam voor grote lijsten. Als het getal helemaal aan het einde van de lijst staat (of er niet in zit), moet je de hele lijst doorzoeken.
Tijdcomplexiteit:
O(n): Dit betekent dat de tijd die het kost om het getal te vinden, toeneemt met de grootte van de lijst. Hoe meer elementen de lijst heeft, hoe langer het zoeken duurt.
 

Maak de pseudo code af in je favoriete programmeer taal.

Doe een test met een array van 10000 random nummers van laag naar hoog.
(https://onlinetools.com/integer/create-integer-array)

Sorteer ze van laag naar hoog.
Run je code en time de runtime.

 

Binair zoeken in een gesorteerde array
Binair zoeken is een veel snellere manier om te zoeken, maar kan alleen gebruikt worden als de lijst gesorteerd is. Het idee is simpel: je hoeft niet alle getallen te doorzoeken. In plaats daarvan begin je in het midden van de lijst en vergelijkt het middelste getal met het getal waar je naar zoekt.

Als het getal dat je zoekt kleiner is dan het middelste getal, weet je dat je alleen in de eerste helft van de lijst hoeft te zoeken.
Als het getal groter is dan het middelste getal, zoek je alleen in de tweede helft van de lijst.
Dit halveren van de lijst gaat door totdat je het getal vindt (of tot je zeker weet dat het er niet is).
 

Pseudocode voor Binaire Zoeken:

function binarySearch(array, target, low, high):
    if low > high:
        return false
    mid = (low + high) / 2
    if array[mid] == target:
        return true
    else if array[mid] > target:
        return binarySearch(array, target, low, mid - 1)
    else:
        return binarySearch(array, target, mid + 1, high)

 

Hoe werkt het?
Stap 1: Je begint in het midden van de lijst.
Stap 2: Vergelijk het middelste getal met het getal dat je zoekt (target).
Stap 3: Is het middelste getal groter of kleiner dan het doelgetal?
Als het middelste getal groter is, zoek je verder in de eerste helft van de lijst.
Als het kleiner is, zoek je verder in de tweede helft van de lijst.
Stap 4: Blijf het proces herhalen (telkens het midden nemen van de overgebleven lijst) totdat je het doelgetal vindt, of totdat de zoekruimte helemaal is opgebruikt.
Wanneer gebruik je binair zoeken?
Als de lijst gesorteerd is. Het werkt niet op ongeordende lijsten.
Als je snel door een grote lijst wilt zoeken.
Voordelen van binair zoeken:
Het is veel sneller dan lineair zoeken, vooral voor grote lijsten. Je halveert de lijst telkens, waardoor je minder getallen hoeft te controleren.
Tijdcomplexiteit:
O(log n): Dit betekent dat de tijd om het getal te vinden veel langzamer toeneemt dan bij lineair zoeken. Zelfs als de lijst veel groter wordt, blijft de tijd die nodig is om het getal te vinden relatief klein.
 

Maak ook bovenstaande pseudo code in je favoriete taal.

Doe ook hier een test met een groot array en time deze.
