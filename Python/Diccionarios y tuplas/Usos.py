##Iterar sobre colecciones de tuplas

tupla = (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
for i in tupla:
    print(i)


# Creamos una tupla que representa un registro de una base de datos de registras
# podemos darle significado a los valores de una tupla que represente un registro 
# de una base de datos del elenco de peliculas, asignando una variable a cada uno de sus elementos:.
registro = ("Julia", "Roberts", 1967, "Duplicity", 2009, "Actress", "Atlanta, Georgia")
print(registro)

nombre, apellido, nacimiento, pelicula, pelicula_año, profesion, lugar_nacimiento = registro

print(nombre)
print(nacimiento)
print(pelicula)
print(pelicula_año)
print(profesion)

#ejercicio para la simulacion de un conteo de votos desde el rol de un jurado de votacion
num_entradas = int(input("digite el numero de votos "))

# variables de ayuda  (~ 1-3 líneas)
# diccionario de candidatos
candidatos = {}

# Obtener los votos e ir sumando según corresponda (~ 3-5 líneas)
for _ in range (num_entradas):
     candidato = input("digite el nombre del candidato ")
     if candidato in candidatos:
      candidatos[candidato] += 1
     else:
      candidatos[candidato] = 1
# Definir resultado (~ 3-6 líneas)
max_votos = max(candidatos.values())
ganadores = [nombre for nombre, votos in candidatos.items() if votos == max_votos]

# Salida del programa (~ 1 línea).
if len(ganadores) > 1:
    print("EMPATE")
else:
    print(ganadores[0])


#en este ejercicio aprendi que es un diccionario y que las tuplas son inmutables a diferencia de las listas
# que la expresion .items() es la clave y el valor y el .values() es el valor y .keys() es la clave

