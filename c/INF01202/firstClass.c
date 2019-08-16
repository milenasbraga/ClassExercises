/*
Este programa pega dois inteiros, os soma e exibe o resultado na tela
Entradas: dois valores inteiros (lidos via teclado)
Saída: a soma dos dois valores lidos
*/
#include <stdio.h>

int main(void)
{
 float val1, val2; //Declaracao das variaveis de entrada
 float soma; //Declaracao da variavel com o resultado (saida)
 printf("Valor do primeiro termo da soma:\n");
 scanf("%f", &val1);

 printf("Valor do segundo termo da soma:\n");
 scanf("%f", &val2);
 soma = val1 + val2;

 printf("A soma de %f e %f resulta em %f.\n", val1, val2, soma);
 return 0;
}
