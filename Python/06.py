import random

def bubble_sort(lista):
    n = len(lista)
    for i in range(n):
        zamiana = False
        for j in range(0, n - i - 1):
           if lista[j] > lista[j + 1]:
            lista[j], lista[j + 1] = lista[j + 1], lista[j]
            zamiana = True
    if zamiana:
        break
    return lista


def selection_sort(lista):
    n = len(lista)
    for i in rand