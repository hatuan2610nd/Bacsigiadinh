import org.jsoup.Jsoup;

import java.io.IOException;

import org.jsoup.Connection;
import org.jsoup.Connection.Method;
import org.jsoup.helper.HttpConnection;
import org.jsoup.nodes.Document;

public class TestHeader {
	public static void main(String[] args) {
		
		try {
			Document doc = Jsoup.connect("http://www.thuocbietduoc.com.vn/thuoc-7402/cerebrolysin.aspx").get();
			System.out.println(doc.html());
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
}
