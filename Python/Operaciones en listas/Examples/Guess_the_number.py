def adivina_numero():
    numero_secreto = int(input(""))
    max_intentos = int(input(""))

    intentos_restantes = max_intentos

    while intentos_restantes > 0:
        print(f"Intentos restantes: {intentos_restantes}.")

        numero_jugador = int(input(""))

        if numero_jugador == numero_secreto:
            print("¡Felicidades! El número ingresado es correcto.")
            break
        else:
            print("Respuesta incorrecta. Intente de nuevo.")
            intentos_restantes -= 1

    if intentos_restantes == 0:
        print(f"Se acabaron los intentos. El número correcto era {numero_secreto}.")

    print("Fin del juego. ¡Gracias por participar!")

adivina_numero()