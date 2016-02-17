#language: pt
Funcionalidade: Calculadora
  Com o objetivo de testar o behat, faremos uma calculadora para operações basicas
  Como um desenvolvedor
  Eu preciso somar (como é só um exemplo, só vai ter esses)

  Cenario: Somar dois numeros
    Dado o numero 3 mais o segundo numero 5
    Quando somado
    Então trará o numero 8

  Cenario: Somar 3 numeros
    Dado o numero 3 mais o segundo numero 5 e o 2
    Quando somado
    Então trará o numero 10