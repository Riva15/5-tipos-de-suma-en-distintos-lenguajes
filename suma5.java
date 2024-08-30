import java.util.Scanner;

public class suma5 {
        public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.print("Ingrese el primer valor: ");
            int var1 = scanner.nextInt();

            System.out.print("Ingrese el segundo valor: ");
            int var2 = scanner.nextInt();

            int resultado = var1 + var2;

            System.out.println("La suma es: " + resultado);

        }
        
    }
}
