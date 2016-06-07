import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

public class MyDB {
	public static void main(String[] args) {
		try {

			MyNet.F("h");

		} catch (Exception e) {
			System.err.println(e.getMessage());
		}
	}
}
