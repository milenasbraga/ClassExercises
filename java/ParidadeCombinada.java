package errorchecking;

import java.util.Scanner;

/**
 *
 * @author Milena Sb
 */
public class ParidadeCombinada {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        
        int qtdBits     = 0;
        int qtdLinhas   = 0;
        int paridade;
        
        System.out.println("Digite quantos bits você deseja enviar: ");
        qtdBits = teclado.nextInt();
        
        System.out.println("Digite quantas linhas deseja enviar: ");
        qtdLinhas = teclado.nextInt();
        
        String[][] bits = new String[qtdLinhas+1][qtdBits+1];

        for(int i = 0; i < qtdLinhas; i++)
        {
            System.out.println("Digite sua mensagem: ");
            String msg = teclado.next();
            
            paridade = 0;
            
            for(int j = 0; j <= qtdBits; j++)
            {
                if (j < qtdBits)
                {
                    bits[i][j] = msg.substring(j, j + 1);
                    if(Integer.parseInt(bits[i][j]) == 1)
                        paridade++;
                }
                if(j == qtdBits)
                {
                   if(paridade % 2 == 1){
                       bits[i][j] = "1";
                   }
                   else
                   {
                       bits[i][j] = "0";
                   }
                }
            }
            
        }
        for (int i = 0; i < qtdBits; i++)//linhas
        {   
            paridade = 0;
            for (int j = 0; j <= qtdLinhas; j++)//colunas
            {   
                if (j < qtdLinhas){
                    if(Integer.parseInt(bits[j][i]) == 1) //linhas colunas
                        paridade++;
                }
                if(j == qtdLinhas)
                {
                   if(paridade % 2 == 1){
                       bits[j][i] = "1";
                   }
                   else
                   {
                       bits[j][i] = "0";
                   }
                }
            }
        }
        for (int l = 0; l < bits.length; l++)  
        {  
            paridade = 0;
            for (int c = 0; c < bits[0].length; c++)
            { 
                if (l == bits.length-1 && c == bits[0].length-1)
                {
                    if(paridade % 2 == 1){
                        bits[l][c] = "1";
                    }
                    else
                    {
                       bits[l][c] = "0";
                    }
                }
                else if(l == bits.length - 1 || c == bits[0].length - 1)
                {
                    if(Integer.parseInt(bits[l][c]) == 1)
                        paridade++;
                }
                System.out.print(bits[l][c] + " "); //imprime caracter a caracter
            }
            System.out.println(" "); //muda de linha
        }  
    }

}
