# Con el método SORT podemos reorganizar los elementos para que el orden cumpla ciertas reglas, 
# dadas por los operadores de comparación de mayor y menor. Con esto, podemos organizar valores numéricos en orden numérico y 
# valores de texto en orden lexicográfico.

lista = list(range(20, 0, -1))
print (lista)

#SORT 
lista.sort()
print(lista)

#También podemos realizar el ordenamiento de mayor a menor, usando la función con el argumento reverse = True.
lista.sort(reverse = True)
print(lista)

#para vaciar los elementos de una lista usamos CLEAR
lista.clear()
print(lista)

#count(elemento): otra función importante es count,que permite determinar cuántas apariciones distintas tiene un elemento dado en la lista.
# Creamos una lista con 100 repeticiones de un elemento.
lista = ['Elemento']  * 100

lista.count('Elemento')

##max y min las usamos para saber el minimo y maximo de una lista
lista = list('ABCDEFGHIJKLMNOPQRSTUVWXYZ')

max(lista)
min(lista)

#Listas por comprensión
#Usted ejecuta un programa que le retorna una lista de valores numéricos con los resultados de un experimento.
# Para imprimirlos en su reporte, ve necesario crear una nueva lista con cadenas de texto en un formato común, 
# con  4  dígitos decimales y la unidad en centímetros. Además, solo le interesa reportar los resultados válidos, 
# que en esta ocasión son aquellos que son positivos.
lista_original = [ -5.589545, 10.998, 2.4, 99e-3, -85.22, -0.001]

nueva_lista = []

for elemento in lista_original:
  if elemento > 0:          # Solo valores positivos.
    nueva_lista.append(f"{elemento:.2f} cm")

print(nueva_lista)

