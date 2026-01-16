import math 

def odleglosc(xy1, xy2):
    x, y = xy1
    z, q = xy2
    odleglosc = math.sqrt((z - x)**2 + (q - y)**2)
    return print(odleglosc)

x = float(input("Podaj x1 Liczbe"))
y = float(input("Podaj y1 Liczbe"))
z = float(input("Podaj x2 Liczbe"))
q = float(input("Podaj y2 Liczbe"))

xy1 = (x,y)
xy2 = (z,q)