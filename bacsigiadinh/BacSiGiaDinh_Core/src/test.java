import java.math.BigInteger;
import java.util.Scanner;

public class test {
	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		BigInteger a,b,kq,mot = new BigInteger("1");
		BigInteger M = new BigInteger("1000000007");
		a = new BigInteger(String.valueOf(Math.ceil(scanner.nextDouble())));
		b = new BigInteger(String.valueOf(Math.floor(scanner.nextDouble())));
		a = a.subtract(mot);
		kq = a.multiply( a.add(mot).multiply(a.multiply(mot).multiply(mot).add(mot)) );
		
		System.out.println(kq);
	}
}
