package errorchecking;

import java.util.Scanner;

/**
 *
 * @author Milena Sb
 */
public class ErrorChecking {
            
    public static void main(String[] args) 
    {   
        Scanner teclado = new Scanner(System.in);
        
        int qtdBits;
        int qtdUm = 0;
        String seqBits, paridade;
                
        System.out.print ("Quantos bits você quer transmitir: ");
        qtdBits = teclado.nextInt();
         
        System.out.print ("Digite a sequência de bits desejada: ");
        seqBits = teclado.next();
        
        for (int i = 0; i < qtdBits; i++)
        {
            String oneBit = seqBits.substring(i, i+1);
            //bits.add(i, oneBit);
            if (Integer.parseInt(oneBit) == 1)
            {
                qtdUm++;
            }
        }
        if (qtdUm % 2 == 1) 
            paridade = seqBits + "1";
       
        else
            paridade = seqBits + "0";
        
        System.out.println("A mensagem com o bit de paridade é " + paridade);
    }
}
