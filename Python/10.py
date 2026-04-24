def kompresja(text):
    if not text:
        return ""
    wynik = ""
    licznik = 1
    for i in range(1, len(text)):
        if text[i] == text[i-1]:
            licznik += 1
        else:
            wynik += text[i-1] + str(licznik)
            licznik = 1        
    wynik = wynik + text[-1] + str(licznik)
    return wynik
moj_tekst = input("Wpisz tekst: ")
print("Wynik:", kompresja(moj_tekst))
