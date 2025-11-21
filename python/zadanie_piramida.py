import random


rozmiar = int(input("Podaj Wysokosc piramidy:"))
for i in range(1, rozmiar+1):
    spacje=" " * (rozmiar-i)
    hashe="#" * (i * 2-1)
    print(spacje + hashe)








