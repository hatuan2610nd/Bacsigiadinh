import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;


public class Gop2Db {
	public static void main(String[] args) {
		String sql="";
		try {
			/*
			Class.forName("org.sqlite.JDBC");
			Connection con_drug = DriverManager.getConnection("jdbc:sqlite:drug.db");
			Connection con_benh = DriverManager.getConnection("jdbc:sqlite:benh.db");
			
			Statement cmd_benh = con_benh.createStatement();
			Statement cmd_drug = con_drug.createStatement();
			
			ResultSet benh = cmd_benh.executeQuery("select * from ct;");
			//Benh b = new  Benh();
			
			while(benh.next())
			{
				b.setTen(benh.getString("title").replaceAll("'", "''"));
				b.setContent(benh.getString("content").replaceAll("'", "''"));
				b.setId_nhomBenh(benh.getInt("idcat"));
				
		
				
				 sql = "insert into benh_chitiet (title,content,idcat) values ('"+b.getTen()+"','"+b.getContent()+"',"+b.getId_nhomBenh()+")";
				
				cmd_drug.executeUpdate(sql);
				//System.out.println(b.getTen());
			}
			
			
			
			
			
			cmd_benh.close();
			cmd_drug.close();
			
			con_benh.close();
			con_drug.close();
			
			System.out.println("DONE!");
			*/
//			sql = " ' ' ' ' c ";
//			sql = sql.replaceAll("'", "'");
//			System.out.println(sql);
			
		} catch (Exception e) {
			System.out.println(sql);
			System.err.println(e.getMessage());
		}
	}
}
