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